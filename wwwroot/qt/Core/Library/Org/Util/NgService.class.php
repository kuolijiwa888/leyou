<?php
/**
 * Created by PhpStorm.
 * User: wankai
 * Date: 2019/2/24
 * Time: 12:20
 */
namespace Org\Util;
class NgService{
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
	protected  $prefix;//用户名前缀 避免数据错乱  获取key的后4位为前缀
    protected  $plat_type;                  // 设置平台类型 全部小写
    public function __construct()
    {
        $this->plat_type = 'ag';
        $this->api_account=GetVar('api_account');
        $this->sign_key = GetVar('sign_key');
        $this->register_url = "http://api.agbbin.com/v1/user/register";
        $this->login_url = "http://api.agbbin.com/v1/user/login";
        $this->trans_url = 'http://api.agbbin.com/v1/wallet/trans';
        $this->balance_url = 'http://api.agbbin.com/v1/wallet/balance';
        $this->balance_plat_type_url = 'http://api.agbbin.com/v1/user/balance';
        $this->status_url = 'http://api.agbbin.com/v1/wallet/status';
        $this->all_credit_url= 'http://api.agbbin.com/v1/user/all-credit';
        $this->collect_url = 'http://api.agbbin.com/v1/user/record-all';
		$this->prefix=substr($this->sign_key,-4);
    }

    /**
     * 登陆游戏
     * @param $username
     * @param $plat_type
     * @param $game_type
     * @param string $gameCode
     * @param int $isMobileUrl
     * @return mixed
     */
    public function login($username,$plat_type,$game_type,$gameCode="",$isMobileUrl=0){
		$username=$this->prefix.$username;
        $code = md5($this->sign_key.$this->api_account.$username.$plat_type.$isMobileUrl);
        $data = array(
            "username"=>$username,
            "plat_type"=>$plat_type,
            "game_type"=>$game_type,
            "game_code"=>$gameCode,
            "sign_key"=>$this->sign_key,
            "is_mobile_url"=>$isMobileUrl,
            "code"=>$code
        );
        $res = $this->sendRequest($this->login_url, $data);

        return $res;
    }

    /**
     * 查询余额
     * @param $username
     * @return mixed
     */
    public function balance($username){
		$username=$this->prefix.$username;
        $code = md5($this->sign_key.$this->api_account.$username);
        $data = array(
            "username"=>$username,
            "sign_key"=>$this->sign_key,
            "code"=>$code
        );
        $res = $this->sendRequest($this->balance_url, $data);
        return $res;
    }

    /**
     * 更新中心钱包额度
     * @param $username
     * @param $money
     * @param $client_transfer_id
     * @return mixed
     */
    public function trans($username,$money,$client_transfer_id){
		$username=$this->prefix.$username;
        $code = md5($this->sign_key.$this->api_account.$username.$money.$client_transfer_id);
        $data = array(
            "username"=>$username,
            "money"=>$money,
            "client_transfer_id"=>$client_transfer_id,
            "sign_key"=>$this->sign_key,
            "code"=>$code
        );

        $res = $this->sendRequest($this->trans_url, $data);
        return $res;
    }

    public function record($startTime,$endTime,$plat_type='',$game_type='',$username='',$idStr='',$timeType='',$page=1,$limit=15){
		$username=$this->prefix.$username;
        $code = md5($this->sign_key.$this->api_account.$startTime.$endTime);
        $data = array(
            "plat_type"=>$plat_type,
            "game_type" => $game_type,
            "username" => $username,
            "idStr" => $idStr,
            "sign_key"=>$this->sign_key,
            "startTime"=>$startTime,
            "endTime"=>$endTime,
            "timeType"=>$timeType,
            "page"=>$page,
            "limit"=>$limit,
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
    }
}