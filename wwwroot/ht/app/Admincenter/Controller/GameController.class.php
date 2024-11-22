<?php
namespace Admincenter\Controller;
use Think\Controller;
class GameController extends CommonController {
	public function __construct(){
		parent::__construct();
		$this->_db = D('touzhu');
		$this->_pk = $this->_db->getPk();
	}
	function manage(){
		$refert = I('refert',0,'intval');
		$this->assign('refert',$refert);
		$cpname = I('cpname');
		$username = I('username');
		$trano = I('trano');
		$qihao = I('qihao');
		$listorder = I('listorder');
		$status = I('status');
		$isnb   = I('isnb',999);
		$map        = [];
		$_t = time();  //当前时间
		if(in_array($isnb,[1,0,999])){ //判断是否全部
			if($isnb==1){
				$users = M('member')->where(['isnb'=>1])->field("id")->select();
				if($users){
					foreach($users as $k=>$v){
						$uids[] = $v['id'];
					}
					$map['uid']    = ['in',$uids];
				}
			}elseif($isnb==0){
				$users = M('member')->where(['isnb'=>0])->field("id")->select();
				if($users){
					foreach($users as $k=>$v){
						$uids[] = $v['id'];
					}
					$map['uid']    = ['in',$uids];
				}
			}
			
			$this->assign('isnb',$isnb);
		}
		if($status!=999 && $status!=''){
			$map['isdraw']    = ['eq',$status];
			$this->assign('status',$status);
		}
		if($cpname){
			$map['cpname']    = ['eq',$cpname];
			$this->assign('cpname',$cpname);
		}
		if($trano){
			$map['trano']    = ['eq',$trano];
			$this->assign('trano',$trano);
		}
		if($qihao){
			$map['expect']    = ['eq',$qihao];
			$this->assign('qihao',$qihao);
		}
		if($username){
			$map['username']    = ['eq',$username];
			$this->assign('username',$username);
		}
		if($_REQUEST['sDate']){
			$map['oddtime'][]    = ['egt',strtotime($_REQUEST['sDate'])];
			$this->assign('_sDate',urldecode($_REQUEST['sDate']));
		}
		if($_REQUEST['eDate']){
			$map['oddtime'][]    = ['elt',strtotime($_REQUEST['eDate'])];
			$this->assign('_eDate',urldecode($_REQUEST['eDate']));
		}
		switch($listorder){
			case'1':
				$order = 'id desc';
				break;
			case'2':
				$order = 'id asc';
				break;
			case'3':
				$order = 'amount desc';
				break;
			case'4':
				$order = 'amount asc';
				break;
			default:
				$order = 'id desc';
		}
		$_pagasize  = 20;
		$count      = $this->_db->where($map)->count();
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$list       = $this->_db->where($map)->limit($Page->firstRow.','.$Page->listRows)->order($order)->select();
		$this->assign('totalcount',$count);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();
	}
	
	public function hemai_xiangxi(){
		$id = I('id');
		$res = M('touzhuhm')->where(['touzhuid'=>$id])->select();
		//echo '<pre>';
		//var_dump($res);die;
		
		$this->assign('list',$res);
		$this->display();
	}
	
	function manage_hemai(){
		$refert = I('refert',0,'intval');
		$this->assign('refert',$refert);
		$cpname = I('cpname');
		$username = I('username');
		$trano = I('trano');
		$qihao = I('qihao');
		$listorder = I('listorder');
		$status = I('status');
		$isnb   = I('isnb',999);
		$map        = [];
		$_t = time();  //当前时间
		if(in_array($isnb,[1,0,999])){ //判断是否全部
			if($isnb==1){
				$users = M('member')->where(['isnb'=>1])->field("id")->select();
				if($users){
					foreach($users as $k=>$v){
						$uids[] = $v['id'];
					}
					$map['uid']    = ['in',$uids];
				}
			}elseif($isnb==0){
				$users = M('member')->where(['isnb'=>0])->field("id")->select();
				if($users){
					foreach($users as $k=>$v){
						$uids[] = $v['id'];
					}
					$map['uid']    = ['in',$uids];
				}
			}
			
			$this->assign('isnb',$isnb);
		}
		if($status!=999 && $status!=''){
			$map['isdraw']    = ['eq',$status];
			$this->assign('status',$status);
		}
		if($cpname){
			$map['cpname']    = ['eq',$cpname];
			$this->assign('cpname',$cpname);
		}
		if($trano){
			$map['trano']    = ['eq',$trano];
			$this->assign('trano',$trano);
		}
		if($qihao){
			$map['expect']    = ['eq',$qihao];
			$this->assign('qihao',$qihao);
		}
		if($username){
			$map['username']    = ['eq',$username];
			$this->assign('username',$username);
		}
		if($_REQUEST['sDate']){
			$map['oddtime'][]    = ['egt',strtotime($_REQUEST['sDate'])];
			$this->assign('_sDate',urldecode($_REQUEST['sDate']));
		}
		if($_REQUEST['eDate']){
			$map['oddtime'][]    = ['elt',strtotime($_REQUEST['eDate'])];
			$this->assign('_eDate',urldecode($_REQUEST['eDate']));
		}
		
		$map['ishemai']    = ['eq',1];
		switch($listorder){
			case'1':
				$order = 'id desc';
				break;
			case'2':
				$order = 'id asc';
				break;
			case'3':
				$order = 'amount desc';
				break;
			case'4':
				$order = 'amount asc';
				break;
			default:
				$order = 'id desc';
		}
		$_pagasize  = 20;
		$count      = $this->_db->where($map)->count();
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$list       = $this->_db->where($map)->limit($Page->firstRow.','.$Page->listRows)->order($order)->select();
		$this->assign('totalcount',$count);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();
	}
	
