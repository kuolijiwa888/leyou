<?php

$url = "http://api.api68.com/CQShiCai/getBaseCQShiCaiList.do?lotCode=10060";
$contents=file_get_contents($url);
$json=json_decode($contents,true);
$data=$json['result']['data'][0];

$expect=$data['preDrawIssue'];
$opencode=$data['preDrawCode'];
$opentime=$data['preDrawTime'];

header("Content-type: application/json");


echo '{"sign":true,"message":"获取成功","data":[{"title":"重庆时时彩","name":"cqssc","expect":"'.$expect.'","opencode":"'.$opencode.'","opentime":"'.$opentime.'","source":"开彩采集","sourcecode":""}]}';
?>
