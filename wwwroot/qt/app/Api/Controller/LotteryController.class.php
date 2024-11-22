<?php
namespace Api\Controller;
use Lib\kaijiang\ssc;
use Think\Controller;
class LotteryController extends CommonController {
  public $_parent = array();
  protected $allowMethodList = array('getconfigs','lotterylist','lotterycode','getopencodes','lotterytimes','loadopencode','lotteryopencodes','lotteryrates','k3buy');
  //配置获取
  function getconfigs($apiparam=array()){
    $apiparam = self::_cheacktoken($apiparam);
    if(!$apiparam['sign'])return $apiparam;
    $fields = [
      'webtitle','keywords','description','iskillorder','sysBankMaxNum','tikuanMin','tikuanMax','ritikuanxiane','tikuanstart',
      'tikuanend','tikuannum','tikuannumoverbilv','tikuannumovermin','tikuannumovermax','paiduinum','pointchongzhi',
      'pointchongzhiadd','pointtouzhu','pointtouzhuadd','pointhuisun','pointhuisunadd','kefuthree','bindcardamount',
      'newmemberrecharge','newmemberrechargeamount','activity_cz0_money','activity_cz0_zsmoney','activity_cz1_money',
      'activity_cz1_zsmoney','activity_cz2_money','activity_cz2_zsmoney','riCommissionBase0_0','riCommissionBase0_1',
      'riCommissionBase1_2','riCommissionBase2_0','riCommissionBase2_1','riCommissionBase2_2','yueCommissionBase0_0',
      'yueCommissionBase0_1','yueCommissionBase0_2','yueCommissionBase1_0','yueCommissionBase1_1','yueCommissionBase1_2',
      'yueCommissionBase2_0','yueCommissionBase2_1','yueCommissionBase2_2','riKuisunBase0_0','riKuisunBase0_1',
      'riKuisunBase0_2','riKuisunBase1_0','riKuisunBase1_1','riKuisunBase1_2','riKuisunBase2_0','riKuisunBase2_1',
      'riKuisunBase2_2','yueKuisunBase0_0','yueKuisunBase0_1','yueKuisunBase0_2','yueKuisunBase1_0','yueKuisunBase1_1',
      'yueKuisunBase1_2','yueKuisunBase2_0','yueKuisunBase2_1','yueKuisunBase2_2','agentBonusBase0_0','agentBonusBase0_1',
      'agentBonusBase1_0','agentBonusBase1_1','agentBonusBase2_0','agentBonusBase2_1','agentBonusBase3_0','agentBonusBase3_1',
      'loginerrornum_q','loginerrorclosetime_q','ipblackisopen','ipblacklist','ipwhiteisopen','ipwhitelist','pointexchangeamount','kefuqq','defaulttjcode'
    ];
    $_configs = M('setting')->where(['name'=>['in',$fields]])->select();

    foreach($_configs as $k=>$v){
      $configs[$v['name']] = $v['value'];
    }
    $configs['fuddetailtypes'] = C('fuddetailtypes');
    $_cplist = M('caipiao')->where(['isopen'=>1])->order('listorder asc')->cache(60)->select();
    foreach($_cplist as $k=>$v){
      $cplist[$v['typeid']][$v['name']] = $v;
    }
    $_gglist = M('gonggao')->order('id desc')->cache(300)->select();
    foreach($_gglist as $k1=>$v1){
      $gglist[$v1['id']] = $v1;
    }
    //支付接口列表
    $_bankpaylists = M('payset')->where(['state'=>1])->cache(300)->select();
    foreach($_bankpaylists as $k=>$v){
      $v['configs'] = unserialize($v['configs']);
      $bankpaylists[$v['paytype']] = $v;
    }
    //会员组列表
    $_membergrouplists = M('membergroup')->cache(300)->select();
    $_wfobj = new \Lib\wanfa;
    $getplayers1  = $_wfobj->getplayers('k3');
    $getplayers2  = $_wfobj->getplayers('ssc');
    $getplayers3  = $_wfobj->getplayers('pk10');
    $getplayers4  = $_wfobj->getplayers('keno');
    $getplayers5  = $_wfobj->getplayers('x5');
    $getplayers6  = $_wfobj->getplayers('dpc');
    $getplayers   = array_merge($getplayers1,$getplayers2);
    foreach($_membergrouplists as $k=>$v){
      $_xesetconfigs = unserialize($v['configs']);
      foreach($getplayers as $k0=>$v0){
        $v['min_'.$v0['playid']] = $_xesetconfigs['min_'.$v0['playid']]?$_xesetconfigs['min_'.$v0['playid']]:0;
        $v['max_'.$v0['playid']] = $_xesetconfigs['max_'.$v0['playid']]?$_xesetconfigs['max_'.$v0['playid']]:0;
      }
      $membergrouplists[$v['groupid']] = $v;
    }

    $typeid1 = 'k3';
    $rates1  = $getplayers1;
    $db = M('wanfa');
    foreach($rates1 as $k=>$v){
      $_rate1 = $db->where(['typeid'=>$typeid1,'playid'=>$v['playid']])->cache(300)->find();
      if(!isset($v['rate']))unset($_rate1['rate']);
      if($_rate1){
        if(!$_rate1['title'])unset($_rate1['title']);
        $rates1[$k] = array_merge($v,$_rate1);
      }else{
        unset($rates1[$k]);
      }

    }
    $typeid2 = 'ssc';
    $rates2  = $getplayers2;
    $db = M('wanfa');
    foreach($rates2 as $k=>$v){
      $_rate2 = $db->where(['typeid'=>$typeid2,'playid'=>$v['playid']])->cache(300)->find();
      if(!isset($v['rate']))unset($_rate2['rate']);
      if($_rate2){
        if(!$_rate2['title'])unset($_rate2['title']);
        $rates2[$k] = array_merge($v,$_rate2);
      }else{
        unset($rates2[$k]);
      }
    }
    $typeid3 = 'pk10';
    $rates3  = $getplayers3;
    $db = M('wanfa');
    foreach($rates3 as $k=>$v){
      $_rate3 = $db->where(['typeid'=>$typeid3,'playid'=>$v['playid']])->cache(300)->find();
      if(!isset($v['rate']))unset($_rate3['rate']);
      if($_rate3){
        if(!$_rate3['title'])unset($_rate3['title']);
        $rates3[$k] = array_merge($v,$_rate3);
      }else{
        unset($rates3[$k]);
      }
    }
    $typeid4 = 'keno';
    $rates4  = $getplayers4;
    $db = M('wanfa');
    foreach($rates4 as $k=>$v){
      $_rate4 = $db->where(['typeid'=>$typeid4,'playid'=>$v['playid']])->cache(300)->find();
      if(!isset($v['rate']))unset($_rate4['rate']);
      if($_rate4){
        if(!$_rate4['title'])unset($_rate4['title']);
        $rates4[$k] = array_merge($v,$_rate4);
      }else{
        unset($rates4[$k]);
      }
    }
    $typeid5 = 'x5';
    $rates5  = $getplayers5;
    $db = M('wanfa');
    foreach($rates5 as $k=>$v){
      $_rate5 = $db->where(['typeid'=>$typeid5,'playid'=>$v['playid']])->cache(300)->find();
      if(!isset($v['rate']))unset($_rate5['rate']);
      if($_rate5){
        if(!$_rate5['title'])unset($_rate5['title']);
        $rates5[$k] = array_merge($v,$_rate5);
      }else{
        unset($rates5[$k]);
      }
    }
    $typeid6 = 'dpc';
    $rates6  = $getplayers6;
    $db = M('wanfa');
    foreach($rates6 as $k=>$v){
      $_rate6 = $db->where(['typeid'=>$typeid6,'playid'=>$v['playid']])->cache(300)->find();
      if(!isset($v['rate']))unset($_rate6['rate']);
      if($_rate6){
        if(!$_rate6['title'])unset($_rate6['title']);
        $rates6[$k] = array_merge($v,$_rate6);
      }else{
        unset($rates6[$k]);
      }
    }

    if($configs){
      $apiparam['sign']    = true;
      $apiparam['message'] = '获取成功';
      $apiparam['configs'] = $configs;
      $apiparam['configs']['bankpaylists'] = $bankpaylists;
      $apiparam['configs']['cplist'] = $cplist;
      $apiparam['configs']['gglist'] = $gglist;
      $apiparam['configs']['membergroups'] = $membergrouplists;
      $apiparam['configs']['rates_k3'] = $rates1;
      $apiparam['configs']['rates_ssc'] = $rates2;
      $apiparam['configs']['rates_pk10'] = $rates3;
      $apiparam['configs']['rates_keno'] = $rates4;
      $apiparam['configs']['rates_x5'] = $rates5;
      $apiparam['configs']['rates_dpc'] = $rates6;
    }else{
      $apiparam['sign']    = false;
      $apiparam['message'] = '获取失败';
    }
    return $apiparam;
  }
  function lotterylist($apiparam=array()){
    $apiparam = self::_cheacktoken($apiparam);
    if(!$apiparam['sign'])return $apiparam;

    $order = $apiparam['order']?$apiparam['order']:'';
    $where = ($apiparam['where'] && is_array($apiparam['where']))?array_filter($apiparam['where']):[];
    $limit = $apiparam['limit']?$apiparam['limit']:'';
    $list = M('caipiao')->where($apiparam['where'])->order($apiparam['order'])->limit($apiparam['limit'])->select();
    $openinfo = [];
    foreach($list as $k=>$v){
      $openinfo = M('kaijiang')->where(['name'=>$v['name'],])->cache(30)->order('opentime desc')->field('opencode,expect')->find();
      $v['opencode'] = $openinfo['opencode'];
      $v['expect'] = $openinfo['expect'];
      $list[$k] = $v;
    }
    $apiparam['data'] = $list;
    return $apiparam;
  }
  function lotterycode($apiparam=array()){
    $apiparam = self::_cheacktoken($apiparam);
    if(!$apiparam['sign'])return $apiparam;

    $where = ($apiparam['where'] && is_array($apiparam['where']))?array_filter($apiparam['where']):[];

    $info = M('kaijiang')->where($where)->order('opentime desc')->field('id,addtime,isdraw,source',true)->find();
    if($info['opentime'])$info['opentime']  = date('Y-m-d H:i:s',$info['opentime']);
    $apiparam['data'] = $info;
    return $apiparam;
  }
  function getopencodes($apiparam=array()){
    $apiparam = self::_cheacktoken($apiparam);
    if(!$apiparam['sign'])return $apiparam;

    $cplist = M('caipiao')->where(['isopen'=>1])->cache(60,true)->field('name')->select();
    $opencodes = [];
    foreach($cplist as $k=>$v){
      $openinfo = [];
      $openinfo = M('kaijiang')->where(['name'=>$v['name']])->order('id desc')->field('expect,opencode,opentime')->find();
      $opencodes[$v['name']] = $openinfo?$openinfo:[];
    }
    $apiparam['opencodes'] = $opencodes;
    return $apiparam;
  }
  //赔率
  function lotteryrates($apiparam=array()){
    //$apiparam = self::_cheacktoken($apiparam);
    //if(!$apiparam['sign'])return $apiparam;
    $typeid = $apiparam['typeid'];
    //$typeid = 'k3';

    $_wfobj = new \Lib\wanfa;
    $rates  = $_wfobj->getplayers($typeid);
    if(!in_array($typeid,['ssc','k3','x5','keno','xy28','kl10f','pk10','dpc','lhc'])){
      $apiparam['sign'] = false;
      $apiparam['message'] = '彩种ID不存在';
      return $apiparam;
    }

    $userinfo = session('userinfo');     //获取会员信息
    if(!(int)$userinfo['fandian']){
      $fandian = "{".htmlspecialchars_decode($userinfo['fandian'])."}";
      $fandian = preg_replace("/&quot/","\"",$fandian);
      $fandian = json_decode($fandian,true);
      $fandian = $fandian[$typeid];
      if(empty($fandian)) $fandian = false;
    }
    

    $db = M('wanfa');
    
    foreach($rates as $k=>$v){
      $_rate1 = $db->where(['typeid'=>$typeid,'playid'=>$v['playid']])->find();
      // print_r($_rate1);exit();
      // if($v['isopen']==0)unset($rates[$k]);
      if($fandian){
        if($fandian == 1) $fandian = 1;
        if($fandian == 2) $fandian = 2;
        if($fandian == 3) $fandian = 3;
        if($fandian == 4) $fandian = 4;
        if($fandian == 5) $fandian = 5;
        if($fandian == 6) $fandian = 6;
        if($fandian == 7) $fandian = 7;
        if($fandian == 8) $fandian = 8;
        if($fandian == 9) $fandian = 9;
        $wanfa_odds = M('wanfa_odds')->where(array('typeid'=>$typeid,'playid'=>$v['playid'],'fandian'=>$fandian))->find();
        // print_r($wanfa_odds);exit();
        if(!empty($wanfa_odds) and   $wanfa_odds['odds']>0){
          $_rate1['maxjj'] = $wanfa_odds['odds'];
          $_rate1['minjj'] = $wanfa_odds['odds'];
          $_rate1['maxrate'] = $wanfa_odds['odds'];
          $_rate1['minrate'] = $wanfa_odds['odds'];
          $_rate1['rate'] = $wanfa_odds['odds'];
        }
        if(empty($_rate1['maxjj'])){
          $_rate1['maxjj'] = $_rate1['rate'];
        }
        // print_r($_rate1);exit();
        // var_dump($_rate1);exit;
        /*if($v['playid'] == 'pk10dxds'){
          var_dump($_rate1['maxjj']);exit;
        }*/
      }
      if(!isset($v['rate']))unset($_rate1['rate']);
      if($_rate1){
        if(!$_rate1['title'])unset($_rate1['title']);
        $rates[$k] = array_merge($v,$_rate1);
        // var_dump($rates[$k]);exit;
      }else{
        unset($rates[$k]);
      }
    }
     // print_r($rates);exit();
    $apiparam['data'] = $rates;
    return $apiparam;

  }
  function lotterytimes($apiparam=array()){
    $apiparam = self::_cheacktoken($apiparam);
    if(!$apiparam['sign'])return $apiparam;

    $shortName = $apiparam['lotteryname'];
    //$shortName = I('lotteryname');;
    if(!$shortName){
      $apiparam['sign'] = false;
      $apiparam['message'] = '参数错误1';
      return $apiparam;
    }
    $cpinfo = M('caipiao')->where(["name"=>$shortName])->cache(300)->find();
    if(!$cpinfo){
      $apiparam['sign'] = false;
      $apiparam['message'] = '未知彩票';
      return $apiparam;
    }
    if($cpinfo['isopen']!=1){
      $apiparam['sign'] = false;
      $apiparam['message'] = '彩种已关闭';
      return $apiparam;
    }
    $_classfile = COMMON_PATH . 'Lib/lotterytimes/'.$shortName.'.class.php';
    if(!is_file($_classfile)){
      $apiparam['sign'] = false;
      $apiparam['message'] = '开奖时间错误';
      return $apiparam;
    }
    $_lotterytimesclass = "Lib\\lotterytimes\\{$shortName}";
    $_lotterytimes = new $_lotterytimesclass;
    $_lottetimes = $_lotterytimes->drawtimes();
    //dump($_lotterytimes);
    //dump($_lottetimes);exit;
    if($_lottetimes['lastFullExpect']){
      $return = array_merge($_lottetimes,['shortname'=> $cpinfo['title'],'status' =>$cpinfo['isopen'],'message'=> 'OK',]);
      $apiparam['sign'] = true;
      $apiparam['message'] = '获取成功';
      $apiparam['data'] = $return;
      return $apiparam;
    }else{
      $apiparam['sign'] = false;
      $apiparam['message'] = '获取失败';
    }
    return $apiparam;
  }
  function loadopencode($apiparam=array()){
    $apiparam = self::_cheacktoken($apiparam);
    if(!$apiparam['sign'])return $apiparam;
    $uid=$this->userinfo['id'];
    //$shortName = I('lotteryname');;
    $lotteryname = $apiparam['lotteryname'];
    $expect      = $apiparam['expect'];
    if(!$lotteryname){
      $apiparam['sign'] = false;
      $apiparam['message'] = '参数错误(缺少lotteryname)';
      return $apiparam;
    }
    if ($lotteryname=='jisk3') {
      $map = [];
      $map['name'] = ['eq',$lotteryname];
      $kjinfo = M('touzhu')->where(['cpname'=>'jisk3','uid'=>$uid])->field('opencode,expect')->limit(1)->order('id desc')->find();

      if(!$kjinfo){
        $apiparam['sign'] = false;
        $apiparam['message'] = '未开奖';
        return $apiparam;
      }
    }else{
      $map = [];
      if($lotteryname)$map['name'] = ['eq',$lotteryname];
      if($expect)$map['expect'] = ['eq',$expect];
      
      $kjinfo = M('kaijiang')->where($map)->field('name,title,opencode,sourcecode,remarks,expect,opentime')->order('expect desc')->find();

      if(!$kjinfo){
        $apiparam['sign'] = false;
        $apiparam['message'] = '未开奖';
        return $apiparam;
      }
    }
    $apiparam['sign'] = true;
    $apiparam['message'] = '获取成功！';
    $apiparam['data'] = $kjinfo;
    return $apiparam;
  }
  function lotteryopencodes($apiparam=array()){
    
    $apiparam = self::_cheacktoken($apiparam);
    if(!$apiparam['sign'])return $apiparam;
    $uid=$this->userinfo['id'];
    //$shortName = I('lotteryname');;
    $lotteryname = $apiparam['lotteryname'];
    $num         = $apiparam['num']?$apiparam['num']:30;
    //$num         = $num>1?30:$num;
    if(!$lotteryname){
      $apiparam['sign'] = false;
      $apiparam['message'] = '参数错误(缺少lotteryname)';
      return $apiparam;
    }
    if ($lotteryname=='jisk3') {
      $map = [];
      $map['name'] = ['eq',$lotteryname];
      $list = M('touzhu')->where(['cpname'=>'jisk3','uid'=>$uid])->field('opencode,expect')->limit(10)->order('id desc')->select();

      if(!$list){
        $apiparam['sign'] = false;
        $apiparam['message'] = '开奖获取失败';
        return $apiparam;
      }
    }else{
      $map = [];
      $map['name'] = ['eq',$lotteryname];
      $list = M('kaijiang')->where($map)->field('name,title,opencode,sourcecode,remarks,expect,opentime')->limit($num)->order('expect desc')->select();

      if(!$list){
        $apiparam['sign'] = false;
        $apiparam['message'] = '开奖获取失败';
        return $apiparam;
      }
    }
    $apiparam['sign'] = true;
    $apiparam['message'] = '开奖获取成功！';
    $apiparam['data'] = $list;
    return $apiparam;
  }