	function chedan(){
		$id = I('id',0,'intval');
		$info = $this->_db->where([$this->_pk=>$id])->find();
		if(!$info){
			$this->error('您修改的数据不存在！');
		}
		if($info['isdraw']!=0){
			$this->error('状态不允许操作！');
		}
		$_int1 = $this->_db->where(['id'=>$id])->setField(['isdraw'=>'-2']);
		$userinfo = M('member')->where(['id'=>$info['uid']])->find();
		
		if($info['ishemai']==1 && $_int1){//处理合买信息
						$memdb = M('member');
						$fuddetaildb = D('fuddetail');
						$memberdb    = D('member');
						$touzhudb    = D('touzhu');
						$touzhuhm=M('touzhuhm')->where(['trano'=>$info['trano']])->select();
						//修改投注为中奖状态
						$touzhuint = $touzhudb->where(['id'=>$info['id']])->setField(['isdraw'=>-2,'isfull'=>0,'jindu'=>1]);
						foreach($touzhuhm as $k=>$v){
							if($info['isbaodi']==1 && $info['uid']==$v['uid'] && $v['isfull']==0)//对保底者进行返回
							{
								$f_backmeny=abs($info['baodi']*$info['hemaipic']);
								$_membercenter = $memdb->where(['id'=>$info['uid']])->field('balance,point,xima')->find();				
								$memdb->where(['id'=>$info['uid']])->setInc('balance',$f_backmeny);
								$fuddetail_data = array();
								$fuddetail_data['trano'] = $info['trano'];
								$fuddetail_data['uid'] = $info['uid'];
								$fuddetail_data['username'] = $info['username'];
								$fuddetail_data['amount'] = $f_backmeny;
								$fuddetail_data['amountbefor'] = $_membercenter['balance'];								
								$fuddetail_data['amountafter'] = $_membercenter['balance'] + $f_backmeny;
								$fuddetail_data['oddtime'] = time();
								$fuddetail_data['remark'] = "保底返还，彩种:{$info['cptitle']},{$info['expect']},{$info['trano']}";
								$fuddetail_data['type'] = 'order';
								$fuddetail_data['typename'] ="撤单";
								$fuddetaildb->data($fuddetail_data)->add();
									
									//戏码增加																 		   
								$ximaamount = $f_backmeny;									
								$memdb->where(['id'=>$info['uid']])->setInc('xima',$ximaamount);
								$fuddetail_data = array();
								$fuddetail_data['trano'] = $info['trano'];
								$fuddetail_data['uid'] = $info['uid'];
								$fuddetail_data['username'] = $info['username'];									
								$fuddetail_data['amount'] = $ximaamount;
								$fuddetail_data['amountbefor'] = $_membercenter['xima'];
								$fuddetail_data['amountafter'] = $_membercenter['xima']+abs($ximaamount);
								$fuddetail_data['oddtime'] = time();
								$fuddetail_data['remark'] = "洗码保底返还，彩种:{$info['cptitle']},{$info['expect']},{$info['trano']}";
								$fuddetail_data['type'] = 'xima';
								$fuddetail_data['typename'] = "撤单";
								$fuddetaildb->data($fuddetail_data)->add();			
							}
							
							//对认购人推还
							$userbalance = $memberdb->where(['id'=>$v['uid']])->getField('balance');
							$memint = $memberdb->where(['id'=>$v['uid']])->setInc('balance',$v['amount']);
							$_membercenter = $memdb->where(['id'=>$v['uid']])->field('balance,point,xima')->find();	
								//账变记录
							$fdata = [];
							$fdata['trano'] = $v['trano'];
							$fdata['uid'] = $v['uid'];
							$fdata['username'] = $v['username'];
							$fdata['type'] = 'cancel';
							$fdata['typename'] = '撤单';
							$fdata['amount'] = $v['amount'];
							$fdata['amountbefor'] = $userbalance;
							$fdata['amountafter'] = $userbalance + $v['amount'];
							$fdata['oddtime'] = time();
							$fdata['remark'] = $v['cptitle'] .'第'. $v['expect'] . '期-' . $v['cptitle'].'--'.$v['trano'];
							$fudint = $fuddetaildb->data($fdata)->add();
							M('touzhuhm')->where(['id'=>$v['id']])->setField(['isdraw'=>-2,'opentime'=>time()]);
																	
							//戏码增加																 		   
							$ximaamount = $v['amount'];									
							$memdb->where(['id'=>$v['uid']])->setInc('xima',$ximaamount);
							$fuddetail_data = array();
							$fuddetail_data['trano'] = $v['trano'];
							$fuddetail_data['uid'] = $v['uid'];
							$fuddetail_data['username'] = $v['username'];									
							$fuddetail_data['amount'] = $ximaamount;
							$fuddetail_data['amountbefor'] = $_membercenter['xima'];
							$fuddetail_data['amountafter'] = $_membercenter['xima']+abs($ximaamount);
							$fuddetail_data['oddtime'] = time();
							$fuddetail_data['remark'] = "洗码撤单返还，彩种:{$info['cptitle']},{$info['expect']},{$info['trano']}";
							$fuddetail_data['type'] = 'xima';
							$fuddetail_data['typename'] = "撤单";
							$fuddetaildb->data($fuddetail_data)->add();	
												
						}					
			$this->success('撤单成功');		
			exit;
		}
		
		if($_int1){
			$_t = time();
			$trano = $info['trano'];
			//撤单账变
			M('member')->where(['id'=>$info['uid']])->setInc('balance',$info['amount']);
			$fuddetail_data = array();
			$fuddetail_data['trano'] = $trano;
			$fuddetail_data['uid'] = $userinfo['id'];
			$fuddetail_data['username'] = $userinfo['username'];
			$fuddetail_data['amount'] = abs($info['amount']);
			$fuddetail_data['amountbefor'] = $userinfo['balance'];
			$fuddetail_data['amountafter'] = $userinfo['balance']+abs($info['amount']);
			$fuddetail_data['oddtime'] = $_t;
			$fuddetail_data['remark'] = "撤单退回";
			$fuddetail_data['type'] = 'cancel';
			$fuddetail_data['typename'] = C('fuddetailtypes.cancel');
			M('fuddetail')->data($fuddetail_data)->add();
 			//撤单洗码
 			$ximas = M('fuddetail')->where(['type'=>'xima','trano'=>$trano])->find();
			$amout=$ximas['amount'];
			M('member')->where(['id'=>$info['uid']])->setInc('xima',$amout);

			$fuddetail_data = array();
			$fuddetail_data['trano'] = $trano;
			$fuddetail_data['uid'] = $userinfo['id'];
			$fuddetail_data['username'] = $userinfo['username'];
			$fuddetail_data['amount'] = abs($amout);
			$fuddetail_data['amountbefor'] = $userinfo['xima'];
			$fuddetail_data['amountafter'] = $userinfo['xima']+abs($amout);
			$fuddetail_data['oddtime'] = $_t;
			$fuddetail_data['remark'] = "撤单退回洗码账户";
			$fuddetail_data['type'] = 'xima';
			$fuddetail_data['typename'] = C('fuddetailtypes.xima');
			M('fuddetail')->data($fuddetail_data)->add(); 
			//撤单积分
			$pointtouzhu    = abs(intval(GetVar('pointtouzhu')));
			$pointtouzhuadd = abs(intval(GetVar('pointtouzhuadd')));
			if($pointtouzhu && $pointtouzhuadd){
				$_addpoint = number_format(abs($info['amount'])*$pointtouzhuadd/$pointtouzhu,4,".","");
				if($_addpoint>0){
					M('member')->where(['id'=>$info['uid']])->setDec('point',$_addpoint);
					$fuddetail_data = array();
					$fuddetail_data['trano'] = $trano;
					$fuddetail_data['uid'] = $userinfo['id'];
					$fuddetail_data['username'] = $userinfo['username'];
					$fuddetail_data['amount'] = abs($_addpoint);
					$fuddetail_data['amountbefor'] = $userinfo['point'];
					$fuddetail_data['amountafter'] = $userinfo['point']-abs($_addpoint);
					$fuddetail_data['oddtime'] = $_t;
					$fuddetail_data['remark'] = "撤单扣回赠送积分";
					$fuddetail_data['type'] = 'point';
					$fuddetail_data['typename'] = C('fuddetailtypes.point');
					M('fuddetail')->data($fuddetail_data)->add();
				}
			}
			//撤单代理佣金
			$dlyj = M("dailifandian")->where("trano='{$trano}' AND uid <> '{$info['uid']}'")->select();
			foreach($dlyj as $k=>$v){
				$user  = M('member')->where("id='{$v['uid']}'")->find();
				if($user){
					M('member')->where("id='{$v['uid']}'")->setDec('balance',$v['amount']);
					$fuddetail_data = array();
					$fuddetail_data['trano'] = $trano;
					$fuddetail_data['uid'] = $user['id'];
					$fuddetail_data['username'] = $user['username'];
					$fuddetail_data['amount'] = abs($v['amount']);
					$fuddetail_data['amountbefor'] = $user['balance'];
					$fuddetail_data['amountafter'] = $user['balance']-abs($v['amount']);
					$fuddetail_data['oddtime'] = $_t;
					$fuddetail_data['remark'] = "撤单扣回代理佣金";
					$fuddetail_data['type'] = 'yongjinshenhe';
					$fuddetail_data['typename'] = C('fuddetailtypes.yongjinshenhe');
					M('fuddetail')->data($fuddetail_data)->add();
				}
			}			
			//增加管理日志
			$logdata = [];
			$logdata['userid']   = $this->admininfo['id'];
			$logdata['username'] = $this->admininfo['username'];
			$logdata['type']     = 'chendan';
			$logdata['info']     = "投注撤单，单号：".$trano;
			$logdata['time']     = NOW_TIME;
			$logdata['ip']       = get_client_ip();
			$iparea = IParea(get_client_ip());
			$logdata['iparea']   = $iparea;
			M('adminlog')->data($logdata)->add();
			$this->success('撤单成功');
		}else{
			$this->error('撤单失败');
		}
		exit;
		//账变记录
		
	}
	function touzhuedit(){
		$id = I('id');
		$info = $this->_db->where([$this->_pk=>$id])->find();
		if(!$info){
			$this->error('您修改的数据不存在！');
		}else{
			$this->assign('info',$info);	
		}
		if(IS_POST){
			parent::_editdosimp();
		}
		$this->display('bankadd');
	}
	
