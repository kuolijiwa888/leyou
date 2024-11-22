<?php
namespace Admincenter\Controller;
use Think\Controller;
class YebrecordController extends CommonController {
	public function __construct(){
		parent::__construct();
		$this->_db = D('Yuecunru');
		$this->_pk = $this->_db->getPk();
	}
	function index(){
				$type = I('type');
                $state= I('state');
                $txtype= I('txtype');
                $trano= I('trano');
                 $username= I('username');
                 
          if($username){
          	$where['username']=$username;
          	$mm=D("Member")->where($where)->find();
			$map['uid']    = ['eq',$mm['id']];
			$this->assign('username',$username);
		}        
                 
        if($type){
			$map['type']    = ['eq',$type];
			$this->assign('type',$type);
		}
		if($state){
			$map['state']    = ['eq',$state];
			$this->assign('state',$state);
		}
		if($txtype){
			$map['txtype']    = ['eq',$txtype];
			$this->assign('txtype',$txtype);
		}
			if($trano){
			$map['trano']    = ['eq',$trano];
			$this->assign('trano',$trano);
		}
		$_pagasize  = 20;
		$count      = $this->_db->where($map)->count();
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$list       = $this->_db->where($map)->limit($Page->firstRow.','.$Page->listRows)->order($order)->select();
		
		 foreach ($list as $key =>$value)
        {
        	$member=D("Member")->find($value['uid']);
        	$list[$key]['username']=$member['username'];
        }	
		$this->assign('totalcount',$count);
		$this->assign('list',$list);
		$this->assign('page',$show);

		$this->display();
	}	
	function shouyi(){
	
     	$type = I('type');
		$uid = I('uid');
		$trano = I('trano');
		$username = I('username');

		$db = M('fuddetail');
		$_pagasize  = 20;
		$map        = [];
		$map['type']    = ['eq','yeb_lixi'];
		$this->assign('type',$type);
		
		if($trano){
			$map['trano']    = ['eq',$trano];
			$this->assign('trano',$trano);
		}
		if($uid){
			$map['uid']    = ['eq',$uid];
			$this->assign('uid',$uid);
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
			$map['oddtime'][]    = ['elt',strtotime($_REQUEST['eDate'])+86400];
			$this->assign('_eDate',urldecode($_REQUEST['eDate']));
		}
		$count      = $db->where($map)->count();
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$list       = $db->where($map)->limit($Page->firstRow.','.$Page->listRows)->order("id desc")->select();
        $shouyitotal   = $db->where($map)->sum('amount');
        
        $this->assign('shouyitotal',$shouyitotal);
		$this->assign('totalcount',$count);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();
	}
	function delete(){
		$id     = I('id');
		if(!$id)$this->error('非法操作！');
		$info = $this->_db->find($id);
		if(!$info)$this->error('您操作的数据不存在或已删除！');
		$int = $this->_db->where([$this->_pk=>$id])->delete();
		$int?$this->success('操作成功！'):$this->error('操作失败！');
	}
	function yebjldelall(){
	if(!IS_AJAX || !IS_POST)$this->error('非法操作！');
		 $ids = implode(',',$_POST['ids']);
		$int =$this->_db->where(array('id'=>array('in',$ids)))->delete();
		$int?$this->success('操作成功！'):$this->error('操作失败！');
	}
	function shouyidelall(){
	if(!IS_AJAX || !IS_POST)$this->error('非法操作！');
		 $ids = implode(',',$_POST['ids']);
		$int =M('fuddetail')->where(array('id'=>array('in',$ids)))->delete();
		$int?$this->success('操作成功！'):$this->error('操作失败！');
	}
}	