  //orderList=array 投注信息
  function cpbuy($apiparam=array()){
    
    $apiparam = self::_cheacktoken($apiparam);
    // print_r($apiparam);exit();
    if(!$apiparam['sign'])return $apiparam;
    $apiparam = checklogin($apiparam);
    if(!$apiparam['sign'])return $apiparam;
    $userinfo = $apiparam["data"];     //获取会员信息
    unset($apiparam["data"]);         //删除多余数组
    unset($apiparam["sign"]);
    unset($apiparam["message"]);
    if(!in_array(strtolower($apiparam["orderList"]["source"]),['pc','mobile'])){   //判断投注来源
      $apiparam['sign'] = false;
      $apiparam['message'] = '非法来源';
      return $apiparam;
    }
    //彩种判断
    $lotteryname = $apiparam["orderList"]["lotteryname"];        //彩种标识
    $expect = $apiparam["orderList"]["expect"];                  //期号
    $cpinfo = M('caipiao')->where(['name'=>$lotteryname])->find();  //获取彩种信息
    if(!$cpinfo){
      return(['sign'=>false,'message'=>'彩种不存在']);
      return(['sign'=>false,'message'=>'彩种不存在']);
    }
    if($cpinfo['isopen']==0){
      return(['sign'=>false,'message'=>'当前彩种已关闭投注']);
    }
    if($cpinfo['iswh']==1){
      return(['sign'=>false,'message'=>'当前彩种维护中']);
    }
    //时间判断

    $_lotterytimesclass = "Lib\\lotterytimes\\{$lotteryname}";
    $_lotterytimes = new $_lotterytimesclass;                //获取当前彩种类文件
    $_lottetimes = $_lotterytimes->drawtimes();             //获取彩种剩余时间
    if($_lottetimes['currFullExpect']!=$expect){            //根椐期号判断彩种是否过期
      if($lotteryname == 'lhc'){
        if(time() > strtotime(date('Y-m-d 21:20:00'))){
          $apiparam['sign'] = false;
          $apiparam['message'] = '当前彩种已截至投注1';
          return $apiparam;
        }
      }elseif($lotteryname!='jisk3'){
        $apiparam['sign'] = false;
        $apiparam['message'] = '当前彩种已截至投注1';
        return $apiparam;
      }
      
    }
    
    $lastkjinfo = M('kaijiang')->where(['name'=>$lotteryname,'expect'=>$expect])->find();
    if($lastkjinfo){ //判断当前彩种期号是存在
      $apiparam['sign'] = false;
      $apiparam['message'] = '当前彩种已截至投注2';
      return $apiparam;
    }
    

    //取玩法
    $typeid = $cpinfo['typeid'];
    if(!in_array($typeid,['ssc','k3','x5','keno','xy28','kl10f','pk10','dpc','lhc'])){
      $apiparam['sign'] = false;
      $apiparam['message'] = '彩种ID不存在';
      return $apiparam;
    }
    $db = M('wanfa');
    $_wfobj = new \Lib\wanfa;
    $rates  = $_wfobj->getplayers($typeid);
   // print_r($rates);exit();
    foreach($rates as $k=>$v){
      $_rate1 = $db->where(['typeid'=>$typeid,'playid'=>$v['playid']])->cache(60)->find();
      if(!isset($v['rate']))unset($_rate1['rate']);
      if($_rate1){
        if(!$_rate1['title'])unset($_rate1['title']);
        $rates[$k] = array_merge($v,$_rate1);
      }else{
        unset($rates[$k]);
      }
    }
    
    $membergroup = M('membergroup')->where(['groupid'=>$userinfo['groupid']])->cache(60)->find();//获取会员组信息
    $_rateconfigs = unserialize($membergroup['configs']);  //会员组设置
    foreach($rates as $k0=>$v0){
      $rateinfo = [];
      $rateinfo = M('wanfa')->where(['typeid'=>$typeid,'playid'=>$v0['playid']])->cache(60)->find();
      $v0 = array_merge($v0,$rateinfo);
      $rateinfo['minxf'] = $_rateconfigs['min_'.$rateinfo['playid']]?$_rateconfigs['min_'.$rateinfo['playid']]:$rateinfo['minxf'];
      $rateinfo['maxxf'] = $_rateconfigs['max_'.$rateinfo['playid']]?$_rateconfigs['max_'.$rateinfo['playid']]:$rateinfo['maxxf'];
      //$v0['minxf'] =
      $rates[$k0] = $rateinfo;
    }

    $_REQUEST = [];
    $_REQUEST = $apiparam["orderList"];
    $totalprice = 0;

    foreach($_REQUEST['orderList'] as $k=>$v){
      
      if(!$rates[$v['playid']]){
        return(['sign'=>false,'message'=>$v['playtitle'].'玩法不存在']);
      }

      if(!$v['playid']){
        return(['sign'=>false,'message'=>$v['playtitle'].'缺少玩法参数或玩法无法识别']);
      }
      if($v['playid']=='k3ethdx'){
        $tznumbers = explode('#',$v['number']);
        foreach($tznumbers as $ck=>$cv){
          if(count(array_unique(str_split($cv,1)))!=2){
            return(['sign'=>false,'message'=>$v['playtitle']."-不得含有豹子号"]);
          }
        }
      }
      if(intval($rates[$v['playid']]['minxf'])>0 && $v['price']<$rates[$v['playid']]['minxf']){
        return(['sign'=>false,'message'=>$v['playtitle'].'最低投注金额为'.$rates[$v['playid']]['minxf']]);
      }

      if(intval($rates[$v['playid']]['maxxf'])>0){

        $_grouptzmap = [];
        $_grouptzmap['uid']    = ['eq',$userinfo['id']];
        $_grouptzmap['playid'] = ['eq',$v['playid']];
        $_grouptzmap['isdraw'] = ['eq',0];
        $_grouptzmap['cpname'] = ['eq',$cpinfo['name']];
        $_grouptzmap['expect'] = ['eq',$expect];

        $_oktztotal = M('touzhu')->where($_grouptzmap)->sum('amount');

        if(strstr($_REQUEST['lotteryname'],'ssc'))$zyclass ="ssc";
        if(strstr($_REQUEST['lotteryname'],'pk10'))$zyclass ="pk10";
        if(strstr($_REQUEST['lotteryname'],'xyft'))$zyclass ="pk10";
        if(strstr($_REQUEST['lotteryname'],'x5'))$zyclass ="x5";
        if(strstr($_REQUEST['lotteryname'],'keno'))$zyclass ="keno";
        if(strstr($_REQUEST['lotteryname'],'pl3'))$zyclass ="dpc";
        if(strstr($_REQUEST['lotteryname'],'fc3d'))$zyclass ="dpc";
        if(strstr($_REQUEST['lotteryname'],'df3d'))$zyclass ="dpc";
        if(strstr($_REQUEST['lotteryname'],'lhc'))$zyclass ="lhc";
        if(strstr($_REQUEST['lotteryname'],'k3'))$zyclass ="k3";
        if(strstr($_REQUEST['lotteryname'],'xy28'))$zyclass ="xy28";
        if ($_REQUEST['lotteryname']=='sfks') {
          $zyclass ="k3";
        }




        $_zhushuyzclass = "Lib\\yzwanfa\\{$zyclass}";
             //print_r($_zhushuyzclass);exit();
        $_zhushuyz = new $_zhushuyzclass;

        $countzhushu = $_zhushuyz->checkzhushu($v['playid'],$v['number']);

            /*var_dump(array(
              'countzhushu' => $countzhushu,
              'zhushu' => $v['zhushu'],
              'zyclass' => $zyclass,
              'playid' => $v['playid']
            ));exit;*/

            if($countzhushu!=$v['zhushu']){ //判断注数是否正确
              $this->ajaxReturn(['sign'=>false,'message'=>'非法操作1']);exit;
            }
          if($v['playtitle']!=$rates[$v['playid']]['title']){   //判玩法标题
            $this->ajaxReturn(['sign'=>false,'message'=>"非法操作3"]);exit;
          };

          if(empty($_REQUEST['isct'])){
            if(!strstr($_REQUEST['lotteryname'],'k3')){ 
             if(!strstr($_REQUEST['lotteryname'],'lhc')){
              /*if(($v['price']/$v['zhushu']/$v['beishu']/$v['yjf'])!=2){    //断码每注金额是否正确
                $this->ajaxReturn(['sign'=>false,'message'=>'非法操作2']);exit;
              }*/
               if(strstr($rates[$v['playid']]['maxjj'],'|')){         //判断实际奖金是否正确
                  $v1 = explode('|',$rates[$v['playid']]['maxjj']);  //最大奖金
                  $v2 = explode('|',$rates[$v['playid']]['minjj']);  //最小奖金
                  $maxjj="";
                  foreach($v1 as $j=>$val){
                    $maxstr = ((($v1[$j]-$v2[$j])/GetVar('fanDianMax'))* $userinfo['fandian']+$v2[$j]).'|';
                    $maxjj .= sprintf("%.3f", filter_money($maxstr,2)).'|';
                  }
                  $maxjj = substr($maxjj,0,-1) ;

                }else{
                  $maxjj = ($rates[$v['playid']]['maxjj']-$rates[$v['playid']]['minjj'])/(GetVar('fanDianMax'))*($userinfo['fandian'])+$rates[$v['playid']]['minjj'];
                  if(substr(explode('.',$maxjj)[1],0,2)=='99'){
                    $maxjj=sprintf("%.3f", ceil($maxjj));
                  }else{
                    $maxjj =sprintf("%.3f", filter_money($maxjj,2));
                  }
                }
              /*if($v['rate']!=$maxjj){   //非六合彩判断实际奖金是否正确
                $this->ajaxReturn(['sign'=>false,'message'=>"非法操作3"]);exit;
              };*/
             }/*else{
               if($v['rate']!=$rates[$v['playid']]['rate']){   //六合彩判断实际赔率是否正确
                 $this->ajaxReturn(['sign'=>false,'message'=>"非法操作4"]);exit;
               };
               
             }*/

            $_tzamonut  = $v['price'];    //全部注数总金额
            if( $_tzamonut > intval($rates[$v['playid']]['maxxf']) ){
              return(['sign'=>false,'message'=>$v['playtitle']."最高投注金额为".$rates[$v['playid']]['maxxf']]);
            }
          }else{
            $_tzamonut  = $v['price'] * $v["zhushu"]; //K3 每注金额
            if( ( $_oktztotal + $_tzamonut ) > intval($rates[$v['playid']]['maxxf']) ){
              return(['sign'=>false,'message'=>$v['playtitle']."最高投注金额为".$rates[$v['playid']]['maxxf']]);
            }
            /*var_dump(array(
              'v' => $v['rate'],
              'rate' => $rates[$v['playid']]['rate']
            ));exit;*/
            $rates[$v['playid']]['rate'] = $v['rate'];
             /*if($v['rate']!=$rates[$v['playid']]['rate']){   //判断实际赔率是否正确
               $this->ajaxReturn(['sign'=>false,'message'=>"非法操作5"]);exit;
             };*/
           }
         }
         
       }

       if(intval($v['zhushu'])<=0){
        return(['sign'=>false,'message'=>$v['playtitle'].'投注注数错误']);
      }
      if(intval($v['totalzs'])<=0){
        return(['sign'=>false,'message'=>$v['playtitle']."系统参数[总注数]设置错误"]);
      }
      if(intval($v['zhushu'])>intval($v['totalzs'])){
        return(['sign'=>false,'message'=>$v['playtitle']."最高{$v['totalzs']}注"]);
      }

      if(strstr($_REQUEST['lotteryname'],'k3') ){
        if(count(explode('#',$v['number']))!=intval($v['zhushu']) ){
          $this->ajaxReturn(['sign'=>false,'message'=>$v['playtitle']."-系统检测到您的投注注数异常1"]);exit;
        }
        $totalprice += $v['price'] * $v["zhushu"];
      }else{
        $totalprice += $v['price'];
      }
    }

    if($userinfo['islock']==1){
      return(['sign'=>false,'message'=>$v['playtitle']."系统参数[总注数]设置错误"]);
    }
    if($userinfo['balance']<$totalprice){
      return(['sign'=>false,'message'=>"账户余额不足"]);
    }

    $_t = time();
    $tzdb = M('touzhu');
    $memdb = M('member');
// print_r($_REQUEST['orderList']);exit();
    foreach($_REQUEST['orderList'] as $k=>$v){
      $data = [];
      $trano          = gettrano(1);
      $data['isdraw'] = 0;
      $data['trano']  = $trano;
      if($v['yjf'])$data['yjf'] = $v['yjf'];
      $data['typeid'] = $cpinfo['typeid'];
      $data['playid'] = $v['playid'];
      $data['playtitle']  = $rates[$v['playid']]['title'];
      $data['cptitle']  = $cpinfo['title'];
      $data['cpname']  = $cpinfo['name'];
      $data['expect']  = $expect;
      $data['uid']  = $userinfo['id'];
      $data['username']  = $userinfo['username'];
      $data['itemcount']  = $v['zhushu'];
       if($typeid!='k3' && $typeid!='lhc' && $v['beishu']>0) $data['beishu']  = $v['beishu']; // && empty($_REQUEST['isct'])
       $data['tzcode']  = $v['number'];
       $data['repoint']  = 0;
       $data['repointamout']  = 0;

       if($v['playid'] == 'pk10gyhz'){
        $rate = explode('|', $rates[$v['playid']]['maxjj']);
        $data['amount']  = $v['price'] * $v["zhushu"];
        $data['mode']  = $rate[$v['number']-3];
      }else if(!strstr($_REQUEST['lotteryname'],'k3')){
        $data['amount']  = $v['price'];
        $data['mode']    = $v['rate'];
      }else{
        $data['amount']  = $v['price'] * $v["zhushu"];
        $data['mode']  = $rates[$v['playid']]['rate'];
      }
      $data['okamount']  = 0;
      $data['okcount']  = 0;
      $data['Chase']  = 0;
      $data['stopChase']  = 0;
      $data['oddtime']  = $_t;
      $data['opencode']  = '';
      $data['source']  = $_REQUEST["source"];

      $oldamount = $memdb->where(['id'=>$userinfo['id']])->getField('balance');//投注前金额
      $data['amountbefor']  = $oldamount;
      $data['amountafter']  = $oldamount - $data['amount'];
      
      $addints[] = $_int = $tzdb->data($data)->add();
       // print_r($addints);exit;

     if($userinfo['parentid'] !='0'){ //$typeid != 'k3' && $typeid != 'lhc' && 
     $i = 1;

     $this->dailifandian($userinfo['parentid'],$userinfo['fandian'],$data['amount'],$trano,$userinfo['id'],$userinfo['username'],$userinfo['fandian'],$i,$typeid,$v['playid']);

     foreach($this->_parent as $k => $v){
      $dailidata['uid'] = $v['uid'];
      $dailidata['username'] = $v['username'];
      $dailidata['amount'] = $v['fandianjine'];
      $dailidata['touzhujine'] = $v['touzhujine'];
      $dailidata['trano'] = $v['trano'];
      $dailidata['fandian'] = $v['fandian'];
      $dailidata['shenhe'] = 1;
      $dailidata['xiajiid'] = $v['xiajiid'];
      $dailidata['xiajiuser'] = $v['xiajiuser'];
      $dailidata['xiajifandian'] = $v['xiajifandian'];
      $dailidata['oddtime'] = time();
      M('dailifandian')->add($dailidata);

      $amountbefor = M('Member')->where("id='{$dailidata['uid']}'")->getField('balance');
      M('member')->where("id='{$dailidata['uid']}'")->setInc('balance',$dailidata['amount']);
        //添加会员账户明细
      $fuddetaildata = [];
      $fuddetaildata['trano']      = $dailidata['trano'];
      $fuddetaildata['uid']      = $dailidata['uid'];
      $fuddetaildata['username'] =  $dailidata['username'];
      $fuddetaildata['type']     = 'yongjinshenhe';
      $fuddetaildata['typename']     = '佣金发放通过';
      $fuddetaildata['remark']       = $remark?$remark:'佣金发放通过';
      $fuddetaildata['oddtime']     = NOW_TIME;
      $fuddetaildata['amount']   = $dailidata['amount'];
      $fuddetaildata['amountbefor']   = $amountbefor;
      $fuddetaildata['amountafter']   = $amountbefor + $dailidata['amount'];
      M('fuddetail')->data($fuddetaildata)->add();

    }
  }

      if($_int){//操作账户金额、日志等
        //会员账户金额、积分、洗码金额
        $_membercenter = $memdb->where(['id'=>$userinfo['id']])->field('balance,point,xima')->find();
        //投注
        $memdb->where(['id'=>$userinfo['id']])->setDec('balance',$data['amount']);
        $fuddetail_data = array();
        $fuddetail_data['trano'] = $trano;
        $fuddetail_data['uid'] = $userinfo['id'];
        $fuddetail_data['username'] = $userinfo['username'];
        $fuddetail_data['amount'] = abs($data['amount']);
        $fuddetail_data['amountbefor'] = $_membercenter['balance'];
        $fuddetail_data['amountafter'] = $_membercenter['balance']-abs($data['amount']);
        $fuddetail_data['oddtime'] = $_t;
        $fuddetail_data['remark'] = "投注扣费，彩种:{$cpinfo['title']},{$expect}";
        $fuddetail_data['type'] = 'order';
        $fuddetail_data['typename'] = C('fuddetailtypes.order');
        M('fuddetail')->data($fuddetail_data)->add();

              //洗码
        if($_membercenter['xima']>0){
          $ximaamount = $data['amount'];
          if($data['amount']>$_membercenter['xima']){
            $ximaamount = $_membercenter['xima'];
          }
          $memdb->where(['id'=>$userinfo['id']])->setDec('xima',$ximaamount);
          $fuddetail_data = array();
          $fuddetail_data['trano'] = $trano;
          $fuddetail_data['uid'] = $userinfo['id'];
          $fuddetail_data['username'] = $userinfo['username'];
          $fuddetail_data['amount'] = abs($ximaamount);
          $fuddetail_data['amountbefor'] = $_membercenter['xima'];
          $fuddetail_data['amountafter'] = $_membercenter['xima']-abs($ximaamount);
          $fuddetail_data['oddtime'] = $_t;
          $fuddetail_data['remark'] = "投注减，彩种:{$cpinfo['title']},{$expect}";
          $fuddetail_data['type'] = 'xima';
          $fuddetail_data['typename'] = C('fuddetailtypes.xima');
          M('fuddetail')->data($fuddetail_data)->add();
        }else{
          $memdb->where(['id'=>$userinfo['id']])->setField('xima',0);
        }

      }
    }

    if(count(array_filter($addints))>0){
      $apiparam['sign'] = true;
      $apiparam['message'] = '投注成功';
      if ($lotteryname=='jisk3') {
        self::check($expect);
      }
    }else{
      $apiparam['sign'] = false;
      $apiparam['message'] = '投注失败';
    }
    return $apiparam;
  }
  