	function delete(){
		$this->error('删除功能已关闭');
		exit;
		parent::_deleteone();
		/*$id     = I('id');
		if(!$id)$this->error('非法操作！');
		$info = $this->_db->find($id);
		if(!$info)$this->error('您操作的数据不存在或已删除！');
		$int = $this->_db->where([$this->_pk=>$id])->delete();
		$int?$this->success('操作成功！'):$this->error('操作失败！');*/
	}
	function deleteall(){
		parent::_deletealldo();
	}
	//异常注单检测
	function checkerrorder(){
		$cpname = I('cpname');
		$username = I('username');
		$shijiancha = I('shijiancha',130,'intval');
		
		$where = '';
		$_t = time();
		if($cpname){
			$where .= " and a.cpname='{$cpname}' ";
			$this->assign('cpname',$cpname);
		}
		if($username){
			$where .= " and a.username='{$username}' ";
			$this->assign('username',$username);
		}
		if($shijiancha){
			$where .= " and b.opentime-a.oddtime<={$shijiancha} ";
			$this->assign('shijiancha',$shijiancha);
		}
		$_pagasize  = $shownum;
		$DB_PREFIX = C('DB_PREFIX');
		
		$sql = "select a.*,b.name as bname,b.opentime,b.expect as bexpect,c.ftime,c.issys,c.name as cname from {$DB_PREFIX}touzhu as a left join {$DB_PREFIX}kaijiang as b on a.cpname = b.name and a.expect = b.expect left join {$DB_PREFIX}caipiao as c on a.cpname = c.name where b.name!='' {$where} order by a.id desc";
		$list = M()->query($sql);
		//dump($list);
		$this->assign('list',$list);
		
		/*$_pagasize  = 20;
		$result =  M()->query("select found_rows() as count");
		$count      = empty($result['0']['count']) ? 0 : (int) $result['0']['count'];
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$this->assign('totalcount',$count);
		$this->assign('page',$show);*/
		
		
		$this->display();
	}
}