<?php
namespace Admincenter\Controller;
use Think\Controller;
class ZhenrenController extends Controller {
	
	function merchant(){
		$api_account=GetVar('api_account');
        $sign_key = GetVar('sign_key');
		$url='http://api.agbbin.com/v1/user/all-credit?sign_key='.$sign_key.'&code='.md5($sign_key.$api_account);
		$json=file_get_contents($url);
		if($json){
			 $res=json_decode($json,1);
			 if($res['statusCode']=='01'){
				 $this->assign('res',$res);
				$this->display();
			 }else{
				 exit($json);
			 }
			
		}else{
			exit('获取失败');
		}
	}
	function transrecord(){
		$condition=array();
		$transType=I("transType");
		$sDate=I("sDate");
		$eDate=I("eDate");
		
		if($transType){
			$condition['trans.transType']=$transType;
			$this->assign('transType',$transType);
		}
		$username=I("username");
		if($username){
			$condition['mem.username']=$username;
			$this->assign('username',$username);
		}
		if($sDate){
			$this->assign('sDate',$sDate);
			$sDate=date("$sDate 00:00:00");
		}
		if($eDate){
			$this->assign('eDate',$eDate);
			$eDate=date("$eDate 23:59:59");
			
		}
		if($sDate&&$eDate){
			$condition['trans.transTime']=array(array("egt",$sDate),array("elt",$eDate),"and");
		}elseif($sDate){
			$condition['trans.transTime']=array("egt",$sDate);
		}elseif($eDate){
			$condition['trans.transTime']=array("elt",$eDate);
		}
		
		
		$_pagasize  = 20;
		$count      = D("Transrecord")->alias("trans")->join("caipiao_member mem on mem.id=trans.uid")->where($condition)->count();
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$dataList=D("Transrecord")->alias("trans")->join("caipiao_member mem on mem.id=trans.uid")->where($condition)->order("trans.transID desc")->select();
		$this->assign('totalcount',$count);
		$this->assign('list',$dataList);
		$this->assign('page',$show);
		$this->display();
	}
	
	function agztreport(){
	
	
		$condition=array();
		
		$sDate=I("sDate");
		$eDate=I("eDate");
		
	   
		$username=I("username");
		if($username){
		
			$condition['PlayerName']=$username;
			$this->assign('username',$username);
		}
		if($sDate){
			$this->assign('sDate',$sDate);
			$sDate=date("$sDate 00:00:00");
		}
		if($eDate){
			$this->assign('eDate',$eDate);
			$eDate=date("$eDate 23:59:59");
			
		}
		if($sDate&&$eDate){
			$condition['WagersDate']=array(array("egt",$sDate),array("elt",$eDate),"and");
		}elseif($sDate){
			$condition['WagersDate']=array("egt",$sDate);
		}elseif($eDate){
			$condition['WagersDate']=array("elt",$eDate);
		}
		
		
		$_pagasize  = 20;
		$count      = D("Agbetrecord")->where($condition)->group("PlayerName")->count();
	
		
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$dataList=D("Agbetrecord")->field("PlayerName,count(*) nums,sum(NetAmount) TNetAmount,sum(ValidBetAmount) TValidBetAmount,sum(BetAmount) TBetAmount")->where($condition)->group("PlayerName")->select();

		
		$this->assign('totalcount',$count);
		$this->assign('list',$dataList);
		$this->assign('page',$show);
		$this->display();

	}
	
	function bbtzreport(){
		
		
		$condition=array();
		
		$sDate=I("sDate");
		$eDate=I("eDate");
		
	   
		$username=I("username");
		if($username){
		
			$condition['UserName']=$username;
			$this->assign('username',$username);
		}
		if($sDate){
			$this->assign('sDate',$sDate);
			$sDate=date("$sDate 00:00:00");
		}
		if($eDate){
			$this->assign('eDate',$eDate);
			$eDate=date("$eDate 23:59:59");
			
		}
		if($sDate&&$eDate){
			$condition['BetTime']=array(array("egt",$sDate),array("elt",$eDate),"and");
		}elseif($sDate){
			$condition['BetTime']=array("egt",$sDate);
		}elseif($eDate){
			$condition['BetTime']=array("elt",$eDate);
		}
		
		
		$_pagasize  = 10;
		
		$count      = D("Bbbetrecord")->where($condition)->group("UserName")->count();
		
	
		
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$dataList=D("Bbbetrecord")->field("UserName,count(*) nums,sum(Payoff) TNetAmount,sum(BetAmount) TValidBetAmount,sum(BetAmount) TBetAmount")->where($condition)->group("UserName")->select();
		$this->assign('totalcount',$count);
		$this->assign('list',$dataList);
		$this->assign('page',$show);
		$this->display();
	

	}

	function agztrecord(){
		$dataList=D("Agbetrecord")->order("id desc")->select();
		$_pagasize  = 20;
		$count      = D("Agbetrecord")->count();
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$this->assign('totalcount',$count);
		$this->assign('list',$dataList);
		$this->display();
	}
	
