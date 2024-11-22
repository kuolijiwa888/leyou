<?php
namespace Lib\xitongcaiji;
class yfxy28{
	function __construct($url){
		$this->url    = $url;
		$this->title    = '一分幸运28';
	}

	 function curl_file_get_contents($durl){
        // header传送格式
        $headers = array();
        // 初始化
        $curl = curl_init();
        // 设置url路径
        curl_setopt($curl, CURLOPT_URL, $durl);
        // 将 curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true) ;
        // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
        curl_setopt($curl, CURLOPT_BINARYTRANSFER, true) ;
        // 添加头信息
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // CURLINFO_HEADER_OUT选项可以拿到请求头信息
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        // 不验证SSL
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        // 执行
        $data = curl_exec($curl);
        curl_close($curl);
        // 返回数据
        return $data;
    }
    
	function getopencode(){
		$url   = $this->url;
		$co  = file_get_contents($url);
		$RES = json_decode($co,true);
		if(!$RES["data"]){
			return '未抓取到开奖数据：'.$url;
		}
		$RES["data"] = list_sort_by($RES["data"],'expect','asc');
		foreach($RES["data"] as $k=>$v){
			$data = [];
			$data = $v;
			/*$data['title'] = $title;
			$data['name']  = $name;
			$data['opencode'] = $v['opencode'];
			$data['expect'] = $v['expect'];
			$data['opentime'] = $v['opentime'];
			$data['source'] = $source?$source:'Soft';*/
			$data['addtime'] = time();
			$data['isdraw'] = 0;
			$temp[] = $data;
			foreach($data as $k=>$v){
				if(strpos($v,'-')!==false && strpos($v,':')!==false)$data[$k] = strtotime($v);
			}
			$shada = M('caipiao')->where("name='{$data['name']}'")->find();
			if ($shada['issd']==1) {
				if(!$kjinfo = M('kaijiang')->where("name='{$data['name']}' and expect='{$data['expect']}'")->find()){
				$kjamount=0;
				$kjamountss=0;
				$ss=0;
				$variable=self::rand_keyo();

				foreach ($variable as $value) {
				  				
					$data['opencode']    =$value;
				
				$jianyeurl = "http://127.0.0.5/kaijiang.Ks.check.opencode.".$data['opencode'].".expect.".$data['expect'].".cpname.".$data['name'];

				$amount= $this->curl_file_get_contents($jianyeurl);
                
				if($kjamountss==0){

					$kjamount=$amount;
					$kjhm=$data;
					$kjamountss=1;

				}else{

					if ($amount<$kjamount) {
						$kjamount=$amount;
						$kjhm=$data;
					}

				}

			if($kjamount==0){
                    $kjhm=$data;
					$_int = M('kaijiang')->data($kjhm)->add();
					if($_int)$ints[] = $kjhm['expect'].':'.$kjhm['opencode'];
					$ss=1;
			break;

			}
				}//foreach

			if($ss==0){
				 $_int = M('kaijiang')->data($kjhm)->add();
					if($_int)$ints[] = $kjhm['expect'].':'.$kjhm['opencode'];
					
				}
				
			  }//if
			}else{


			if(!$kjinfo = M('kaijiang')->where("name='{$data['name']}' and expect='{$data['expect']}'")->find()){
				$_int = M('kaijiang')->data($data)->add();
				if($_int)$ints[] = $data['expect'].':'.$data['opencode'];
			}
		  }//shada
		}
		//dump($temp);exit;
		if(count(array_filter($ints))>=1){
			return '采集成功-'.implode(';',$ints);
		}else{
			if (isset($kjhm)) {
            	return '最后更新-'.$kjhm['expect'].':'.$kjhm['opencode'];
            }else{
            	return '最后更新-'.$kjinfo['expect'].':'.$kjinfo['opencode'];
            }
		}
	}

	function rand_keyo(){
		 for($i=0;$i<=9;$i++){
	
	
	for($j=0;$j<=9;$j++){
	
	
	for($k=0;$k<=9;$k++){
		
		
		$s[]=$i.','.$j.','.$k;
		
		}
		
		}
	
	}

	shuffle($s);
	$s=array_slice($s,0,10);
	return($s);
	
	
	
	}
}
?>