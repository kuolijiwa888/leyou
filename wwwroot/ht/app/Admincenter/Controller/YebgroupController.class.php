<?php
namespace Admincenter\Controller;
use Think\Controller;
class YebgroupController extends CommonController {
	public function __construct(){
		parent::__construct();
		$this->_db = D('yuetype');
		$this->_pk = $this->_db->getPk();
	}
	
	function index(){

		$count      = $this->_db->where($map)->count();
		$Page       = new \Think\Page($count,60);
		$show       = $Page->show();
		$list       = $this->_db->where($map)->limit($Page->firstRow.','.$Page->listRows)->order('id asc')->select();
	
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->assign('totalcount',$count);
		$this->display();

	
	}
	function add(){
	    if(IS_POST){
			parent::_adddosimp();
		}
		$this->display();
	}
	function edit(){
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
		$this->display('add');
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