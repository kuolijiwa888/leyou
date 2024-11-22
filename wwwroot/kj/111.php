<?php
$tzcode='0,1,2,3,4,5,6';
$tzcodes =explode(',',$tzcode);


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
				$c = combination($b, $m-1);
				foreach ($c as $v) {
					$r[] = array_merge($t, $v);
				}
			}
		}

		return $r;
	}
	
	
$a=combination($tzcodes ,3);
var_dump($a);
	
	?>