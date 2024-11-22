<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends CommonController {
	public function __construct(){
		parent::__construct();
		if(!$_SESSION['userinfo']){
			redirect("/login");
			exit();
		}
	}
	function index(){
		$_t = time();
		//$cplist = M('caipiao')->where(array('isopen'=>1))->where(array('typeid'=>array('IN',array('k3','pk10'))))->cache(300)->order('allsort asc')->limit(11)->select();
		$cplist = M('caipiao')->where("isopen=1")->order('allsort asc,id desc')->select();
		$gglist = M('Gonggao')->field('id,title,oddtime')->where(array('typeid'=>array('IN',array('k3','pk10'))))->cache(300)->order("id DESC")->find();
		$this->assign('gglist',$gglist);
		$this->cplist  = $cplist;
		$ggshow = M('Gonggao')->find();
		// var_dump($ggshow);exit;
		$cplists = M('caipiao')->where("isopen=1")->order('allsort asc,id desc')->select();
		foreach($cplists as $k=>$v){
			$balls = array();
			$hz = 0;$daxiao = $danshuang = '';
			$cpinfo = Array();
			if($cpinfo['issys']==0){
				$kjinfo = M('kaijiang')->where(array('name'=>array('eq',$v['name'])))->limit(1)->order('id desc')->cache(600)->find();
			}else if($cpinfo['issys']==1){
				$kjinfo = M('kaijiang')->where(array('name'=>array('eq',$v['name']),'opentime'=>array('elt',$_t)))->order('id desc')->limit(1)->cache(600)->find();
			}
			$balls = explode(',',$kjinfo['opencode']);
			$hz    = array_sum($balls);
			if($hz>10){
				$daxiao = '大';
			}else{
				$daxiao = '小';
			}
			if($hz%2==0){
				$danshuang = '双';
			}else{
				$danshuang = '单';
			}
			$cplists[$k]['opencode'] = $balls;
			$cplists[$k]['daxiao'] = $daxiao;
			$cplists[$k]['danshuang'] = $danshuang;
			$cplists[$k]['expect'] = $kjinfo['expect'];
		}
		$this->assign('bncaipiao',$cplists);
		$this->assign('ggshow',$ggshow);
		$this->display();
	}
	
	function lotteryallhemai(){
		if(!$this->userinfo){
			redirect("/login");
		};
		$other = $Allcp = $hotcaipiao = M("caipiao")->where("isopen = 1")->cache(300)->order('allsort ASC')->select();
		$this->assign('list',$other);
		$this->display();
	}

	function lotteryHall()
	{
		// $cplist = M('caipiao')->where(array('isopen'=>1))->where(array('typeid'=>array('IN',array('k3','pk10'))))->order('allsort asc')->cache(300)->select();
		// $cplist2 = M('caipiao')->where(array('isopen'=>1))->where(array('typeid'=>array('IN',array('k3','pk10'))))->order('listorder asc')->cache(300)->select();
		//$cplist = M('caipiao')->where(array('isopen'=>1))->order('allsort asc')->cache(300)->select();
		//$cplist2 = M('caipiao')->where(array('isopen'=>1))->order('listorder asc')->cache(300)->select();
		//$this->assign('cplist',$cplist);
		//$this->assign('cplist2',$cplist2);
		$cplists = M('caipiao')->where("isopen=1")->order('allsort asc,id desc')->select();
		foreach($cplists as $k=>$v){
			$balls = array();
			$hz = 0;$daxiao = $danshuang = '';
			$cpinfo = Array();
			if($cpinfo['issys']==0){
				$kjinfo = M('kaijiang')->where(array('name'=>array('eq',$v['name'])))->limit(1)->order('id desc')->cache(600)->find();
			}else if($cpinfo['issys']==1){
				$kjinfo = M('kaijiang')->where(array('name'=>array('eq',$v['name']),'opentime'=>array('elt',$_t)))->order('id desc')->limit(1)->cache(600)->find();
			}
			$balls = explode(',',$kjinfo['opencode']);
			$hz    = array_sum($balls);
			if($hz>10){
				$daxiao = '大';
			}else{
				$daxiao = '小';
			}
			if($hz%2==0){
				$danshuang = '双';
			}else{
				$danshuang = '单';
			}
			$cplists[$k]['opencode'] = $balls;
			$cplists[$k]['daxiao'] = $daxiao;
			$cplists[$k]['danshuang'] = $danshuang;
			$cplists[$k]['expect'] = $kjinfo['expect'];
		}
		$hotcaipiao = M("caipiao")->where("isopen = 1")->cache(300)->order('allsort ASC')->select();
		foreach ($hotcaipiao as $key => $value){
			$where['cpname'] = $value['name'];
			$count = M('touzhu')->where($where)->count();
			$hotcaipiao[$key]['count']= $count;
		}

		$sort = array(
			'direction' => 'SORT_DESC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
			'field'     => 'count',       //排序字段
		);
		$arrSort = array();
		foreach($hotcaipiao AS $key => $value){
			foreach($value AS $k=>$v){
				$arrSort[$k][$key] = $v;
			}
		}
		if($sort['direction']){
			array_multisort($arrSort[$sort['field']], constant($sort['direction']), $hotcaipiao);
		}
		$this->assign('hotcaipiao',$hotcaipiao);
		$this->assign('bncaipiao',$cplists);
		$this->display();
	}

	public function winners(){


		$_usergrouplist = M('membergroup')->cache(60)->select();
		foreach($_usergrouplist as $k=>$v){
			$usergrouplist[$v['groupid']] = $v;
		}
		$testuids = [];
		$testusers = M('member')->where(['isnb'=>1])->field('id')->select();
		foreach($testusers as $k=>$v){
			$testuids[] = $v['id'];
		}
		$map = [];
		$map['oddtime'][]=array('egt',strtotime($StartTime));
		$map['oddtime'][]=array('elt',strtotime($EndTime));
		$map['isdraw']=array('eq',1);
		//$map['uid']=array('not in',$testuids);
		$list = M('touzhu')->field("cptitle as k3name,uid,username,sum(okamount) as okamount")->where($map)->group("uid")->limit(10)->order("okamount desc")->select();

		foreach($list as $k=>$v){
			$userinfo  = [];
			$userinfo  = M('member')->where(['id'=>$v['uid']])->field('groupid,sex,face')->cache(600)->find();
			$v['sex']  = $userinfo['sex'];
			$v['face'] = is_file($userinfo['face'])?$userinfo['face']:'/resources/images/face/'.rand(1,25).'.jpg';
			$v['groupname'] = $usergrouplist[$userinfo['groupid']]['groupname'];
			$v['touhan'] = $usergrouplist[$userinfo['groupid']]['touhan'];
			$v['amountcount'] = $v['okamount'];
			$v['okamountcount'] = M('touzhu')->where("isdraw=1 AND uid='{$v['uid']}'")->SUM('okamount');
			$v["k3names"] = M('touzhu')->distinct ( true )->where ("uid='{$v['uid']}'")->field ( 'cpname as name,cptitle as title' )->cache(60)->limit(8)->select();
			$list[$k]    = $v;
		}
		$group = M('Membergroup')->field('groupid,groupname,touhan')->where('isagent <> 1')->order('groupid ASC')->select();
		if(count($list)<3){
			$list = $this->randking(1,$group);
		}
		$list=list_sort_by($list,'amountcount','desc');
		$this->assign('list',$list);
		$this->assign('list2',$list);
		// if(C('ranking')==1){
		// 	$this->assign('randking',$this->randking()) ;
		// 	$this->display();
		// }else{
		// 	$this->assign('list',$list);
		// 	$this->assign('list2',$list2);
			$this->display();
		// }
	}

	//随机资金榜
	public function randking($nocookie=null,$group){
		$nocookie?$no = 50 : $no =10;
		$allk3 = M('caipiao')->field("name,title")->cache(300)->where("isopen=1")->select();
		for ($i=0;$i<$no;$i++) {
			$count = rand(1,6); $num = rand(4,6); $num2  = rand(2,3);$num3  = rand(1,2);
			$user[$i]['username']  = substr_replace(rand_strings($num,$count),'****','1','4');
			$user[$i]['okamount']  =  rand_strings(1,7).rand_strings($num3,0);
			$user[$i]['face']      = is_file($user[$i]['face'])?$user[$i]['face']:'/resources/images/face/'.rand(1,25).'.jpg';
			$user[$i]['sex']       =  rand(0,2);
			$user[$i]['groupname'] =  $group[rand(0,8)]['groupname'];
			$user[$i]['k3name']    =  $allk3[rand(0,14)]['title'];
			$user[$i]["amountcount"]     =    rand_strings(1,7).rand_strings($num2,0);
			$user[$i]["okamountcount"]     =  ceil($user[$i]['amountcount'] * (rand(6,9).'.'.rand(1,9)));
		}
		$sedcon = strtotime(date("Y-m-d ")."23:59:59")-time();
		$user = list_sort_by($user,'amountcount','desc');
		$list =json_encode($user);
		if($nocookie){
			foreach ($user as $key=> $value){
				$user[$key]['k3names']= M('caipiao')->field("name,title")->cache(300)->limit(rand(0,3),6)->select();
				switch ($user[$key]['groupname']){
					case $group[0]['groupname']:
						$user[$key]['touhan'] = $group[0]['touhan'];
						break;
					case $group[1]['groupname']:
						$user[$key]['touhan'] = $group[1]['touhan'];
						break;
					case $group[2]['groupname']:
						$user[$key]['touhan'] = $group[2]['touhan'];
						break;
					case $group[3]['groupname']:
						$user[$key]['touhan'] = $group[3]['touhan'];
						break;
					case $group[4]['groupname']:
						$user[$key]['touhan'] = $group[4]['touhan'];
						break;
					case $group[5]['groupname']:
						$user[$key]['touhan'] = $group[5]['touhan'];
						break;
					case $group[6]['groupname']:
						$user[$key]['touhan'] = $group[6]['touhan'];
						break;
					case $group[7]['groupname']:
						$user[$key]['touhan'] = $group[7]['touhan'];
						break;
					case $group[8]['groupname']:
						$user[$key]['touhan'] = $group[8]['touhan'];
						break;
					case $group[9]['groupname']:
						$user[$key]['touhan'] = $group[9]['touhan'];
						break;
				}
			}
			return $user;
			exit();
		}else{
			cookie('list',$list,$sedcon);
		}
	}
	
	function ybtzRecord()
	{
		
		$post = $_POST;
		
		$order_sn = $post['order_sn'];
		
		if(empty($order_sn)){
			
			$this->error('非法参数');
		}else{
			
			$orders = M('recharge')->where("trano='{$order_sn}' ")->find();
			
			if(empty($orders)){
				
				
				$this->error('订单不存在');
			}
			
			if($orders['state'] != 0){
				
				$this->error('订单已支付或已取消');
			}
			
			$pays = M('payset')->where("paytype='fourinone'")->find();
			$paysxx = unserialize($pays['configs']);
			
			$money = $orders['actualamount'] * 100;
			
			$signa = md5(md5($order_sn.$post['money'].$post['trade_no'].$paysxx['merchantid']).$paysxx['merchantkey1']);
			if($signa != $post['sign']){
				
				$this->error('签名错误');
			}
			
			
			
			if($post['trade_status'] == 10000){
				
				$orderinfo = M('recharge')->where(['trano'=>$order_sn])->find(); 
				
				$orderinfo['threetrano'] = $post['trade_no'];
				$apiparam=array();
				$apiparam = $orderinfo;
				$_api = new \Lib\api;
				$Result = $_api->sendHttpClient('Api/Pay/paycheck',$apiparam);
				
				
				
				if($Result['sign']){
					echo "SUCCESS";exit;
				}else{
					echo "Signature error";exit;
				}
				
			}
			
		}
		
		
	}

}
?>