  function hmadd($apiparam=array()){
    $apiparam = self::_cheacktoken($apiparam);    
    if(!$apiparam['sign'])return $apiparam;
    $apiparam = checklogin($apiparam);
    if(!$apiparam['sign'])return $apiparam; 
    if($apiparam['action']!='add' || !is_numeric($apiparam['pid']) || !is_numeric($apiparam['buynum'])){
      return(['sign'=>false,'message'=>'错误信息']);
    }
    //判断ID是否合法
    $tzdb = M('touzhu');
    $tzhmdb = M('touzhuhm');
    $result=$tzdb->where(['id'=>$apiparam['pid']])->select();
    $result_user = $result;
    if(empty($result)){
      return(['sign'=>false,'message'=>'错误信息']);
    }
    
    if($result[0]['isfull']==0){
      return(['sign'=>false,'message'=>'对不起，该方案已满员']);
    } 
    if($apiparam['buynum']>$result[0]['isfull']){
      return(['sign'=>false,'message'=>'对不起您购买的份大于当前份数']);
    }
    $cpname = $result[0]['cpname'];
    $_classfile = COMMON_PATH . 'Lib/lotterytimes/'.$cpname.'.class.php';
    if(!is_file($_classfile)){
      return(['sign'=>false,'message'=>'开奖时间错误']);
    }
    $_lotterytimesclass = "Lib\\lotterytimes\\{$cpname}";
    $_lotterytimes = new $_lotterytimesclass;
    $_lottetimes = $_lotterytimes->drawtimes();
    if($_lottetimes['currFullExpect']!=$result[0]['expect']){
      return(['sign'=>false,'message'=>'对不起当前期已经截止认购']);
    }
    if($result[0]['isdraw']==-2){
      return(['sign'=>false,'message'=>'对不起，该方案已撤单!']);
    }
    //判断下单金额
    $nendpay=$result[0]['hemaipic']*$apiparam['buynum'];
    //查询用户金额
    $memdb = M('member');
    $oldamount = $memdb->where(['id'=>$apiparam["data"]['id']])->getField('balance');//投注前金额
    //金额是否足够
    if($oldamount<$nendpay){
      return(['sign'=>false,'message'=>'对不起您的余额不足！']);
    }
    //开始下单啦   
    $result[0]['touzhuid']=$result[0]['id'];
    unset($result[0]['id']);    
    $_t=time();
    $result[0]['rengou']=$apiparam['buynum'];
    $result[0]['uid']=$apiparam["data"]['id'];
    $result[0]['username']=$apiparam["data"]['username'];
    $result[0]['oddtime']=$_t;
    $data['amountbefor']  = $oldamount;
    $data['amountafter']  = $oldamount - $nendpay;
    $result[0]['amount']  = $nendpay;
    $result[0]['time']  = time();
    $hmpay=$tzhmdb->addAll($result);
    
    if($hmpay){
      
        //更新进度
      $jindu=($result[0]['fenshu']-$result[0]['isfull']+$apiparam['buynum'])/$result[0]['fenshu'];        
      $tzdb->where(['id'=>$apiparam['pid']])->setField('jindu',$jindu);         
        //扣金额 份数
      $tzdb->where(['id'=>$apiparam['pid']])->setDec('isfull',$apiparam['buynum']);
        //更新真正的保底。如果剩余份数小于保底分数之后，那么久剩余多少分就多少分保底
      if(($result[0]['isfull']-$apiparam['buynum']-$result[0]['realbaodi'])<=0){
        $tzdb->where(['id'=>$apiparam['pid']])->setField('realbaodi',($result[0]['isfull']-$apiparam['buynum']));
      }       
        //会员账户金额、积分、洗码金额
      $_membercenter = $memdb->where(['id'=>$apiparam["data"]['id']])->field('balance,point,xima')->find();
      $memdb->where(['id'=>$apiparam["data"]['id']])->setDec('balance',abs($nendpay));

        //如果是保底，退钱
        //退钱，算法
          //如果买的小于保底的，比如保底90份，买了10份，那么就退10份的钱，同时更新保底成80份
          //如果买的大于保底的，比如保底10份，买了20份  那么  退10块——同时更新保底成0份
          //先算出要退多少份，再算出钱，再退
          //if(false){
      if($result[0]['isbaodi'] == 1 && $result[0]['baodi'] > 0){
        $mairu_fenshu = $apiparam['buynum'];
        $baodi_fenshu = $result[0]['baodi'];
        if($mairu_fenshu < $baodi_fenshu){
          $tuiqian_fenshu = $mairu_fenshu;
          $curr_baodi_fenshu = $baodi_fenshu - $mairu_fenshu;
        } else {
          $tuiqian_fenshu = $baodi_fenshu;
          $curr_baodi_fenshu = 0;
        }
        $tui_qian_sum = $tuiqian_fenshu * $result[0]['hemaipic'];
            //echo $result_user[0]['id'];die;
            //tui
        $memdb->where(['id'=>$result_user[0]['uid']])->setInc('balance',abs($tuiqian_fenshu));
            //echo $curr_baodi_fenshu;die;
            //update_baodi_fenshu
        $tzdb->where(['id'=>$result_user[0]['id']])->setField('baodi',$curr_baodi_fenshu);
        
        
      }
      
      
        //投注
        //$memdb->where(['id'=>$userinfo['id']])->setDec('balance',$data['amount']);
        //$memdb->where(['id'=>$userinfo['id']])->setDec('balance',abs(($isbaodi*$baodihemai*$picmeney)+($rengouhemai*$picmeney)));
      $fuddetail_data = array();
      $fuddetail_data['trano'] = $result[0]['trano'];
      $fuddetail_data['uid'] = $apiparam["data"]['id'];
      $fuddetail_data['username'] = $apiparam["data"]['username'];
      
        //$fuddetail_data['amount'] = abs($data['amount']);
      $fuddetail_data['amount'] = abs($nendpay);
      
      $fuddetail_data['amountbefor'] = $_membercenter['balance'];
        //$fuddetail_data['amountafter'] = $_membercenter['balance']-abs($data['amount']);
      
      $fuddetail_data['amountafter'] = $_membercenter['balance']- abs($nendpay);
      $fuddetail_data['oddtime'] = $_t;
      $fuddetail_data['remark'] = "参与合买扣费，彩种:{$result[0]['cptitle']},{$result[0]['expect']},{$result[0]['trano']}";
      $fuddetail_data['type'] = 'order';
      $fuddetail_data['typename'] = C('fuddetailtypes.hemai');
      M('fuddetail')->data($fuddetail_data)->add();
      
        //洗码
      if($_membercenter['xima']>0){
                   // $ximaamount = $data['amount'];           
        $ximaamount = abs($nendpay);
        if(abs($nendpay)>$_membercenter['xima']){
          $ximaamount = $_membercenter['xima'];
        }
        $memdb->where(['id'=>$apiparam["data"]['id']])->setDec('xima',$ximaamount);
        $fuddetail_data = array();
        $fuddetail_data['trano'] = $result[0]['trano'];
        $fuddetail_data['uid'] = $apiparam["data"]['id'];
        $fuddetail_data['username'] = $apiparam["data"]['username'];
        
        $fuddetail_data['amount'] = abs($ximaamount);
        $fuddetail_data['amountbefor'] = $_membercenter['xima'];
        $fuddetail_data['amountafter'] = $_membercenter['xima']-abs($ximaamount);
        $fuddetail_data['oddtime'] = $_t;
        $fuddetail_data['remark'] = "参与合买减，彩种:{$result[0]['cptitle']},{$result[0]['expect']},{$result[0]['trano']}";
        $fuddetail_data['type'] = 'xima';
        $fuddetail_data['typename'] = C('fuddetailtypes.hmxima');
        M('fuddetail')->data($fuddetail_data)->add();
      }else{
        $memdb->where(['id'=>$apiparam["data"]['id']])->setField('xima',0);
      }                   
    }
    if($hmpay){
      $apiparam['sign'] = true;
      $apiparam['message'] = '投注成功';
    }else{
      $apiparam['sign'] = false;
      $apiparam['message'] = '投注失败1';
    }   
    return $apiparam;
    
  }
  
