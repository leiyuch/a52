<?php

return array(
	'DB_TYPE'              => DB_TYPE,
	'DB_HOST'              => DB_HOST,
	'DB_NAME'              => DB_NAME,
	'DB_USER'              => DB_USER,
	'DB_PWD'               => DB_PWD,
	'DB_PORT'              => DB_PORT,
	'DB_PREFIX'            => 'movesay_',
	'ACTION_SUFFIX'        => '',
	'MULTI_MODULE'         => true,
	'MODULE_DENY_LIST'     => array('Common', 'Runtime'),
	'MODULE_ALLOW_LIST'    => array('Home', 'Admin', 'Mapi'),
	'DEFAULT_MODULE'       => 'Home',
	'URL_CASE_INSENSITIVE' => false,
	'URL_MODEL'            => 2,
	'URL_HTML_SUFFIX'      => 'html',
	'UPDATE_PATH'          => './Database/Update/',
	'CLOUD_PATH'           => './Database/Cloud/',
	'__CLOUD__'            => array('http://os.meunite.com', 'http://auth.meunite.com', 'http://101.201.199.224'),
	
    'PRODUCT' => 'Dysmsapi',
    'DOMAIN' => 'dysmsapi.aliyuncs.com',
    'REGION' => 'cn-hangzhou',
    'END_POINT_NAME' => 'cn-hangzhou',
    'KEY_ID' => '你的KEY_ID',
    'KEY_SECRET' => '你的KEY_SECRET',
  );
?>