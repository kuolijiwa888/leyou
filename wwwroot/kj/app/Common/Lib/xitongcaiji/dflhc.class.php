<?php
namespace Lib\xitongcaiji;
class dflhc{
	function __construct($url){
		$this->url    = $url;
		$this->title    = '大发六合彩';
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
				$variable = array();
				for ($i=0; $i<10; $i++) { 
					$rand_keys           =  [];

				$str = '';
				for($i=1;$i<49;$i++){
					$i<10?$num='0'.$i:$num=$i;
					$str .= $num.',';
				}
					$str = substr($str,0,-1);
					$rand_keys           =  explode(',',self::rand_keys_x(7,$str));
					$variable[]    =  implode(',',$rand_keys);
				}
				

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


	protected function rand_keys_x($len = 5,$str='01,02,03,04,05,06,07,08,09,10') {
		$_strs = [];
		$_strs = explode(',',$str);
		$len   = count($_strs)>=$len?$len:count($_strs);
		$_rands= array_rand($_strs,$len);
		$_nrands = [];
		foreach($_rands as $k=>$v){
			$_nrands[$k] = $_strs[$v];
		}
		shuffle($_nrands);
		return implode(',',$_nrands);
	}
}
?>