<?php
namespace Home\Controller;
use Think\Controller;
class TrendController extends CommonController {
  public function __construct(){
    parent::__construct();
    if(!$this->userinfo){
      redirect(U("Public/login"));
    };
  }

  function trend_k3(){
    $lotteryname = I('code','jsk3');
    $this->assign('lotteryname',$lotteryname);
    $num = I('num',30,'intval');
    $_api = new \Lib\api;
    $apiparam['lotteryname'] = $lotteryname;
    $apiparam['num'] = $num;
    $Result = $_api->sendHttpClient('Api/Lottery/lotteryopencodes',$apiparam);
    $this->assign('cptitle',$Result['data'][0]['title']);
    $html = '';$allballs = [1,2,3,4,5,6];
    if($Result['sign'] && count($Result['data'])>=1){
      foreach($Result['data'] as $k=>$v){
        $balls = explode(',',$v['opencode']);
        $countarray = array_count_values($balls);
        $sum   = 0;$sum = array_sum($balls);
        $bigsmall = $sum>=10?'大':'小';
        $oddeven  = $sum%2==0?'双':'单';
        $html .= '<tr class="byzstxt">';
        $html .= '<td class="chart-issue border-right">'.$v['expect'].'</td>';
        $html .= '<td class="chart-open-code border-right">';
        $html .= '<i>'.$balls[0].'</i>';
        $html .= '<i>'.$balls[1].'</i>';
        $html .= '<i>'.$balls[2].'</i>';
        for($i=1;$i<7;$i++){
          if($i==intval($balls[0])){
            $html .= '<td class="select-num border-right1_k3"><i class="selected-num">'.$balls[0].'</i></td>';
            $five['LB'.$i]=0;
            if($five['SB'.$i]){$five['SB'.$i]++;}else{$five['SB'.$i]=1;}
            if($five['LCB'.$i]){$five['LCB'.$i]++;}else{$five['LCB'.$i]=1;}
          }else{
            if($five['LB'.$i]){$five['LB'.$i]++;}else{$five['LB'.$i]=1;}
            $html .= '<td class="select-num border-right1_k3"><i class="ylou">'.$five['LB'.$i].'</i></td>';
            $five['LCB'.$i]=0;
          }
          if($five['ZB'.$i]){$five['ZB'.$i]+=$five['LB'.$i];}else{$five['ZB'.$i]=$five['LB'.$i];}
          if($five['MB'.$i]<$five['LB'.$i]){$five['MB'.$i]=$five['LB'.$i];}
          if($five['MLCB'.$i]<$five['LCB'.$i]){$five['MLCB'.$i]=$five['LCB'.$i];}
          
        }
        for($i=1;$i<7;$i++){
          if($i==intval($balls[1])){
            $html .= '<td class="select-num border-right1_k3"><i class="selected-num">'.$balls[1].'</i></td>';
            $five['LS'.$i]=0;
            if($five['SS'.$i]){$five['SS'.$i]++;}else{$five['SS'.$i]=1;}
            if($five['LCS'.$i]){$five['LCS'.$i]++;}else{$five['LCS'.$i]=1;}
          }else{
            if($five['LS'.$i]){$five['LS'.$i]++;}else{$five['LS'.$i]=1;}
            $html .= '<td class="select-num border-right1_k3"><i class="ylou">'.$five['LS'.$i].'</i></td>';
            $five['LCS'.$i]=0;
          }
          if($five['ZS'.$i]){$five['ZS'.$i]+=$five['LS'.$i];}else{$five['ZS'.$i]=$five['LS'.$i];}
          if($five['MS'.$i]<$five['LS'.$i]){$five['MS'.$i]=$five['LS'.$i];}
          if($five['MLCS'.$i]<$five['LCS'.$i]){$five['MLCS'.$i]=$five['LCS'.$i];}
          
        }
        for($i=1;$i<7;$i++){
          if($i==intval($balls[2])){
            $html .= '<td class="select-num border-right1_k3"><i class="selected-num">'.$balls[2].'</i></td>';
            $five['LG'.$i]=0;
            if($five['SG'.$i]){$five['SG'.$i]++;}else{$five['SG'.$i]=1;}
            if($five['LCG'.$i]){$five['LCG'.$i]++;}else{$five['LCG'.$i]=1;}
          }else{
            if($five['LG'.$i]){$five['LG'.$i]++;}else{$five['LG'.$i]=1;}
            $html .= '<td class="select-num border-right1_k3"><i class="ylou">'.$five['LG'.$i].'</i></td>';
            $five['LCG'.$i]=0;
          }
          if($five['ZG'.$i]){$five['ZG'.$i]+=$five['LG'.$i];}else{$five['ZG'.$i]=$five['LG'.$i];}
          if($five['MG'.$i]<$five['LG'.$i]){$five['MG'.$i]=$five['LG'.$i];}
          if($five['MLCG'.$i]<$five['LCG'.$i]){$five['MLCG'.$i]=$five['LCG'.$i];}
        }
        

        
        $class = 'ylou';
        if($sum==3){$class3 = 'bg_green js-fold'; $classk3 = 'selected-num_K3';}else{$class3 = $class; $classk3 = $class;}
        if($sum==4){$class4 = 'bg_green js-fold'; $classk4 = 'selected-num_K3';}else{$class4 = $class; $classk4 = $class;}
        if($sum==5){$class5 = 'bg_green js-fold'; $classk5 = 'selected-num_K3';}else{$class5 = $class; $classk5 = $class;}
        if($sum==6){$class6 = 'bg_green js-fold'; $classk6 = 'selected-num_K3';}else{$class6 = $class; $classk6 = $class;}
        if($sum==7){$class7 = 'bg_green js-fold'; $classk7 = 'selected-num_K3';}else{$class7 = $class; $classk7 = $class;}
        if($sum==8){$class8 = 'bg_green js-fold'; $classk8 = 'selected-num_K3';}else{$class8 = $class; $classk8 = $class;}
        if($sum==9){$class9 = 'bg_green js-fold'; $classk9 = 'selected-num_K3';}else{$class9 = $class; $classk9 = $class;}
        if($sum==10){$class10 = 'bg_green js-fold'; $classk10 = 'selected-num_K3';}else{$class10 = $class; $classk10 = $class;}
        if($sum==11){$class11 = 'bg_green js-fold'; $classk11 = 'selected-num_K3';}else{$class11 = $class; $classk11 = $class;}
        if($sum==12){$class12 = 'bg_green js-fold'; $classk12 = 'selected-num_K3';}else{$class12 = $class; $classk12 = $class;}
        if($sum==13){$class13 = 'bg_green js-fold'; $classk13 = 'selected-num_K3';}else{$class13 = $class; $classk13 = $class;}
        if($sum==14){$class14 = 'bg_green js-fold'; $classk14 = 'selected-num_K3';}else{$class14 = $class; $classk14 = $class;}
        if($sum==15){$class15 = 'bg_green js-fold'; $classk15 = 'selected-num_K3';}else{$class15 = $class; $classk15 = $class;}
        if($sum==16){$class16 = 'bg_green js-fold'; $classk16 = 'selected-num_K3';}else{$class16 = $class; $classk16 = $class;}
        if($sum==17){$class17 = 'bg_green js-fold'; $classk17 = 'selected-num_K3';}else{$class17 = $class; $classk17 = $class;}
        if($sum==18){$class18 = 'bg_green js-fold'; $classk18 = 'selected-num_K3';}else{$class18 = $class; $classk18 = $class;}
        
        $html .= '<td class="select-num '.$class3.'"><i class="'.$classk3.'">3</i></td>';
        $html .= '<td class="select-num '.$class4.'"><i class="'.$classk4.'">4</i></td>';
        $html .= '<td class="select-num '.$class5.'"><i class="'.$classk5.'">5</i></td>';
        $html .= '<td class="select-num '.$class6.'"><i class="'.$classk6.'">6</i></td>';
        $html .= '<td class="select-num '.$class7.'"><i class="'.$classk7.'">7</i></td>';
        $html .= '<td class="select-num '.$class8.'"><i class="'.$classk8.'">8</i></td>';
        $html .= '<td class="select-num '.$class9.'"><i class="'.$classk9.'">9</i></td>';
        $html .= '<td class="select-num '.$class10.'"><i class="'.$classk10.'">10</i></td>';
        $html .= '<td class="select-num '.$class11.'"><i class="'.$classk11.'">11</i></td>';
        $html .= '<td class="select-num '.$class12.'"><i class="'.$classk12.'">12</i></td>';
        $html .= '<td class="select-num '.$class13.'"><i class="'.$classk13.'">13</i></td>';
        $html .= '<td class="select-num '.$class14.'"><i class="'.$classk14.'">14</i></td>';
        $html .= '<td class="select-num '.$class15.'"><i class="'.$classk15.'">15</i></td>';
        $html .= '<td class="select-num '.$class16.'"><i class="'.$classk16.'">16</i></td>';
        $html .= '<td class="select-num '.$class17.'"><i class="'.$classk17.'">17</i></td>';
        $html .= '<td class="select-num border-right '.$class18.'"><i class="'.$classk18.'">18</i></td>';
        if($bigsmall=='大'){
          $html .= '<td class="select-num border-right"><i class="da">大</i></td>';
        }else{
          $html .= '<td class="select-num border-right"><i class="xiao">小</i></td>';
        }
        if($oddeven=='双'){
          $html .= '<td class="select-num border-right"><i class="shuang">双</i></td>';
        }else{
          $html .= '<td class="select-num border-right"><i class="dan">单</i></td>';
        }
        
        for($i=1;$i<=6;$i++){
          if(in_array($i,$balls)){
            if($countarray[$i]==2){
              $html .= '<td class="distribution-num"><span>2</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }else{
              $html .= '<td class="distribution-num"><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }
          }else{
            if($five['LZ'.$i]){$five['LZ'.$i]++;}else{$five['LZ'.$i]=1;}
            $html .= '<td class="distribution-num"><i class="ylou">'.$five['LZ'.$i].'</i></td>';
            $five['LCZ'.$i]=0;
          }
          if($five['ZZ'.$i]){$five['ZZ'.$i]+=$five['LZ'.$i];}else{$five['ZZ'.$i]=$five['LZ'.$i];}
          if($five['MZ'.$i]<$five['LZ'.$i]){$five['MZ'.$i]=$five['LG'.$i];}
          if($five['MLCZ'.$i]<$five['LCZ'.$i]){$five['MLCZ'.$i]=$five['LCZ'.$i];}
        }
        
        $html .= '</tr>';
      }
      foreach(array('B','S','G') as $balls){
        for($i=1;$i<7;$i++)
        {
          if($five['S'.$balls.$i]){
            $five['D'.$balls.$i]=$five['S'.$balls.$i];
          }else{
            $five['D'.$balls.$i]=0;
          }
          $html1 .= '<td class="select-num"><i>'.$five['D'.$balls.$i].'</i></td>';
        }
      }
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      foreach(array('Z') as $balls){
        for($i=1;$i<7;$i++)
        {
          if($five['S'.$balls.$i]){
            $five['D'.$balls.$i]=$five['S'.$balls.$i];
          }else{
            $five['D'.$balls.$i]=0;
          }
          $html1 .= '<td class="select-num"><i>'.$five['D'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('B','S','G') as $balls){
        for($i=1;$i<7;$i++)
        {
          $five['P'.$balls.$i]=intval($num/($five['D'.$balls.$i]+1));
          $html2 .= '<td class="select-num"><i>'.$five['P'.$balls.$i].'</i></td>';
        }
      }
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      foreach(array('Z') as $balls){
        for($i=1;$i<7;$i++)
        {
          $five['P'.$balls.$i]=intval($num/($five['D'.$balls.$i]+1));
          $html2 .= '<td class="select-num"><i>'.$five['P'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('B','S','G') as $balls){
        for($i=1;$i<7;$i++)
        {
          if($five['M'.$balls.$i]){
            $five['Max'.$balls.$i]=$five['M'.$balls.$i];
          }else{
            $five['Max'.$balls.$i]=0;
          }
          $html3 .= '<td class="select-num"><i>'.$five['Max'.$balls.$i].'</i></td>';
        }
      }
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      foreach(array('Z') as $balls){
        for($i=1;$i<7;$i++)
        {
          if($five['M'.$balls.$i]){
            $five['Max'.$balls.$i]=$five['M'.$balls.$i];
          }else{
            $five['Max'.$balls.$i]=0;
          }
          $html3 .= '<td class="select-num"><i>'.$five['Max'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('B','S','G') as $balls){
        for($i=1;$i<7;$i++)
        {
          if($five['MLC'.$balls.$i]){
            $five['MaxLC'.$balls.$i]=$five['MLC'.$balls.$i];
          }else{
            $five['MaxLC'.$balls.$i]=0;
          }
          $html4 .= '<td class="select-num"><i>'.$five['MaxLC'.$balls.$i].'</i></td>';
        }
      }
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      foreach(array('Z') as $balls){
        for($i=1;$i<7;$i++)
        {
          if($five['MLC'.$balls.$i]){
            $five['MaxLC'.$balls.$i]=$five['MLC'.$balls.$i];
          }else{
            $five['MaxLC'.$balls.$i]=0;
          }
          $html4 .= '<td class="select-num"><i>'.$five['MaxLC'.$balls.$i].'</i></td>';
        }
      }
    }
    $other = M("caipiao")->where("isopen = 1")->cache(300)->order('allsort ASC')->select();
    $this->assign('other',$other);
    $this->assign('trendhtml',$html);
    $this->assign('trendhtml1',$html1);
    $this->assign('trendhtml2',$html2);
    $this->assign('trendhtml3',$html3);
    $this->assign('trendhtml4',$html4);
    $this->display('Game_trend_k3');
  }
  function trend_xy28(){
    $lotteryname = I('code');
    $this->assign('lotteryname',$lotteryname);
    $num = I('num',30,'intval');
    $_api = new \Lib\api;
    $apiparam['lotteryname'] = $lotteryname;
    $apiparam['num'] = $num;
    $Result = $_api->sendHttpClient('Api/Lottery/lotteryopencodes',$apiparam);
    $this->assign('cptitle',$Result['data'][0]['title']);
    $html = '';$allballs = [0,1,2,3,4,5,6,7,8,9];
    if($Result['sign'] && count($Result['data'])>=1){
      foreach($Result['data'] as $k=>$v){
        $balls = explode(',',$v['opencode']);
        $countarray = array_count_values($balls);
        $sum   = 0;$sum = array_sum($balls);
        $bigsmall = $sum>=13?'大':'小';
        $oddeven  = $sum%2==0?'双':'单';
        $html .= '<tr class="byzstxt">';
        $html .= '<td class="chart-issue border-right">'.$v['expect'].'</td>';
        $html .= '<td class="chart-open-code border-right">';
        $html .= '<i>'.$balls[0].'</i>';
        $html .= '<i>'.$balls[1].'</i>';
        $html .= '<i>'.$balls[2].'</i>';
        for($i=0;$i<10;$i++){
          if($i==intval($balls[0])){
            $html .= '<td class="select-num border-right1_xy28"><i class="selected-num">'.$balls[0].'</i></td>';
            $five['LB'.$i]=0;
            if($five['SB'.$i]){$five['SB'.$i]++;}else{$five['SB'.$i]=1;}
            if($five['LCB'.$i]){$five['LCB'.$i]++;}else{$five['LCB'.$i]=1;}
          }else{
            if($five['LB'.$i]){$five['LB'.$i]++;}else{$five['LB'.$i]=1;}
            $html .= '<td class="select-num border-right1_xy28"><i class="ylou">'.$five['LB'.$i].'</i></td>';
            $five['LCB'.$i]=0;
          }
          if($five['ZB'.$i]){$five['ZB'.$i]+=$five['LB'.$i];}else{$five['ZB'.$i]=$five['LB'.$i];}
          if($five['MB'.$i]<$five['LB'.$i]){$five['MB'.$i]=$five['LB'.$i];}
          if($five['MLCB'.$i]<$five['LCB'.$i]){$five['MLCB'.$i]=$five['LCB'.$i];}
          
        }
        for($i=0;$i<10;$i++){
          if($i==intval($balls[1])){
            $html .= '<td class="select-num border-right1_xy28"><i class="selected-num">'.$balls[1].'</i></td>';
            $five['LS'.$i]=0;
            if($five['SS'.$i]){$five['SS'.$i]++;}else{$five['SS'.$i]=1;}
            if($five['LCS'.$i]){$five['LCS'.$i]++;}else{$five['LCS'.$i]=1;}
          }else{
            if($five['LS'.$i]){$five['LS'.$i]++;}else{$five['LS'.$i]=1;}
            $html .= '<td class="select-num border-right1_xy28"><i class="ylou">'.$five['LS'.$i].'</i></td>';
            $five['LCS'.$i]=0;
          }
          if($five['ZS'.$i]){$five['ZS'.$i]+=$five['LS'.$i];}else{$five['ZS'.$i]=$five['LS'.$i];}
          if($five['MS'.$i]<$five['LS'.$i]){$five['MS'.$i]=$five['LS'.$i];}
          if($five['MLCS'.$i]<$five['LCS'.$i]){$five['MLCS'.$i]=$five['LCS'.$i];}
          
        }
        for($i=0;$i<10;$i++){
          if($i==intval($balls[2])){
            $html .= '<td class="select-num border-right1_xy28"><i class="selected-num">'.$balls[2].'</i></td>';
            $five['LG'.$i]=0;
            if($five['SG'.$i]){$five['SG'.$i]++;}else{$five['SG'.$i]=1;}
            if($five['LCG'.$i]){$five['LCG'.$i]++;}else{$five['LCG'.$i]=1;}
          }else{
            if($five['LG'.$i]){$five['LG'.$i]++;}else{$five['LG'.$i]=1;}
            $html .= '<td class="select-num border-right1_xy28"><i class="ylou">'.$five['LG'.$i].'</i></td>';
            $five['LCG'.$i]=0;
          }
          if($five['ZG'.$i]){$five['ZG'.$i]+=$five['LG'.$i];}else{$five['ZG'.$i]=$five['LG'.$i];}
          if($five['MG'.$i]<$five['LG'.$i]){$five['MG'.$i]=$five['LG'.$i];}
          if($five['MLCG'.$i]<$five['LCG'.$i]){$five['MLCG'.$i]=$five['LCG'.$i];}
        }
        

        
        $class = 'ylou';
        if($sum==0){$classk0 = 'selected-num_K3';}else{$classk0 = $class;}
        if($sum==1){$classk1 = 'selected-num_K3';}else{$classk1 = $class;}
        if($sum==2){$classk2 = 'selected-num_K3';}else{$classk2 = $class;}
        if($sum==3){$classk3 = 'selected-num_K3';}else{$classk3 = $class;}
        if($sum==4){$classk4 = 'selected-num_K3';}else{$classk4 = $class;}
        if($sum==5){$classk5 = 'selected-num_K3';}else{$classk5 = $class;}
        if($sum==6){$classk6 = 'selected-num_K3';}else{$classk6 = $class;}
        if($sum==7){$classk7 = 'selected-num_K3';}else{$classk7 = $class;}
        if($sum==8){$classk8 = 'selected-num_K3';}else{$classk8 = $class;}
        if($sum==9){$classk9 = 'selected-num_K3';}else{$classk9 = $class;}
        if($sum==10){$classk10 = 'selected-num_K3';}else{$classk10 = $class;}
        if($sum==11){$classk11 = 'selected-num_K3';}else{$classk11 = $class;}
        if($sum==12){$classk12 = 'selected-num_K3';}else{$classk12 = $class;}
        if($sum==13){$classk13 = 'selected-num_K3';}else{$classk13 = $class;}
        if($sum==14){$classk14 = 'selected-num_K3';}else{$classk14 = $class;}
        if($sum==15){$classk15 = 'selected-num_K3';}else{$classk15 = $class;}
        if($sum==16){$classk16 = 'selected-num_K3';}else{$classk16 = $class;}
        if($sum==17){$classk17 = 'selected-num_K3';}else{$classk17 = $class;}
        if($sum==18){$classk18 = 'selected-num_K3';}else{$classk18 = $class;}
        if($sum==19){$classk19 = 'selected-num_K3';}else{$classk19 = $class;}
        if($sum==20){$classk20 = 'selected-num_K3';}else{$classk20 = $class;}
        if($sum==21){$classk21 = 'selected-num_K3';}else{$classk21 = $class;}
        if($sum==22){$classk22 = 'selected-num_K3';}else{$classk22 = $class;}
        if($sum==23){$classk23 = 'selected-num_K3';}else{$classk23 = $class;}
        if($sum==24){$classk24 = 'selected-num_K3';}else{$classk24 = $class;}
        if($sum==25){$classk25 = 'selected-num_K3';}else{$classk25 = $class;}
        if($sum==26){$classk26 = 'selected-num_K3';}else{$classk26 = $class;}
        if($sum==27){$classk27 = 'selected-num_K3';}else{$classk27 = $class;}
        
        $html .= '<td class="select-num"><i class="'.$classk0.'">0</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk1.'">1</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk2.'">2</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk3.'">3</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk4.'">4</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk5.'">5</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk6.'">6</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk7.'">7</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk8.'">8</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk9.'">9</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk10.'">10</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk11.'">11</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk12.'">12</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk13.'">13</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk14.'">14</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk15.'">15</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk16.'">16</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk17.'">17</i></td>';
        
        $html .= '<td class="select-num"><i class="'.$classk18.'">18</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk19.'">19</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk20.'">20</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk21.'">21</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk22.'">22</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk23.'">23</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk24.'">24</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk25.'">25</i></td>';
        $html .= '<td class="select-num"><i class="'.$classk26.'">26</i></td>';
        $html .= '<td class="select-num border-right"><i class="'.$classk27.'">27</i></td>';
        if($bigsmall=='大'){
          $html .= '<td class="select-num border-right"><i class="da">大</i></td>';
        }else{
          $html .= '<td class="select-num border-right"><i class="xiao">小</i></td>';
        }
        if($oddeven=='双'){
          $html .= '<td class="select-num border-right"><i class="shuang">双</i></td>';
        }else{
          $html .= '<td class="select-num border-right"><i class="dan">单</i></td>';
        }
        
        for($i=0;$i<=9;$i++){
          if(in_array($i,$balls)){
            if($countarray[$i]==2){
              $html .= '<td class="distribution-num"><span>2</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }else{
              $html .= '<td class="distribution-num"><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }
          }else{
            if($five['LZ'.$i]){$five['LZ'.$i]++;}else{$five['LZ'.$i]=1;}
            $html .= '<td class="distribution-num"><i class="ylou">'.$five['LZ'.$i].'</i></td>';
            $five['LCZ'.$i]=0;
          }
          if($five['ZZ'.$i]){$five['ZZ'.$i]+=$five['LZ'.$i];}else{$five['ZZ'.$i]=$five['LZ'.$i];}
          if($five['MZ'.$i]<$five['LZ'.$i]){$five['MZ'.$i]=$five['LG'.$i];}
          if($five['MLCZ'.$i]<$five['LCZ'.$i]){$five['MLCZ'.$i]=$five['LCZ'.$i];}
        }
        
        $html .= '</tr>';
      }
      foreach(array('B','S','G') as $balls){
        for($i=0;$i<10;$i++)
        {
          if($five['S'.$balls.$i]){
            $five['D'.$balls.$i]=$five['S'.$balls.$i];
          }else{
            $five['D'.$balls.$i]=0;
          }
          $html1 .= '<td class="select-num"><i>'.$five['D'.$balls.$i].'</i></td>';
        }
      }
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      $html1 .= '<td class="select-num"><i></i></td>';
      foreach(array('Z') as $balls){
        for($i=0;$i<10;$i++)
        {
          if($five['S'.$balls.$i]){
            $five['D'.$balls.$i]=$five['S'.$balls.$i];
          }else{
            $five['D'.$balls.$i]=0;
          }
          $html1 .= '<td class="select-num"><i>'.$five['D'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('B','S','G') as $balls){
        for($i=0;$i<10;$i++)
        {
          $five['P'.$balls.$i]=intval($num/($five['D'.$balls.$i]+1));
          $html2 .= '<td class="select-num"><i>'.$five['P'.$balls.$i].'</i></td>';
        }
      }
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      $html2 .= '<td class="select-num"><i></i></td>';
      foreach(array('Z') as $balls){
        for($i=0;$i<10;$i++)
        {
          $five['P'.$balls.$i]=intval($num/($five['D'.$balls.$i]+1));
          $html2 .= '<td class="select-num"><i>'.$five['P'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('B','S','G') as $balls){
        for($i=0;$i<10;$i++)
        {
          if($five['M'.$balls.$i]){
            $five['Max'.$balls.$i]=$five['M'.$balls.$i];
          }else{
            $five['Max'.$balls.$i]=0;
          }
          $html3 .= '<td class="select-num"><i>'.$five['Max'.$balls.$i].'</i></td>';
        }
      }
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      $html3 .= '<td class="select-num"><i></i></td>';
      foreach(array('Z') as $balls){
        for($i=0;$i<10;$i++)
        {
          if($five['M'.$balls.$i]){
            $five['Max'.$balls.$i]=$five['M'.$balls.$i];
          }else{
            $five['Max'.$balls.$i]=0;
          }
          $html3 .= '<td class="select-num"><i>'.$five['Max'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('B','S','G') as $balls){
        for($i=0;$i<10;$i++)
        {
          if($five['MLC'.$balls.$i]){
            $five['MaxLC'.$balls.$i]=$five['MLC'.$balls.$i];
          }else{
            $five['MaxLC'.$balls.$i]=0;
          }
          $html4 .= '<td class="select-num"><i>'.$five['MaxLC'.$balls.$i].'</i></td>';
        }
      }
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      $html4 .= '<td class="select-num"><i></i></td>';
      foreach(array('Z') as $balls){
        for($i=0;$i<10;$i++)
        {
          if($five['MLC'.$balls.$i]){
            $five['MaxLC'.$balls.$i]=$five['MLC'.$balls.$i];
          }else{
            $five['MaxLC'.$balls.$i]=0;
          }
          $html4 .= '<td class="select-num"><i>'.$five['MaxLC'.$balls.$i].'</i></td>';
        }
      }
    }
    $other = M("caipiao")->where("isopen = 1")->cache(300)->order('allsort ASC')->select();
    $this->assign('other',$other);
    $this->assign('trendhtml',$html);
    $this->assign('trendhtml1',$html1);
    $this->assign('trendhtml2',$html2);
    $this->assign('trendhtml3',$html3);
    $this->assign('trendhtml4',$html4);
    $this->display('Game_trend_xy28');
  }
  function trend_ssc(){
    $lotteryname = I('code');
    $this->assign('lotteryname',$lotteryname);
    $num = I('num',30,'intval');
    $_api = new \Lib\api;
    $apiparam['lotteryname'] = $lotteryname;
    $apiparam['num'] = $num;
    $Result = $_api->sendHttpClient('Api/Lottery/lotteryopencodes',$apiparam);
    $this->assign('cptitle',$Result['data'][0]['title']);
    $html = '';$allballs = [0,1,2,3,4,5,6,7,8,9];
    if($Result['sign'] && count($Result['data'])>=1){
      foreach($Result['data'] as $k=>$v){
        $balls = explode(',',$v['opencode']);
        $countarray = array_count_values($balls);
        $sum   = 0;$sum = array_sum($balls);
        $bigsmall = $sum>10?'大':'小';
        $oddeven  = $sum%2==0?'双':'单';
        $html .= '<tr class="byzstxt">';
        $html .= '<td class="chart-issue border-right">'.$v['expect'].'</td>';
        $html .= '<td class="chart-open-code border-right">';
        $html .= '<i>'.$balls[0].'</i>';
        $html .= '<i>'.$balls[1].'</i>';
        $html .= '<i>'.$balls[2].'</i>';
        $html .= '<i>'.$balls[3].'</i>';
        $html .= '<i>'.$balls[4].'</i>';
        $html .= '</td>';
        for($i=0;$i<10;$i++){
          if($i==intval($balls[0])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[0].'</i></td>';
            $five['LW'.$i]=0;
            if($five['SW'.$i]){$five['SW'.$i]++;}else{$five['SW'.$i]=1;}
            if($five['LCW'.$i]){$five['LCW'.$i]++;}else{$five['LCW'.$i]=1;}
          }else{
            if($five['LW'.$i]){$five['LW'.$i]++;}else{$five['LW'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LW'.$i].'</i></td>';
            $five['LCW'.$i]=0;
          }
          if($five['ZW'.$i]){$five['ZW'.$i]+=$five['LW'.$i];}else{$five['ZW'.$i]=$five['LW'.$i];}
          if($five['MW'.$i]<$five['LW'.$i]){$five['MW'.$i]=$five['LW'.$i];}
          if($five['MLCW'.$i]<$five['LCW'.$i]){$five['MLCW'.$i]=$five['LCW'.$i];}

        }
        for($i=0;$i<10;$i++){
          if($i==intval($balls[1])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[1].'</i></td>';
            $five['LQ'.$i]=0;
            if($five['SQ'.$i]){$five['SQ'.$i]++;}else{$five['SQ'.$i]=1;}
            if($five['LCQ'.$i]){$five['LCQ'.$i]++;}else{$five['LCQ'.$i]=1;}
          }else{
            if($five['LQ'.$i]){$five['LQ'.$i]++;}else{$five['LQ'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LQ'.$i].'</i></td>';
            $five['LCQ'.$i]=0;
          }
          if($five['ZQ'.$i]){$five['ZQ'.$i]+=$five['LQ'.$i];}else{$five['ZQ'.$i]=$five['LQ'.$i];}
          if($five['MQ'.$i]<$five['LQ'.$i]){$five['MQ'.$i]=$five['LQ'.$i];}
          if($five['MLCQ'.$i]<$five['LCQ'.$i]){$five['MLCQ'.$i]=$five['LCQ'.$i];}

        }
        for($i=0;$i<10;$i++){
          if($i==intval($balls[2])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[2].'</i></td>';
            $five['LB'.$i]=0;
            if($five['SB'.$i]){$five['SB'.$i]++;}else{$five['SB'.$i]=1;}
            if($five['LCB'.$i]){$five['LCB'.$i]++;}else{$five['LCB'.$i]=1;}
          }else{
            if($five['LB'.$i]){$five['LB'.$i]++;}else{$five['LB'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LB'.$i].'</i></td>';
            $five['LCB'.$i]=0;
          }
          if($five['ZB'.$i]){$five['ZB'.$i]+=$five['LB'.$i];}else{$five['ZB'.$i]=$five['LB'.$i];}
          if($five['MB'.$i]<$five['LB'.$i]){$five['MB'.$i]=$five['LB'.$i];}
          if($five['MLCB'.$i]<$five['LCB'.$i]){$five['MLCB'.$i]=$five['LCB'.$i];}
          
        }
        for($i=0;$i<10;$i++){
          if($i==intval($balls[3])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[3].'</i></td>';
            $five['LS'.$i]=0;
            if($five['SS'.$i]){$five['SS'.$i]++;}else{$five['SS'.$i]=1;}
            if($five['LCS'.$i]){$five['LCS'.$i]++;}else{$five['LCS'.$i]=1;}
          }else{
            if($five['LS'.$i]){$five['LS'.$i]++;}else{$five['LS'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LS'.$i].'</i></td>';
            $five['LCS'.$i]=0;
          }
          if($five['ZS'.$i]){$five['ZS'.$i]+=$five['LS'.$i];}else{$five['ZS'.$i]=$five['LS'.$i];}
          if($five['MS'.$i]<$five['LS'.$i]){$five['MS'.$i]=$five['LS'.$i];}
          if($five['MLCS'.$i]<$five['LCS'.$i]){$five['MLCS'.$i]=$five['LCS'.$i];}
          
        }
        for($i=0;$i<10;$i++){
          if($i==intval($balls[4])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[4].'</i></td>';
            $five['LG'.$i]=0;
            if($five['SG'.$i]){$five['SG'.$i]++;}else{$five['SG'.$i]=1;}
            if($five['LCG'.$i]){$five['LCG'.$i]++;}else{$five['LCG'.$i]=1;}
          }else{
            if($five['LG'.$i]){$five['LG'.$i]++;}else{$five['LG'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LG'.$i].'</i></td>';
            $five['LCG'.$i]=0;
          }
          if($five['ZG'.$i]){$five['ZG'.$i]+=$five['LG'.$i];}else{$five['ZG'.$i]=$five['LG'.$i];}
          if($five['MG'.$i]<$five['LG'.$i]){$five['MG'.$i]=$five['LG'.$i];}
          if($five['MLCG'.$i]<$five['LCG'.$i]){$five['MLCG'.$i]=$five['LCG'.$i];}
        }

        for($i=0;$i<=9;$i++){
          if(in_array($i,$balls)){
            if($countarray[$i]==2){
              $html .= '<td class="distribution-num"><span>2</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }elseif($countarray[$i]==3) {
              $html .= '<td class="distribution-num"><span>3</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }elseif($countarray[$i]==4){
              $html .= '<td class="distribution-num"><span>4</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }elseif($countarray[$i]==5){
              $html .= '<td class="distribution-num"><span>5</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }else{
              $html .= '<td class="distribution-num"><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }
          }else{
            if($five['LZ'.$i]){$five['LZ'.$i]++;}else{$five['LZ'.$i]=1;}
            $html .= '<td class="distribution-num"><i class="ylou">'.$five['LZ'.$i].'</i></td>';
            $five['LCZ'.$i]=0;
          }
          if($five['ZZ'.$i]){$five['ZZ'.$i]+=$five['LZ'.$i];}else{$five['ZZ'.$i]=$five['LZ'.$i];}
          if($five['MZ'.$i]<$five['LZ'.$i]){$five['MZ'.$i]=$five['LG'.$i];}
          if($five['MLCZ'.$i]<$five['LCZ'.$i]){$five['MLCZ'.$i]=$five['LCZ'.$i];}
        }
        $html .= '</tr>';
        
        
      }
      foreach(array('W','Q','B','S','G','Z') as $balls){
        for($i=0;$i<10;$i++)
        {
          if($five['S'.$balls.$i]){
            $five['D'.$balls.$i]=$five['S'.$balls.$i];
          }else{
            $five['D'.$balls.$i]=0;
          }
          $html1 .= '<td class="select-num"><i>'.$five['D'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('W','Q','B','S','G','Z') as $balls){
        for($i=0;$i<10;$i++)
        {
          $five['P'.$balls.$i]=intval($num/($five['D'.$balls.$i]+1));
          $html2 .= '<td class="select-num"><i>'.$five['P'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('W','Q','B','S','G','Z') as $balls){
        for($i=0;$i<10;$i++)
        {
          if($five['M'.$balls.$i]){
            $five['Max'.$balls.$i]=$five['M'.$balls.$i];
          }else{
            $five['Max'.$balls.$i]=0;
          }
          $html3 .= '<td class="select-num"><i>'.$five['Max'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('W','Q','B','S','G','Z') as $balls){
        for($i=0;$i<10;$i++)
        {
          if($five['MLC'.$balls.$i]){
            $five['MaxLC'.$balls.$i]=$five['MLC'.$balls.$i];
          }else{
            $five['MaxLC'.$balls.$i]=0;
          }
          $html4 .= '<td class="select-num"><i>'.$five['MaxLC'.$balls.$i].'</i></td>';
        }
      }
    }
    $other = M("caipiao")->where("isopen = 1")->cache(300)->order('allsort ASC')->select();
    $this->assign('other',$other);
    $this->assign('trendhtml',$html);
    $this->assign('trendhtml1',$html1);
    $this->assign('trendhtml2',$html2);
    $this->assign('trendhtml3',$html3);
    $this->assign('trendhtml4',$html4);
    $this->display('Game_trend_ssc');
  }
  function trend_x5(){
    $lotteryname = I('code');
    $this->assign('lotteryname',$lotteryname);
    $num = I('num',30,'intval');
    $_api = new \Lib\api;
    $apiparam['lotteryname'] = $lotteryname;
    $apiparam['num'] = $num;
    $Result = $_api->sendHttpClient('Api/Lottery/lotteryopencodes',$apiparam);
    $this->assign('cptitle',$Result['data'][0]['title']);
    $html = '';$allballs = [1,2,3,4,5,6,7,8,9,10,11];
    if($Result['sign'] && count($Result['data'])>=1){
      foreach($Result['data'] as $k=>$v){
        $balls = explode(',',$v['opencode']);
        $countarray = array_count_values($balls);
        $sum   = 0;$sum = array_sum($balls);
        $bigsmall = $sum>10?'大':'小';
        $oddeven  = $sum%2==0?'双':'单';
        $html .= '<tr class="byzstxt">';
        $html .= '<td class="chart-issue border-right">'.$v['expect'].'</td>';
        $html .= '<td class="chart-open-code border-right">';
        $html .= '<i>'.$balls[0].'</i>';
        $html .= '<i>'.$balls[1].'</i>';
        $html .= '<i>'.$balls[2].'</i>';
        $html .= '<i>'.$balls[3].'</i>';
        $html .= '<i>'.$balls[4].'</i>';
        $html .= '</td>';
        
        
        for($i=1;$i<12;$i++){
          if($i==intval($balls[0])){
            $html .= '<td class="select-num border-right1_x5"><i class="selected-num">'.$balls[0].'</i></td>';
            $five['LW'.$i]=0;
            if($five['SW'.$i]){$five['SW'.$i]++;}else{$five['SW'.$i]=1;}
            if($five['LCW'.$i]){$five['LCW'.$i]++;}else{$five['LCW'.$i]=1;}
          }else{
            if($five['LW'.$i]){$five['LW'.$i]++;}else{$five['LW'.$i]=1;}
            $html .= '<td class="select-num border-right1_x5"><i class="ylou">'.$five['LW'.$i].'</i></td>';
            $five['LCW'.$i]=0;
          }
          if($five['ZW'.$i]){$five['ZW'.$i]+=$five['LW'.$i];}else{$five['ZW'.$i]=$five['LW'.$i];}
          if($five['MW'.$i]<$five['LW'.$i]){$five['MW'.$i]=$five['LW'.$i];}
          if($five['MLCW'.$i]<$five['LCW'.$i]){$five['MLCW'.$i]=$five['LCW'.$i];}

        }
        for($i=1;$i<12;$i++){
          if($i==intval($balls[1])){
            $html .= '<td class="select-num border-right1_x5"><i class="selected-num">'.$balls[1].'</i></td>';
            $five['LQ'.$i]=0;
            if($five['SQ'.$i]){$five['SQ'.$i]++;}else{$five['SQ'.$i]=1;}
            if($five['LCQ'.$i]){$five['LCQ'.$i]++;}else{$five['LCQ'.$i]=1;}
          }else{
            if($five['LQ'.$i]){$five['LQ'.$i]++;}else{$five['LQ'.$i]=1;}
            $html .= '<td class="select-num border-right1_x5"><i class="ylou">'.$five['LQ'.$i].'</i></td>';
            $five['LCQ'.$i]=0;
          }
          if($five['ZQ'.$i]){$five['ZQ'.$i]+=$five['LQ'.$i];}else{$five['ZQ'.$i]=$five['LQ'.$i];}
          if($five['MQ'.$i]<$five['LQ'.$i]){$five['MQ'.$i]=$five['LQ'.$i];}
          if($five['MLCQ'.$i]<$five['LCQ'.$i]){$five['MLCQ'.$i]=$five['LCQ'.$i];}

        }
        for($i=1;$i<12;$i++){
          if($i==intval($balls[2])){
            $html .= '<td class="select-num border-right1_x5"><i class="selected-num">'.$balls[2].'</i></td>';
            $five['LB'.$i]=0;
            if($five['SB'.$i]){$five['SB'.$i]++;}else{$five['SB'.$i]=1;}
            if($five['LCB'.$i]){$five['LCB'.$i]++;}else{$five['LCB'.$i]=1;}
          }else{
            if($five['LB'.$i]){$five['LB'.$i]++;}else{$five['LB'.$i]=1;}
            $html .= '<td class="select-num border-right1_x5"><i class="ylou">'.$five['LB'.$i].'</i></td>';
            $five['LCB'.$i]=0;
          }
          if($five['ZB'.$i]){$five['ZB'.$i]+=$five['LB'.$i];}else{$five['ZB'.$i]=$five['LB'.$i];}
          if($five['MB'.$i]<$five['LB'.$i]){$five['MB'.$i]=$five['LB'.$i];}
          if($five['MLCB'.$i]<$five['LCB'.$i]){$five['MLCB'.$i]=$five['LCB'.$i];}
          
        }
        for($i=1;$i<12;$i++){
          if($i==intval($balls[3])){
            $html .= '<td class="select-num border-right1_x5"><i class="selected-num">'.$balls[3].'</i></td>';
            $five['LS'.$i]=0;
            if($five['SS'.$i]){$five['SS'.$i]++;}else{$five['SS'.$i]=1;}
            if($five['LCS'.$i]){$five['LCS'.$i]++;}else{$five['LCS'.$i]=1;}
          }else{
            if($five['LS'.$i]){$five['LS'.$i]++;}else{$five['LS'.$i]=1;}
            $html .= '<td class="select-num border-right1_x5"><i class="ylou">'.$five['LS'.$i].'</i></td>';
            $five['LCS'.$i]=0;
          }
          if($five['ZS'.$i]){$five['ZS'.$i]+=$five['LS'.$i];}else{$five['ZS'.$i]=$five['LS'.$i];}
          if($five['MS'.$i]<$five['LS'.$i]){$five['MS'.$i]=$five['LS'.$i];}
          if($five['MLCS'.$i]<$five['LCS'.$i]){$five['MLCS'.$i]=$five['LCS'.$i];}
          
        }
        for($i=1;$i<12;$i++){
          if($i==intval($balls[4])){
            $html .= '<td class="select-num border-right1_x5"><i class="selected-num">'.$balls[4].'</i></td>';
            $five['LG'.$i]=0;
            if($five['SG'.$i]){$five['SG'.$i]++;}else{$five['SG'.$i]=1;}
            if($five['LCG'.$i]){$five['LCG'.$i]++;}else{$five['LCG'.$i]=1;}
          }else{
            if($five['LG'.$i]){$five['LG'.$i]++;}else{$five['LG'.$i]=1;}
            $html .= '<td class="select-num border-right1_x5"><i class="ylou">'.$five['LG'.$i].'</i></td>';
            $five['LCG'.$i]=0;
          }
          if($five['ZG'.$i]){$five['ZG'.$i]+=$five['LG'.$i];}else{$five['ZG'.$i]=$five['LG'.$i];}
          if($five['MG'.$i]<$five['LG'.$i]){$five['MG'.$i]=$five['LG'.$i];}
          if($five['MLCG'.$i]<$five['LCG'.$i]){$five['MLCG'.$i]=$five['LCG'.$i];}
        }

        for($i=1;$i<=11;$i++){
          if(in_array($i,$balls)){
            if($countarray[$i]==2){
              $html .= '<td class="distribution-num"><span>2</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }elseif($countarray[$i]==3) {
              $html .= '<td class="distribution-num"><span>3</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }elseif($countarray[$i]==4){
              $html .= '<td class="distribution-num"><span>4</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }elseif($countarray[$i]==5){
              $html .= '<td class="distribution-num"><span>5</span><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }else{
              $html .= '<td class="distribution-num"><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }
          }else{
            if($five['LZ'.$i]){$five['LZ'.$i]++;}else{$five['LZ'.$i]=1;}
            $html .= '<td class="distribution-num"><i class="ylou">'.$five['LZ'.$i].'</i></td>';
            $five['LCZ'.$i]=0;
          }
          if($five['ZZ'.$i]){$five['ZZ'.$i]+=$five['LZ'.$i];}else{$five['ZZ'.$i]=$five['LZ'.$i];}
          if($five['MZ'.$i]<$five['LZ'.$i]){$five['MZ'.$i]=$five['LG'.$i];}
          if($five['MLCZ'.$i]<$five['LCZ'.$i]){$five['MLCZ'.$i]=$five['LCZ'.$i];}
        }
        $html .= '</tr>';
        
        
      }
      foreach(array('W','Q','B','S','G','Z') as $balls){
        for($i=1;$i<12;$i++)
        {
          if($five['S'.$balls.$i]){
            $five['D'.$balls.$i]=$five['S'.$balls.$i];
          }else{
            $five['D'.$balls.$i]=0;
          }
          $html1 .= '<td class="select-num"><i>'.$five['D'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('W','Q','B','S','G','Z') as $balls){
        for($i=1;$i<12;$i++)
        {
          $five['P'.$balls.$i]=intval($num/($five['D'.$balls.$i]+1));
          $html2 .= '<td class="select-num"><i>'.$five['P'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('W','Q','B','S','G','Z') as $balls){
        for($i=1;$i<12;$i++)
        {
          if($five['M'.$balls.$i]){
            $five['Max'.$balls.$i]=$five['M'.$balls.$i];
          }else{
            $five['Max'.$balls.$i]=0;
          }
          $html3 .= '<td class="select-num"><i>'.$five['Max'.$balls.$i].'</i></td>';
        }
      }
      foreach(array('W','Q','B','S','G','Z') as $balls){
        for($i=1;$i<12;$i++)
        {
          if($five['MLC'.$balls.$i]){
            $five['MaxLC'.$balls.$i]=$five['MLC'.$balls.$i];
          }else{
            $five['MaxLC'.$balls.$i]=0;
          }
          $html4 .= '<td class="select-num"><i>'.$five['MaxLC'.$balls.$i].'</i></td>';
        }
      }
    }
    $other = M("caipiao")->where("isopen = 1")->cache(300)->order('allsort ASC')->select();
    $this->assign('other',$other);
    $this->assign('trendhtml',$html);
    $this->assign('trendhtml1',$html1);
    $this->assign('trendhtml2',$html2);
    $this->assign('trendhtml3',$html3);
    $this->assign('trendhtml4',$html4);
    $this->display('Game_trend_x5');
  }
  function trend_dpc(){
    $lotteryname = I('code');
    $this->assign('lotteryname',$lotteryname);
    $num = I('num',30,'intval');
    $_api = new \Lib\api;
    $apiparam['lotteryname'] = $lotteryname;
    $apiparam['num'] = $num;
    $Result = $_api->sendHttpClient('Api/Lottery/lotteryopencodes',$apiparam);
    $this->assign('cptitle',$Result['data'][0]['title']);
    $html = '';$allballs = [0,1,2,3,4,5,6,7,8,9];
    if($Result['sign'] && count($Result['data'])>=1){
      foreach($Result['data'] as $k=>$v){
        $balls = explode(',',$v['opencode']);
        $countarray = array_count_values($balls);
        $sum   = 0;$sum = array_sum($balls);
        $count = count($countarray);
        $kd = max($balls)-min($balls);
        $bigsmall1 = $balls[0]>4?'大':'小';
        $bigsmall2 = $balls[1]>4?'大':'小';
        $bigsmall3 = $balls[2]>4?'大':'小';
        $oddeven1  = $balls[0]%2==0?'双':'单';
        $oddeven2  = $balls[1]%2==0?'双':'单';
        $oddeven3  = $balls[2]%2==0?'双':'单';
        $html .= '<tr class="text-c">';
        $html .= '<td height="40">'.$v['expect'].'</td>';
        $html .= '<td class="c_ba2636"><b>'.$balls[0].'</b></td>';
        $html .= '<td class="c_ba2636"><b>'.$balls[1].'</b></td>';
        $html .= '<td class="c_ba2636"><b>'.$balls[2].'</b></td>';

        for($i=0;$i<=9;$i++){
          if(in_array($i,$balls)){
            if($countarray[$i]==2)
              $html .= '<td class="ball_red"><div class="s_ball">2</div><i>'.$i.'</i></td>';
            else
              $html .= '<td class="ball_red">'.$i.'</td>';
          }else{
            $html .= '<td class="f_green">'.$i.'</td>';
          }
        }
        if($bigsmall1=='大'){
          $html .= '<td class="bg_orange js-fold dx">大</td>';
        }else{
          $html .= '<td class="bg_orange js-fold dx">小</td>';
        }
        if($bigsmall2=='大'){
          $html .= '<td class="bg_orange js-fold dx">大</td>';
        }else{
          $html .= '<td class="bg_orange js-fold dx">小</td>';
        }
        if($bigsmall3=='大'){
          $html .= '<td class="bg_orange js-fold dx">大</td>';
        }else{
          $html .= '<td class="bg_orange js-fold dx">小</td>';
        }


        if($oddeven1=='双'){
          $html .= '<td class="bg_orange js-fold ds">双</td>';
        }else{
          $html .= '<td class="bg_orange js-fold ds">单</td>';
        }
        if($oddeven2=='双'){
          $html .= '<td class="bg_orange js-fold ds">双</td>';
        }else{
          $html .= '<td class="bg_orange js-fold ds">单</td>';
        }
        if($oddeven3=='双'){
          $html .= '<td class="bg_orange js-fold ds">双</td>';
        }else{
          $html .= '<td class="bg_orange js-fold ds">单</td>';
        }
        /*<img width="20" src='.__ROOT__.'/resources/images/jump_success.png />*/
        if($count==2){
          $html .= '<td style="font-weight: bolder;color:red;background:#cdb624;">√</td>';
          $html .= '<td style="background:#cdb624;"></td>';
          $html .= '<td style="background:#cdb624;"></td>';
        }elseif($count==3){
          $html .= '<td style="background:#cdb624;"></td>';
          $html .= '<td style="font-weight: bolder;color:red;background:#cdb624;">√</td>';
          $html .= '<td style="background:#cdb624;"></td>';
        }elseif($count==1){
          $html .= '<td style="background:#cdb624;"></td>';
          $html .= '<td style="background:#cdb624;"></td>';
          $html .= '<td style="font-weight: bolder;color:red;background:#cdb624;">√</td>';
        }
        $html .= '<td style="background:#54b2cd;color:#fff;">' .$kd.'</td>';
        $html .= '<td style="background:#cd9d94;color:#fff;">' .$sum.'</td>';

        $html .= '</tr>';
      }
    }
    $this->assign('trendhtml',$html);
    $this->display('Game_trend_dpc');
  }
  function trend_pk10(){
    $lotteryname = I('code');
    $pk10type = I('type');
    $this->assign('lotteryname',$lotteryname);
    $num = I('num',30,'intval');
    $_api = new \Lib\api;
    $apiparam['lotteryname'] = $lotteryname;
    $apiparam['num'] = $num;
    $Result = $_api->sendHttpClient('Api/Lottery/lotteryopencodes',$apiparam);
    $this->assign('cptitle',$Result['data'][0]['title']);
    $html = '';
    $allballs = ['01,02,03,04,05,06,07,08,09,10'];
    if($Result['sign'] && count($Result['data'])>=1){
      foreach($Result['data'] as $k=>$v){
        $balls = explode(',',$v['opencode']);
        $countarray = array_count_values($balls);
        $sum   = 0;$sum = array_sum($balls);
        $count = count($countarray);
        $kd = max($balls)-min($balls);
        $oddeven1  = $balls[0]%2==0?'偶':'奇';
        $bigsmall1 = $balls[0]>4?'大':'小';
        $html .= '<tr class="byzstxt">';
        $html .= '<td class="chart-issue border-right">'.$v['expect'].'</td>';
        if($pk10type==""||$pk10type=="1"){
          //前五0-5 后五5-10  /////G S B Q W SW BW QW YY SY
          $html .= '<td class="chart-open-code border-right"><i>'.$balls[0].'</i><i>'.$balls[1].'</i><i>'.$balls[2].'</i><i>'.$balls[3].'</i><i>'.$balls[4].'</i></td>';
          for($i=1;$i<11;$i++){
            if($i==intval($balls[0])){
              $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[0].'</i></td>';
              $five['LW'.$i]=0;
              if($five['SW'.$i]){$five['SW'.$i]++;}else{$five['SW'.$i]=1;}
              if($five['LCW'.$i]){$five['LCW'.$i]++;}else{$five['LCW'.$i]=1;}
            }else{
              if($five['LW'.$i]){$five['LW'.$i]++;}else{$five['LW'.$i]=1;}
              $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LW'.$i].'</i></td>';
              $five['LCW'.$i]=0;
            }
            if($five['ZW'.$i]){$five['ZW'.$i]+=$five['LW'.$i];}else{$five['ZW'.$i]=$five['LW'.$i];}
            if($five['MW'.$i]<$five['LW'.$i]){$five['MW'.$i]=$five['LW'.$i];}
            if($five['MLCW'.$i]<$five['LCW'.$i]){$five['MLCW'.$i]=$five['LCW'.$i];}

          }
          for($i=1;$i<11;$i++){
            if($i==intval($balls[1])){
              $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[1].'</i></td>';
              $five['LQ'.$i]=0;
              if($five['SQ'.$i]){$five['SQ'.$i]++;}else{$five['SQ'.$i]=1;}
              if($five['LCQ'.$i]){$five['LCQ'.$i]++;}else{$five['LCQ'.$i]=1;}
            }else{
              if($five['LQ'.$i]){$five['LQ'.$i]++;}else{$five['LQ'.$i]=1;}
              $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LQ'.$i].'</i></td>';
              $five['LCQ'.$i]=0;
            }
            if($five['ZQ'.$i]){$five['ZQ'.$i]+=$five['LQ'.$i];}else{$five['ZQ'.$i]=$five['LQ'.$i];}
            if($five['MQ'.$i]<$five['LQ'.$i]){$five['MQ'.$i]=$five['LQ'.$i];}
            if($five['MLCQ'.$i]<$five['LCQ'.$i]){$five['MLCQ'.$i]=$five['LCQ'.$i];}

          }
          for($i=1;$i<11;$i++){
            if($i==intval($balls[2])){
              $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[2].'</i></td>';
              $five['LB'.$i]=0;
              if($five['SB'.$i]){$five['SB'.$i]++;}else{$five['SB'.$i]=1;}
              if($five['LCB'.$i]){$five['LCB'.$i]++;}else{$five['LCB'.$i]=1;}
            }else{
              if($five['LB'.$i]){$five['LB'.$i]++;}else{$five['LB'.$i]=1;}
              $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LB'.$i].'</i></td>';
              $five['LCB'.$i]=0;
            }
            if($five['ZB'.$i]){$five['ZB'.$i]+=$five['LB'.$i];}else{$five['ZB'.$i]=$five['LB'.$i];}
            if($five['MB'.$i]<$five['LB'.$i]){$five['MB'.$i]=$five['LB'.$i];}
            if($five['MLCB'.$i]<$five['LCB'.$i]){$five['MLCB'.$i]=$five['LCB'.$i];}

          }
          for($i=1;$i<11;$i++){
            if($i==intval($balls[3])){
              $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[3].'</i></td>';
              $five['LS'.$i]=0;
              if($five['SS'.$i]){$five['SS'.$i]++;}else{$five['SS'.$i]=1;}
              if($five['LCS'.$i]){$five['LCS'.$i]++;}else{$five['LCS'.$i]=1;}
            }else{
              if($five['LS'.$i]){$five['LS'.$i]++;}else{$five['LS'.$i]=1;}
              $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LS'.$i].'</i></td>';
              $five['LCS'.$i]=0;
            }
            if($five['ZS'.$i]){$five['ZS'.$i]+=$five['LS'.$i];}else{$five['ZS'.$i]=$five['LS'.$i];}
            if($five['MS'.$i]<$five['LS'.$i]){$five['MS'.$i]=$five['LS'.$i];}
            if($five['MLCS'.$i]<$five['LCS'.$i]){$five['MLCS'.$i]=$five['LCS'.$i];}

          }
          for($i=1;$i<11;$i++){
            if($i==intval($balls[4])){
              $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[4].'</i></td>';
              $five['LG'.$i]=0;
              if($five['SG'.$i]){$five['SG'.$i]++;}else{$five['SG'.$i]=1;}
              if($five['LCG'.$i]){$five['LCG'.$i]++;}else{$five['LCG'.$i]=1;}
            }else{
              if($five['LG'.$i]){$five['LG'.$i]++;}else{$five['LG'.$i]=1;}
              $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LG'.$i].'</i></td>';
              $five['LCG'.$i]=0;
            }
            if($five['ZG'.$i]){$five['ZG'.$i]+=$five['LG'.$i];}else{$five['ZG'.$i]=$five['LG'.$i];}
            if($five['MG'.$i]<$five['LG'.$i]){$five['MG'.$i]=$five['LG'.$i];}
            if($five['MLCG'.$i]<$five['LCG'.$i]){$five['MLCG'.$i]=$five['LCG'.$i];}
          }
          if($bigsmall1=='大'){
            $html .= '<td class="select-num border-right"><i class="da">大</i></td>';
          }else{
            $html .= '<td class="select-num border-right"><i class="xiao">小</i></td>';
          }
          if($oddeven1=='偶'){
            $html .= '<td class="select-num border-right"><i class="shuang">双</i></td>';
          }else{
            $html .= '<td class="select-num border-right"><i class="dan">单</i></td>';
          }

          for($i=1;$i<11;$i++){
            if($i==10){
              if( $i==$balls[0]){
                $html .= '<td class="distribution-num"><i class="distributioned-num">'.$i.'</i></td>';
                $five['LZ'.$i]=0;
                if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
                if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
              }else{
               if($five['LZ'.$i]){$five['LZ'.$i]++;}else{$five['LZ'.$i]=1;}
               $html .= '<td class="distribution-num"><i class="ylou">'.$five['LZ'.$i].'</i></td>';
               $five['LCZ'.$i]=0;
             }
           } else{
            if( $i==$balls[0]){
              $html .= '<td class="distribution-num"><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }else{
              if($five['LZ'.$i]){$five['LZ'.$i]++;}else{$five['LZ'.$i]=1;}
              $html .= '<td class="distribution-num"><i class="ylou">'.$five['LZ'.$i].'</i></td>';
              $five['LCZ'.$i]=0;
            }
          }
          if($five['ZZ'.$i]){$five['ZZ'.$i]+=$five['LZ'.$i];}else{$five['ZZ'.$i]=$five['LZ'.$i];}
          if($five['MZ'.$i]<$five['LZ'.$i]){$five['MZ'.$i]=$five['LG'.$i];}
          if($five['MLCZ'.$i]<$five['LCZ'.$i]){$five['MLCZ'.$i]=$five['LCZ'.$i];}
        }



        $html .= '</tr>';
      }else {
        $html .= '<td class="chart-open-code border-right"><i>'.$balls[5].'</i><i>'.$balls[6].'</i><i>'.$balls[7].'</i><i>'.$balls[8].'</i><i>'.$balls[9].'</i></td>';

        for($i=1;$i<11;$i++){
          if($i==intval($balls[5])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[5].'</i></td>';
            $five['LW'.$i]=0;
            if($five['SW'.$i]){$five['SW'.$i]++;}else{$five['SW'.$i]=1;}
            if($five['LCW'.$i]){$five['LCW'.$i]++;}else{$five['LCW'.$i]=1;}
          }else{
            if($five['LW'.$i]){$five['LW'.$i]++;}else{$five['LW'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LW'.$i].'</i></td>';
            $five['LCW'.$i]=0;
          }
          if($five['ZW'.$i]){$five['ZW'.$i]+=$five['LW'.$i];}else{$five['ZW'.$i]=$five['LW'.$i];}
          if($five['MW'.$i]<$five['LW'.$i]){$five['MW'.$i]=$five['LW'.$i];}
          if($five['MLCW'.$i]<$five['LCW'.$i]){$five['MLCW'.$i]=$five['LCW'.$i];}

        }
        for($i=1;$i<11;$i++){
          if($i==intval($balls[6])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[6].'</i></td>';
            $five['LQ'.$i]=0;
            if($five['SQ'.$i]){$five['SQ'.$i]++;}else{$five['SQ'.$i]=1;}
            if($five['LCQ'.$i]){$five['LCQ'.$i]++;}else{$five['LCQ'.$i]=1;}
          }else{
            if($five['LQ'.$i]){$five['LQ'.$i]++;}else{$five['LQ'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LQ'.$i].'</i></td>';
            $five['LCQ'.$i]=0;
          }
          if($five['ZQ'.$i]){$five['ZQ'.$i]+=$five['LQ'.$i];}else{$five['ZQ'.$i]=$five['LQ'.$i];}
          if($five['MQ'.$i]<$five['LQ'.$i]){$five['MQ'.$i]=$five['LQ'.$i];}
          if($five['MLCQ'.$i]<$five['LCQ'.$i]){$five['MLCQ'.$i]=$five['LCQ'.$i];}

        }
        for($i=1;$i<11;$i++){
          if($i==intval($balls[7])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[7].'</i></td>';
            $five['LB'.$i]=0;
            if($five['SB'.$i]){$five['SB'.$i]++;}else{$five['SB'.$i]=1;}
            if($five['LCB'.$i]){$five['LCB'.$i]++;}else{$five['LCB'.$i]=1;}
          }else{
            if($five['LB'.$i]){$five['LB'.$i]++;}else{$five['LB'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LB'.$i].'</i></td>';
            $five['LCB'.$i]=0;
          }
          if($five['ZB'.$i]){$five['ZB'.$i]+=$five['LB'.$i];}else{$five['ZB'.$i]=$five['LB'.$i];}
          if($five['MB'.$i]<$five['LB'.$i]){$five['MB'.$i]=$five['LB'.$i];}
          if($five['MLCB'.$i]<$five['LCB'.$i]){$five['MLCB'.$i]=$five['LCB'.$i];}

        }
        for($i=1;$i<11;$i++){
          if($i==intval($balls[8])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[8].'</i></td>';
            $five['LS'.$i]=0;
            if($five['SS'.$i]){$five['SS'.$i]++;}else{$five['SS'.$i]=1;}
            if($five['LCS'.$i]){$five['LCS'.$i]++;}else{$five['LCS'.$i]=1;}
          }else{
            if($five['LS'.$i]){$five['LS'.$i]++;}else{$five['LS'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LS'.$i].'</i></td>';
            $five['LCS'.$i]=0;
          }
          if($five['ZS'.$i]){$five['ZS'.$i]+=$five['LS'.$i];}else{$five['ZS'.$i]=$five['LS'.$i];}
          if($five['MS'.$i]<$five['LS'.$i]){$five['MS'.$i]=$five['LS'.$i];}
          if($five['MLCS'.$i]<$five['LCS'.$i]){$five['MLCS'.$i]=$five['LCS'.$i];}

        }
        for($i=1;$i<11;$i++){
          if($i==intval($balls[9])){
            $html .= '<td class="select-num border-right1"><i class="selected-num">'.$balls[9].'</i></td>';
            $five['LG'.$i]=0;
            if($five['SG'.$i]){$five['SG'.$i]++;}else{$five['SG'.$i]=1;}
            if($five['LCG'.$i]){$five['LCG'.$i]++;}else{$five['LCG'.$i]=1;}
          }else{
            if($five['LG'.$i]){$five['LG'.$i]++;}else{$five['LG'.$i]=1;}
            $html .= '<td class="select-num border-right1"><i class="ylou">'.$five['LG'.$i].'</i></td>';
            $five['LCG'.$i]=0;
          }
          if($five['ZG'.$i]){$five['ZG'.$i]+=$five['LG'.$i];}else{$five['ZG'.$i]=$five['LG'.$i];}
          if($five['MG'.$i]<$five['LG'.$i]){$five['MG'.$i]=$five['LG'.$i];}
          if($five['MLCG'.$i]<$five['LCG'.$i]){$five['MLCG'.$i]=$five['LCG'.$i];}
        }
        if($bigsmall1=='大'){
          $html .= '<td class="select-num border-right"><i class="da">大</i></td>';
        }else{
          $html .= '<td class="select-num border-right"><i class="xiao">小</i></td>';
        }
        if($oddeven1=='偶'){
          $html .= '<td class="select-num border-right"><i class="shuang">双</i></td>';
        }else{
          $html .= '<td class="select-num border-right"><i class="dan">单</i></td>';
        }
        for($i=1;$i<11;$i++){
          if($i==10){
            if( $i==$balls[0]){
              $html .= '<td class="distribution-num"><i class="distributioned-num">'.$i.'</i></td>';
              $five['LZ'.$i]=0;
              if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
              if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
            }else{
             if($five['LZ'.$i]){$five['LZ'.$i]++;}else{$five['LZ'.$i]=1;}
             $html .= '<td class="distribution-num"><i class="ylou">'.$five['LZ'.$i].'</i></td>';
             $five['LCZ'.$i]=0;
           }
         } else{
          if( $i==$balls[0]){
            $html .= '<td class="distribution-num"><i class="distributioned-num">'.$i.'</i></td>';
            $five['LZ'.$i]=0;
            if($five['SZ'.$i]){$five['SZ'.$i]++;}else{$five['SZ'.$i]=1;}
            if($five['LCZ'.$i]){$five['LCZ'.$i]++;}else{$five['LCZ'.$i]=1;}
          }else{
            if($five['LZ'.$i]){$five['LZ'.$i]++;}else{$five['LZ'.$i]=1;}
            $html .= '<td class="distribution-num"><i class="ylou">'.$five['LZ'.$i].'</i></td>';
            $five['LCZ'.$i]=0;
          }
        }
        if($five['ZZ'.$i]){$five['ZZ'.$i]+=$five['LZ'.$i];}else{$five['ZZ'.$i]=$five['LZ'.$i];}
        if($five['MZ'.$i]<$five['LZ'.$i]){$five['MZ'.$i]=$five['LG'.$i];}
        if($five['MLCZ'.$i]<$five['LCZ'.$i]){$five['MLCZ'.$i]=$five['LCZ'.$i];}
      }
      $html .= '</tr>';
    }

  }
  foreach(array('W','Q','B','S','G') as $balls){
    for($i=1;$i<11;$i++)
    {
      if($five['S'.$balls.$i]){
        $five['D'.$balls.$i]=$five['S'.$balls.$i];
      }else{
        $five['D'.$balls.$i]=0;
      }
      $html1 .= '<td class="select-num"><i>'.$five['D'.$balls.$i].'</i></td>';
    }
  }
  $html1 .= '<td class="select-num"><i></i></td>';
  $html1 .= '<td class="select-num"><i></i></td>';
  foreach(array('Z') as $balls){
    for($i=1;$i<11;$i++)
    {
      if($five['S'.$balls.$i]){
        $five['D'.$balls.$i]=$five['S'.$balls.$i];
      }else{
        $five['D'.$balls.$i]=0;
      }
      $html1 .= '<td class="select-num"><i>'.$five['D'.$balls.$i].'</i></td>';
    }
  }

  foreach(array('W','Q','B','S','G') as $balls){
    for($i=1;$i<11;$i++)
    {
      $five['P'.$balls.$i]=intval($num/($five['D'.$balls.$i]+1));
      $html2 .= '<td class="select-num"><i>'.$five['P'.$balls.$i].'</i></td>';
    }
  }
  $html2 .= '<td class="select-num"><i></i></td>';
  $html2 .= '<td class="select-num"><i></i></td>';
  foreach(array('Z') as $balls){
    for($i=1;$i<11;$i++)
    {
      $five['P'.$balls.$i]=intval($num/($five['D'.$balls.$i]+1));
      $html2 .= '<td class="select-num"><i>'.$five['P'.$balls.$i].'</i></td>';
    }
  }

  foreach(array('W','Q','B','S','G') as $balls){
    for($i=1;$i<11;$i++)
    {
      if($five['M'.$balls.$i]){
        $five['Max'.$balls.$i]=$five['M'.$balls.$i];
      }else{
        $five['Max'.$balls.$i]=0;
      }
      $html3 .= '<td class="select-num"><i>'.$five['Max'.$balls.$i].'</i></td>';
    }
  }
  $html3 .= '<td class="select-num"><i></i></td>';
  $html3 .= '<td class="select-num"><i></i></td>';
  foreach(array('Z') as $balls){
    for($i=1;$i<11;$i++)
    {
      if($five['M'.$balls.$i]){
        $five['Max'.$balls.$i]=$five['M'.$balls.$i];
      }else{
        $five['Max'.$balls.$i]=0;
      }
      $html3 .= '<td class="select-num"><i>'.$five['Max'.$balls.$i].'</i></td>';
    }
  }

  foreach(array('W','Q','B','S','G') as $balls){
    for($i=1;$i<11;$i++)
    {
      if($five['MLC'.$balls.$i]){
        $five['MaxLC'.$balls.$i]=$five['MLC'.$balls.$i];
      }else{
        $five['MaxLC'.$balls.$i]=0;
      }
      $html4 .= '<td class="select-num"><i>'.$five['MaxLC'.$balls.$i].'</i></td>';
    }
  }
  $html4 .= '<td class="select-num"><i></i></td>';
  $html4 .= '<td class="select-num"><i></i></td>';

  foreach(array('Z') as $balls){
    for($i=1;$i<11;$i++)
    {
      if($five['MLC'.$balls.$i]){
        $five['MaxLC'.$balls.$i]=$five['MLC'.$balls.$i];
      }else{
        $five['MaxLC'.$balls.$i]=0;
      }
      $html4 .= '<td class="select-num"><i>'.$five['MaxLC'.$balls.$i].'</i></td>';
    }
  }
  if($pk10type==""||$pk10type=="1"){
      $html5 .='<tr><td class="chart-issue-title" rowspan="2"><div>奖期</div></td><td class="chart-open-code-title" rowspan="2"><div>开奖号码</div></td><td class="chart-pos-title" colspan="10"><div>冠军</div></td><td class="chart-pos-title" colspan="10"><div>亚军</div></td><td class="chart-pos-title" colspan="10"><div>季军</div></td><td class="chart-pos-title" colspan="10"><div>第四名</div></td><td class="chart-pos-title" colspan="10"><div>第五名</div></td><td class="title-k3-xt" rowspan="2">冠军大小</td><td class="title-k3-xt" rowspan="2">冠军单双</td><td class="chart-distribution-title" colspan="10"><div>冠军分布</div></td></tr>';
  }else{
      $html5 .='<tr><td class="chart-issue-title" rowspan="2"><div>奖期</div></td><td class="chart-open-code-title" rowspan="2"><div>开奖号码</div></td><td class="chart-pos-title" colspan="10"><div>第六名</div></td><td class="chart-pos-title" colspan="10"><div>第七名</div></td><td class="chart-pos-title" colspan="10"><div>第八名</div></td><td class="chart-pos-title" colspan="10"><div>第九名</div></td><td class="chart-pos-title" colspan="10"><div>第十名</div></td><td class="title-k3-xt" rowspan="2">冠军大小</td><td class="title-k3-xt" rowspan="2">冠军单双</td><td class="chart-distribution-title" colspan="10"><div>冠军分布</div></td></tr>';
  }
}
$other = M("caipiao")->where("isopen = 1")->cache(300)->order('allsort ASC')->select();
$this->assign('other',$other);
$this->assign('trendhtml',$html);
$this->assign('trendhtml1',$html1);
$this->assign('trendhtml2',$html2);
$this->assign('trendhtml3',$html3);
$this->assign('trendhtml4',$html4);
$this->assign('trendhtml5',$html5);
$this->display('Game_trend_pk10');
}
function trend_keno(){
  $lotteryname = I('code');
  $this->assign('lotteryname',$lotteryname);
  $num = I('num',30,'intval');
  $_api = new \Lib\api;
  $apiparam['lotteryname'] = $lotteryname;
  $apiparam['num'] = $num;
  $Result = $_api->sendHttpClient('Api/Lottery/lotteryopencodes',$apiparam);
  $this->assign('cptitle',$Result['data'][0]['title']);
  $html = '';
  $allballs = ['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80'];
  if($Result['sign'] && count($Result['data'])>=1){
    foreach($Result['data'] as $k=>$v){
      $balls = explode(',',$v['opencode']);
      $html .= '<tr class="text-c"  style="height:30px;line-height:30px">';
      $html .= '<td height="40" ><div class="one">'.$v['expect'] .'</div></td>';
      for($i=0;$i<20;$i++){
        $html .= '<td class="c_ba2636"><b>'.$balls[$i].',</b></td>';
      }
      for($i=1;$i<=80;$i++){
        if($balls[0]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[1]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[2]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[3]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[4]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[5]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[6]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[7]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[8]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[9]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[10]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[11]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[12]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[13]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[14]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[15]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[16]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[17]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[18]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[19]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }elseif($balls[20]==$i){
          $html .= '<td ><span  class="span_red">'.$i.'</span></td>';
        }else{
          $html .= '<td class="f_green">'.$i.'</td>';
        }

      }

      $html .= '</tr>';
    }
  }
  $this->assign('trendhtml',$html);
  $this->display('Game_trend_keno');
}
function trend_lhc(){
  $lotteryname = I('code');
  $this->assign('lotteryname',$lotteryname);
  $num = I('num',30,'intval');
  $_api = new \Lib\api;
  $apiparam['lotteryname'] = $lotteryname;
  $apiparam['num'] = $num;
  $Result = $_api->sendHttpClient('Api/Lottery/lotteryopencodes',$apiparam);
  $this->assign('cptitle',$Result['data'][0]['title']);
  $hongbo = ['01','02','07','08','12','13','18','19','23','24','29','30','34','35','40','45','46'];  //红波
  $lvbo =   ['05','06','11','16','17','21','22','27','28','32','33','38','39','43','44','49'];       //绿波
  $lanbo =  ['03','04','09','10','14','15','20','25','26','31','36','37','41','42','47','48'];       //蓝波
//  特码大小
    $tmda = ['25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49'];  //大
  $tmxiao = ['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24'];   //小
  $tmdan = ['01','03','05','07','09','11','13','15','17','19','21','23','25','27','29','31','33','35','37','39','41','43','45','47','49']; //单
  $tmshuang = ['2','04','06','08','10','12','14','16','18','20','22','24','26','28','30','32','34','36','38','40','42','44','46','48'];  //双
  $tmheda = ['07','08','09','16','17','18','19','25','26','27','28','29','34','35','36','37','38','39','43','44','45','46','47','48','49'];//合大
  $tmhexiao = ['01','02','03','04','05','06','10','11','12','13','14','15','20','21','22','23','24','30','31','32','33','40','41','42']; //合小
  $tmhedan = ['01','03','05','07','09','10','12','14','16','18','21','23','25','27','29','30','32','34','36','38','41','43','45','47','49'];//合单
  $tmheshuang = ['02','04','06','08','11','13','15','17','19','20','22','24','26','28','31','33','35','37','39','40','42','44','46','48'];//合双
  $tmweida = ['05','06','07','08','09','15','16','17','18','19','25','26','27','28','29','35','36','37','38','39','45','46','47','48','49'];//尾大
  $tmweixiao = ['01','02','03','04','10','11','12','13','14','20','21','22','23','24','30','31','32','33','34','40','41','42','43','44']; //尾小
  $tmdadan = ['25','27','29','31','33','35','37','39','41','43','45','47','49'];
  $tmxiaodan = ['01','03','05','07','09','11','13','15','17','19','21','23'];
  $tmdashuang = ['26','28','30','32','34','36','38','40','42','44','46','48'];
  $tmxiaoshuang = ['02','04','06','08','10','12','14','16','18','20','22','24'];
  //家禽
  $tmjiaqin = ['01','03','04','09','11','12','13','15','16','21','23','24','25','27','28','33','35','36','37','39','40','45','47','48','49'];
  //野兽
  $tmyeshou = ['02','05','06','07','08','10','14','17','18','19','20','22','26','29','30','31','32','34','38','41','42','43','44','46'];
  //特码半波
  $hongda = ['29','30','34','35','40','45','46'];                  //红大
  $hongxiao = ['01','02','07','08','12','13','18','19','23','24']; //红小
  $hongdan = ['01','07','13','19','23','29','35','45'];            //红单
  $hongshuang = ['02','08','12','18','24','30','34','40','46'];    //红双
  $honghedan = ['07','12','18','23','29','30','34','45'];          //红合单
  $hongheshuang = ['02','08','13','19','24','35','40','46'];       //红合双
  $lvda = ['27','28','32','33','38','39','43','44','49'];          //绿大
  $lvxiao = ['05','06','11','16','17','21','22'];                  //绿小
  $lvdan = ['05','11','17','21','27','33','39','43','49'];         //绿单
  $lvshuang = ['06','16','22','28','32','38','44'];                //绿双
  $lvhedan = ['05','16','21','27','32','38','43','49'];            //绿合单
  $lvheshuang = ['06','11','17','22','28','33','39','44'];         //绿合双
  $landa = ['25','26','31','36','37','41','42','47','48'];         //蓝大
  $lanxiao = ['03','04','09','10','14','15','20'];                 //蓝小
  $landan = ['03','09','15','25','31','37','41','47'];             //蓝单
  $lanshuang = ['04','10','14','20','26','36','42','48'];          //蓝双
  $lanhedan = ['03','09','10','14','25','36','41','47'];           //蓝合单
  $lanheshuang =['04','15','20','26','31','37','42','48'];         //蓝合双
   //生肖
  $sxs = [                                                         //生肖
  "鼠" => ['02','14','26','38'],
  '牛' => ['01','13','25','37','49'],
  "虎" => ['12','24','36','48'],
  "兔" => ['11','23','35','47'],
  "龙" => ['10','22','34','46'],
  "蛇" => ['09','21','33','45'],
  "马" => ['08','20','32','44'],
  "羊" => ['07','19','31','43'],
  "猴" => ['06','18','30','42'],
  "鸡" => ['05','17','29','41'],
  "狗" => ['04','16','28','40'],
  "猪" => ['03','15','27','39']
];
for($i=1;$i<=49;$i++){
  if($i<10)$i='0'.$i;
     //波色
  if(in_array($i,$hongbo))$bose[$i]='red';
  if(in_array($i,$lvbo))$bose[$i]='green';
  if(in_array($i,$lanbo))$bose[$i]='blue';
     //生肖
  if(in_array($i,$sxs['鼠']))$sx[$i]='鼠';
  if(in_array($i,$sxs['牛']))$sx[$i]='牛';
  if(in_array($i,$sxs['虎']))$sx[$i]='虎';
  if(in_array($i,$sxs['兔']))$sx[$i]='兔';
  if(in_array($i,$sxs['龙']))$sx[$i]='龙';
  if(in_array($i,$sxs['蛇']))$sx[$i]='蛇';
  if(in_array($i,$sxs['马']))$sx[$i]='马';
  if(in_array($i,$sxs['羊']))$sx[$i]='羊';
  if(in_array($i,$sxs['猴']))$sx[$i]='猴';
  if(in_array($i,$sxs['鸡']))$sx[$i]='鸡';
  if(in_array($i,$sxs['狗']))$sx[$i]='狗';
  if(in_array($i,$sxs['猪']))$sx[$i]='猪';
}
$html = '';
if($Result['sign'] && count($Result['data'])>=1){
  foreach($Result['data'] as $k=>$v){
    $balls = explode(',',$v['opencode']);
    if($balls[6] !='49'){
      if(in_array($balls[6],$tmda)){$tmdaxiao='大';$tmdaxiao_class='da';}
      if(in_array($balls[6],$tmxiao)){$tmdaxiao='小';$tmdaxiao_class='xiao';}
      if(in_array($balls[6],$tmdan)){$tmdanshuang='单';$tmdanshuang_class='dan';}
      if(in_array($balls[6],$tmshuang)){$tmdanshuang='双';$tmdanshuang_class='shuang';}
      if(in_array($balls[6],$tmheda)){$tmhedaxiao='合大';$tmhedaxiao_class='heda';}
      if(in_array($balls[6],$tmhexiao)){$tmhedaxiao='合小';$tmhedaxiao_class='hexiao';}
      if(in_array($balls[6],$tmhedan)){$tmhedanshuang='合单';$tmhedanshuang_class='hedan';}
      if(in_array($balls[6],$tmheshuang)){$tmhedanshuang='合双';$tmhedanshuang_class='heshuang';}
      if(in_array($balls[6],$tmdadan)){$tmdxds='大单';$tmdxds_class='dadan';}
      if(in_array($balls[6],$tmxiaodan)){$tmdxds='小单';$tmdxds_class='xiaodan';}
      if(in_array($balls[6],$tmdashuang)){$tmdxds='大双';$tmdxds_class='dashuang';}
      if(in_array($balls[6],$tmxiaoshuang)){$tmdxds='小双';$tmdxds_class='xiaoshuang';}
      if(in_array($balls[6],$tmweida)){$tmweidaxiao='尾大';$tmweidaxiao_class='weida';}
      if(in_array($balls[6],$tmweixiao)){$tmweidaxiao='尾小';$tmweidaxiao_class='weixiao';}
    }else{
      $tmdaxiao=$tmdanshuang=$tmhedaxiao=$tmhedanshuang=$tmdxds=$tmweidaxiao='和';
      $tmdaxiao_class=$tmdanshuang_class=$tmhedaxiao_class=$tmhedanshuang_class=$tmdxds_class=$tmweidaxiao_class='he';
    }
    if(in_array($balls[6],$tmjiaqin)){$tmjqys='家禽';$tmjqys_class='jiaqin';}
    if(in_array($balls[6],$tmyeshou)){$tmjqys='野兽';$tmjqys_class='yeshou';}
    if(in_array($balls[6],$hongda)){$daxiao='红大';$daxiao_class='hongda';}
    if(in_array($balls[6],$hongxiao)){$daxiao='红小';$daxiao_class='hongxiao';}
    if(in_array($balls[6],$lvda)){$daxiao='绿大';$daxiao_class='lvda';}
    if(in_array($balls[6],$lvxiao)){$daxiao='绿小';$daxiao_class='lvxiao';}
    if(in_array($balls[6],$landa)){$daxiao='蓝大';$daxiao_class='landa';}
    if(in_array($balls[6],$lanxiao)){$daxiao='蓝小';$daxiao_class='lanxiao';}
    if(in_array($balls[6],$hongdan)){$danshuang='红单';$danshuang_class='hongdan';}
    if(in_array($balls[6],$hongshuang)){$danshuang='红双';$danshuang_class='hongshuang';}
    if(in_array($balls[6],$lvdan)){$danshuang='绿单';$danshuang_class='lvdan';}
    if(in_array($balls[6],$lvshuang)){$danshuang='绿双';$danshuang_class='lvshuang';}
    if(in_array($balls[6],$landan)){$danshuang='蓝单';$danshuang_class='landan';}
    if(in_array($balls[6],$lanshuang)){$danshuang='蓝双';$danshuang_class='lanshuang';}
    if(in_array($balls[6],$honghedan)){$hedanshuang='红合单';$hedanshuang_class='honghedan';}
    if(in_array($balls[6],$hongheshuang)){$hedanshuang='红合双';$hedanshuang_class='hongheshuang';}
    if(in_array($balls[6],$lvhedan)){$hedanshuang='绿合单';$hedanshuang_class='lvhedan';}
    if(in_array($balls[6],$lvheshuang)){$hedanshuang='绿合双';$hedanshuang_class='lvheshuang';}
    if(in_array($balls[6],$lanhedan)){$hedanshuang='蓝合单';$hedanshuang_class='lanhedan';}
    if(in_array($balls[6],$lanheshuang)){$hedanshuang='蓝合双';$hedanshuang_class='lanheshuang';}
    $html .= '<tr class="byzstxt">';
    $html .= '<td class="chart-issue border-right">'.$v['expect'].'</td>';
    $html .= '<td class="select-num border-right"><i class="yuan '.$bose[$balls[0]].'">'.$balls[0].'</i><span>'.$sx[$balls[0]].'</span></td>';
    $html .= '<td class="select-num border-right"><i class="yuan '.$bose[$balls[1]].'">'.$balls[1].'</i><span>'.$sx[$balls[1]].'</span></td>';
    $html .= '<td class="select-num border-right"><i class="yuan '.$bose[$balls[2]].'">'.$balls[2].'</i><span>'.$sx[$balls[2]].'</span></td>';
    $html .= '<td class="select-num border-right"><i class="yuan '.$bose[$balls[3]].'">'.$balls[3].'</i><span>'.$sx[$balls[3]].'</span></td>';
    $html .= '<td class="select-num border-right"><i class="yuan '.$bose[$balls[4]].'">'.$balls[4].'</i><span>'.$sx[$balls[4]].'</span></td>';
    $html .= '<td class="select-num border-right"><i class="yuan '.$bose[$balls[5]].'">'.$balls[5].'</i><span>'.$sx[$balls[5]].'</span></td>';
    $html .= '<td class="select-num border-right"><i class="yuan '.$bose[$balls[6]].'">'.$balls[6].'</i><span>'.$sx[$balls[6]].'</span></td>';
    $html .= '<td class="select-num border-right"><i class="'.$tmdaxiao_class.'">'.$tmdaxiao.'</i></td>';
    $html .= '<td class="select-num border-right"><i class="'.$tmdanshuang_class.'">'.$tmdanshuang.'</i></td>';
    $html .= '<td class="select-num border-right"><i class="'.$tmhedaxiao_class.'">'.$tmhedaxiao.'</i></td>';
    $html .= '<td class="select-num border-right"><i class="'.$tmhedanshuang_class.'">'.$tmhedanshuang.'</i></td>';
    $html .= '<td class="select-num border-right"><i class="'.$tmdxds_class.'">'.$tmdxds.'</i></td>';
    $html .= '<td class="select-num border-right"><i class="'.$tmweidaxiao_class.'">'.$tmweidaxiao.'</i></td>';
    $html .= '<td class="select-num border-right"><i class="'.$tmjqys_class.'">'.$tmjqys.'</i></td>';
    $html .= '<td class="select-num border-right"><i class="'.$daxiao_class.'">'.$daxiao.'</i></td>';
    $html .= '<td class="select-num border-right"><i class="'.$danshuang_class.'">'.$danshuang.'</i></td>';
    $html .= '<td class="select-num border-right"><i class="'.$hedanshuang_class.'">'.$hedanshuang.'</i></td>';
    $html .= '</tr>';
  }
}
$other = M("caipiao")->where("isopen = 1")->cache(300)->order('allsort ASC')->select();
$this->assign('other',$other);
$this->assign('trendhtml',$html);
$this->display('Game_trend_lhc');
}

}
?>