	function bbtzrecord(){
		
		
		$condition=array();
		
		$sDate=I("sDate");
		$eDate=I("eDate");
		
	   
		$username=I("username");
		if($username){
		
			$condition['UserName']=$username;
			$this->assign('username',$username);
		}
		if($sDate){
			$this->assign('sDate',$sDate);
			$sDate=date("$sDate 00:00:00");
		}
		if($eDate){
			$this->assign('eDate',$eDate);
			$eDate=date("$eDate 23:59:59");
			
		}
		if($sDate&&$eDate){
			$condition['BetTime']=array(array("egt",$sDate),array("elt",$eDate),"and");
		}elseif($sDate){
			$condition['BetTime']=array("egt",$sDate);
		}elseif($eDate){
			$condition['BetTime']=array("elt",$eDate);
		}
		
		
		$_pagasize  = 10;
		$count      = D("Bbbetrecord")->where($condition)->count();
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$dataList=D("Bbbetrecord")->where($condition)->order("bbId desc")->select();
		
		$this->assign('totalcount',$count);
		$this->assign('list',$dataList);
		$this->assign('page',$show);
		$this->display();
	

	}
	
	function getrecords(){
		$this->display();
		

	}
	
	public function Agbetrecord(){
		
		  
		   $this->display();
		
	}
	
	public function Bbbetrecord(){
		
		  
		   $this->display();
		
	}
	
	public function getAgRecord(){
		 date_default_timezone_set("UTC");
		    $n=0;
		   $startDate=date("Y-m-d 00:00:00");
		   $endDate=date("Y-m-d H:i:s");
		   $AgService=new \Org\Util\AgService();
		   $recordList=$AgService->betrecord($startDate,$endDate,1,500);
		   $zxrecordList=$recordList['data']["record"];
		   $dataList=array();
		   try{
			  foreach($zxrecordList as $record){
				  
				   $betId=$record['betId'];
				  //判断记录是否存在
				   $enx=D("Agbetrecord")->where(array("betId"=>$betId))->count();
				   if(empty($enx)){
					   $n++;
					   $dataList[]=array(
					       "id"=>$record['id'],
					       "betId"=>$record['betId'],
					       "username"=>$record['username'],
					       "platType"=>$record['platType'],
					       "gameType"=>$record['gameType'],
					       "betAmount"=>$record['betAmount'],
					       "validAmount"=>$record['validAmount'],
					       "winLoss"=>$record['winLoss'],
					       "gameName"=>$record['gameName'],
					       "betContent"=>$record['betContent'],
					       "awardResult"=>$record['awardResult'],
					       "betTime"=>$record['betTime'],
					       "lastUpdateTime"=>$record['lastUpdateTime'],
					       "status"=>$record['status']
					       );
				   }
			   }
		       D("Agbetrecord")->addAll($dataList); 
		       
	
		   }catch(Exception $e){
			   $n=0;
		   }
		   $ret=array('code'=>1,"nums"=>$n,'ascn'=>'爱尚互联提醒您，游戏记录获取成功QQ：30041321');
		   $this->ajaxReturn($ret);
	}
		 
	
	
	 public function getBbrecord(){//获取下注记录
	     date_default_timezone_set("UTC");
	       $n=0;
		   $nDate=date("Y-m-d");
		   $nTime=date("H:i:s");
		   $BbinService=new \Org\Util\BbinService();
		   $recordList=$BbinService->getGameRecord($nDate, "00:00:00" , $nTime, 3,'','',1,500);
		   $zxrecordList=$recordList['Data'];
		   $dataList=array();
		   try{
			  foreach($zxrecordList as $record){
				  
				   $WagersID=$record['WagersID'];
				  //判断记录是否存在
				   $enx=D("Bbbetrecord")->where(array("WagersID"=>$WagersID))->count();
				   if(empty($enx)){
					   $n++;
					   $dataList[]=array("UserName"=>$record['UserName'],"WagersID"=>$record['WagersID'],
						"WagersDate"=>$record['WagersDate'],"SerialID"=>$record['SerialID'],
						"RoundNo"=>$record['RoundNo'],"GameType"=>$record['GameType'],"WagerDetail"=>$record['WagerDetail']
						,"GameCode"=>$record['GameCode'],"Result"=>$record['Result'],"Card"=>$record['Card'],
						"BetAmount"=>$record['BetAmount'],"Origin"=>$record['Origin'],"Commissionable"=>$record['Commissionable'],
						"Payoff"=>$record['Payoff'],"ExchangeRate"=>$record['ExchangeRate']);
						
				   }
			   }
		       D("Bbbetrecord")->addAll($dataList); 
		   }catch(Exception $e){
			   $n=0;
		   }
		   $ret=array('code'=>1,"nums"=>$n);
		   $this->ajaxReturn($ret);
		  
		
	}
}