<?php
namespace Lib\yzwanfa;
class xy28{
	/*
	** 二维数组
	** $params 二维数组
	** 字段列表 必须包含
	** typeid 彩票种类（ssc,k3,Game,kl10f,pk10,keno,xy28）
	** playid 玩法标识
	** tzcode 投注号码
	*/


	function __construct($params = []){
		$this->params = $params;
	}
	function checkzhushu($playid,$tzcode){
	 
	 $onestr = ['xy28_hunhe_big','xy28_hunhe_small','xy28_hunhe_odd','xy28_hunhe_even','xy28_hunhe_big_odd','xy28_hunhe_small_odd','xy28_hunhe_big_even','xy28_hunhe_small_even','xy28_hunhe_ji_big','xy28_hunhe_ji_small','xy28_hunhe_baozi'];
	 $twostr =['xy28_bs_hong','xy28_bs_lv','xy28_bs_lan'];
	 $threestr = ['xy28_tm_00','xy28_tm_01','xy28_tm_02','xy28_tm_03','xy28_tm_04','xy28_tm_05','xy28_tm_06','xy28_tm_07','xy28_tm_08','xy28_tm_09','xy28_tm_10','xy28_tm_11','xy28_tm_12','xy28_tm_13','xy28_tm_14','xy28_tm_15','xy28_tm_16','xy28_tm_17','xy28_tm_18','xy28_tm_19','xy28_tm_20','xy28_tm_21','xy28_tm_22','xy28_tm_23','xy28_tm_24','xy28_tm_25','xy28_tm_26','xy28_tm_27'];

		//三肖连 三尾连
		$lm3 = ['xy28_tmbs'];
		
     
	  //onestr
		if(in_array($playid,$onestr)){
			// if(mb_strlen($tzcode,'UTF-8')!=2 )return 0;
			 return 1;
		}
		//twostr
		elseif(in_array($playid,$twostr)){
			if(mb_strlen($tzcode,'UTF-8')!=2)return 0;
			return 1;
		}
		//threestr
		elseif(in_array($playid,$threestr)){
			//if(mb_strlen($tzcode,'UTF-8')!=1)return 0;
			if(!in_array($tzcode,array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27)))return 0;
			return 1;
		}

		//$lm3
		elseif(in_array($playid,$lm3)){
			return count($this->combination($this->one($tzcode),3));
		}
		
	    return $this->$playid($tzcode);
	 }
   function bz5bz($tzcode){
	   return count($this->combination($this->one($tzcode),5));
   }
	function bz6bz($tzcode){
		return count($this->combination($this->one($tzcode),6));
	}
	function bz7bz($tzcode){
		return count($this->combination($this->one($tzcode),7));
	}
	function bz8bz($tzcode){
		return count($this->combination($this->one($tzcode),8));
	}
	function bz9bz($tzcode){
		return count($this->combination($this->one($tzcode),9));
	}
	function bz10bz($tzcode){
		return count($this->combination($this->one($tzcode),10));
	}
	//号码过滤1
	function one($tzcode){
		$tzcode =  str_replace(array('01','02','03','04','05','06','07','08','09'),array('1','2','3','4','5','6','7','8','9'),$tzcode);
		$tzcode =  str_replace(array('猴','羊','马','蛇','龙','兔','虎','牛','鼠','猪','狗','鸡'),array('1','2','3','4','5','6','7','8','9','10','11','12'),$tzcode);
		$tzcode =  str_replace(array('0尾','1尾','2尾','3尾','4尾','5尾','6尾','7尾','8尾','9尾'),array('1','2','3','4','5','6','7','8','9','10'),$tzcode);
		$tzcodes = explode(',',$tzcode);
		foreach($tzcodes as $k=>$v){
			if($v>49 or $v<0 or !is_numeric($v) or strpos($v,"."))unset($tzcodes[$k]);
		}
		return $tzcodes;
	}
	//号码过滤2
	function two($tzcode){
		$tzcodes = explode('|',$tzcode);
		foreach($tzcodes as $k => $v){
			if(empty($v))return 0;
			$arr=explode(',',$v);
			if(count($arr) != count(array_unique($arr)))return 0;
			foreach($arr as $key => $val){
				if($val>9 or $val<0 or !is_numeric($val) or strpos($val,".")){
					return 0;
				};
			}
			$result[] = $arr;
		}
		return $result ;
	}
	// 一维数组组合
	function combination($a, $m) {
		$r = array();

		$n = count($a);
		if ($m <= 0 || $m > $n) {
			return $r;
		}

		for ($i=0; $i<$n; $i++) {
			$t = array($a[$i]);
			if ($m == 1) {
				$r[] = $t;
			} else {
				$b = array_slice($a, $i+1);
				$c = self::combination($b, $m-1);
				foreach ($c as $v) {
					$r[] = array_merge($t, $v);
				}
			}
		}

		return $r;
	}


}
?>