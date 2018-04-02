<?php

namespace Common\Ext;

class CoinClient
{
	private $url;
	private $timeout;
	private $username;
	private $password;
	public $is_batch = false;
	public $batch = array();
	public $debug = false;
	public $jsonformat = false;
	public $res = '';
	private $headers = array('User-Agent: meunite.com Rpc', 'Content-Type: application/json', 'Accept: application/json', 'Connection: close');
	public $ssl_verify_peer = true;

	public function __construct($username, $password, $ip, $port, $timeout = 3, $headers = array(), $jsonformat = false)
	{
		$this->url = 'http://' . $ip . ':' . $port;
		$this->username = $username;
		$this->password = $password;
		$this->timeout = $timeout;
		$this->headers = array_merge($this->headers, $headers);
		$this->jsonformat = $jsonformat;
	}

	public function __call($method, array $params)
	{
		if ((count($params) === 1) && is_array($params[0])) {
			$params = $params[0];
		}

		$res = $this->execute($method, $params);
		debug(array('method' => $method, 'params' => $params, 'res' => $res), 'Coinclient execute');
		return $res ? $res : $this->res;
	}

	public function execute($procedure, array $params = array())
	{
		return $this->doRequest($this->prepareRequest($procedure, $params));
	}

	public function prepareRequest($procedure, array $params = array())
	{
		$payload = array('jsonrpc' => '2.0', 'method' => $procedure, 'id' => mt_rand());

		if (!empty($params)) {
			$payload['params'] = $params;
		}

		return $payload;
	}

	private function doRequest(array $payload)
	{
		$stream = @(fopen(trim($this->url), 'r', false, $this->getContext($payload)));

		if (!is_resource($stream)) {
			$this->error('Unable to establish a connection');
		}

		$metadata = stream_get_meta_data($stream);
		$response = json_decode(stream_get_contents($stream), true);
		$this->debug('==> Request: ' . PHP_EOL . json_encode($payload, JSON_PRETTY_PRINT));
		$this->debug('==> Response: ' . PHP_EOL . json_encode($response, JSON_PRETTY_PRINT));
		$header_1 = $metadata['wrapper_data'][0];
		preg_match('/[\\d]{3}/i', $header_1, $code);
		$code = trim($code[0]);

		if ($code == '200') {
			return isset($response['result']) ? $response['result'] : 'nodata';
		}
		else if ($response['error'] && is_array($response['error'])) {
			$detail = 'code=' . $response['error']['code'] . ',message=' . $response['error']['message'];
			$this->error('SERVER 返回' . $code . '[' . $detail . ']');
		}
		else {
			$this->error('SERVER 返回' . $code);
		}
	}

	private function getContext(array $payload)
	{
		$headers = $this->headers;

		if (!empty($this->username) && !empty($this->password)) {
			$headers[] = 'Authorization: Basic ' . base64_encode($this->username . ':' . $this->password);
		}

		return stream_context_create(array(
			'http' => array('method' => 'POST', 'protocol_version' => 1.1000000000000001, 'timeout' => $this->timeout, 'max_redirects' => 2, 'header' => implode("\r\n", $headers), 'content' => json_encode($payload), 'ignore_errors' => true),
			'ssl'  => array('verify_peer' => $this->ssl_verify_peer, 'verify_peer_name' => $this->ssl_verify_peer)
			));
	}

	protected function debug($str)
	{
		if (is_array($str)) {
			$str = implode('#', $str);
		}

		debug($str, 'CoinClient');
	}

	protected function error($str)
	{
		if ($this->jsonformat) {
			$this->res = json_encode(array('data' => $str, 'status' => 0));
		}
		else {
			echo json_encode(array('info' => $str, 'status' => 0));
			exit();
		}
	}
}


class Bitcoin {
    // Configuration options
    private $username;
    private $password;
    private $proto;
    private $host;
    private $port;
    private $url;
    private $CACertificate;

    // Information and debugging
    public $status;
    public $error;
    public $raw_response;
    public $response;

    private $id = 0;

    /**
     * @param string $username
     * @param string $password
     * @param string $host
     * @param int $port
     * @param string $proto
     * @param string $url
     */
    function __construct($username, $password, $host = 'localhost', $port = 8332, $url = null) {
        $this->username      = $username;
        $this->password      = $password;
        $this->host          = $host;
        $this->port          = $port;
        $this->url           = $url;

        // Set some defaults
        $this->proto         = 'http';
        $this->CACertificate = null;
    }

    /**
     * @param string|null $certificate
     */
    function setSSL($certificate = null) {
        $this->proto         = 'https'; // force HTTPS
        $this->CACertificate = $certificate;
    }

    function __call($method, $params) {
        $this->status       = null;
        $this->error        = null;
        $this->raw_response = null;
        $this->response     = null;

        // If no parameters are passed, this will be an empty array
        $params = array_values($params);

        // The ID should be unique for each call
        $this->id++;

        // Build the request, it's ok that params might have any empty array
        $request = json_encode(array(
            'method' => $method,
            'params' => $params,
            'id'     => $this->id
        ));

        // Build the cURL session
        $curl    = curl_init("{$this->proto}://{$this->username}:{$this->password}@{$this->host}:{$this->port}/{$this->url}");
        $options = array(
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_HTTPHEADER     => array('Content-type: application/json'),
            CURLOPT_POST           => TRUE,
            CURLOPT_POSTFIELDS     => $request
        );

        // This prevents users from getting the following warning when open_basedir is set:
        // Warning: curl_setopt() [function.curl-setopt]: CURLOPT_FOLLOWLOCATION cannot be activated when in safe_mode or an open_basedir is set
        if (ini_get('open_basedir')) {
            unset($options[CURLOPT_FOLLOWLOCATION]);
        }

        if ($this->proto == 'https') {
            // If the CA Certificate was specified we change CURL to look for it
            if ($this->CACertificate != null) {
                $options[CURLOPT_CAINFO] = $this->CACertificate;
                $options[CURLOPT_CAPATH] = DIRNAME($this->CACertificate);
            }
            else {
                // If not we need to assume the SSL cannot be verified so we set this flag to FALSE to allow the connection
                $options[CURLOPT_SSL_VERIFYPEER] = FALSE;
            }
        }

        curl_setopt_array($curl, $options);

        // Execute the request and decode to an array
        $this->raw_response = curl_exec($curl);
        $this->response     = json_decode($this->raw_response, TRUE);

        // If the status is not 200, something is wrong
        $this->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        // If there was no error, this will be an empty string
        $curl_error = curl_error($curl);

        curl_close($curl);

        if (!empty($curl_error)) {
            $this->error = $curl_error;
        }

        if ($this->response['error']) {
            // If bitcoind returned an error, put that in $this->error
            $this->error = $this->response['error']['message'];
        }
        elseif ($this->status != 200) {
            // If bitcoind didn't return a nice error message, we need to make our own
            switch ($this->status) {
                case 400:
                    $this->error = 'HTTP_BAD_REQUEST';
                    break;
                case 401:
                    $this->error = 'HTTP_UNAUTHORIZED';
                    break;
                case 403:
                    $this->error = 'HTTP_FORBIDDEN';
                    break;
                case 404:
                    $this->error = 'HTTP_NOT_FOUND';
                    break;
            }
        }

        if ($this->error) {
            return FALSE;
        }

        return $this->response['result'];
    }
}
?>