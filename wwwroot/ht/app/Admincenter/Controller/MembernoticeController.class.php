<?php
namespace Admincenter\Controller;
use Think\Controller;
class MembernoticeController extends CommonController {
	public function __construct(){
		parent::__construct();
		$this->_db = D('Notice');
		$this->_pk = $this->_db->getPk();
	}
	
	function notice(){
		$this->_db  = M('Notice');
		$_pagasize  = 20;
		$count      = $this->_db->where($map)->count();
		$Page       = new \Think\Page($count,$_pagasize);
		$show       = $Page->show();
		$list = $this->_db->where($map)->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
		$this->assign('totalcount',$count);
		$this->assign('list',$list);
		$this->display();
	}
	function add_notice(){
		$add_time=time();
		if(IS_POST){
			parent::_adddosimp();
		}
		$this->assign('add_time',$add_time);
		$this->display();
	}
	function edit(){
		$add_time=time();
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
		$this->assign('add_time',$add_time);
		$this->display('Membernotice_add_notice');
	}
	function send(){
		$id = I('id');
		$info = $this->_db->where([$this->_pk=>$id])->find();
		if(!$info){
			$this->error('数据不存在！');
		}
		$users=explode(",",$info['users']);
		$data=[];
		 if (!$users) {
			$users= D('Member')->field('id')->select();
			foreach ($users as $key => $value) {
			$data['nid']=$id;
			$data['add_time']=time();
			$data['uid']=$value['id'];
		
			$obj = D('NoticeSee');
			if ($obj->create($data)) {
                $rs = $obj->add();            
            }
           }
		 }else{
		    $users= D('Member')->field('id')->select();
			foreach ($users as $key => $value) {
			$data['nid']=$id;
			$data['add_time']=time();
			$data['uid']=$value['id'];
		
			$obj = D('NoticeSee');
			if ($obj->create($data)) {
                $rs = $obj->add();            
            }
           }
		 }
		 $ao=[];
		 $ao['id']=$id;
		 $ao['is_send']=1;
	     $int = $this->_db->where([$this->_pk=>$id])->data($ao)->save();
		
		
		$this->success('发送成功！');
	}
	
	function delete(){
		$id     = I('id');
		if(!$id)$this->error('非法操作！');
		$info = $this->_db->find($id);
		if(!$info)$this->error('您操作的数据不存在或已删除！');
		$int = $this->_db->where([$this->_pk=>$id])->delete();
		$int?$this->success('操作成功！'):$this->error('操作失败！');
	}
	function deleteall(){
		parent::_deleteall();
	}
	function listorder(){
		parent::_listorder();
	}
}