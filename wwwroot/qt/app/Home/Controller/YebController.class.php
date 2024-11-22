<?php
namespace Home\Controller;
use Think\Controller;

class YebController extends CommonController {
	public function __construct(){ 
		parent::__construct(); 
		$logininfo = islogin();
		if($logininfo['sign']==false){
			session('member_sessionid',NULL);
			session('member_auth_id',NULL);
			redirect(U("Public/login"));
			exit;
		}else{
			if($logininfo['data']['islogin']!=1 || $logininfo['data']['islock']==1){
				session('member_sessionid',NULL);
				session('member_auth_id',NULL);
				redirect(U("Public/login"));
				exit;
			}
			$this->userinfo = $logininfo['data'];
		}

		if(ACTION_NAME !="safepass")
		{
			if(empty($_SESSION['userinfo']['tradepassword']))
			{
				$this->error('为了你的资金安全,请先设置安全密码',U('Member/safepass'));
			}
		}
	}
	

	//获取余额
	function balance()
	{
		$userInfo=$_SESSION['userinfo'];
		$username=$userInfo['username'];
		if($username){
			$type=I('type');
			switch($type){
				case 'ag':
				$AgService=new \Org\Util\AgService();
			    $ret=$AgService->balance(trim($username));
				
				break;
				case 'bbin':
				  $BbinService=new \Org\Util\BbinService();
			      $ret=$BbinService->balance(trim($username));
				   
				break;
				case 'ky':
				  $KyService=new \Org\Util\KyService();
			      $ret=$KyService->balance(trim($username));
				   
				break;			
				case 'ss':
				  $SsService=new \Org\Util\SsService();
			      $ret=$SsService->balance(trim($username));
				   
				break;						
			}
		}else{
			$ret=array('code'=>2,'msg'=>'请先登录');
		}
		
		$this->ajaxReturn($ret);
	}
	function hrecord(){
		$map['type']=0;		
		$map['uid']=array('eq',$this->userinfo['id']);

		$count      = M('yuecunru')->where($map)->count();
		$Page       = new \Think\Page($count,10);
		startPage($Page);
		$tzlist     = M('yuecunru')->where($map)->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('tzlist',$tzlist);
				$this->assign('pageshow',$Page->show());
		$this->display();
		
	}
	function drecord(){
		$map['type']=1;		
		$map['uid']=array('eq',$this->userinfo['id']);

		
		$count      = M('yuecunru')->where($map)->count();
		$Page       = new \Think\Page($count,10);
		startPage($Page);
		$tzlist     = M('yuecunru')->where($map)->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('tzlist',$tzlist);
				$this->assign('pageshow',$Page->show());

		$this->display();
		
	}
	function syrecord(){
		
     	$map['type']=array('eq','yeb_lixi');
		$map['uid']=array('eq',$this->userinfo['id']);
		$db = M('fuddetail');
		$count      = $db->where($map)->count();
		$Page       = new \Think\Page($count,10);
		 startPage($Page);
		$mxlist     = $db->where($map)->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
 		foreach ($mxlist as $key => $value) {
			
			if($value['amountbefor']>$value['amountafter']){
				$mxlist[$key]['amount'] = "-".$value['amount'];
			}else{
				$mxlist[$key]['amount'] = "+".$value['amount'];
			}
	
		   
		}
		
		$this->pageshow= $Page->show();
		$this->mxlist = $mxlist;
		$this->display();
		
	}
	function crecord(){
	
		$map['type']=array('eq','yeb_hq');
		$map['uid']=array('eq',$this->userinfo['id']);
		$db = M('fuddetail');
		$count      = $db->where($map)->count();
		$Page       = new \Think\Page($count,10);
		 startPage($Page);
		$mxlist     = $db->where($map)->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
 		foreach ($mxlist as $key => $value) {
			
			if($value['amountbefor']>$value['amountafter']){
				$mxlist[$key]['amount'] = "-".$value['amount'];
			}else{
				$mxlist[$key]['amount'] = "+".$value['amount'];
			}
	
		   
		}
		
		$this->pageshow= $Page->show();
		$this->mxlist = $mxlist;
		$this->display();	
		
		
	}
	function qrecord(){
	
		$map['type']=array('eq','yeb_dq');
		$map['uid']=array('eq',$this->userinfo['id']);
		$db = M('fuddetail');
		$count      = $db->where($map)->count();
		$Page       = new \Think\Page($count,10);
		 startPage($Page);
		$mxlist     = $db->where($map)->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
 		foreach ($mxlist as $key => $value) {
			
			if($value['amountbefor']>$value['amountafter']){
				$mxlist[$key]['amount'] = "-".$value['amount'];
			}else{
				$mxlist[$key]['amount'] = "+".$value['amount'];
			}
	
		   
		}
		
		$this->pageshow= $Page->show();
		$this->mxlist = $mxlist;
		$this->display();	
		
		
	}
	
