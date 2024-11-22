<?php
namespace Mobile\Controller;
use Think\Controller;
class EmptyController extends Controller {
	public function index(){
		header("Location: /404.html");
			exit();
	}
	

	

}
?>