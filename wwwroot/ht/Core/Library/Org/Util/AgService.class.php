<?php
namespace Org\Util;
class AgService{

  protected  $api_account;
  protected  $sign_key;

    protected  $register_url;               // 创建会员账户
    protected  $login_url;                  // 获取游戏登录地址
    protected  $trans_url;                  // 额度转换
    protected  $balance_url;                // 免转钱包余额查询（玩家所在游戏平台+免转钱包）
    protected  $balance_plat_type_url;      // 会员游戏平台余额查询
    protected  $all_credit_url;             // 全部平台余额查询
    protected  $status_url;                 // 额度转换状态查询
    protected  $collect_url;                // 获取游戏记录

    protected  $plat_type;                  // 设置平台类型 全部小写

    public function __construct()
    {
      $this->api_account = GetVar('api_account');
      $this->sign_key = GetVar('sign_key');

      $this->collect_url = 'https://api.agbbin.com/v1/user/record-all';
    }



    /**
     * @param $startTime
     * @param $endTime
     * @param int $page
     * @param int $limit
     * @return mixed
     * 获取游戏记录
     */
    public function betrecord($startTime,$endTime,$page,$limit){
      $code = md5($this->sign_key.$this->api_account);
      $data = array(
        "page"=>$page,
        "limit"=>$limit,
        "sign_key"=>$this->sign_key,
        "code"=>$code
      );
      $res = $this->sendRequest($this->collect_url, $data);
      return $res;
    }


    private function sendRequest($url,$post_data=array()){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
      $contents = curl_exec($ch);
      curl_close($ch);
      //print_r($contents);die;
      return json_decode ($contents, TRUE);
      //return dump($contents);
    }

  }