	function dtixi(){
	$userInfo=$_SESSION['userinfo'];
	$username=$userInfo['username'];

		if($username){
		$member=D("Member")->find($userInfo['id']);
        $id=I('id');
        $yuecunru=D("yuecunru")->find($id);
        
            $data = array();
		    $data['qmoney'] =$yuecunru['money'];
		    $data['state'] =0;
		    $data['txtype'] =1;
			M('yuecunru')->where("id=".$id)->save($data);
			
			$data = array();
		    $data['dyebmoney'] =$member['dyebmoney']-$yuecunru['money'];
		    $data['balance'] =$member['balance']+$yuecunru['money'];
			$data['yebtime']= time();
			M('member')->where("id=".$userInfo['id'])->save($data);
		
		$_t = time();	
		$fuddetail_data = array();
		$fuddetail_data['trano'] = rand_string(2,0).date('ymdHis').rand_string(2,1);
		$fuddetail_data['uid'] = $userInfo['id'];
		$fuddetail_data['username'] = $userInfo['username'];
		$fuddetail_data['amount'] =$yuecunru['money'];
		$fuddetail_data['amountbefor'] =$member['balance'];
		$fuddetail_data['amountafter'] =$member['balance']+$yuecunru['money'];
		$fuddetail_data['oddtime'] = $_t;
		$fuddetail_data['remark'] = "转出余额宝金额{$yuecunru['money']}元";
		$fuddetail_data['type'] = 'yeb_dq';
		$fuddetail_data['typename'] = C('fuddetailtypes.yeb_dq');
     	M('fuddetail')->data($fuddetail_data)->add();

		}else{
		    $ret=array('code'=>-1,'msg'=>'请先登录');
		}
		$ret=array('code'=>1,'msg'=>'提出成功');
		$this->ajaxReturn($ret);
		
	}	

	function hquchu(){
	$userInfo=$_SESSION['userinfo'];
	$username=$userInfo['username'];

		if($username){
			
			$member=D("Member")->find($userInfo['id']);
			$amount=I('amout');
			$money=$member['yebmoney'];
			if($amount<=0)
			{
				$ret=array('code'=>-1,'msg'=>'错误');
				$this->ajaxReturn($ret);exit;	
			}
			
			if($money<$amount){
				$ret=array('code'=>-1,'msg'=>'取出金额大于余额');
				$this->ajaxReturn($ret);exit;
			}
		$map['uid']=$userInfo['id'];
		$map['state']=1;
		$map['type']=0;

		$yeblist=M('yuecunru')->where($map)->order("id asc")->select();
		
		$xamount=$amount;
		
	
		
	   	foreach ($yeblist as $key => $value) {
	   	
	   	$money=$value['money']-$value['qmoney'];

	   	if($money>=$xamount)
	   	{
	     
	     
	     	$data = array();
		    $data['yebmoney'] =$member['yebmoney']-$amount;
		    $data['balance'] =$member['balance']+$amount;
			$data['yebtime']= time();
			M('member')->where("id=".$userInfo['id'])->save($data);
	   		
	   		$data = array();
		    $data['qmoney'] =$value['qmoney']+$xamount;
		     if($money==$xamount)
	    	{
	    	$data['state'] =0;
	    	}
			M('yuecunru')->where("id=".$value['id'])->save($data);
		$_t = time();	
		$fuddetail_data = array();
		$fuddetail_data['trano'] = rand_string(2,0).date('ymdHis').rand_string(2,1);
		$fuddetail_data['uid'] = $userInfo['id'];
		$fuddetail_data['username'] = $userInfo['username'];
		$fuddetail_data['amount'] = $amount;
		$fuddetail_data['amountbefor'] =$member['balance'];
		$fuddetail_data['amountafter'] =$member['balance']+$amount;
		$fuddetail_data['oddtime'] = $_t;
		$fuddetail_data['remark'] = "转出余额宝金额{$amount}元";
		$fuddetail_data['type'] = 'yeb_hq';
		$fuddetail_data['typename'] = C('fuddetailtypes.yeb_hq');
     	M('fuddetail')->data($fuddetail_data)->add();
	    		
	   	$ret=array('code'=>1,'msg'=>'转出成功');
    	break;
	   		
	   	}
	   	else
	   	{		
	   	
	   		
	   	    $data = array();
		    $data['qmoney'] =$value['money'];
		    $data['state'] =0;
			M('yuecunru')->where("id=".$value['id'])->save($data);
	   		$xamount=$xamount-$money;
	   	}
	   		
	   	}	
		}else{
		$ret=array('code'=>2,'msg'=>'请先登录');
		}
		
		$this->ajaxReturn($ret);	
	
	}
	
