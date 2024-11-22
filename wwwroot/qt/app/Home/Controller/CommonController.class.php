<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends AuthController {
	
    public function _initialize(){
		
		$this->auth();
       if($_SESSION['userinfo']){
       		$userInfo=$_SESSION['userinfo'];

        $map = array();
		$map['uid']=$userInfo['id'];
		$map['type']=1;
		$map['txtype']=0;
		$map['state']=1;
		
		$yeblist=M('yuecunru')->where($map)->order("id asc")->select();
		
		$member=D("Member")->find($userInfo['id']);
      
        foreach ($yeblist as $key =>$value)
        {
        $dtime=time()-$value['addtime'];
        	    
        $yuetype=D("yuetype")->find($value['f_id']);
        
        $dqtime=$yuetype['day']*24*60*60;
        
        if($dtime>$dqtime)
        {
        
            $data = array();
		   
		    $data['state'] =0;
			M('yuecunru')->where("id=".$value['id'])->save($data);
			
			$data = array();
		    $data['yeblixi'] =$member['yeblixi']+$yuetype['liyun']*$value['money']*$yuetype['day']/1000;
		    $lixi=$yuetype['liyun']*$value['money']*$yuetype['day']/1000;
			M('member')->where("id=".$userInfo['id'])->save($data);
           
        $_t = time();	
		$fuddetail_data = array();
		$fuddetail_data['trano'] = rand_string(2,0).date('ymdHis').rand_string(2,1);
		$fuddetail_data['uid'] = $userInfo['id'];
		$fuddetail_data['username'] = $userInfo['username'];
		$fuddetail_data['amount'] =$lixi;
		$fuddetail_data['amountbefor'] =$member['yeblixi'];
		$fuddetail_data['amountafter'] =$data['yeblixi'];
		$fuddetail_data['oddtime'] = $_t;
		$fuddetail_data['remark'] = "定期利息{$lixi}元,单号".$value['trano'] ;
		$fuddetail_data['type'] = 'yeb_lixi';
		$fuddetail_data['typename'] = C('fuddetailtypes.yeb_lixi');
     	M('fuddetail')->data($fuddetail_data)->add();
        
        
        
        }
        
       
        }
        
        $map = array();
		$map['uid']=$userInfo['id'];
		$map['type']=0;
		$map['state']=1;
		
		$yeblist=M('yuecunru')->where($map)->order("id asc")->select();

        foreach ($yeblist as $key =>$value)
        {
        $dtime=time()-$value['lixitime'];
        $yuetype=D("yuetype")->find($value['f_id']);
      
        $dqtime=24*60*60;
        if($dtime>$dqtime)
        {
        	
        $day=floor($dtime/$dqtime);
        
       
            $data = array();
		    $data['lixitime'] =$value['lixitime']+$day*$dqtime;
			M('yuecunru')->where("id=".$value['id'])->save($data);
			
			$data = array();
		    $data['yeblixi'] =$member['yeblixi']+$yuetype['liyun']*$value['money']*$day/1000;
		    $lixi=$yuetype['liyun']*$value['money']*$day/1000;
			M('member')->where("id=".$userInfo['id'])->save($data);
			
			
		$_t = time();	
		$fuddetail_data = array();
		$fuddetail_data['trano'] = rand_string(2,0).date('ymdHis').rand_string(2,1);
		$fuddetail_data['uid'] = $userInfo['id'];
		$fuddetail_data['username'] = $userInfo['username'];
		$fuddetail_data['amount'] =$lixi;
		$fuddetail_data['amountbefor'] =$member['yeblixi'];
		$fuddetail_data['amountafter'] =$data['yeblixi'];
		$fuddetail_data['oddtime'] = $_t;
		$fuddetail_data['remark'] = "活期{$day}天利息{$lixi}元,单号".$value['trano'];
		$fuddetail_data['type'] = 'yeb_lixi';
		$fuddetail_data['typename'] = C('fuddetailtypes.yeb_lixi');
     	M('fuddetail')->data($fuddetail_data)->add();
        
       
        }
        
        
        	
        }
        
       
	
		   if($_SESSION['userinfo']){
			   changeusergroup($_SESSION['userinfo']['id']);
		   }
	   }
		header("Content-type: text/html; charset=utf-8"); 
		//适配跳转
		$_DOMAIN_DEPLOY = C('APP_SUB_DOMAIN_DEPLOY');  //返回1
		$_IS_MOBILE = is_mobile();  //判断是否是移动设备

		$_BaseDomain = getBaseDomain($_SERVER['SERVER_NAME']);  //获取当前域名
		foreach(C('APP_SUB_DOMAIN_RULES') as $k=>$v){
			$_SUBDOMAINS[strtolower($v)][strtolower($k)] = strtolower($k);
		}
		if($_DOMAIN_DEPLOY && $_IS_MOBILE && count($_SUBDOMAINS['mobile'])>=1){
			$_H5_DOMAIN = 'h5.'.$_BaseDomain;
			$_M_DOMAIN = 'm.'.$_BaseDomain;
			$_M2_DOMAIN = 'm2.'.$_BaseDomain;
			$_WAP_DOMAIN = 'wap.'.$_BaseDomain;
			if($_SUBDOMAINS['mobile'][$_H5_DOMAIN]){
				redirect('http://'.$_H5_DOMAIN);
				exit;
			}
			if($_SUBDOMAINS['mobile'][$_M_DOMAIN]){
				redirect('http://'.$_M_DOMAIN);
				exit;
			}
			if($_SUBDOMAINS['mobile'][$_M2_DOMAIN]){
				redirect('http://'.$_M2_DOMAIN);
				exit;
			}
			if($_SUBDOMAINS['mobile'][$_M_DOMAIN]){
				redirect('http://'.$_WAP_DOMAIN);
				exit;
			}
			$_MOBILE_DOMAIN = $_SUBDOMAINS['mobile'];
			sort($_SUBDOMAINS['mobile']);
			if($_SUBDOMAINS['mobile'][0]){
				redirect('http://'.$_SUBDOMAINS['mobile'][0]);
				exit;
			}
		}
		
		//fengg
		$configfile = CONF_PATH . 'webconfig.php';

		$_t = time();
		if(!is_file($configfile) || $_t-filemtime($configfile)>300){
			$apiparam=array();

			$_api = new \Lib\api;
			$configs = $_api->sendHttpClient('Api/Lottery/getconfigs',$apiparam);

			if($configs['sign']==true){
				$int = file_put_contents($configfile,"<?php\n return ".var_export($configs['configs'],TRUE).";");
				// print_r($int);exit();
			}
		}

		//self::getopencode();
		//黑名单/白名单
		$CustomerIp = get_client_ip();
		$ipblackisopen = C('ipblackisopen');
		$ipblacklist   = array_filter(explode(',',C('ipblacklist')));
		if($ipblackisopen==1 && $ipblacklist){
			if(in_array($CustomerIp,$ipblacklist)){
				send_http_status(403);
				$this->display('./403.html');
				exit;
			}
		}

		$ipwhiteisopen = C('ipwhiteisopen');
		$ipwhitelist   = array_filter(explode(',',C('ipwhitelist')));
		if($ipwhiteisopen==1 && $ipwhitelist){
			if(!in_array($CustomerIp,$ipwhitelist)){
				header("Location: ./weihu.html");
				exit;
			}
		}
		$webconfigs['webtitle'] = C('webtitle');
		$webconfigs['kefuthree'] = C('kefuthree');
		$webconfigs['kefuqq'] = C('kefuqq');
		$this->assign('webconfigs',$webconfigs);
		$gglist = M('Gonggao')->order("id DESC")->select();
		//公告列表
		if(empty($_COOKIE['showgg'])){
			cookie("showgg",1);
		}
		$this->assign('gglist',$gglist);
		if($userinfo = islogin()){
			$this->userinfo;
		}
	}
	
     function closegg(){
		cookie("showgg",2);
	}
	public function _empty(){
		header("Location: /404.html");
			exit();
	}
	protected function getopencode(){
		$opencodefile = DATA_PATH . 'opencodes.php';
		$_t = time();
		if(!is_file($opencodefile) || $_t-filemtime($opencodefile)>300){
			$apiparam=array();
			$_api = new \Lib\api;
			$returns = $_api->sendHttpClient('Api/Lottery/getopencodes',$apiparam);
			if($returns['sign']==true && $returns['opencodes']){
				F('opencodes',$returns['opencodes']);
			}
		}
	}
}