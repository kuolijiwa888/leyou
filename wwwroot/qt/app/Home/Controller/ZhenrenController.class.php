<?php
namespace Home\Controller;
use Think\Controller;

class ZhenrenController extends CommonController {
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
	
	function deposit(){
		$userInfo=$_SESSION['userinfo'];
		$username=$userInfo['username'];
		if($username){
			
			$type=I('type');
			$amount=I('amount');
		   	if(empty($amount)){
					$ret=array('code'=>-1,'msg'=>'参数缺失');
				$this->ajaxReturn($ret);exit;
			}
			$member=D("Member")->find($userInfo['id']);
			$balance=$member['balance'];
			if($balance<$amount){
				$ret=array('code'=>-1,'msg'=>'余额不足，请先充值');
				$this->ajaxReturn($ret);exit;
			}
			D("Transrecord")->startTrans();
			try{
				$data=array();
				$mt=time();
				$mtd=mt_rand(1000,9999);
				$billno=$mt.$mtd;
				$data['transType'] = 'ng';
				$data['transDes'] = '娱乐钱包转入';
				$data['uid']=$userInfo['id'];
				$data['transBillno']=$billno;
				$data['tansAmount']=$amount;
				$data['state']=1;
				$data['transTime']=date("Y-m-d H:i:s");
				$NgService = new \Org\Util\NgService();
				$res = $NgService->trans($username,$amount,$billno);
				$ret=array(
				    'code' => $res['statusCode'],
                    'msg' => $res['message']
                );
				if($ret['code']!=1){
					D("Transrecord")->rollback();
				
				}else{
					D("Transrecord")->add($data);
					D("Member")->where(array("id"=>$userInfo['id']))->setDec('balance',$amount);
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
				$data['transType'] = 'ng';
				$data['transDes'] ='娱乐钱包转出';
				$data['uid']=$userInfo['id'];
				$data['transBillno']=$billno;
				$data['tansAmount']=$amount;
				$data['state']=1;
				$data['transTime']=date("Y-m-d H:i:s");
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

