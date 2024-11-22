<?php
//电脑端旧路由限制访问方法  在数组里面添加就可以
namespace Home\Controller;
use Think\Controller;
class AuthController extends Controller {
	public function __construct(){
		parent::__construct();
		$this->auth();
	}
	public function auth(){
		
		$url = $_SERVER['REQUEST_URI'];
		
	//var_dump($url );die();
		if(preg_match("/\//", $url)){
			$url = substr($url,1);
		}
			
		$old_route = array(
			'public.auth.do','public.login.do','member.index.do','public.forgetpaw.do','news.lists.catid.33.do','index.lottery.do','index.mobile.do','Activity.index.do','public.register.do','apublic.login.do','news.lists.catid.30.showid.3.do?About','news.lists.catid.30.showid.56.do?About','news.lists.catid.30.showid.57.do?About','news.lists.catid.30.showid.58.do?About','news.lists.catid.30.showid.59.do?About','index.index.do','member.agent.do','account.quickrecharge.do','account.withdrawals.do','member.ziliao.do','member.safephone.do','member.bindmail.do','member.index.do','member.update_pass.do','member.find_safepass.do','member.safephone.do','game.k3.code.jisk3.do','game.k3.code.jsk3.do','game.k3.code.jlk3.do','game.k3.code.f1k3.do''game.k3.code.shk3.do','game.k3.code.guizhouk3.do','game.k3.code.f3k3.do','game.k3.code.sfks.do','game.k3.code.gxk3.do','game.k3.code.ahk3.do','game.k3.code.gsk3.do','game.k3.code.hubk3.do','game.k3.code.f5k3.do','game.k3.code.jisk3.do'
			
		);
		
		if(in_array($url,$old_route)){
			header("Location: /home");
			exit();
		}
	}
}