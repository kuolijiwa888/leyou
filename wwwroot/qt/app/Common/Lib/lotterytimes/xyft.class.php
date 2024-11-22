<?php
namespace Lib\lotterytimes;
class xyft {
	function drawtimes(){
		$name = 'xyft';
		$nowtime = time();
		$cplist = C('cplist.pk10');
		$cpinfo   = $cplist[$name]; //彩种名称
		$cjnowtime = $cpinfo['ftime']; //停止投注时间
		if(!$cpinfo){
			echo json_encode(['sign'=>false,'message'=>'彩种不存在'], JSON_UNESCAPED_UNICODE);exit;
		}
		$expecttime = $cpinfo['expecttime']; //分钟数
		$_expecttime = $expecttime*60;      //每期秒数
		$totalopentimes = 86400-0;
		$totalcount     = 180;//期数
		$_length        = $totalcount>=1000?4:3;
		$jgtime = $expecttime*60;
		//$actNo_t = (time()-strtotime(date('Y-m-d 00:00:00',time()))+$cjnowtime)/$_expecttime;
		$_t = time();
		$_t1 = strtotime(date('Y-m-d '.$cpinfo['closetime1'],time()));
		$_t2 = strtotime(date('Y-m-d '.$cpinfo['closetime2'],time()));
		if($_t<$_t2){
			$_t1 = strtotime(date('Y-m-d '.$cpinfo['closetime1'],time()))-86400;
		}
		
		// var_dump(array(
		// 	date('Y-m-d H:i:s',$_t),
		// 	date('Y-m-d H:i:s',$_t1),

		// 	date('Y-m-d H:i:s',$_t2),

		// ));exit;
		if($_t<$_t1){
			$actNo_t = $totalcount;
		}else{
			if($_t<$_t2){
				$actNo_t = (time()-strtotime(date('Y-m-d 00:04:35',time()))+$cjnowtime)/$_expecttime;
				$actNo_t += 132;
			}else{
				$actNo_t = (time()-strtotime(date('Y-m-d '.$cpinfo['closetime1'],time()))+$cjnowtime)/$_expecttime;
				$actNo_t += 1;
			}
			
		}
		$actNo_t = floor($actNo_t);
		$actNo =  is_numeric($actNo_t)?($actNo_t==$totalcount?1:$actNo_t+1):ceil( $actNo_t );
		// var_dump($totalcount);exit;
		// var_dump($actNo);exit;
		if($_t<$_t2){
			$nowdraws = [
				'expect'  => date('Ymd',$_t1) . str_pad($actNo,$_length,0,STR_PAD_LEFT),
				'start'   => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) + ($actNo-2)*$_expecttime-86400 ),
				'end'     => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) + ($actNo-1)*$_expecttime-86400 ),
			];
		}else{
			$nowdraws = [
				'expect'  => date('Ymd') . str_pad($actNo,$_length,0,STR_PAD_LEFT),
				'start'   => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) + ($actNo-2)*$_expecttime ),
				'end'     => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) + ($actNo-1)*$_expecttime ),
			];
		}
		
		
		// var_dump($nowdraws);exit;
		if(intval($actNo)==1){
			$nowdraws = [
				'expect'  => date('Ymd') . str_pad($actNo,$_length,0,STR_PAD_LEFT),
				'start'   => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) ),
				'end'     => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) + $_expecttime ),
			];
			$preqihao = str_pad($totalcount,$_length,0,STR_PAD_LEFT);
			$predraws = [
				'expect' => date('Ymd',strtotime($nowdraws['end'])-86400).$preqihao,
				'start'  => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time()))-$jgtime ),
				'end'    => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) ),
			];
		}else{
			$preqihao = str_pad($actNo-1,$_length,0,STR_PAD_LEFT);
			if($_t<$_t2){
				$predraws = [
					'expect' => date('Ymd',$_t1).$preqihao,
					'start'  => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) + ($actNo-2)*($expecttime*60)-86400 ),
					'end'    => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) + ($actNo-1)*($expecttime*60)-86400 ),
				];
			}else{
				$predraws = [
					'expect' => date('Ymd',strtotime($nowdraws['end'])).$preqihao,
					'start'  => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) + ($actNo-2)*($expecttime*60) ),
					'end'    => date('Y-m-d H:i:s', strtotime(date('Y-m-d '.$cpinfo['closetime1'],time())) + ($actNo-1)*($expecttime*60) ),
				];
			}
			
			// var_dump($predraws);exit;
		}
		$return = [
			'lastFullExpect'  => $predraws['expect'],
			'lastExpect'      => substr($predraws['expect'],-$_length),
			'currFullExpect'  => $nowdraws['expect'],
			'currExpect'      => substr($nowdraws['expect'],-$_length),
			'remainTime'      => strtotime($nowdraws['end'])-$nowtime-$cjnowtime,
			'openRemainTime'  => $cjnowtime,
		];
		// var_dump($return);exit;
		return $return;
	}
}
?>