	function deposit(){
		
		$userInfo=$_SESSION['userinfo'];
		$username=$userInfo['username'];
		if($username){
			
			$yeb_type=I('yeb_type');
			$amount=I('amout');
			if($amount<=0)
			{
				$ret=array('code'=>-1,'msg'=>'错误');
				$this->ajaxReturn($ret);exit;	
			}
		   	if(empty($amount)){
				$ret=array('code'=>-1,'msg'=>'参数缺失');
				$this->ajaxReturn($ret);exit;
			}
			$member=D("Member")->find($userInfo['id']);
			$yuetype=D("yuetype")->find($yeb_type);
			
			$money=$member['balance'];
			if($money<$amount){
				$ret=array('code'=>-1,'msg'=>'余额不足，请先充值');
				$this->ajaxReturn($ret);exit;
			}
		    
		    $data = array();
		    if($yuetype['day']==0)
		    {
	    	$data['yebmoney'] =$member['yebmoney']+$amount;
		    }
		    else
		    {
		    $data['dyebmoney'] =$member['dyebmoney']+$amount;	
		    }
		    
		    $data['balance'] =$member['balance']-$amount;
			
			$data['yebtime']= time();
			M('member')->where("id=".$userInfo['id'])->save($data);
			
			$data = array();
			$data['f_id'] =$yeb_type;
			$data['fname'] =$yuetype['name'];
			$data['state'] =1;
			$data['money'] =$amount;
			$data['uid'] =$userInfo['id'];
			if($yuetype['day']==0)
		    {
			$data['type'] =0;
		    }
		    else
		    {
		    	
		    $data['type'] =1;	
		    }
			$data['addtime']= time();
			$data['lixitime']= time();

			$data['trano']  = rand_string(2,0).date('ymdHis').rand_string(2,1);
			$int = M('yuecunru')->data($data)->add();
		$_t = time();	
		$fuddetail_data = array();
		$fuddetail_data['trano'] = rand_string(2,0).date('ymdHis').rand_string(2,1);
		$fuddetail_data['uid'] = $userInfo['id'];
		$fuddetail_data['username'] = $userInfo['username'];
		$fuddetail_data['amount'] = $amount;
		$fuddetail_data['amountbefor'] =$member['balance'];
		$fuddetail_data['amountafter'] =$member['balance']-$amount;
		$fuddetail_data['oddtime'] = $_t;
		$fuddetail_data['remark'] = "转入余额宝金额{$amount}元";
		if($yuetype['day']==0)
		{
		$fuddetail_data['type'] = 'yeb_hq';
		$fuddetail_data['typename'] = C('fuddetailtypes.yeb_hq');
		}
		else
		{
		$fuddetail_data['type'] = 'yeb_dq';
		$fuddetail_data['typename'] = C('fuddetailtypes.yeb_dq');
		}
     	M('fuddetail')->data($fuddetail_data)->add();
			
		$ret=array('code'=>1,'msg'=>'存入成功');
		    
		}else{
		$ret=array('code'=>2,'msg'=>'请先登录');
		}
		$this->ajaxReturn($ret);
	}
	
