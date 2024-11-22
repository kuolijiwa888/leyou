<?php
namespace Kaijiang\Controller;
use Think\Controller;
class KjController extends Controller {
	public function _initialize(){
		header("Content-type: text/html; charset=utf-8");
// 		if(!IS_CLI)exit('IS NOT CMD_CLI,ERROR...');
	}
	function _t($str='',$num=20,$pad =' '){
		$str = iconv('UTF-8','gbk',$str);
		return str_pad($str,$num,$pad);
	}
	function _title($title='启动结算任务'){
		echo "\n";
		echo $this->_t(str_pad('-',5,'-').$title,22,'-');
		echo "\n";
	}
	function check($totalzxnum=0,$runcount=0){
		
		$playidArr = ['tmlmda','tmlmxiao','tmlmdan','tmlmshuang','tmlmdadan','tmlmdashuang','tmlmxiaodan','tmlmxiaoshuang','tmlmheda','tmlmhexiao','tmlmhedan','tmlmheshuang','tmlmweida','tmlmweixiao','tmlmjiaqin','tmlmyeshou','tmlmhongbo','tmlmlvbo','tmlmlanbo',
			'zm1lmda','zm1lmxiao','zm1lmdan','zm1lmshuang','zm1lmdadan','zm1lmdashuang','zm1lmxiaodan','zm1lmxiaoshuang','zm1lmheda','zm1lmhexiao','zm1lmhedan','zm1lmheshuang','zm1lmweida', 'zm1lmweixiao','zm1lmjiaqin','zm1lmyeshou','zm1lmhongbo','zm1lmlvbo','zm1lmlanbo',
			'zm2lmda','zm2lmxiao','zm2lmdan','zm2lmshuang','zm2lmdadan','zm2lmdashuang','zm2lmxiaodan','zm2lmxiaoshuang','zm2lmheda','zm2lmhexiao','zm2lmhedan','zm2lmheshuang','zm2lmweida','zm2lmweixiao','zm2lmjiaqin','zm2lmyeshou','zm2lmhongbo','zm2lmlvbo','zm2lmlanbo',
			'zm3lmda','zm3lmxiao','zm3lmdan','zm3lmshuang','zm3lmdadan','zm3lmdashuang','zm3lmxiaodan','zm3lmxiaoshuang','zm3lmheda','zm3lmhexiao','zm3lmhedan','zm3lmheshuang','zm3lmweida','zm3lmweixiao','zm3lmjiaqin','zm3lmyeshou','zm3lmhongbo','zm3lmlvbo','zm3lmlanbo',
			'zm4lmda','zm4lmxiao','zm4lmdan','zm4lmshuang','zm4lmdadan','zm4lmdashuang','zm4lmxiaodan','zm4lmxiaoshuang','zm4lmheda','zm4lmhexiao','zm4lmhedan','zm4lmheshuang','zm4lmweida','zm4lmweixiao','zm4lmjiaqin','zm4lmyeshou','zm4lmhongbo','zm4lmlvbo','zm4lmlanbo',
			'zm5lmda','zm5lmxiao','zm5lmdan','zm5lmshuang','zm5lmdadan','zm5lmdashuang','zm5lmxiaodan','zm5lmxiaoshuang','zm5lmheda','zm5lmhexiao','zm5lmhedan','zm5lmheshuang','zm5lmweida','zm5lmweixiao','zm5lmjiaqin','zm5lmyeshou','zm5lmhongbo','zm5lmlvbo','zm5lmlanbo',
			'zm6lmda','zm6lmxiao','zm6lmdan','zm6lmshuang','zm6lmdadan','zm6lmdashuang','zm6lmxiaodan','zm6lmxiaoshuang','zm6lmheda','zm6lmhexiao','zm6lmhedan','zm6lmheshuang','zm6lmweida','zm6lmweixiao','zm6lmjiaqin','zm6lmyeshou','zm6lmhongbo','zm6lmlvbo','zm6lmlanbo',
		];
	    if($runcount==0){
			$this->_title();
		}
		$memberdb    = D('member');
		$fuddetaildb = D('fuddetail');
		$touzhudb    = D('touzhu');
		$touzhudbhm    = D('touzhuhm');
		$memdb = M('member');
		$DB_PREFIX = C('DB_PREFIX');
		$sql = "select a.*,b.name,b.expect,b.opencode from {$DB_PREFIX}touzhu as a left join {$DB_PREFIX}kaijiang as b on a.cpname = b.name and a.expect = b.expect where a.isdraw = 0 and b.opencode!='' order by a.id desc limit 10";
		$touzhulist = M()->query($sql);

		$_ZJARRAY = [];

		foreach($touzhulist as $k=>$item){
			$_kjfile = $dir = COMMON_PATH. "Lib/kaijiang/{$item['typeid']}.class.php";
			if($_kjfile){
				$class = "\\Lib\\kaijiang\\{$item[typeid]}";
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
					$opencodes = explode(',',$item['opencode']);
					$item['iszjokcount'] = $_obj->$playsonid($opencodes[$key],$item['tzcode'],$playsonid);
				}else{
					if(method_exists($_obj,$playid)){//如果类方法存在
						$item['iszjokcount'] = $_obj->$playid($item['opencode'],$item['tzcode']);
					}
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
			if($item['winorno']>=1){
				//$item['iszjcount']=$item['winorno'];
				$item['iszjokcount']=$item['winorno'];
			}else if($item['winorno']==0){
				//$item['iszjcount']=0;
				$item['iszjokcount']=0;
			}
            $item['iszjcount'] = $item['iszjokcount'];
			if($item['iszjcount']>=1){//中
				$_typeid0 = $item['typeid'];
				
				if($item['ishemai']==1){
					
						
					
					//这里是处理合买的函数
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
					
					
					
					/*先判断是否合买成功*/
					if($item['isfull']==0){//说明购买已经满了
						
						
						//如果是保底就返还金额
						if($item['isbaodi']==1){
								$backmeny=abs($item['baodi']*$item['hemaipic']);
								$_membercenter = $memdb->where(['id'=>$item['uid']])->field('balance,point,xima')->find();				
								$memdb->where(['id'=>$item['uid']])->setInc('balance',$backmeny);
								$fuddetail_data = array();
								$fuddetail_data['trano'] = $item['trano'];
								$fuddetail_data['uid'] = $item['uid'];
								$fuddetail_data['username'] = $item['username'];
								$fuddetail_data['amount'] = $backmeny;
								$fuddetail_data['amountbefor'] = $_membercenter['balance'];								
								$fuddetail_data['amountafter'] = $_membercenter['balance'] + $backmeny;
								$fuddetail_data['oddtime'] = time();
								$fuddetail_data['remark'] = "保底返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
								$fuddetail_data['type'] = 'order';
								$fuddetail_data['typename'] ="合买代购";
								$fuddetaildb->data($fuddetail_data)->add();
								 echo auto_charset("0000000000000000",'utf-8','gbk');	
								//戏码增加																 		   
								$ximaamount = $backmeny;									
								$memdb->where(['id'=>$item['uid']])->setInc('xima',$ximaamount);
								$fuddetail_data = array();
								$fuddetail_data['trano'] = $item['trano'];
								$fuddetail_data['uid'] = $item['uid'];
								$fuddetail_data['username'] = $item['username'];
									
								$fuddetail_data['amount'] = $ximaamount;
								$fuddetail_data['amountbefor'] = $_membercenter['xima'];
								$fuddetail_data['amountafter'] = $_membercenter['xima']+$ximaamount;
								$fuddetail_data['oddtime'] = time();
								$fuddetail_data['remark'] = "洗码保底返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
								$fuddetail_data['type'] = 'xima';
								$fuddetail_data['typename'] = "合买洗码";
								$fuddetaildb->data($fuddetail_data)->add();															
						}
						//给每个购买成功发奖金。
						$okamount = self::$_typeid0($item);
						
							//修改投注为中奖状态
							$touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>1,'okcount'=>$item['zjcount'],'okamount'=>$okamount,'opencode'=>$item['opencode'],'opentime'=>time()]);
							//修改战绩
							$memint = $memberdb->where(['id'=>$item['id']])->setInc('record',$okamount);
							
							
							
						$touzhuhm=M('touzhuhm')->where(['trano'=>$item['trano']])->select();
						foreach($touzhuhm as $k=>$v){
							$winmeny=abs(($v['rengou']/$v['fenshu'])*$okamount);//中奖金额
							$userbalance = $memberdb->where(['id'=>$v['uid']])->getField('balance');
							//事务开始
							$memberdb->startTrans();
							$memint = $memberdb->where(['id'=>$v['uid']])->setInc('balance',$winmeny);//账户增加金额														
							//账变记录
							$fdata = [];
							$fdata['trano'] = $v['trano'];
							$fdata['uid'] = $v['uid'];
							$fdata['username'] = $item['username'];
							$fdata['type'] = 'reward';
							$fdata['typename'] = '返奖';
							$fdata['amount'] = $winmeny;
							$fdata['amountbefor'] = $userbalance;
							$fdata['amountafter'] = $userbalance + $winmeny;
							$fdata['oddtime'] = time();
							$fdata['remark'] = $v['cptitle'] .'第'. $v['expect'] . '期-' . $v['cptitle'].'--'.$v['trano'];
							$fudint = $fuddetaildb->data($fdata)->add();

							$touzhudbhm->where(['id'=>$v['id']])->setField(['isdraw'=>1,'okcount'=>$item['zjcount'],'okamount'=>$winmeny,'opencode'=>$item['opencode'],'opentime'=>time()]);
							
							
							if($memint && $touzhuint && $fudint && $touzhudbhm){
								$memberdb->commit();//提交事物
								$_ZJARRAY[] = $item['username'] . "-" .$item['cptitle'] .'第'. $item['expect'] . '期-' . "中奖金额：".$okamount;
							}else{
								$memberdb->rollback();//事物回滚
							}							
						}						
					}else if($item['isfull']!=0 && $item['isbaodi']==1 && ($item['realbaodi']-$item['isfull'])==0 ){//加上保底已经够了,说明合买也成功。
					//退还多余的保底金额
								$backmeny=abs(($item['baodi']-$item['realbaodi'])*$item['hemaipic']);
								if($backmeny>0){
									$_membercenter = $memdb->where(['id'=>$item['uid']])->field('balance,point,xima')->find();				
									$memdb->where(['id'=>$item['uid']])->setInc('balance',$backmeny);
									$fuddetail_data = array();
									$fuddetail_data['trano'] = $item['trano'];
									$fuddetail_data['uid'] = $item['uid'];
									$fuddetail_data['username'] = $item['username'];
									$fuddetail_data['amount'] = $backmeny;
									$fuddetail_data['amountbefor'] = $_membercenter['balance'];								
									$fuddetail_data['amountafter'] = $_membercenter['balance'] + $backmeny;
									$fuddetail_data['oddtime'] = time();
									$fuddetail_data['remark'] = "保底返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
									$fuddetail_data['type'] = 'order';
									$fuddetail_data['typename'] ="合买代购";
									$fuddetaildb->data($fuddetail_data)->add();
									echo auto_charset("1111111111111111111",'utf-8','gbk');
									//戏码增加																 		   
									$ximaamount = $backmeny;									
									$memdb->where(['id'=>$item['uid']])->setInc('xima',$ximaamount);
									$fuddetail_data = array();
									$fuddetail_data['trano'] = $item['trano'];
									$fuddetail_data['uid'] = $item['uid'];
									$fuddetail_data['username'] = $item['username'];									
									$fuddetail_data['amount'] = $ximaamount;
									$fuddetail_data['amountbefor'] = $_membercenter['xima'];
									$fuddetail_data['amountafter'] = $_membercenter['xima']+abs($ximaamount);
									$fuddetail_data['oddtime'] = time();
									$fuddetail_data['remark'] = "洗码保底返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
									$fuddetail_data['type'] = 'xima';
									$fuddetail_data['typename'] = "合买代购";
									$fuddetaildb->data($fuddetail_data)->add();
								}
								
								
								$okamount = self::$_typeid0($item);
																												
								$touzhuhm=M('touzhuhm')->where(['trano'=>$item['trano']])->select();
								//修改投注为中奖状态
								$touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>1,'okcount'=>$item['zjcount'],'okamount'=>$okamount,'opencode'=>$item['opencode'],'opentime'=>time(),'isfull'=>0,'jindu'=>1]);
								
								//修改战绩
								$memint = $memberdb->where(['id'=>$item['id']])->setInc('record',$okamount);
								foreach($touzhuhm as $k=>$v){
									//对保底者进行中奖
									$winmeny=0;
									if($item['uid']==$v['uid'] && $v['isfull']==0){
										$winmeny=abs(($v['rengou']+$item['realbaodi'])/$v['fenshu']*$okamount);
									}else{
										$winmeny=abs(($v['rengou']/$v['fenshu'])*$okamount);
									}
									//中奖金额
									$userbalance = $memberdb->where(['id'=>$v['uid']])->getField('balance');
									//事务开始
									$memberdb->startTrans();
									$memint = $memberdb->where(['id'=>$v['uid']])->setInc('balance',$winmeny);//账户增加金额							

									//账变记录
									$fdata = [];
									$fdata['trano'] = $v['trano'];
									$fdata['uid'] = $v['uid'];
									$fdata['username'] = $item['username'];
									$fdata['type'] = 'reward';
									$fdata['typename'] = '返奖';
									$fdata['amount'] = $winmeny;
									$fdata['amountbefor'] = $userbalance;
									$fdata['amountafter'] = $userbalance + $winmeny;
									$fdata['oddtime'] = time();
									$fdata['remark'] = $v['cptitle'] .'第'. $v['expect'] . '期-' . $v['cptitle'].'--'.$v['trano'];
									$fudint = $fuddetaildb->data($fdata)->add();

									$touzhudbhm->where(['id'=>$v['id']])->setField(['isdraw'=>1,'okcount'=>$item['zjcount'],'okamount'=>$winmeny,'opencode'=>$item['opencode'],'opentime'=>time()]);
																											
									if($memint && $touzhuint && $fudint){
										$memberdb->commit();//提交事物
										$_ZJARRAY[] = $item['username'] . "-" .$item['cptitle'] .'第'. $item['expect'] . '期-' . "中奖金额：".$okamount;
									}else{
										$memberdb->rollback();//事物回滚
									}							
								}					
					}else{//合买失败					
						//合买失败就是购买人数不够。推还投注金额
						/*
						1.如果有保底反保底
						2.返还认购金额
						*/
						if($item['isbaodi']==1){
									$f_backmeny=abs($item['baodi']*$item['hemaipic']);
									$_membercenter = $memdb->where(['id'=>$item['uid']])->field('balance,point,xima')->find();				
									$memdb->where(['id'=>$item['uid']])->setInc('balance',$f_backmeny);
									$fuddetail_data = array();
									$fuddetail_data['trano'] = $item['trano'];
									$fuddetail_data['uid'] = $item['uid'];
									$fuddetail_data['username'] = $item['username'];
									$fuddetail_data['amount'] = $f_backmeny;
									$fuddetail_data['amountbefor'] = $_membercenter['balance'];								
									$fuddetail_data['amountafter'] = $_membercenter['balance'] + $f_backmeny;
									$fuddetail_data['oddtime'] = time();
									$fuddetail_data['remark'] = "保底返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
									$fuddetail_data['type'] = 'order';
									$fuddetail_data['typename'] ="撤单";
									$fuddetaildb->data($fuddetail_data)->add();
									
									//戏码增加																 		   
									$ximaamount = $f_backmeny;									
									$memdb->where(['id'=>$item['uid']])->setInc('xima',$ximaamount);
									$fuddetail_data = array();
									$fuddetail_data['trano'] = $item['trano'];
									$fuddetail_data['uid'] = $item['uid'];
									$fuddetail_data['username'] = $item['username'];									
									$fuddetail_data['amount'] = $ximaamount;
									$fuddetail_data['amountbefor'] = $_membercenter['xima'];
									$fuddetail_data['amountafter'] = $_membercenter['xima']+abs($ximaamount);
									$fuddetail_data['oddtime'] = time();
									$fuddetail_data['remark'] = "洗码保底返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
									$fuddetail_data['type'] = 'xima';
									$fuddetail_data['typename'] = "撤单";
									$fuddetaildb->data($fuddetail_data)->add();							
						}
						//返还认购金额
						$touzhuhm=M('touzhuhm')->where(['trano'=>$item['trano']])->select();
						
						//设置进度
						
						//修改投注为中奖状态
						$touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>-2,'opencode'=>$item['opencode'],'opentime'=>time(),'isfull'=>0,'jindu'=>1]);
						