    //合买信息hmlist_fadan
  function hmlist_fadan($apiparam=array()){
    $arrinfo = $apiparam['arrinfo'];
    //echo '<pre>';
    //var_dump($apiparam);die;
    //echo 1;die;
    $userinfo = $arrinfo["userinfo"];     //获取会员信息
    $lastkjinfo = M('kaijiang')->where(['name'=>$apiparam['lotteryname'],'expect'=>$apiparam['expect']])->find();
    if($lastkjinfo){ //判断当前彩种期号是存在
      return;
    }

    $_t = time();
    
    $tzdb = M('touzhu');
    $tzdbhm = M('touzhuhm');
    
    
    $data = [];
    $trano          = gettrano(1);
    $data['isdraw'] = 0;
    $data['trano']  = $trano;
    $data['yjf'] = 1;
    $data['typeid'] = $arrinfo['curcpinfo']['typeid'];
    $data['playid'] = $apiparam['playid'];
    $data['playtitle']  = $apiparam['playtitle'];
    $data['cptitle']  = $arrinfo['curcpinfo']['title'];
    $data['cpname']  = $arrinfo['curcpinfo']['name'];
    $data['expect']  = $apiparam['expect'];
    $data['uid']  = $arrinfo['userinfo']['id'];
    $data['username']  = $arrinfo['userinfo']['username'];
    $data['itemcount']  = $apiparam['zhushu'];
    if($data['typeid']!='k3' && $typeid!='lhc')$data['beishu']  = $apiparam['beishu'];
    $data['tzcode']  = $apiparam['number'];

      //$data['amount']  = 0;
    $data['payamount']=0;
    
    
    $data['mode'] = $arrinfo['wanfainfo']['rate'];
    
    $data['repoint']  = 0;
    $data['repointamout']  = 0;


    $data['okamount']  = 0;
    $data['okcount']  = 0;
    $data['Chase']  = 0;
    $data['stopChase']  = 0;
    $data['oddtime']  = $_t;
    $data['opencode']  = '';
    $data['source']  = 'pc';

    $data['amountbefor']  = 0;
    $data['amountafter']  = 0;
    
      //begin合买资料
    $data['fenshu']  = $apiparam['fenshuhemai'];
    $data['ishemai']  = 1;
    $data['rengou']  = $apiparam['rengouhemai'];
    $data['isbaodi']  = $apiparam['isbaodi'];
    $data['baodi']  = $apiparam['baodihemai'];
    $data['jindu']  =$data['rengou']/$data['fenshu'];
    $data['hemaipic']  = $apiparam['zhushu'];
    $data['isfull']  = $data['fenshu']-$data['rengou'];
    $data['bdjindu']  = $data['baodi']/$data['fenshu'];
    $data['showtype'] = $apiparam["isbaomi"];
    $data['realbaodi'] = $data['baodi'];
      //echo '<pre>';
      //var_dump($data);die;
    $data['amount']=abs($data['fenshu']*$data['hemaipic']);
    
    $_int = $tzdb->data($data)->add();
    
    
      //添加合买数据
    
    
    $data['touzhuid']=$_int;
    
    $data['is_rebet']=1;
    $tzdbhm->data($data)->add();    
    
    echo '<a href="tencent://message/?uin=30041321&Site=Sambow&Menu=yes" style="text-decoration:none;">爱尚互联提醒您：机器人发单成功</a><br>===============================================================<br>';
  }
  
  
  //合买信息
  function hmlist($apiparam=array()){   
      //var_dump($apiparam);exit;
    $apiparam = self::_cheacktoken($apiparam);
    if(!$apiparam['sign'])return $apiparam;
    $apiparam = checklogin($apiparam);
    if(!$apiparam['sign'])return $apiparam;
    $userinfo = $apiparam["data"];     //获取会员信息
    unset($apiparam["data"]);         //删除多余数组
    unset($apiparam["sign"]);
    unset($apiparam["message"]);
    if(!in_array(strtolower($apiparam["orderList"]["source"]),['pc','mobile'])){   //判断投注来源
      $apiparam['sign'] = false;
      $apiparam['message'] = '非法来源';
      return $apiparam;
    }
    //彩种判断
    $lotteryname = $apiparam["orderList"]["lotteryname"];        //彩种标识
    $expect = $apiparam["orderList"]["expect"];                  //期号
    $cpinfo = M('caipiao')->where(['name'=>$lotteryname])->find();  //获取彩种信息
    if(!$cpinfo){
      return(['sign'=>false,'message'=>'彩种不存在']);
    }
    if($cpinfo['isopen']==0){
      return(['sign'=>false,'message'=>'当前彩种已关闭投注']);
    }
    if($cpinfo['iswh']==1){
      return(['sign'=>false,'message'=>'当前彩种维护中']);
    }
    //时间判断
    $_lotterytimesclass = "Lib\\lotterytimes\\{$lotteryname}";
    $_lotterytimes = new $_lotterytimesclass;                //获取当前彩种类文件
    $_lottetimes = $_lotterytimes->drawtimes();             //获取彩种剩余时间
       //echo ($_lottetimes['currFullExpect'].'----'.$expect);exit;
    if($_lottetimes['currFullExpect']!=$expect){            //根椐期号判断彩种是否过期
      $apiparam['sign'] = false;
      $apiparam['message'] = '当前彩种已截至投注1';
      return $apiparam;
    }
    $lastkjinfo = M('kaijiang')->where(['name'=>$lotteryname,'expect'=>$expect])->find();

    if($lastkjinfo){ //判断当前彩种期号是存在
      $apiparam['sign'] = false;
      $apiparam['message'] = '当前彩种已截至投注2';
      return $apiparam;
    }
    //取玩法
    $typeid = $cpinfo['typeid'];
    if(!in_array($typeid,['ssc','k3','x5','keno','xy28','kl10f','pk10','dpc','lhc'])){
      $apiparam['sign'] = false;
      $apiparam['message'] = '彩种ID不存在';
      return $apiparam;
    }
    $db = M('wanfa');
    $_wfobj = new \Lib\wanfa;
    $rates  = $_wfobj->getplayers($typeid);
    foreach($rates as $k=>$v){
      $_rate1 = $db->where(['typeid'=>$typeid,'playid'=>$v['playid']])->cache(60)->find();
      if(!isset($v['rate']))unset($_rate1['rate']);
      if($_rate1){
        if(!$_rate1['title'])unset($_rate1['title']);
        $rates[$k] = array_merge($v,$_rate1);
      }else{
        unset($rates[$k]);
      }
    }
    $membergroup = M('membergroup')->where(['groupid'=>$userinfo['groupid']])->cache(60)->find();//获取会员组信息
    $_rateconfigs = unserialize($membergroup['configs']);  //会员组设置
    $open = C('agent_commission_open');
    foreach($rates as $k0=>$v0){
      $rateinfo = [];
      $rateinfo = M('wanfa')->where(['typeid'=>$typeid,'playid'=>$v0['playid']])->cache(60)->find();
      $v0 = array_merge($v0,$rateinfo);
      $rateinfo['minxf'] = $_rateconfigs['min_'.$rateinfo['playid']]?$_rateconfigs['min_'.$rateinfo['playid']]:$rateinfo['minxf'];
      $rateinfo['maxxf'] = $_rateconfigs['max_'.$rateinfo['playid']]?$_rateconfigs['max_'.$rateinfo['playid']]:$rateinfo['maxxf'];
      if($typeid == 'lhc' || $typeid == 'k3'){
        if($open){
          $rateinfo['rate'] =$v0['rate'] - $v0['rate']*(GetVar('fanDianMax')-$userinfo['fandian'])/100;
          $rateinfo['rate'] = sprintf("%.2f",$rateinfo['rate']);
        }
      }
      $rates[$k0] = $rateinfo;
    }
    $_REQUEST = [];
    $_REQUEST = $apiparam["orderList"];
    $totalprice = 0;
    foreach($_REQUEST['orderList'] as $k=>$v){
      if(!$rates[$v['playid']]){
        return(['sign'=>false,'message'=>$v['playtitle'].'玩法不存在']);
      }
      if(!$rates[$v['playid']]['isopen']){
        return(['sign'=>false,'message'=>$v['playtitle'].'玩法维护中11']);
      }
      if(!$v['playid']){
        return(['sign'=>false,'message'=>$v['playtitle'].'缺少玩法参数或玩法无法识别']);
      }
      if($v['playid']=='k3ethdx'){
        $tznumbers = explode('#',$v['number']);
        foreach($tznumbers as $ck=>$cv){
          if(count(array_unique(str_split($cv,1)))!=2){
            return(['sign'=>false,'message'=>$v['playtitle']."-不得含有豹子号"]);
          }
        }
      }
      if(intval($rates[$v['playid']]['minxf'])>0 && $v['price']<$rates[$v['playid']]['minxf']){
        return(['sign'=>false,'message'=>$v['playtitle'].'最低投注金额为'.$rates[$v['playid']]['minxf']]);
      }
      if(intval($rates[$v['playid']]['maxxf'])>0){
        $_grouptzmap = [];
        $_grouptzmap['uid']    = ['eq',$userinfo['id']];
        $_grouptzmap['playid'] = ['eq',$v['playid']];
        $_grouptzmap['isdraw'] = ['eq',0];
        $_grouptzmap['cpname'] = ['eq',$cpinfo['name']];
        $_grouptzmap['expect'] = ['eq',$expect];
        $_oktztotal = M('touzhu')->where($_grouptzmap)->sum('amount');
        if(strstr($_REQUEST['lotteryname'],'ssc'))$zyclass ="ssc";
        if(strstr($_REQUEST['lotteryname'],'pk10'))$zyclass ="pk10";
        if(strstr($_REQUEST['lotteryname'],'x5'))$zyclass ="x5";
        if(strstr($_REQUEST['lotteryname'],'keno'))$zyclass ="keno";
        if(strstr($_REQUEST['lotteryname'],'pl3'))$zyclass ="dpc";
        if(strstr($_REQUEST['lotteryname'],'fc3d'))$zyclass ="dpc";
        if(strstr($_REQUEST['lotteryname'],'df3d'))$zyclass ="dpc";
        if(strstr($_REQUEST['lotteryname'],'lhc'))$zyclass ="lhc";
        if(strstr($_REQUEST['lotteryname'],'k3'))$zyclass ="k3";
        if(strstr($_REQUEST['lotteryname'],'xy28'))$zyclass ="xy28";
        $_zhushuyzclass = "Lib\\yzwanfa\\{$zyclass}";
        $_zhushuyz = new $_zhushuyzclass;
            //echo $v['playid'].'---'.$v['number'];exit;
        $countzhushu = $_zhushuyz->checkzhushu($v['playid'],$v['number']);
            //echo $countzhushu.'---'.$v['zhushu'];exit;
            if($countzhushu!=$v['zhushu']){ //判断注数是否正确
              $this->ajaxReturn(['sign'=>false,'message'=>'非法操作11']);exit;
            }
          if($v['playtitle']!=$rates[$v['playid']]['title']){   //判玩法标题
            $this->ajaxReturn(['sign'=>false,'message'=>"非法操作3"]);exit;
          };
          if(!strstr($_REQUEST['lotteryname'],'k3')){
           if(!strstr($_REQUEST['lotteryname'],'lhc')){
             if(!strstr($_REQUEST['lotteryname'],'xy28')){
              if(($v['price']/$v['zhushu']/$v['beishu']/$v['yjf'])!=2){    //断码每注金额是否正确
                $this->ajaxReturn(['sign'=>false,'message'=>'非法操作2']);exit;
              }
              if(strstr($rates[$v['playid']]['maxjj'],'|')){         //判断实际奖金是否正确
                $v1 = explode('|',$rates[$v['playid']]['maxjj']);  //最大奖金
                $v2 = explode('|',$rates[$v['playid']]['minjj']);  //最小奖金
                $maxjj="";
                              //echo $userinfo['fandian'];exit;
                foreach($v1 as $j=>$val){
                  $maxstr = ((($v1[$j]-$v2[$j])/GetVar('fanDianMax'))* $userinfo['fandian']+$v2[$j]).'|';
                  $maxjj .= sprintf("%.2f", filter_money($maxstr,2)).'|';
                }
                $maxjj = substr($maxjj,0,-1) ;

              }else{
                                 //echo $userinfo['fandian'];exit;
                $maxjj = ($rates[$v['playid']]['maxjj']-$rates[$v['playid']]['minjj'])/(GetVar('fanDianMax'))*($userinfo['fandian'])+$rates[$v['playid']]['minjj'];
                if(substr(explode('.',$maxjj)[1],0,2)=='99'){
                  $maxjj=sprintf("%.2f", ceil($maxjj));
                }else{
                  $maxjj =sprintf("%.2f", filter_money($maxjj,2));
                }
              }
              $rate = $maxjj;
/*              if($v['rate']!=$maxjj){   //非六合彩判断实际奖金是否正确
                $this->ajaxReturn(['sign'=>false,'message'=>"非法操作3"]);exit;
              };*/
              
            }else{
              $rate = $rates[$v['playid']]['rate'];
/*             if($v['rate']!=$rates[$v['playid']]['rate']){   //六合彩判断实际赔率是否正确
               $this->ajaxReturn(['sign'=>false,'message'=>"非法操作4"]);exit;
             };*/
           }
         }else{
                        $_tzamonut  = $v['price'] * $v["zhushu"]; //xy28 每注金额
                        if( ( $_oktztotal + $_tzamonut ) > intval($rates[$v['playid']]['maxxf']) ){
                          return(['sign'=>false,'message'=>$v['playtitle']."最高投注金额为".$rates[$v['playid']]['maxxf']]);
                        }
                        $rate = $rates[$v['playid']]['rate'];
                      }

          $_tzamonut  = $v['price'];    //全部注数总金额
          if( $_tzamonut > intval($rates[$v['playid']]['maxxf']) ){
            return(['sign'=>false,'message'=>$v['playtitle']."最高投注金额为".$rates[$v['playid']]['maxxf']]);
          }
        }else{
          $_tzamonut  = $v['price'] * $v["zhushu"]; //K3 每注金额
          if( ( $_oktztotal + $_tzamonut ) > intval($rates[$v['playid']]['maxxf']) ){
            return(['sign'=>false,'message'=>$v['playtitle']."最高投注金额为".$rates[$v['playid']]['maxxf']]);
          }
          $rate = $rates[$v['playid']]['rate'];
/*           if($v['rate']!=$rates[$v['playid']]['rate']){   //判断实际赔率是否正确
             $this->ajaxReturn(['sign'=>false,'message'=>"非法操作5"]);exit;
           };*/
         }

         
       }
       if(intval($v['zhushu'])<=0){
        return(['sign'=>false,'message'=>$v['playtitle'].'投注注数错误']);
      }
      if(intval($v['totalzs'])<=0){
        return(['sign'=>false,'message'=>$v['playtitle']."系统参数[总注数]设置错误"]);
      }
      if(intval($v['zhushu'])>intval($v['totalzs'])){
        return(['sign'=>false,'message'=>$v['playtitle']."最高{$v['totalzs']}注"]);
      }

      if(strstr($_REQUEST['lotteryname'],'k3') ){
        if(count(explode('#',$v['number']))!=intval($v['zhushu']) ){
          $this->ajaxReturn(['sign'=>false,'message'=>$v['playtitle']."-系统检测到您的投注注数异常1"]);exit;
        }
        $totalprice += $v['price'] * $v["zhushu"];
      }else{
        $totalprice += $v['price'];
      }
    }

    if($userinfo['islock']==1){
      return(['sign'=>false,'message'=>$v['playtitle']."系统参数[总注数]设置错误"]);
    }
    
    
    
    
    
    //修改金额
    //合买重新计算付款金额
    //计算每份的金额
    $fenshuhemai=$apiparam["orderList"]["fenshuhemai"];//intval($_REQUEST['fenshuhemai']);
    $rengouhemai=$apiparam["orderList"]["rengouhemai"]; //intval($_REQUEST['rengouhemai']);
    $isbaodi=$apiparam["orderList"]["isbaodi"]; //intval($_REQUEST['isbaodi']);
    $baodihemai=$apiparam["orderList"]["baodihemai"]; //intval($_REQUEST['baodihemai']);
    
    
    
    $nendpay=0;
    //每份金额
    $picmeney=$totalprice/$fenshuhemai;
    if($isbaodi>0){
      $nendpay=($rengouhemai+$baodihemai)*$picmeney;
    }else{
      $nendpay=$rengouhemai*$picmeney;
    }
    
    if($userinfo['balance']<$nendpay){
      return(['sign'=>false,'message'=>"账户余额不足"]);
    }

    $_t = time();
    $tzdb = M('touzhu');
    $tzdbhm = M('touzhuhm');
    $memdb = M('member');
    foreach($_REQUEST['orderList'] as $k=>$v){
      $data = [];
      $trano          = gettrano(1);
      $data['isdraw'] = 0;
      $data['trano']  = $trano;
      if($v['yjf'])$data['yjf'] = $v['yjf'];
      $data['typeid'] = $cpinfo['typeid'];
      $data['playid'] = $v['playid'];
      $data['playtitle']  = $rates[$v['playid']]['title'];
      $data['cptitle']  = $cpinfo['title'];
      $data['cpname']  = $cpinfo['name'];
      $data['expect']  = $expect;
      $data['uid']  = $userinfo['id'];
      $data['username']  = $userinfo['username'];
      $data['itemcount']  = $v['zhushu'];
      if($typeid!='k3' && $typeid!='lhc')$data['beishu']  = $v['beishu'];
      $data['tzcode']  = $v['number'];

      if(!strstr($_REQUEST['lotteryname'],'k3')){
        $data['amount']  = $v['price'];
        //$data['mode']    = $v['rate'];
        //$data['amount']=abs($rengouhemai*$picmeney);
        $data['payamount'] = abs($rengouhemai*$picmeney);
        
      } else{
        $data['amount']  = $v['price'] * $v["zhushu"];
        $data['payamount']=abs($rengouhemai*$picmeney);
        //$data['mode']  = $rates[$v['playid']]['rate'];
        //$data['amount']=abs($rengouhemai*$picmeney*$v["zhushu"]);       
      }
      
      $data['mode'] = $v['rate'];
      if ($typeid == 'lhc' && $data['playid']== 'tmzx2'){
        $data['repoint']  = 7;
        $data['repointamout']  = $data['amount']*(7/100);
      }else{
        $data['repoint']  = 0;
        $data['repointamout']  = 0;
      }
      if($v['fandian']){
        $data['repoint'] = $v['fandian'];
        $data['repointamout'] = $data['amount'] * $v['fandian'] /100;
      }

      $data['okamount']  = 0;
      $data['okcount']  = 0;
      $data['Chase']  = 0;
      $data['stopChase']  = 0;
      $data['oddtime']  = $_t;
      $data['opencode']  = '';
      $data['source']  = $_REQUEST["source"];

      $oldamount = $memdb->where(['id'=>$userinfo['id']])->getField('balance');//投注前金额
      $data['amountbefor']  = $oldamount;
      //$data['amountafter']  = $oldamount - $data['amount'];
      $data['amountafter']  = $oldamount - $nendpay;
      
      //begin合买资料
      $data['fenshu']  = $fenshuhemai;
      $data['ishemai']  = 1;
      $data['rengou']  = $rengouhemai;
      $data['isbaodi']  = $isbaodi;
      $data['baodi']  = $baodihemai;
      $data['jindu']  =$rengouhemai/$fenshuhemai;
      $data['hemaipic']  = $picmeney;
      $data['isfull']  = $fenshuhemai-$rengouhemai;
      $data['bdjindu']  = $baodihemai/$fenshuhemai;
      $data['showtype'] = $apiparam["orderList"]["isbaomi"];
      $data['realbaodi'] = $baodihemai;
      //end
      
      $addints[] = $_int = $tzdb->data($data)->add();
      
      
      //添加合买数据
      $data['isfull']=0;
      $data['jindu']=0;
      $data['baodi']=$baodihemai;
      $data['isbaodi']=$isbaodi;
      $data['touzhuid']=$_int;
      $data['amount']=abs($rengouhemai*$picmeney);
      $data['time']=time();
      $tzdbhm->data($data)->add();
      
      
      $agentCommissionOpen = M('setting')->where(['name'=>'agent_commission_open'])->getField('value');
      if($typeid != 'k3' && $typeid != 'lhc' && $userinfo['parentid'] !='0' && $agentCommissionOpen){
        $i = 1;
        $this->dailifandian($userinfo['parentid'],$userinfo['fandian'],$data['amount'],$trano,$userinfo['id'],$userinfo['username'],$userinfo['fandian'],$i);
        foreach($this->_parent as $k => $v){
          $dailidata['uid'] = $v['uid'];
          $dailidata['username'] = $v['username'];
          $dailidata['amount'] = $v['fandianjine'];
          $dailidata['touzhujine'] = $v['touzhujine'];
          $dailidata['trano'] = $v['trano'];
          $dailidata['fandian'] = $v['fandian'];
          $dailidata['shenhe'] = 1;
          $dailidata['xiajiid'] = $v['xiajiid'];
          $dailidata['xiajiuser'] = $v['xiajiuser'];
          $dailidata['xiajifandian'] = $v['xiajifandian'];
          $dailidata['oddtime'] = time();
          M('dailifandian')->add($dailidata);

          $amountbefor = M('Member')->where("id='{$dailidata['uid']}'")->getField('balance');
          M('member')->where("id='{$dailidata['uid']}'")->setInc('balance',$dailidata['amount']);
        //添加会员账户明细
          $fuddetaildata = [];
          $fuddetaildata['trano']      = $dailidata['trano'];
          $fuddetaildata['uid']      = $dailidata['uid'];
          $fuddetaildata['username'] =  $dailidata['username'];
          $fuddetaildata['type']     = 'yongjinshenhe';
          $fuddetaildata['typename']     = '佣金发放通过';
          $fuddetaildata['remark']       = $remark?$remark:'佣金发放通过';
          $fuddetaildata['oddtime']     = NOW_TIME;
          $fuddetaildata['amount']   = $dailidata['amount'];
          $fuddetaildata['amountbefor']   = $amountbefor;
          $fuddetaildata['amountafter']   = $amountbefor + $dailidata['amount'];
          M('fuddetail')->data($fuddetaildata)->add();

        }
      }
      if($_int){//操作账户金额、日志等
        //会员账户金额、积分、洗码金额
        $_membercenter = $memdb->where(['id'=>$userinfo['id']])->field('balance,point,xima')->find();
        //投注
        //$memdb->where(['id'=>$userinfo['id']])->setDec('balance',$data['amount']);
        $memdb->where(['id'=>$userinfo['id']])->setDec('balance',abs(($isbaodi*$baodihemai*$picmeney)+($rengouhemai*$picmeney)));
        $fuddetail_data = array();
        $fuddetail_data['trano'] = $trano;
        $fuddetail_data['uid'] = $userinfo['id'];
        $fuddetail_data['username'] = $userinfo['username'];
        
        
        //$fuddetail_data['amount'] = abs($data['amount']);
        $fuddetail_data['amount'] = abs($rengouhemai*$picmeney);
        
        $fuddetail_data['amountbefor'] = $_membercenter['balance'];
        //$fuddetail_data['amountafter'] = $_membercenter['balance']-abs($data['amount']);
        
        $fuddetail_data['amountafter'] = $_membercenter['balance']- abs($rengouhemai*$picmeney);
        $fuddetail_data['oddtime'] = $_t;
        $fuddetail_data['remark'] = "投注扣费，彩种:{$cpinfo['title']},{$expect},{$trano}";
        $fuddetail_data['type'] = 'order';
        $fuddetail_data['typename'] = C('fuddetailtypes.hemai');
        M('fuddetail')->data($fuddetail_data)->add();
        
        
        //扣掉保底金额
        if($isbaodi>0){
          $fuddetail_data['amount'] = abs($baodihemai*$picmeney);
          $fuddetail_data['remark'] = "保底扣费，彩种:{$cpinfo['title']},{$expect},{$trano}";
          $fuddetail_data['amountbefor'] = $fuddetail_data['amountafter'];
          $fuddetail_data['amountafter'] = $fuddetail_data['amountafter'] - abs($baodihemai*$picmeney);
          $fuddetail_data['typename'] = C('fuddetailtypes.baodi');
          M('fuddetail')->data($fuddetail_data)->add();
        }
            //洗码
        if($_membercenter['xima']>0){
                   // $ximaamount = $data['amount'];           
          $ximaamount = abs(($isbaodi*$baodihemai*$picmeney)+($rengouhemai*$picmeney));
          if($data['amount']>$_membercenter['xima']){
            $ximaamount = $_membercenter['xima'];
          }
          $memdb->where(['id'=>$userinfo['id']])->setDec('xima',$ximaamount);
          $fuddetail_data = array();
          $fuddetail_data['trano'] = $trano;
          $fuddetail_data['uid'] = $userinfo['id'];
          $fuddetail_data['username'] = $userinfo['username'];
          
          $fuddetail_data['amount'] = abs($ximaamount);
          $fuddetail_data['amountbefor'] = $_membercenter['xima'];
          $fuddetail_data['amountafter'] = $_membercenter['xima']-abs($ximaamount);
          $fuddetail_data['oddtime'] = $_t;
          $fuddetail_data['remark'] = "投注减，彩种:{$cpinfo['title']},{$expect},{$trano}";
          $fuddetail_data['type'] = 'xima';
          $fuddetail_data['typename'] = C('fuddetailtypes.hmxima');
          M('fuddetail')->data($fuddetail_data)->add();
        }else{
          $memdb->where(['id'=>$userinfo['id']])->setField('xima',0);
        }

        //每消费增加积分
        /*  $pointtouzhu    = intval(GetVar('pointtouzhu'));
                    $pointtouzhuadd = intval(GetVar('pointtouzhuadd'));
                                    if($pointtouzhu>0 && $pointtouzhuadd>0){
                                        $_addpoint = number_format(abs($data['amount'])*$pointtouzhuadd/$pointtouzhu,4,".","");
                                        if($_addpoint>0){
                                            $memdb->where(['id'=>$userinfo['id']])->setInc('point',$_addpoint);
                                            $fuddetail_data = array();
                                            $fuddetail_data['trano'] = $trano;
                                            $fuddetail_data['uid'] = $userinfo['id'];
                                            $fuddetail_data['username'] = $userinfo['username'];
                                            $fuddetail_data['amount'] = abs($_addpoint);
                                            $fuddetail_data['amountbefor'] = $_membercenter['point'];
                                            $fuddetail_data['amountafter'] = $_membercenter['point']+abs($_addpoint);
                                            $fuddetail_data['oddtime'] = $_t;
                                            $fuddetail_data['remark'] = "投注送积分，彩种:{$cpinfo['title']},{$expect}";
                                            $fuddetail_data['type'] = 'point';
                                            $fuddetail_data['typename'] = C('fuddetailtypes.point');
                                            M('fuddetail')->data($fuddetail_data)->add();
                                        }
                                      }*/
                                    }
      //$apiparam['data'][] = $data;
                                  }
                                  if(count(array_filter($addints))>0){
                                    $apiparam['sign'] = true;
                                    $apiparam['message'] = '投注成功';
                                  }else{
                                    $apiparam['sign'] = false;
                                    $apiparam['message'] = '投注失败1';
                                  }
                                  return $apiparam;
                                }
                                
                                