	public	function withdrawal(){
		$userInfo=$_SESSION['userinfo'];
		$username=$userInfo['username'];
		
		if($username){
			$type=I('type');
			$amount=I('amount');
			if(empty($amount)){
					$ret=array('code'=>-1,'msg'=>'参数缺失');
				$this->ajaxReturn($ret);exit;
			}
			
			D("Transrecord")->startTrans();
			try{
				$data=array();
				$mt=time();
				$mtd=mt_rand(1000,9999);
				$billno=$mt.$mtd;
				/*if($type=='ag'){
					$data['transType']='ag';
				   $data['transDes']='AG转出';
				}else if($type=='bbin'){
				   $data['transType']='bb';
				   $data['transDes']='BB转出';
				}else if($type=='ky'){
				   $data['transType']='ky';
				   $data['transDes']='KY转出';
				}else if($type=='ss'){
				   $data['transType']='ss';
				   $data['transDes']='SS转出';
				}*/
				$data['transType'] = 'ng';
				$data['transDes'] ='娱乐钱包转出';
				$data['uid']=$userInfo['id'];
				$data['transBillno']=$billno;
				$data['tansAmount']=$amount;
				$data['state']=1;
				$data['transTime']=date("Y-m-d H:i:s");
				
				
				/*if($type=='ag'){
					$AgService=new \Org\Util\AgService();
					$ret=$AgService->trans_out(trim($username),$amount,$billno);
				}else if($type=='bbin'){
				  $BbinService=new \Org\Util\BbinService();
			      $ret=$BbinService->withdrawal(trim($username),$amount,$billno);
				}else if($type=='ky'){
				  $KyService=new \Org\Util\KyService();
			      $ret=$KyService->trans_out(trim($username),$amount,$billno);
				}else if($type=='ss'){
				  $SsService=new \Org\Util\SsService();
			      $ret=$SsService->trans_out(trim($username),$amount,$billno);
				}*/
                $NgService = new \Org\Util\NgService();
                $res = $NgService->trans($username,$amount>0?-$amount:0,$billno);
                $ret = array(
                    'code' => $res['statusCode'],
                    'msg'=>$res['message']
                );
				if($ret['code']!=01){
					D("Transrecord")->rollback();
				}else{
					D("Transrecord")->add($data);
					D("Member")->where(array("id"=>$userInfo['id']))->setInc('balance',$amount);
					D("Transrecord")->commit();
				}
			}catch(Exception $e){
					D("Transrecord")->rollback();
			}
		
		}else{
			$ret=array('code'=>2,'msg'=>'请先登录');
		}
		
		$this->ajaxReturn($ret);
	}
	
    function login(){
		$userInfo=$_SESSION['userinfo'];
		$username=$userInfo['username'];
		if($username){
			$type=I('type','bbin');
			$code=I('code',null);
			$plat_type = I('plat_type','ag');
			$game_type = I('game_type','1');

			if($plat_type && $game_type){
			    $Ngservide = new \Org\Util\NgService();
			    $ret = $Ngservide->login($username,$plat_type,$game_type);
            }else{
                $this->error("参数错误");
            }
            //print_r($ret);

			/*switch($type){
				case 'ag':
			$AgService=new \Org\Util\AgService();
			  $ret=$AgService->login(trim($username),$code);
				break;
				case 'bbin':
				
				  $BbinService=new \Org\Util\BbinService();
			      $ret=$BbinService->login(trim($username));
				break;
				case 'ky':
				
				  $KyService=new \Org\Util\KyService();
			      $ret=$KyService->login(trim($username));
				break;
				case 'ss':
				
				  $SsService=new \Org\Util\SsService();
			      $ret=$SsService->login(trim($username));
				break;				
			}*/

			if($ret['statusCode']==01){
				$url=$ret['data'];
				header("location:$url");
				exit;
			}else{
				$this->error($ret['message']);
			}
		}else{
			$this->error("请先登录");
			
		}
		
		
	}		
	
}

