<?php
namespace Lib\lotterytimes;
class cqssc {
	function drawtimes(){
		$name = 'cqssc';
		$cjnowtime = 0;
		$nowtime = time() + $cjnowtime;
		$total  = 120;
		$openstart  = '00:05:00';
		$jgtime = 300;
		$yctime = 0;
		$_yct = ceil($yctime/$total);
		/*		$array = array();
                for($i=1;$i<=$total;$i++){
                    $start = strtotime($openstart)-$jgtime + ($i-1)*$jgtime + ($i-1)*$_yct;
                    $end = strtotime($openstart)+($i-1)*$jgtime + ($_yct*$i);
                    $draws[$i] = array('start'=>date('H:i:s',$start),'end'=>date('H:i:s',$end));
                }
                $draws[1]['start'] = date('Y-m-d H:i:s',strtotime($draws[$total]['end'])-86400);*/
		$draws = array(
			'1'=>array('start'=>'23:50:45','end'=>'00:30:50'),
			'2'=>array('start'=>'00:30:50','end'=>'00:50:50'),
			'3'=>array('start'=>'00:50:50','end'=>'01:10:50'),
			'4'=>array('start'=>'01:10:50','end'=>'01:30:50'),
			'5'=>array('start'=>'01:30:50','end'=>'01:50:50'),
			'6'=>array('start'=>'01:50:50','end'=>'02:10:50'),
			'7'=>array('start'=>'02:10:50','end'=>'02:30:50'),
			'8'=>array('start'=>'02:30:50','end'=>'02:50:50'),
			'9'=>array('start'=>'02:50:50','end'=>'03:10:50'),
			'10'=>array('start'=>'03:10:50','end'=>'07:30:45'),
			'11'=>array('start'=>'07:30:45','end'=>'07:50:45'),
			'12'=>array('start'=>'07:50:45','end'=>'08:10:45'),
			'13'=>array('start'=>'08:10:45','end'=>'08:30:45'),
			'14'=>array('start'=>'08:30:45','end'=>'08:50:45'),
			'15'=>array('start'=>'08:50:45','end'=>'09:10:45'),
			'16'=>array('start'=>'09:10:45','end'=>'09:30:45'),
			'17'=>array('start'=>'09:30:45','end'=>'09:50:45'),
			'18'=>array('start'=>'09:50:45','end'=>'10:10:45'),
			'19'=>array('start'=>'10:10:45','end'=>'10:30:45'),
			'20'=>array('start'=>'10:30:45','end'=>'10:50:45'),
			'21'=>array('start'=>'10:50:45','end'=>'11:10:45'),
			'22'=>array('start'=>'11:10:45','end'=>'11:30:45'),
			'23'=>array('start'=>'11:30:45','end'=>'11:50:45'),
			'24'=>array('start'=>'11:50:45','end'=>'12:10:45'),
			'25'=>array('start'=>'12:10:45','end'=>'12:30:45'),
			'26'=>array('start'=>'12:30:45','end'=>'12:50:45'),
			'27'=>array('start'=>'12:50:45','end'=>'13:10:45'),
			'28'=>array('start'=>'13:10:45','end'=>'13:30:45'),
			'29'=>array('start'=>'13:30:45','end'=>'13:50:45'),
			'30'=>array('start'=>'13:50:45','end'=>'14:10:45'),
			'31'=>array('start'=>'14:10:45','end'=>'14:30:45'),
			'32'=>array('start'=>'14:30:45','end'=>'14:50:45'),
			'33'=>array('start'=>'14:50:45','end'=>'15:10:45'),
			'34'=>array('start'=>'15:10:45','end'=>'15:30:45'),
			'35'=>array('start'=>'15:30:45','end'=>'15:50:45'),
			'36'=>array('start'=>'15:50:45','end'=>'16:10:45'),
			'37'=>array('start'=>'16:10:45','end'=>'16:30:45'),
			'38'=>array('start'=>'16:30:45','end'=>'16:50:45'),
			'39'=>array('start'=>'16:50:45','end'=>'17:10:45'),
			'40'=>array('start'=>'17:10:45','end'=>'17:30:45'),
			'41'=>array('start'=>'17:30:45','end'=>'17:50:45'),
			'42'=>array('start'=>'17:50:45','end'=>'18:10:45'),
			'43'=>array('start'=>'18:10:45','end'=>'18:30:45'),
			'44'=>array('start'=>'18:30:45','end'=>'18:50:45'),
			'45'=>array('start'=>'18:50:45','end'=>'19:10:45'),
			'46'=>array('start'=>'19:10:45','end'=>'19:30:45'),
			'47'=>array('start'=>'19:30:45','end'=>'19:50:45'),
			'48'=>array('start'=>'19:50:45','end'=>'20:10:45'),
			'49'=>array('start'=>'20:10:45','end'=>'20:30:45'),
			'50'=>array('start'=>'20:30:45','end'=>'20:50:45'),
			'51'=>array('start'=>'20:50:45','end'=>'21:10:45'),
			'52'=>array('start'=>'21:10:45','end'=>'21:30:45'),
			'53'=>array('start'=>'21:30:45','end'=>'21:50:45'),
			'54'=>array('start'=>'21:50:45','end'=>'22:10:45'),
			'55'=>array('start'=>'22:10:45','end'=>'22:30:45'),
			'56'=>array('start'=>'22:30:45','end'=>'22:50:45'),
			'57'=>array('start'=>'22:50:45','end'=>'23:10:45'),
			'58'=>array('start'=>'23:10:45','end'=>'23:30:45'),
			'59'=>array('start'=>'23:30:45','end'=>'23:50:45'),
		);
		ksort($draws);
		foreach($draws as $k=>$v){
			if($nowtime>strtotime($v['start']) && $nowtime<=strtotime($v['end'])){
				$nowqihao = str_pad($k,3,0,STR_PAD_LEFT);
			}
		}
		if(!$nowqihao){
			$nowqihao = str_pad(1,3,0,STR_PAD_LEFT);
			$draws[1]['start']   = date('Y-m-d H:i:s',strtotime($draws[$total]['end']));
			$draws[1]['end']   = date('Y-m-d H:i:s',strtotime($draws[1]['end'])+86400);
			$nowdraws = [
				'expect'  => date('Ymd',strtotime($draws[1]['end'])).$nowqihao,
				'start'   => $draws[1]['start'],
				'end'     => $draws[1]['end']
			];
			$preqihao = str_pad($total,3,0,STR_PAD_LEFT);
			$predraws = [
				'expect' => date('Ymd',strtotime($draws[1]['start'])).$preqihao,
				'start'  => date('Y-m-d H:i:s',strtotime($draws[$total]['start'])),
				'end'    => date('Y-m-d H:i:s',strtotime($draws[$total]['end'])),
			];
		}else{
			$nowqihao = str_pad($nowqihao,3,0,STR_PAD_LEFT);
			$nowdraws = [
				'expect'  => date('Ymd',$nowtime).$nowqihao,
				'start'   => date('Y-m-d',$nowtime).' '.$draws[intval($nowqihao)]['start'],
				'end'     => date('Y-m-d',$nowtime).' '.$draws[intval($nowqihao)]['end']
			];
			if(intval($nowqihao)==1){
				$preqihao = str_pad($total,3,0,STR_PAD_LEFT);
				$nowexpecttime = strtotime($draws[$total]['end'])-86400;
				$predraws = [
					'expect' => date('Ymd',$nowexpecttime).$preqihao,
					'start'  => date('Y-m-d',$nowexpecttime).' '.$draws[intval($preqihao)]['start'],
					'end'    => date('Y-m-d',$nowexpecttime).' '.$draws[intval($preqihao)]['end'],
				];
			}else{
				$preqihao = str_pad($nowqihao-1,3,0,STR_PAD_LEFT);;
				$predraws = [
					'expect' => date('Ymd',$nowtime).$preqihao,
					'start'  => date('Y-m-d',$nowtime).' '.$draws[intval($preqihao)]['start'],
					'end'    => date('Y-m-d',$nowtime).' '.$draws[intval($preqihao)]['end'],
				];
			}
		}
		$return = [
			'lastFullExpect'  => $predraws['expect'],
			'lastExpect'      => substr($predraws['expect'],-3),
			'currFullExpect'  => $nowdraws['expect'],
			'currExpect'      => substr($nowdraws['expect'],-3),
			'remainTime'      => strtotime($nowdraws['end'])-time()-$cjnowtime,
			'openRemainTime'  => $cjnowtime,
		];
		return $return;
	}
}
?>