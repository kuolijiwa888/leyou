<?php
namespace Lib\kaijiang;
class k3{
	/*
	** 二同号复选
	*/
	function k3ethfx($opencode,$tzcode){
		$opencodes = explode(',',$opencode);
		$tzcodes   = explode('#',$tzcode);
		sort($opencodes);
		$zjcount   = 0;
		foreach($tzcodes as $k=>$v){
			if(substr_count(implode('',$opencodes),$v) && strlen($v)==2 && substr($v,0,1)==substr($v,-1)){
				$zjcount++;
			}
		}
		return $zjcount;
	}
	/*
	** 二同号单选
	*/
	function k3ethdx($opencode,$tzcode){
		$opencodes = explode(',',$opencode);
		$tzcodes   = explode('#',$tzcode);
		$acs       = array_count_values($opencodes);
		sort($opencodes);
		$zjcount   = 0;
		foreach($tzcodes as $k=>$v){
			$array = [];
			$array = str_split($v,1);
			sort($array);
			if(count($acs)==2 && count($array)==3 && substr_count(implode('',$opencodes),implode('',$array))){
				$zjcount = 1;
			}
		}
		return $zjcount;
	}
	/*
	** 二不同号标准
	*/
	function k3ebthbz($opencode,$tzcode){
		$opencodes = explode(',',$opencode);
		$tzcodes   = explode('#',$tzcode);
		//$combinations = self::combination($tzcodes,2);
		$zjcount   = 0;
		if(count(array_unique($opencodes))>=2)foreach($tzcodes as $k=>$v){
			$arr = [];
			$arr = explode(',',$v);
			if(strlen($arr[0])!=1 || strlen($arr[1])!=1)return 0;
			if(count(array_unique($arr))==2 && in_array($arr[0],$opencodes) && in_array($arr[1],$opencodes)){
				$zjcount++;
			}
			/*if(in_array($v[0],$opencodes) && in_array($v[1],$opencodes) && $v[0]!=$v[1]){
				$tzcodes++;
			}*/
		}
		return $zjcount;
	}
	/*
	** 三同号单选
	*/
	function k3sthdx($opencode,$tzcode){
		$opencodes = explode(',',$opencode);
		$tzcodes   = explode('#',$tzcode);
		sort($opencodes);
		$zjcount   = 0;
		foreach($tzcodes as $k=>$v){
			if(strlen($v)==3 && $v==implode('',$opencodes) && count(array_unique($opencodes))==1){
				$zjcount++;
			}
		}
		return $zjcount;
	}
	/*
	** 三同号通选
	*/
	function k3sthtx($opencode,$tzcode){
		$opencodes = explode(',',$opencode);
		//$tzcodes   = explode(',',$tzcode);
		$zjcount   = 0;
		if(count(array_unique($opencodes))==1 && $tzcode=='三同号通选'){
			$zjcount = 1;
		}
		return $zjcount;
	}
	/*
	** 三不同号标准
	*/
	function k3sbthbz($opencode,$tzcode){
		$opencodes = explode(',',$opencode);
		$tzcodes   = explode('#',$tzcode);
		//$combinations = self::combination($tzcodes,3);
		$zjcount   = 0;
		
		if(count(array_unique($opencodes))==3)foreach($tzcodes as $k=>$v){
			$arr = [];
			$arr = explode(',',$v);
			if(strlen($arr[0])!=1 || strlen($arr[1])!=1 || strlen($arr[2])!=1)return 0;
			if(count(array_unique($arr))==3 && in_array($arr[0],$opencodes) && in_array($arr[1],$opencodes) && in_array($arr[2],$opencodes)){
				$zjcount++;
			}
			/*if(in_array($v[0],$opencodes) && in_array($v[1],$opencodes) && $v[0]!=$v[1]){
				$tzcodes++;
			}*/
		}
		return $zjcount;
	}
	
