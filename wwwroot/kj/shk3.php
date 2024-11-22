<?php
$api = "http://api.b1api.com/api?p=xml&t=shk3&limit=1&token=c8ac995dbb2ad9c1";
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
echo '{"sign":true,"message":"获取成功","data":[{"title":"上海快3","name":"shk3","expect":"'.$qh.'","opencode":"'.$hm.'","opentime":"'.$rq.'","source":"开彩采集","sourcecode":""}]}';
//echo '{"rows":10,"code":"cqssc","data":[{"id":"310055","type":"3","opentimestamp":"'.$opentimestmp.'","expect":"'.$qh.'","opencode":"'.$hm.'","opentime":"'.$rq.'"}]}';
//echo '{"rows":10,"code":"cqssc","data":[{"id":"310055","type":"3","opentimestamp":"1520598055","expect":"20180309086","opencode":"5,5,9,7,1","opentime":"2018-03-09 20:20:55"},';
?>