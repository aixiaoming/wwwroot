<?php
include "function.php";

is_right();


ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);
// require_once "D:\wwwroot\bangbangdream\wwwroot\sdk\lib\WxPay.Api.php";
// require_once "D:\wwwroot\bangbangdream\wwwroot\sdk\example\WxPay.JsApiPay.php";
// require_once "D:\wwwroot\bangbangdream\wwwroot\sdk\example\log.php";

require_once("D:\wwwroot\bangbangdream\wwwroot\sdk\lib\WxPay.Api.php");
require_once("D:\wwwroot\bangbangdream\wwwroot\sdk/example\WxPay.JsApiPay.php");
require_once("D:\wwwroot\bangbangdream\wwwroot\sdk/example\log.php");

//初始化日志
// $logHandler= new CLogFileHandler("../logs/".date('Y-m-d').'.log');
// $log = Log::Init($logHandler, 15);

//打印输出数组信息
// function printf_info($data)
// {
//     foreach($data as $key=>$value){
//         echo "<font color='#00ff55;'>$key</font> : $value <br/>";
//     }
// }

//①、获取用户openid
$tools = new JsApiPay();
$openId = $tools->GetOpenid();

//②、统一下单
$input = new WxPayUnifiedOrder();
$input->SetBody("帮帮校园网社会个人认证会员");
$input->SetAttach("帮帮校园网社会个人认证会员");
$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
$input->SetTotal_fee("10000");
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("");
$input->SetNotify_url("D:\wwwroot\bangbangdream\wwwroot\sdk/example\sotify.php");
$input->SetTrade_type("JSAPI");
$input->SetOpenid($openId);
$order = WxPayApi::unifiedOrder($input);
// echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>';
// printf_info($order);
$jsApiParameters = $tools->GetJsApiParameters($order);

//获取共享收货地址js函数参数
$editAddress = $tools->GetEditAddressParameters();

//③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
/**
 * 注意：
 * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
 * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
 * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
 */
$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$_SESSION['userid']."'");


if ($user['type']!=1) {
	ruiqia_die('目前只支持个人用户，单位用户请前往电脑版');
}


if ($user['administrator']==2) {

		if ($user['test']==1 or $user['test']==2 or $user['test']==6) {
			if (time()>$user['testtime']) {
			 ruiqia_query("UPDATE user SET test=5,pay=0 where id='".$user['id']."'");
		    }
		}
  if ($user['test']==8) {
    if (time()>$user['testtime']) {
      ruiqia_query("UPDATE user SET test=5,pay=0,vip=0 where id='".$user['id']."'");
    }
  }
}

if ($user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6  or $user['test']==8) {
	$date = date('Y-m-d',$user['testtime']);
}


$club=ruiqia_query_fetch("select * from club where id=8");

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;





// 解释皮肤
include $template->getfile(ruiqia_self());
?> 