	/*
	** 三连号通选
	*/
	function k3slhtx($opencode,$tzcode){
		$opencodes = explode(',',$opencode);
		//$tzcodes   = explode('|',$tzcode);
		sort($opencodes);
		$zjcount   = 0;
		if(abs($opencodes[1]-$opencodes[0])==1 && abs($opencodes[1]-$opencodes[2])==1 && count(array_unique($opencodes))==3 && $tzcode=='三连号通选'){
			$zjcount   = 1;
		}
		return $zjcount;
	}
	/*
	** 三连号单选
	*/
	function k3slhdx($opencode,$tzcode){
		$opencodes = explode(',',$opencode);
		$tzcodes   = explode('#',$tzcode);
		sort($opencodes);
		$opcodestr = implode('',$opencodes);
		$zjcount   = 0;
		if(in_array($opcodestr,$tzcodes) && count(array_unique($opencodes))==3 && abs($opencodes[1]-$opencodes[0])==1 && abs($opencodes[1]-$opencodes[2])==1){
			$zjcount   = 1;
		}
		return $zjcount;
	}
	/*
	** 和值
	*/
	function k3hz3($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==3 && $tzcode==3){$zjcount=1;};return $zjcount;
	}
	function k3hz4($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==4 && $tzcode==4){$zjcount=1;};return $zjcount;
	}
	function k3hz5($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==5 && $tzcode==5){$zjcount=1;};return $zjcount;
	}
	function k3hz6($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==6 && $tzcode==6){$zjcount=1;};return $zjcount;
	}
	function k3hz7($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==7 && $tzcode==7){$zjcount=1;};return $zjcount;
	}
	function k3hz8($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==8 && $tzcode==8){$zjcount=1;};return $zjcount;
	}
	function k3hz9($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==9 && $tzcode==9){$zjcount=1;};return $zjcount;
	}
	function k3hz10($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==10 && $tzcode==10){$zjcount=1;};return $zjcount;
	}
	function k3hz11($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==11 && $tzcode==11){$zjcount=1;};return $zjcount;
	}
	function k3hz12($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==12 && $tzcode==12){$zjcount=1;};return $zjcount;
	}
	function k3hz13($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==13 && $tzcode==13){$zjcount=1;};return $zjcount;
	}
	function k3hz14($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==14 && $tzcode==14){$zjcount=1;};return $zjcount;
	}
	function k3hz15($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==15 && $tzcode==15){$zjcount=1;};return $zjcount;
	}
	function k3hz16($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==16 && $tzcode==16){$zjcount=1;};return $zjcount;
	}
	function k3hz17($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==17 && $tzcode==17){$zjcount=1;};return $zjcount;
	}
	function k3hz18($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==18 && $tzcode==18){$zjcount=1;};return $zjcount;
	}
	function k3hzbig($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum>10 && $tzcode=='大'){$zjcount=1;};return $zjcount;
	}
	function k3hzsmall($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum<=10 && $tzcode=='小'){$zjcount=1;};return $zjcount;
	}
	function k3hzeven($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum%2==0 && $tzcode=='双'){$zjcount=1;};return $zjcount;
	}
	function k3hzodd($opencode,$tzcode){
		$opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum%2!=0 && $tzcode=='单'){$zjcount=1;};return $zjcount;
	}

	// 阶乘  
	function factorial($n) {  
		return array_product(range(1, $n));  
	}  
	  
	// 排列数  
	function A($n, $m) {  
		return self::factorial($n)/self::factorial($n-$m);  
	}  
	  
	// 组合数  
	function C($n, $m) {  
		return self::A($n, $m)/self::factorial($m);  
	}  	
	// 排列  
	function arrangement($a, $m) {  
		$r = array();  
	  
		$n = count($a);  
		if ($m <= 0 || $m > $n) {  
			return $r;  
		}  
	  
		for ($i=0; $i<$n; $i++) {  
			$b = $a;  
			$t = array_splice($b, $i, 1);  
			if ($m == 1) {  
				$r[] = $t;  
			} else {  
				$c = self::arrangement($b, $m-1);  
				foreach ($c as $v) {  
					$r[] = array_merge($t, $v);  
				}  
			}  
		}  
	  
		return $r;  
	}  	
	// 组合  
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

	
	
	function sjdx1($a, $m){
		$a = explode(',',$a);
		if(in_array(1,$a)){
			$nums = array_count_values($a);
			return $nums[1]+1;
		}
		return 0;
	}
	function sjdx2($a, $m){
		$a = explode(',',$a);
		if(in_array(2,$a)){
			$nums = array_count_values($a);
			return $nums[2]+1;
		}
		return 0;
	}
	function sjdx3($a, $m){
		$a = explode(',',$a);
		if(in_array(3,$a)){
			$nums = array_count_values($a);
			return $nums[3]+1;
		}
		return 0;
	}
	function sjdx4($a, $m){
		$a = explode(',',$a);
		if(in_array(4,$a)){
			$nums = array_count_values($a);
			return $nums[4]+1;
		}
		return 0;
	}
	function sjdx5($a, $m){
		$a = explode(',',$a);
		if(in_array(5,$a)){
			$nums = array_count_values($a);
			return $nums[5]+1;
		}
		return 0;
	}
	function sjdx6($a, $m){
		$a = explode(',',$a);
		if(in_array(6,$a)){
			$nums = array_count_values($a);
			return $nums[6]+1;
		}
		return 0;
	}
	function sjdxd($a, $m){
		$a = explode(',',$a);
		
		if(array_sum($a) > 10 && array_sum($a) <= 18){
			return 1;
		}
		return 0;
	}
	function sjdxs($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) >= 3 && array_sum($a) <= 10){
			return 1;
		}
		return 0;
	}
	function wsqs111($a, $m){
		$a = explode(',',$a);
		if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 1){
			return 1;
		}
		return 0;
	}
	function wsqs222($a, $m){
		
		$a = explode(',',$a);
		if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 2){
			return 1;
		}
		return 0;
	}
	function wsqs333($a, $m){
		
		$a = explode(',',$a);
		if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 3){
			return 1;
		}
		return 0;
	}
	function wsqs444($a, $m){
		
		$a = explode(',',$a);
		if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 4){
			return 1;
		}
		return 0;
	}
	function wsqs555($a, $m){
		
		$a = explode(',',$a);
		if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 5){
			return 1;
		}
		return 0;
	}
	function wsqs666($a, $m){
		
		$a = explode(',',$a);
		if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 6){
			return 1;
		}
		return 0;
	}
	function wsqsqqq($a, $m){
		$a = explode(',',$a);
		if($a[0] == $a[1] && $a[0] == $a[2]){
			return 1;
		}
		return 0;
	}

	function ds4($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 4){
			return 1;
		}
		return 0;
	}
	function ds5($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 5){
			return 1;
		}
		return 0;
	}
	function ds6($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 6){
			return 1;
		}
		return 0;
	}
	function ds7($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 7){
			return 1;
		}
		return 0;
	}
	function ds8($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 8){
			return 1;
		}
		return 0;
	}
	function ds9($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 9){
			return 1;
		}
		return 0;
	}
	function ds10($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 10){
			return 1;
		}
		return 0;
	}
	function ds11($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 11){
			return 1;
		}
		return 0;
	}
	function ds12($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 12){
			return 1;
		}
		return 0;
	}
	function ds13($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 13){
			return 1;
		}
		return 0;
	}
	function ds14($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 14){
			return 1;
		}
		return 0;
	}
	function ds15($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 15){
			return 1;
		}
		return 0;
	}
	function ds16($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 16){
			return 1;
		}
		return 0;
	}
	function ds17($a, $m){
		$a = explode(',',$a);
		if(array_sum($a) == 17){
			return 1;
		}
		return 0;
	}


	function cp12($a, $m){
		$a = explode(',',$a);
		if(in_array(1,$a) && in_array(2,$a)){
		return 1;
		}
		return 0;
	}
	function cp13($a, $m){
		$a = explode(',',$a);
		if(in_array(1,$a) && in_array(3,$a)){
		return 1;
		}
		return 0;
	}
	function cp14($a, $m){
		$a = explode(',',$a);
		if(in_array(1,$a) && in_array(4,$a)){
		return 1;
		}
		return 0;
	}
	function cp15($a, $m){
		$a = explode(',',$a);
		if(in_array(1,$a) && in_array(5,$a)){
		return 1;
		}
		return 0;
	}
	function cp16($a, $m){
		$a = explode(',',$a);
		if(in_array(1,$a) && in_array(6,$a)){
		return 1;
		}
		return 0;
	}
	function cp23($a, $m){
		$a = explode(',',$a);
		if(in_array(2,$a) && in_array(3,$a)){
		return 1;
		}
		return 0;
	}
	function cp24($a, $m){
		$a = explode(',',$a);
		if(in_array(2,$a) && in_array(4,$a)){
		return 1;
		}
		return 0;
	}
	function cp25($a, $m){
		$a = explode(',',$a);
		if(in_array(2,$a) && in_array(5,$a)){
		return 1;
		}
		return 0;
	}
	function cp26($a, $m){
		$a = explode(',',$a);
		if(in_array(2,$a) && in_array(6,$a)){
		return 1;
		}
		return 0;
	}
	function cp34($a, $m){
		$a = explode(',',$a);
		if(in_array(3,$a) && in_array(4,$a)){
		return 1;
		}
		return 0;
	}
	function cp35($a, $m){
		$a = explode(',',$a);
		if(in_array(3,$a) && in_array(5,$a)){
		return 1;
		}
		return 0;
	}
	function cp36($a, $m){
		$a = explode(',',$a);
		if(in_array(3,$a) && in_array(6,$a)){
		return 1;
		}
		return 0;
	}
	function cp45($a, $m){
		$a = explode(',',$a);
		if(in_array(4,$a) && in_array(5,$a)){
		return 1;
		}
		return 0;
	}
	function cp46($a, $m){
		$a = explode(',',$a);
		if(in_array(4,$a) && in_array(6,$a)){
		return 1;
		}
		return 0;
	}
	function cp56($a, $m){
		$a = explode(',',$a);
		if(in_array(5,$a) && in_array(6,$a)){
		return 1;
		}
		return 0;
	}

	function dp11($a, $m){
		$a = explode(',',$a);
		$a = array_count_values($a);
		if($a[1] == 2){
		return 1;
		}
		return 0;
	}
	function dp22($a, $m){
		$a = explode(',',$a);
		$a = array_count_values($a);
		if($a[2] == 2){
		return 1;
		}
		return 0;
	}
	function dp33($a, $m){
		$a = explode(',',$a);
		$a = array_count_values($a);
		if($a[3] == 2){
		return 1;
		}
		return 0;
	}
	function dp44($a, $m){
		$a = explode(',',$a);
		$a = array_count_values($a);
		if($a[4] == 2){
		return 1;
		}
		return 0;
	}
	function dp55($a, $m){
		$a = explode(',',$a);
		$a = array_count_values($a);
		if($a[5] == 2){
		return 1;
		}
		return 0;
	}
	function dp66($a, $m){
		$a = explode(',',$a);
		$a = array_count_values($a);
		if($a[6] == 2){
		return 1;
		}
		return 0;
	}

	function k3hzbigodd($a, $m){
		$a = explode(',',$a);
		$sum = array_sum($a);
		if($sum > 10 && $sum%2!=0){
			return 1;
		}
		return 0;
	}
	function k3hzsmallodd($a, $m){
		$a = explode(',',$a);
		$sum = array_sum($a);
		if($sum <= 10 && $sum%2!=0){
			return 1;
		}
		return 0;
	}
	function k3hzbigeven($a, $m){
		$a = explode(',',$a);
		$sum = array_sum($a);
		if($sum > 10 && $sum%2==0){
			return 1;
		}
		return 0;
	}
	function k3hzsmalleven($a, $m){
		$a = explode(',',$a);
		$sum = array_sum($a);
		if($sum <= 10 && $sum%2==0){
			return 1;
		}
		return 0;
	}

	function hhmhong ($a, $m){
		$a = explode(',',$a);
		if($a[0] == $a[1] || $a[1] == $a[2]){
			return 1;
		}
		return 0;
	}
	function hhmhei ($a, $m){
		$a = explode(',',$a);
		if($a[0] != $a[1] && $a[1] != $a[2]){
			return 1;
		}
		return 0;
	}
	function hhmhongd ($a, $m){
		$a = explode(',',$a);
		if($a[0] == $a[1] || $a[1] == $a[2]){
			if(array_sum($a) > 10){
				return 1;
			}
		}
		return 0;
	}
	function hhmhongx ($a, $m){
		$a = explode(',',$a);
		if($a[0] == $a[1] || $a[1] == $a[2]){
			if(array_sum($a) <= 10){
				return 1;
			}
		}
		return 0;
	}
	function hhmhongdd ($a, $m){
		$a = explode(',',$a);
		if($a[0] == $a[1] || $a[1] == $a[2]){
			if(array_sum($a)%2 != 0){
				return 1;
			}
		}
		return 0;
	}
	function hhmhongss ($a, $m){
		$a = explode(',',$a);
		if($a[0] == $a[1] || $a[1] == $a[2]){
			if(array_sum($a)%2 == 0){
				return 1;
			}
		}
		return 0;
	}
	function hhmheid ($a, $m){
		$a = explode(',',$a);
		if($a[0] != $a[1] && $a[1] != $a[2]){
			if(array_sum($a) > 10){
				return 1;
			}
		}
		return 0;
	}
	function hhmheix ($a, $m){
		$a = explode(',',$a);
		if($a[0] != $a[1] && $a[1] != $a[2]){
			if(array_sum($a) <= 10){
				return 1;
			}
		}
		return 0;
	}
	function hhmheidd ($a, $m){
		$a = explode(',',$a);
		if($a[0] != $a[1] && $a[1] != $a[2]){
			if(array_sum($a)%2 != 0){
				return 1;
			}
		}
		return 0;
	}
	function hhmheixx ($a, $m){
		$a = explode(',',$a);
		if($a[0] != $a[1] && $a[1] != $a[2]){
			if(array_sum($a)%2 == 0){
				return 1;
			}
		}
		return 0;
	}
	function hhmhong4hong ($a, $m){
		$a = explode(',',$a);
		$m = explode(',',$m);
		if($a[0] == $a[1] || $a[1] == $a[2]){
			foreach ($a as $val) {
				if(!in_array($val,$m)) return 0;
			}
			return 1;
		}
		return 0;
	}
	function hhmhong4hei ($a, $m){
		$a = explode(',',$a);
		$m = explode(',',$m);
		if($a[0] != $a[1] && $a[1] != $a[2]){
			foreach ($a as $val) {
				if(!in_array($val,$m)) return 0;
			}
			return 1;
		}
		return 0;
	}
	function hhmhong5hei ($a, $m){
		$a = explode(',',$a);
		$m = explode(',',$m);
		if($a[0] != $a[1] && $a[1] != $a[2]){
			foreach ($a as $val) {
				if(!in_array($val,$m)) return 0;
			}
			return 1;
		}
		return 0;
	}





}
?>