                                function curl_file_get_contents($durl){
        // header传送格式
                                  $headers = array();
        // 初始化
                                  $curl = curl_init();
        // 设置url路径
                                  curl_setopt($curl, CURLOPT_URL, $durl);
        // 将 curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
                                  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true) ;
        // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
                                  curl_setopt($curl, CURLOPT_BINARYTRANSFER, true) ;
        // 添加头信息
                                  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // CURLINFO_HEADER_OUT选项可以拿到请求头信息
                                  curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        // 不验证SSL
                                  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
                                  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        // 执行
                                  $data = curl_exec($curl);
                                  curl_close($curl);
        // 返回数据
                                  return $data;
                                }
                                
                                
                                

  //极速快三开奖
                                function check($expect=''){
                                  $playidArr = ['tmlmda','tmlmxiao','tmlmdan','tmlmshuang','tmlmdadan','tmlmdashuang','tmlmxiaodan','tmlmxiaoshuang','tmlmheda','tmlmhexiao','tmlmhedan','tmlmheshuang','tmlmweida','tmlmweixiao','tmlmjiaqin','tmlmyeshou','tmlmhongbo','tmlmlvbo','tmlmlanbo',
                                  'zm1lmda','zm1lmxiao','zm1lmdan','zm1lmshuang','zm1lmdadan','zm1lmdashuang','zm1lmxiaodan','zm1lmxiaoshuang','zm1lmheda','zm1lmhexiao','zm1lmhedan','zm1lmheshuang','zm1lmweida', 'zm1lmweixiao','zm1lmjiaqin','zm1lmyeshou','zm1lmhongbo','zm1lmlvbo','zm1lmlanbo',
                                  'zm2lmda','zm2lmxiao','zm2lmdan','zm2lmshuang','zm2lmdadan','zm2lmdashuang','zm2lmxiaodan','zm2lmxiaoshuang','zm2lmheda','zm2lmhexiao','zm2lmhedan','zm2lmheshuang','zm2lmweida','zm2lmweixiao','zm2lmjiaqin','zm2lmyeshou','zm2lmhongbo','zm2lmlvbo','zm2lmlanbo',
                                  'zm3lmda','zm3lmxiao','zm3lmdan','zm3lmshuang','zm3lmdadan','zm3lmdashuang','zm3lmxiaodan','zm3lmxiaoshuang','zm3lmheda','zm3lmhexiao','zm3lmhedan','zm3lmheshuang','zm3lmweida','zm3lmweixiao','zm3lmjiaqin','zm3lmyeshou','zm3lmhongbo','zm3lmlvbo','zm3lmlanbo',
                                  'zm4lmda','zm4lmxiao','zm4lmdan','zm4lmshuang','zm4lmdadan','zm4lmdashuang','zm4lmxiaodan','zm4lmxiaoshuang','zm4lmheda','zm4lmhexiao','zm4lmhedan','zm4lmheshuang','zm4lmweida','zm4lmweixiao','zm4lmjiaqin','zm4lmyeshou','zm4lmhongbo','zm4lmlvbo','zm4lmlanbo',
                                  'zm5lmda','zm5lmxiao','zm5lmdan','zm5lmshuang','zm5lmdadan','zm5lmdashuang','zm5lmxiaodan','zm5lmxiaoshuang','zm5lmheda','zm5lmhexiao','zm5lmhedan','zm5lmheshuang','zm5lmweida','zm5lmweixiao','zm5lmjiaqin','zm5lmyeshou','zm5lmhongbo','zm5lmlvbo','zm5lmlanbo',
                                  'zm6lmda','zm6lmxiao','zm6lmdan','zm6lmshuang','zm6lmdadan','zm6lmdashuang','zm6lmxiaodan','zm6lmxiaoshuang','zm6lmheda','zm6lmhexiao','zm6lmhedan','zm6lmheshuang','zm6lmweida','zm6lmweixiao','zm6lmjiaqin','zm6lmyeshou','zm6lmhongbo','zm6lmlvbo','zm6lmlanbo',
                                ];
                                
                                $touzhulist =  M('touzhu')->where(['cpname'=>'jisk3','expect'=>$expect])->select();
                                $memberdb    = D('member');
                                $fuddetaildb = D('fuddetail');
                                $touzhudb    = D('touzhu');
                                $DB_PREFIX = C('DB_PREFIX');
                                $shada = M('caipiao')->where("name='jisk3'")->find();

                                if ($shada['issd']==1) {
                                  $kjamount=0;
                                  $kjamountss=0;
                                  $ss=0;
                                  $variable=self::rand_keyo();

                                  foreach ($variable as $value) {
                                    
                                    $opencode    =$value;
                                    
                                    $jianyeurl = "http://127.0.0.5/kaijiang.Ks.check.opencode.".$opencode.".expect.".$expect.".cpname.jisk3";

                                    $amount= $this->curl_file_get_contents($jianyeurl);
                                    
                                    if($kjamountss==0){

                                      $kjamount=$amount;
                                      $opencode    =$value;
                                      $kjamountss=1;

                                    }else{

                                      if ($amount<$kjamount) {
                                        $kjamount=$amount;
                                        $opencode    =$value;
                                      }

                                    }

                                    if($kjamount==0){
                                      $opencode    =$value;
                                      $ss=1;
                                      break;

                                    }
        }//foreach

      // if($ss==0){
      //   $opencode    =$value;
        
      //  }
        

      }else{
        $rand_keys           =  [];
        $rand_keys           =  explode(',',self::rand_keys('3','123456'));
        sort($rand_keys);
        $opencode    =  implode(',',$rand_keys);
      }
      
         // print_r($touzhulist);exit();
      $_ZJARRAY = [];

      foreach($touzhulist as $k=>$item){
        $_kjfile = $dir = COMMON_PATH. "Lib/kaijiang/k3.class.php";
        if($_kjfile){

          $class = "\Lib\kaijiang\k3";
          $_obj  = new $class();
          $playid= $item['playid'];
          $item['iszjokcount'] = 0;

          if(in_array($playid,$playidArr) && $item['typeid']=='lhc'){
            if(strstr($playid,'tmlm')){
              $playsonid = substr($playid,2,(strlen($playid)-2));
              $key = 6;
            }else{
              $playsonid = substr($playid,3,(strlen($playid)-2));
              $key = substr($playid,2,1)-1;
            }
            $opencodes = $opencode;
            $item['iszjokcount'] =self::$playsonid($opencodes[$key],$item['tzcode'],$playsonid);
          }else{

          //if(method_exists($_obj,$playid)){//如果类方法存在

            $item['iszjokcount'] = self::$playid($opencode,$item['tzcode']);
            
          //}
          }

        }
      //jarde

        if(in_array($item['playid'],array('sjdx1','sjdx2','sjdx3','sjdx4','sjdx5','sjdx6'))){
          $item['mode'] = '1.00';
        }
      //处理中奖信息
        $memint = $touzhuint = $fudint = 0;
        $iskj = $touzhudb->where(['id'=>$item['id']])->getField('isdraw');

        if($iskj!=0){
          continue;
        }

        $item['iszjcount'] = $item['iszjokcount'];
             // print_r($playid);exit();
      if($item['iszjcount']>=1){//中
        $_typeid0 = $item['typeid'];
        if(strstr($item["mode"],'|')){
          $num = count(explode('|',$item['mode']));
          for($i=0;$i<$num;$i++){
            if($item["iszjcount"][$i]>0){
              $item['zjcount'] += $item["iszjcount"][$i];
            }
          }
        }else{
          $item['zjcount']=$item['iszjokcount'];
        }
        // print_r($_typeid0);exit();
        $okamount =self::$_typeid0($item);
        $userinfo = [];

        $userbalance = $memberdb->where(['id'=>$item['uid']])->getField('balance');
        //事务开始
        $memberdb->startTrans();
        $memint = $memberdb->where(['id'=>$item['uid']])->setInc('balance',$okamount);//账户增加金额
        //修改投注为中奖状态

        $touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>1,'okcount'=>$item['zjcount'],'okamount'=>$okamount,'opencode'=>$opencode]);
        
        // 账变记录
        $fdata = [];
        $fdata['trano'] = $item['trano'];
        $fdata['uid'] = $item['uid'];
        $fdata['username'] = $item['username'];
        $fdata['type'] = 'reward';
        $fdata['typename'] = '返奖';
        $fdata['amount'] = $okamount;
        $fdata['amountbefor'] = $userbalance;
        $fdata['amountafter'] = $userbalance + $okamount;
        $fdata['oddtime'] = time();
        $fdata['remark'] = $item['cptitle'] .'第'. $item['expect'] . '期-' . $item['playtitle'];
        $fudint = $fuddetaildb->data($fdata)->add();

        if($memint && $touzhuint && $fudint){
          $memberdb->commit();//提交事物
          $_ZJARRAY[] = $item['username'] . "-" .$item['cptitle'] .'第'. $item['expect'] . '期-' . "中奖金额：".$okamount;
        }else{
          $memberdb->rollback();//事物回滚
        }
      }else if($item['iszjcount']<1){//未中
        $okamount = -$item['amount'];
        $touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>-1,'okcount'=>0,'okamount'=>0,'opencode'=>$opencode]);
        
      }
      
    }


  }

  function rand_keyo(){
   for($i=1;$i<=6;$i++){
    
    
    for($j=1;$j<=6;$j++){
      
      
      for($k=1;$k<=6;$k++){
        
        
        $s[]=$i.','.$j.','.$k;
        
      }
      
    }
    
  }

  shuffle($s);
  $s=array_slice($s,0,10);
  return($s);
  
  
  
}

