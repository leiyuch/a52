<?php set_time_limit(100);
header("Content-Type: text/html; charset=UTF-8");
$domain = "a52jiaoyipc.ziyuan800.com/";
$queues = array(
    'admin/login/queue',
    'home/queue/chart',
    'home/queue/tendency',
    'home/queue/houprice',
    'home/queue/paicuo',
    'home/queue/qianbao',
    'home/queue/move',
    'home/queue/yichang',
    'home/queue/autoCandelBuy',
    'home/queue/autolockuser',
);
for ($i = 0; $i < count($queues); $i++) {
    http_get("http://" . $domain . "/" . $queues[$i]);
}
echo "本次执行完毕";
function http_get($url)
{
    $oCurl = curl_init();
    if (stripos($url, "https://") !== false) {
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($oCurl, CURLOPT_SSLVERSION, 1); //CURL_SSLVERSION_TLSv1
    }
    curl_setopt($oCurl, CURLOPT_URL, $url);
    curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
    $sContent = curl_exec($oCurl);
    $aStatus  = curl_getinfo($oCurl);
    curl_close($oCurl);
    if (intval($aStatus["http_code"]) == 200) {
        return true;
    } else {
        return false;
    }
}
