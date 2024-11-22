<?php
$api = "http://api.jezyb.com/pl3/pl3.php";
$str = file_get_contents($api);
function simplest_xml_to_array($xmlstring) {
    return json_decode(json_encode((array) simplexml_load_string($xmlstring)), true);
}

$data = simplest_xml_to_array($str);
if(!empty($data['row']) && !empty($data['row']['@attributes'])){
	$data = $data['row']['@attributes'];
}else{
	$data = array(
		"expect" => 0,
		"opencode" => 0,
		"opentime" => 0
		);
}




// $data = json_decode($data,1);
//var_dump($data);
$qh = $data["expect"];
$hm = $data["opencode"];
$rq = $data["opentime"];
//$opentimestmp = strtotime($rq);
echo '{"sign":true,"message":"获取成功","data":[{"title":"排列三","name":"jxk3","expect":"'.$qh.'","opencode":"'.$hm.'","opentime":"'.$rq.'","source":"开彩采集","sourcecode":""}]}';








?>