protected function rand_keys($len = 5,$str='0123456789') {
  $rand = '';
  for ($x=0;$x<$len;$x++) {
    $rand .= ($rand != '' ? ',' : '').substr($str, rand(0, strlen($str) - 1), 1);
  }
  return $rand;
}
// 递归处理代理返点
function dailifandian($parentid,$fandian,$amount,$trano,$xiajiid,$xiajiuser,$xiajifandian,$i,$typeid,$playid = array()){
  $typs = array(
    "ssc" => "ssc",
    "k3" => "k3",
    "x5" => "x5",
    "pl3" => "pl3",
    "kl8" => "kl8",
    "pk10" => "pk10",
    "lhc" => "lhc",
    "xy28" => "xy28",
  );

    //查找上级的返点
  $where['id'] = $parentid;
  if(!(int)$fandian){
    $fandian     = "{".htmlspecialchars_decode($fandian)."}";
    $fandian     = preg_replace("/&quot/","\"",$fandian);
    $fandian     = json_decode($fandian,true);
    $fandian    = $fandian[$typs[$typeid]]; 
  }
  $daili = M('member')->field('id,parentid,fandian,username')->where($where)->find();
     // print_r($where);exit();
  $daili['fandian']     = "{".htmlspecialchars_decode($daili['fandian'])."}";
  $daili['fandian']     = preg_replace("/&quot/","\"",$daili['fandian']);
  $daili['fandian']      = json_decode($daili['fandian'],true);
  $daili['fandian']     = $daili['fandian'][$typs[$typeid]]; 
    // var_dump($daili['fandian']);exit;
    $fandianjine = ((($daili['fandian']-$fandian)/100))*$amount;          //第一次反点金额 (代理返点-下级返点)/100*下级投注金额
    
    // var_dump($daili['fandian']);exit;
    $this->_parent[$i]["fandianjine"] = $fandianjine;
    $this->_parent[$i]["uid"] = $daili['id'];
    if($fandian-$daili['fandian'] > 0){
      $this->_parent[$i]["fandian"] = $fandian-$daili['fandian'];
    }else{
      $this->_parent[$i]["fandian"] = $daili['fandian'];
    }
    if(!empty($playid) && in_array($playid,array('sjdx1','sjdx2','sjdx3','sjdx4','sjdx5','sjdx6')) && $fandianjine > 0){ //,'sjdxd','sjdxs'
    $this->_parent[$i]["fandianjine"] = $fandianjine = $amount*0.005;
  }

  $this->_parent[$i]["xiajiid"] = $xiajiid;
  $this->_parent[$i]["xiajiuser"] = $xiajiuser;
  $this->_parent[$i]["xiajifandian"] = $xiajifandian;
  $this->_parent[$i]["username"] = $daili['username'];
  $this->_parent[$i]["touzhujine"]  = $amount;
  $this->_parent[$i]["trano"] = $trano;
  $this->_parent[$i]["oddtime"] = time();
  $i++;

  if($daili['parentid']!='0'){
    $this->dailifandian($daili['parentid'],$daili['fandian'],$amount,$trano,$daili['id'],$daili['username'],$daili['fandian'],$i,$typeid);

  }

}



