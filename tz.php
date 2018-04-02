<?php
//phpinfo();

$y = date("Y");
 
//获取当天的月份
$m = date("m");
 
//获取当天的号数
$d = date("d");
 
//将今天开始的年月日时分秒，转换成unix时间戳(开始示例：2015-10-12 00:00:00)
$todayTime2= mktime(23,59,59,$m,$d,$y);
$todayTime1= mktime(23,59,59,$m,$d,$y);


$url='http://www.huobi.com/qt/usdmarket/td_btc.html?'.rand();  
$html =file_get_contents($url);
$b= substr($html , 5, 1);
$a=explode($b,$html);
array_pop($a); 
$fruits = explode(",",end($a));
echo $fruits[1];








?>