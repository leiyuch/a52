<?php

return array(
	'TMPL_PARSE_STRING' => array('__UPLOAD__' => __ROOT__ . '/Upload', '__PUBLIC__' => __ROOT__ . '/Public', '__IMG__' => __ROOT__ . '/Public/' . MODULE_NAME . '/images', '__CSS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/css', '__JS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/js'),
	'关于我们'=>'About Us','帮助中心'=>'Support','下载中心'=>'Download',

	'LANG_SWITCH_ON' => true,   // 开启语言包功能
	'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
	'DEFAULT_LANG' => 'zh', // 默认语言
	'LANG_LIST'        => 'zh,en', // 允许切换的语言列表 用逗号分隔
	'VAR_LANGUAGE'     => 'lang', // 默认语言切换变量
	);
?>