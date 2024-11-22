<?php
namespace Home\Controller;
use Think\Controller;
class HemaiController extends CommonController {
	public function __construct(){
		parent::__construct();
		if(!$this->userinfo){
			redirect("/login");
		};
	}	
}
?>