						foreach($touzhuhm as $k=>$v){							
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
									$touzhudbhm->where(['id'=>$v['id']])->setField(['isdraw'=>-2,'opencode'=>$item['opencode'],'opentime'=>time()]);
									
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
									$fuddetail_data['remark'] = "洗码撤单返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
									$fuddetail_data['type'] = 'xima';
									$fuddetail_data['typename'] = "撤单";
									$fuddetaildb->data($fuddetail_data)->add();
						}						
					}														
				}else{
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
				$okamount = self::$_typeid0($item);
				$userinfo = [];
				$userbalance = $memberdb->where(['id'=>$item['uid']])->getField('balance');
				//事务开始
				$memberdb->startTrans();
				$memint = $memberdb->where(['id'=>$item['uid']])->setInc('balance',$okamount);//账户增加金额
				//修改投注为中奖状态
				$touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>1,'okcount'=>$item['zjcount'],'okamount'=>$okamount,'opencode'=>$item['opencode']]);

				//账变记录
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
				}
			}else if($item['iszjcount'] == -1){ //和
				$okamount = $item['amount'];
				$userinfo = [];
				$userbalance = $memberdb->where(['id'=>$item['uid']])->getField('balance');
				//事务开始
				$memberdb->startTrans();
				$memint = $memberdb->where(['id'=>$item['uid']])->setInc('balance',$okamount);//账户增加金额
				//修改投注为中奖状态
				$touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>1,'okcount'=>$item['zjcount'],'okamount'=>$okamount,'opencode'=>$item['opencode']]);
				//账变记录
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
				if($fudint){
					$memberdb->commit();//提交事物
					$_ZJARRAY[] = $item['username'] . "-" .$item['cptitle'] .'第'. $item['expect'] . '期-' . "和,退回：".$okamount;
				}else{
					$memberdb->rollback();//事物回滚
				}
				

			}else if($item['iszjcount']<1){//未中
			    //处理合买不满的单。
				if($item['ishemai']==1){				
					$sign=0;
					if($item['isbaodi']==1){//保底
						if(($item['isfull']-$item['realbaodi'])>0){
							$sign=1;
						}						
					}else if($item['isfull']>0){//不保底
						$sign=1;
					}										
					//如果$sign为1就撤单
					if($sign==1){					
						$touzhuhm=M('touzhuhm')->where(['trano'=>$item['trano']])->select();
						//修改投注为中奖状态
						$touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>-2,'opencode'=>$item['opencode'],'opentime'=>time(),'isfull'=>0,'jindu'=>1]);
						foreach($touzhuhm as $k=>$v){
							if($item['isbaodi']==1 && $item['uid']==$v['uid'] && $v['isfull']==0)//对保底者进行返回
							{
								$f_backmeny=abs($item['baodi']*$item['hemaipic']);
								$_membercenter = $memdb->where(['id'=>$item['uid']])->field('balance,point,xima')->find();				
								$memdb->where(['id'=>$item['uid']])->setInc('balance',$f_backmeny);
								$fuddetail_data = array();
								$fuddetail_data['trano'] = $item['trano'];
								$fuddetail_data['uid'] = $item['uid'];
								$fuddetail_data['username'] = $item['username'];
								$fuddetail_data['amount'] = $f_backmeny;
								$fuddetail_data['amountbefor'] = $_membercenter['balance'];								
								$fuddetail_data['amountafter'] = $_membercenter['balance'] + $f_backmeny;
								$fuddetail_data['oddtime'] = time();
								$fuddetail_data['remark'] = "保底返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
								$fuddetail_data['type'] = 'order';
								$fuddetail_data['typename'] ="撤单";
								$fuddetaildb->data($fuddetail_data)->add();
									
									//戏码增加																 		   
								$ximaamount = $f_backmeny;									
								$memdb->where(['id'=>$item['uid']])->setInc('xima',$ximaamount);
								$fuddetail_data = array();
								$fuddetail_data['trano'] = $item['trano'];
								$fuddetail_data['uid'] = $item['uid'];
								$fuddetail_data['username'] = $item['username'];									
								$fuddetail_data['amount'] = $ximaamount;
								$fuddetail_data['amountbefor'] = $_membercenter['xima'];
								$fuddetail_data['amountafter'] = $_membercenter['xima']+abs($ximaamount);
								$fuddetail_data['oddtime'] = time();
								$fuddetail_data['remark'] = "洗码保底返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
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
							$touzhudbhm->where(['id'=>$v['id']])->setField(['isdraw'=>-2,'opencode'=>$item['opencode'],'opentime'=>time()]);
																	
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
							$fuddetail_data['remark'] = "洗码撤单返还，彩种:{$item['cptitle']},{$item['expect']},{$item['trano']}";
							$fuddetail_data['type'] = 'xima';
							$fuddetail_data['typename'] = "撤单";
							$fuddetaildb->data($fuddetail_data)->add();														
						}							
					}else{//对不是撤单的处理。						
						$okamount = -$item['amount'];
						$touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>-1,'okcount'=>0,'okamount'=>0,'opencode'=>$item['opencode'],'opentime'=>time(),'isfull'=>0,'jindu'=>1]);
						$touzhuhm=M('touzhuhm')->where(['trano'=>$item['trano']])->select();
						foreach($touzhuhm as $k=>$v){
							$touzhudbhm->where(['id'=>$v['id']])->setField(['isdraw'=>-1,'okcount'=>0,'okamount'=>0,'opencode'=>$item['opencode'],'opentime'=>time()]);
						}											
					}														
				}else{
				$okamount = -$item['amount'];
				$touzhuint = $touzhudb->where(['id'=>$item['id']])->setField(['isdraw'=>-1,'okcount'=>0,'okamount'=>0,'opencode'=>$item['opencode']]);
				$_ZJARRAY[] = $item['username'] . "-" .$item['cptitle'] .'第'. $item['expect'] . '期-' . "未中奖,输：".$okamount;
				}
			}
			$touzhulist[$k] = $item;
		}
		if($_ZJARRAY){
			$return = implode("\n",$_ZJARRAY);
		}else{
			 $return =  "未结算";
		}
	
		 echo auto_charset($return."\n",'utf-8','gbk');
		 sleep(2);
		$runcount++;
		if($runcount==10){
			$runcount=0;
			echo auto_charset("休眠3s",'utf-8','gbk');
			sleep(3);
		}
		if($totalzxnum<120){
			self::check($totalzxnum+1,$runcount);
		}
	}
	protected function lhc($res){
		$okamount = 0;
		if(strstr($res["mode"],'|')){
			$mode = explode('|',$res["mode"]);
			if($res['iszjokcount'][1]!="") {
				$okamount += $mode[1] * $res['iszjokcount'][1] * $res['beishu'] * $res['yjf'];
			}
			if($res['iszjokcount'][0]!=""){
				$okamount += $mode[0]*$res['iszjokcount'][0]*$res['beishu']*$res['yjf'];
			}
		}else{
			$okamount = ($res['amount']/$res['itemcount'])*$res['mode']*$res['zjcount'];
		}
		/*if(is_array($res['iszjokcount'])){
			
			foreach($res['iszjokcount'] as $v){
				$iszjokcount+=$v;
			}
		}else{
			$iszjokcount=$res['iszjokcount'];
		}
		$okamount = ($res['amount']/$res['itemcount'])*$res['mode']*$res['beishu']*$iszjokcount;*/
		return $okamount;
	}
	protected function ssc($res){
		$okamount =$res['mode']*$res['zjcount']*$res['beishu']*$res['yjf'];
		return $okamount;
	}
	protected function k3($res){
		$okamount = ($res['amount']/$res['itemcount'])*$res['mode']*$res['zjcount'];
		return $okamount;
	}
	protected function x5($res){
		$okamount = 0;
		if(strstr($res["mode"],'|')){
			$amount = explode('|',$res["mode"]);
			for($i=0;$i<count($amount);$i++){
				if($res['iszjokcount'][$i]!=0){
					$okamount = $amount[$i]*$res['iszjokcount'][$i]*$res['beishu']*$res['yjf'];
			 }
			}
		}else{
			$okamount =$res['mode']*$res['zjcount']*$res['beishu']*$res['yjf'];
		}
		return $okamount;
	}
	protected function pk10($res){
		$okamount =$res['mode']*$res['zjcount']*$res['beishu']*$res['yjf'];
		return $okamount;
	}
	protected function dpc($res){
		$okamount =$res['mode']*$res['zjcount']*$res['beishu']*$res['yjf'];
		return $okamount;
	}
	protected function keno($res){
		$okamount = 0;
		if(strstr($res["mode"],'|')){
			$mode = explode('|',$res["mode"]);
			for($i=0;$i<count($mode);$i++){
				if($res['iszjokcount'][$i]!=""){
					$okamount += $mode[$i]*$res['iszjokcount'][$i]*$res['beishu']*$res['yjf'];
				}
			}
		}else{
			$okamount =$res['mode']*$res['zjcount']*$res['beishu']*$res['yjf'];
		}
		return $okamount;

	}
	protected function xy28($res){
	$okamount =$res['mode']*$res['amount']*$res['zjcount']*$res['beishu']*$res['yjf'];
		return $okamount; 

	}
//删除两天前的开奖
	protected function delete2daykj(){
		$day = date('Y-m-d',time());
		$odaytime = strtotime($day)-86400*2;
		$map = [];
		$map['opentime'] = ['elt',$odaytime];
		M('kaijiang')->where($map)->delete();
	}
	protected function gettrano($rand=4){
		$rand = (intval($rand)>0 and intval($rand)<=6)?intval($rand):4;
		$trano = strtoupper(self::rand_string(3,0)).date('ymdHis').self::rand_string($rand,1);
		return $trano;
	}
	protected function rand_string($len=6,$type=0,$addChars='') {
		$String      = new \Org\Util\String;
		$randString  = $String->randString($len,$type,$addChars);
		return $randString;
	}
}