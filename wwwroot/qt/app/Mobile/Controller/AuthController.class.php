<?php
//手机端旧路由限制访问方法  在数组里面添加就可以
namespace Mobile\Controller;
use Think\Controller;
class AuthController extends Controller {
	public function __construct(){
		parent::__construct();
		$this->auth();
	}
	public function auth(){
	
		$url = $_SERVER['REQUEST_URI'];
		
	
		if(preg_match("/\//", $url)){
			$url = substr($url,1);
		}
		
		$old_route = array(
			'public.auth.do','public.login.do','member.index.do','public.forgetpaw.do','news.lists.catid.33.do','index.lottery.do','index.mobile.do','Activity.index.do','public.register.do','apublic.login.do','news.lists.catid.30.showid.3.do?About','news.lists.catid.30.showid.56.do?About','news.lists.catid.30.showid.57.do?About','news.lists.catid.30.showid.58.do?About','news.lists.catid.30.showid.59.do?About','index.index.do','member.agent.do','account.quickrecharge.do','account.withdrawals.do','member.ziliao.do','member.safephone.do','member.bindmail.do','member.index.do','member.update_pass.do','member.find_safepass.do','member.safephone.do','game.k3.code.jisk3.do','game.k3.code.jsk3.do','game.k3.code.jlk3.do','game.k3.code.f1k3.do','game.k3.code.shk3.do','game.k3.code.guizhouk3.do','game.k3.code.f3k3.do','game.k3.code.sfks.do','game.k3.code.gxk3.do','game.k3.code.ahk3.do','game.k3.code.gsk3.do','game.k3.code.hubk3.do','game.k3.code.f5k3.do','game.k3.code.jisk3.do'
			,'Game.pk10?code=pk101','Game.pk10?code=bjpk10','Game.pk10?code=pk105','Game.pk10?code=pk103','Game.pk10?code=xyft','Game.ssc?code=cqssc','Game.ssc?code=xjssc','Game.ssc?code=ssc1fc','Game.x5?code=gd11x5','Game.x5?code=sh11x5','Game.x5?code=jx11x5','Game.x5?code=yf11x5','Game.keno?code=bjkeno','Game.xy28?code=xy28','Game.lhc?code=lhc10f','Game.lhc?code=lhc1f','Game.lhc?code=lhc5f','Game.lhc?code=lhc','Game.dpc?code=pl3','account.dealrecord2.do','account.dealrecord3.do','member.betrecord.a_item.2.do','member.betrecord.a_item.3.do','member.betrecord.a_item.4.do','member.update_pass.do','member.update_safepass.do','member.safephone.do','member.bindmail.do','member.bindcard.do','account.userbankname.do','account.recharge.do'
			,'Game.k3?code=jisk3&isct=1','game.k3?code=jsk3&isct=1','game.k3?code=jlk3&isct=1','game.k3?code=f1k3&isct=1','game.k3?code=shk3&isct=1','game.k3?code=guizhouk3&isct=1','game.k3?code=f3k3&isct=1','game.k3?code=sfks&isct=1','game.k3?code=hebk3&isct=1','game.k3?code=gxk3&isct=1','game.k3?code=ahk3&isct=1','game.k3?code=gsk3&isct=1','game.k3?code=hubk3&isct=1','game.k3?code=f5k3&isct=1','game.k3?code=jisk3&isct=1','Game.pk10?code=bjpk10&isct=1','Game.pk10?code=pk101&isct=1','Game.pk10?code=pk105&isct=1','Game.pk10?code=pk103&isct=1','Game.pk10?code=xyft&isct=1','Game.ssc?code=ssc1fc&isct=1','Game.ssc?code=cqssc&isct=1','Game.ssc?code=xjssc&isct=1'
		);
		if(in_array($url,$old_route)){
			header("Location: /home");
			exit();
		}
	}
}