protected function k3($res){
  $okamount = ($res['amount']/$res['itemcount'])*$res['mode']*$res['zjcount'];
  return $okamount;
}


    /*
  ** 二同号复选
  */
    function k3ethfx($opencode,$tzcode){
      $opencodes = explode(',',$opencode);
      $tzcodes   = explode('#',$tzcode);
      sort($opencodes);
      $zjcount   = 0;
      foreach($tzcodes as $k=>$v){
        if(substr_count(implode('',$opencodes),$v) && strlen($v)==2 && substr($v,0,1)==substr($v,-1)){
          $zjcount++;
        }
      }
      return $zjcount;
    }
  /*
  ** 二同号单选
  */
  function k3ethdx($opencode,$tzcode){
    $opencodes = explode(',',$opencode);
    $tzcodes   = explode('#',$tzcode);
    $acs       = array_count_values($opencodes);
    sort($opencodes);
    $zjcount   = 0;
    foreach($tzcodes as $k=>$v){
      $array = [];
      $array = str_split($v,1);
      sort($array);
      if(count($acs)==2 && count($array)==3 && substr_count(implode('',$opencodes),implode('',$array))){
        $zjcount = 1;
      }
    }
    return $zjcount;
  }
  /*
  ** 二不同号标准
  */
  function k3ebthbz($opencode,$tzcode){
    $opencodes = explode(',',$opencode);
    $tzcodes   = explode('#',$tzcode);
    //$combinations = self::combination($tzcodes,2);
    $zjcount   = 0;
    if(count(array_unique($opencodes))>=2)foreach($tzcodes as $k=>$v){
      $arr = [];
      $arr = explode(',',$v);
      if(strlen($arr[0])!=1 || strlen($arr[1])!=1)return 0;
      if(count(array_unique($arr))==2 && in_array($arr[0],$opencodes) && in_array($arr[1],$opencodes)){
        $zjcount++;
      }
      /*if(in_array($v[0],$opencodes) && in_array($v[1],$opencodes) && $v[0]!=$v[1]){
        $tzcodes++;
      }*/
    }
    return $zjcount;
  }
  /*
  ** 三同号单选
  */
  function k3sthdx($opencode,$tzcode){
    $opencodes = explode(',',$opencode);
    $tzcodes   = explode('#',$tzcode);
    sort($opencodes);
    $zjcount   = 0;
    foreach($tzcodes as $k=>$v){
      if(strlen($v)==3 && $v==implode('',$opencodes) && count(array_unique($opencodes))==1){
        $zjcount++;
      }
    }
    return $zjcount;
  }
  /*
  ** 三同号通选
  */
  function k3sthtx($opencode,$tzcode){
    $opencodes = explode(',',$opencode);
    //$tzcodes   = explode(',',$tzcode);
    $zjcount   = 0;
    if(count(array_unique($opencodes))==1 && $tzcode=='三同号通选'){
      $zjcount = 1;
    }
    return $zjcount;
  }
  /*
  ** 三不同号标准
  */
  function k3sbthbz($opencode,$tzcode){
    $opencodes = explode(',',$opencode);
    $tzcodes   = explode('#',$tzcode);
    //$combinations = self::combination($tzcodes,3);
    $zjcount   = 0;
    
    if(count(array_unique($opencodes))==3)foreach($tzcodes as $k=>$v){
      $arr = [];
      $arr = explode(',',$v);
      if(strlen($arr[0])!=1 || strlen($arr[1])!=1 || strlen($arr[2])!=1)return 0;
      if(count(array_unique($arr))==3 && in_array($arr[0],$opencodes) && in_array($arr[1],$opencodes) && in_array($arr[2],$opencodes)){
        $zjcount++;
      }
      /*if(in_array($v[0],$opencodes) && in_array($v[1],$opencodes) && $v[0]!=$v[1]){
        $tzcodes++;
      }*/
    }
    return $zjcount;
  }
  
  /*
  ** 三连号通选
  */
  function k3slhtx($opencode,$tzcode){
    $opencodes = explode(',',$opencode);
    //$tzcodes   = explode('|',$tzcode);
    sort($opencodes);
    $zjcount   = 0;
    if(abs($opencodes[1]-$opencodes[0])==1 && abs($opencodes[1]-$opencodes[2])==1 && count(array_unique($opencodes))==3 && $tzcode=='三连号通选'){
      $zjcount   = 1;
    }
    return $zjcount;
  }
  /*
  ** 三连号单选
  */
  function k3slhdx($opencode,$tzcode){
    $opencodes = explode(',',$opencode);
    $tzcodes   = explode('#',$tzcode);
    sort($opencodes);
    $opcodestr = implode('',$opencodes);
    $zjcount   = 0;
    if(in_array($opcodestr,$tzcodes) && count(array_unique($opencodes))==3 && abs($opencodes[1]-$opencodes[0])==1 && abs($opencodes[1]-$opencodes[2])==1){
      $zjcount   = 1;
    }
    return $zjcount;
  }
  /*
  ** 和值
  */
  function k3hz3($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==3 && $tzcode==3){$zjcount=1;};return $zjcount;
  }
  function k3hz4($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==4 && $tzcode==4){$zjcount=1;};return $zjcount;
  }
  function k3hz5($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==5 && $tzcode==5){$zjcount=1;};return $zjcount;
  }
  function k3hz6($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==6 && $tzcode==6){$zjcount=1;};return $zjcount;
  }
  function k3hz7($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==7 && $tzcode==7){$zjcount=1;};return $zjcount;
  }
  function k3hz8($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==8 && $tzcode==8){$zjcount=1;};return $zjcount;
  }
  function k3hz9($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==9 && $tzcode==9){$zjcount=1;};return $zjcount;
  }
  function k3hz10($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==10 && $tzcode==10){$zjcount=1;};return $zjcount;
  }
  function k3hz11($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==11 && $tzcode==11){$zjcount=1;};return $zjcount;
  }
  function k3hz12($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==12 && $tzcode==12){$zjcount=1;};return $zjcount;
  }
  function k3hz13($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==13 && $tzcode==13){$zjcount=1;};return $zjcount;
  }
  function k3hz14($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==14 && $tzcode==14){$zjcount=1;};return $zjcount;
  }
  function k3hz15($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==15 && $tzcode==15){$zjcount=1;};return $zjcount;
  }
  function k3hz16($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==16 && $tzcode==16){$zjcount=1;};return $zjcount;
  }
  function k3hz17($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==17 && $tzcode==17){$zjcount=1;};return $zjcount;
  }
  function k3hz18($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum==18 && $tzcode==18){$zjcount=1;};return $zjcount;
  }
  function k3hzbig($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum>10 && $tzcode=='大'){$zjcount=1;};return $zjcount;
  }
  function k3hzsmall($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum<=10 && $tzcode=='小'){$zjcount=1;};return $zjcount;
  }
  function k3hzeven($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum%2==0 && $tzcode=='双'){$zjcount=1;};return $zjcount;
  }
  function k3hzodd($opencode,$tzcode){
    $opencodes = explode(',',$opencode);$sum = array_sum($opencodes);$zjcount   = 0;if($sum%2!=0 && $tzcode=='单'){$zjcount=1;};return $zjcount;
  }

  // 阶乘  
  function factorial($n) {  
    return array_product(range(1, $n));  
  }  
  
  // 排列数  
  function A($n, $m) {  
    return self::factorial($n)/self::factorial($n-$m);  
  }  
  
  // 组合数  
  function C($n, $m) {  
    return self::A($n, $m)/self::factorial($m);  
  }   
  // 排列  
  function arrangement($a, $m) {  
    $r = array();  
    
    $n = count($a);  
    if ($m <= 0 || $m > $n) {  
      return $r;  
    }  
    
    for ($i=0; $i<$n; $i++) {  
      $b = $a;  
      $t = array_splice($b, $i, 1);  
      if ($m == 1) {  
        $r[] = $t;  
      } else {  
        $c = self::arrangement($b, $m-1);  
        foreach ($c as $v) {  
          $r[] = array_merge($t, $v);  
        }  
      }  
    }  
    
    return $r;  
  }   
  // 组合  
  function combination($a, $m) {  
    $r = array();  
    
    $n = count($a);  
    if ($m <= 0 || $m > $n) {  
      return $r;  
    }  
    
    for ($i=0; $i<$n; $i++) {  
      $t = array($a[$i]);  
      if ($m == 1) {  
        $r[] = $t;  
      } else {  
        $b = array_slice($a, $i+1);  
        $c = self::combination($b, $m-1);  
        foreach ($c as $v) {  
          $r[] = array_merge($t, $v);  
        }  
      }  
    }  
    
    return $r;  
  } 

  
  
  function sjdx1($a, $m){
    $a = explode(',',$a);
    if(in_array(1,$a)){
      $nums = array_count_values($a);
      return $nums[1]+1;
    }
    return 0;
  }
  function sjdx2($a, $m){
    $a = explode(',',$a);
    if(in_array(2,$a)){
      $nums = array_count_values($a);
      return $nums[2]+1;
    }
    return 0;
  }
  function sjdx3($a, $m){
    $a = explode(',',$a);
    if(in_array(3,$a)){
      $nums = array_count_values($a);
      return $nums[3]+1;
    }
    return 0;
  }
  function sjdx4($a, $m){
    $a = explode(',',$a);
    if(in_array(4,$a)){
      $nums = array_count_values($a);
      return $nums[4]+1;
    }
    return 0;
  }
  function sjdx5($a, $m){
    $a = explode(',',$a);
    if(in_array(5,$a)){
      $nums = array_count_values($a);
      return $nums[5]+1;
    }
    return 0;
  }
  function sjdx6($a, $m){
    $a = explode(',',$a);
    if(in_array(6,$a)){
      $nums = array_count_values($a);
      return $nums[6]+1;
    }
    return 0;
  }
  function sjdxd($a, $m){
    $a = explode(',',$a);
    
    if(array_sum($a) > 10 && array_sum($a) <= 18){
      return 1;
    }
    return 0;
  }
  function sjdxs($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) >= 3 && array_sum($a) <= 10){
      return 1;
    }
    return 0;
  }
  function wsqs111($a, $m){
    $a = explode(',',$a);
    if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 1){
      return 1;
    }
    return 0;
  }
  function wsqs222($a, $m){
    
    $a = explode(',',$a);
    if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 2){
      return 1;
    }
    return 0;
  }
  function wsqs333($a, $m){
    
    $a = explode(',',$a);
    if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 3){
      return 1;
    }
    return 0;
  }
  function wsqs444($a, $m){
    
    $a = explode(',',$a);
    if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 4){
      return 1;
    }
    return 0;
  }
  function wsqs555($a, $m){
    
    $a = explode(',',$a);
    if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 5){
      return 1;
    }
    return 0;
  }
  function wsqs666($a, $m){
    
    $a = explode(',',$a);
    if($a[0] == $a[1] && $a[0] == $a[2] && $a[0] == 6){
      return 1;
    }
    return 0;
  }
  function wsqsqqq($a, $m){
    $a = explode(',',$a);
    if($a[0] == $a[1] && $a[0] == $a[2]){
      return 1;
    }
    return 0;
  }

  function ds4($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 4){
      return 1;
    }
    return 0;
  }
  function ds5($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 5){
      return 1;
    }
    return 0;
  }
  function ds6($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 6){
      return 1;
    }
    return 0;
  }
  function ds7($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 7){
      return 1;
    }
    return 0;
  }
  function ds8($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 8){
      return 1;
    }
    return 0;
  }
  function ds9($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 9){
      return 1;
    }
    return 0;
  }
  function ds10($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 10){
      return 1;
    }
    return 0;
  }
  function ds11($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 11){
      return 1;
    }
    return 0;
  }
  function ds12($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 12){
      return 1;
    }
    return 0;
  }
  function ds13($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 13){
      return 1;
    }
    return 0;
  }
  function ds14($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 14){
      return 1;
    }
    return 0;
  }
  function ds15($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 15){
      return 1;
    }
    return 0;
  }
  function ds16($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 16){
      return 1;
    }
    return 0;
  }
  function ds17($a, $m){
    $a = explode(',',$a);
    if(array_sum($a) == 17){
      return 1;
    }
    return 0;
  }


  function cp12($a, $m){
    $a = explode(',',$a);
    if(in_array(1,$a) && in_array(2,$a)){
      return 1;
    }
    return 0;
  }
  function cp13($a, $m){
    $a = explode(',',$a);
    if(in_array(1,$a) && in_array(3,$a)){
      return 1;
    }
    return 0;
  }
  function cp14($a, $m){
    $a = explode(',',$a);
    if(in_array(1,$a) && in_array(4,$a)){
      return 1;
    }
    return 0;
  }
  function cp15($a, $m){
    $a = explode(',',$a);
    if(in_array(1,$a) && in_array(5,$a)){
      return 1;
    }
    return 0;
  }
  function cp16($a, $m){
    $a = explode(',',$a);
    if(in_array(1,$a) && in_array(6,$a)){
      return 1;
    }
    return 0;
  }
  function cp23($a, $m){
    $a = explode(',',$a);
    if(in_array(2,$a) && in_array(3,$a)){
      return 1;
    }
    return 0;
  }
  function cp24($a, $m){
    $a = explode(',',$a);
    if(in_array(2,$a) && in_array(4,$a)){
      return 1;
    }
    return 0;
  }
  function cp25($a, $m){
    $a = explode(',',$a);
    if(in_array(2,$a) && in_array(5,$a)){
      return 1;
    }
    return 0;
  }
  function cp26($a, $m){
    $a = explode(',',$a);
    if(in_array(2,$a) && in_array(6,$a)){
      return 1;
    }
    return 0;
  }
  function cp34($a, $m){
    $a = explode(',',$a);
    if(in_array(3,$a) && in_array(4,$a)){
      return 1;
    }
    return 0;
  }
  function cp35($a, $m){
    $a = explode(',',$a);
    if(in_array(3,$a) && in_array(5,$a)){
      return 1;
    }
    return 0;
  }
  function cp36($a, $m){
    $a = explode(',',$a);
    if(in_array(3,$a) && in_array(6,$a)){
      return 1;
    }
    return 0;
  }
  function cp45($a, $m){
    $a = explode(',',$a);
    if(in_array(4,$a) && in_array(5,$a)){
      return 1;
    }
    return 0;
  }
  function cp46($a, $m){
    $a = explode(',',$a);
    if(in_array(4,$a) && in_array(6,$a)){
      return 1;
    }
    return 0;
  }
  function cp56($a, $m){
    $a = explode(',',$a);
    if(in_array(5,$a) && in_array(6,$a)){
      return 1;
    }
    return 0;
  }

  function dp11($a, $m){
    $a = explode(',',$a);
    $a = array_count_values($a);
    if($a[1] == 2){
      return 1;
    }
    return 0;
  }
  function dp22($a, $m){
    $a = explode(',',$a);
    $a = array_count_values($a);
    if($a[2] == 2){
      return 1;
    }
    return 0;
  }
  function dp33($a, $m){
    $a = explode(',',$a);
    $a = array_count_values($a);
    if($a[3] == 2){
      return 1;
    }
    return 0;
  }
  function dp44($a, $m){
    $a = explode(',',$a);
    $a = array_count_values($a);
    if($a[4] == 2){
      return 1;
    }
    return 0;
  }
  function dp55($a, $m){
    $a = explode(',',$a);
    $a = array_count_values($a);
    if($a[5] == 2){
      return 1;
    }
    return 0;
  }
  function dp66($a, $m){
    $a = explode(',',$a);
    $a = array_count_values($a);
    if($a[6] == 2){
      return 1;
    }
    return 0;
  }

  function k3hzbigodd($a, $m){
    $a = explode(',',$a);
    $sum = array_sum($a);
    if($sum > 10 && $sum%2!=0){
      return 1;
    }
    return 0;
  }
  function k3hzsmallodd($a, $m){
    $a = explode(',',$a);
    $sum = array_sum($a);
    if($sum <= 10 && $sum%2!=0){
      return 1;
    }
    return 0;
  }
  function k3hzbigeven($a, $m){
    $a = explode(',',$a);
    $sum = array_sum($a);
    if($sum > 10 && $sum%2==0){
      return 1;
    }
    return 0;
  }
  function k3hzsmalleven($a, $m){
    $a = explode(',',$a);
    $sum = array_sum($a);
    if($sum <= 10 && $sum%2==0){
      return 1;
    }
    return 0;
  }

  function hhmhong ($a, $m){
    $a = explode(',',$a);
    if($a[0] == $a[1] || $a[1] == $a[2]){
      return 1;
    }
    return 0;
  }
  function hhmhei ($a, $m){
    $a = explode(',',$a);
    if($a[0] != $a[1] && $a[1] != $a[2]){
      return 1;
    }
    return 0;
  }
  function hhmhongd ($a, $m){
    $a = explode(',',$a);
    if($a[0] == $a[1] || $a[1] == $a[2]){
      if(array_sum($a) > 10){
        return 1;
      }
    }
    return 0;
  }
  function hhmhongx ($a, $m){
    $a = explode(',',$a);
    if($a[0] == $a[1] || $a[1] == $a[2]){
      if(array_sum($a) <= 10){
        return 1;
      }
    }
    return 0;
  }
  function hhmhongdd ($a, $m){
    $a = explode(',',$a);
    if($a[0] == $a[1] || $a[1] == $a[2]){
      if(array_sum($a)%2 != 0){
        return 1;
      }
    }
    return 0;
  }
  function hhmhongss ($a, $m){
    $a = explode(',',$a);
    if($a[0] == $a[1] || $a[1] == $a[2]){
      if(array_sum($a)%2 == 0){
        return 1;
      }
    }
    return 0;
  }
  function hhmheid ($a, $m){
    $a = explode(',',$a);
    if($a[0] != $a[1] && $a[1] != $a[2]){
      if(array_sum($a) > 10){
        return 1;
      }
    }
    return 0;
  }
  function hhmheix ($a, $m){
    $a = explode(',',$a);
    if($a[0] != $a[1] && $a[1] != $a[2]){
      if(array_sum($a) <= 10){
        return 1;
      }
    }
    return 0;
  }
  function hhmheidd ($a, $m){
    $a = explode(',',$a);
    if($a[0] != $a[1] && $a[1] != $a[2]){
      if(array_sum($a)%2 != 0){
        return 1;
      }
    }
    return 0;
  }
  function hhmheixx ($a, $m){
    $a = explode(',',$a);
    if($a[0] != $a[1] && $a[1] != $a[2]){
      if(array_sum($a)%2 == 0){
        return 1;
      }
    }
    return 0;
  }
  function hhmhong4hong ($a, $m){
    $a = explode(',',$a);
    $m = explode(',',$m);
    if($a[0] == $a[1] || $a[1] == $a[2]){
      foreach ($a as $val) {
        if(!in_array($val,$m)) return 0;
      }
      return 1;
    }
    return 0;
  }
  function hhmhong4hei ($a, $m){
    $a = explode(',',$a);
    $m = explode(',',$m);
    if($a[0] != $a[1] && $a[1] != $a[2]){
      foreach ($a as $val) {
        if(!in_array($val,$m)) return 0;
      }
      return 1;
    }
    return 0;
  }
  function hhmhong5hei ($a, $m){
    $a = explode(',',$a);
    $m = explode(',',$m);
    if($a[0] != $a[1] && $a[1] != $a[2]){
      foreach ($a as $val) {
        if(!in_array($val,$m)) return 0;
      }
      return 1;
    }
    return 0;
  }

}