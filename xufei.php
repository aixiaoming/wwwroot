<?php 
include "function.php";
is_right();
$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$_SESSION['userid']."'");

if ($user['test']!=5) {
    ruiqia_die('找不到网页');
}


ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);
require_once "D:\wwwroot\bangbangdream\wwwroot\sdk\lib\WxPay.Api.php";
require_once "D:\wwwroot\bangbangdream\wwwroot\sdk\example\WxPay.JsApiPay.php";
require_once 'D:\wwwroot\bangbangdream\wwwroot\sdk\example\log.php';


// //初始化日志
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
$input->SetBody("帮帮校园网315俱乐部会员");
$input->SetAttach("帮帮校园网315俱乐部会员");
$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
$input->SetTotal_fee("3150");
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
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/> 
    <title>315俱乐部会员续费</title>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
    <script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/jquery.form.js"></script>
    <script src="/lib/waitMe.js"></script>
    <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
    <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
    <script src='/lib/ruiqia.js'></script>
    <title>微信支付样例-支付</title>
    <script type="text/javascript">
    //调用微信JS api 支付
    function jsApiCall()
    {
        WeixinJSBridge.invoke(
            'getBrandWCPayRequest',
            <?php echo $jsApiParameters; ?>,
            function(res){
                WeixinJSBridge.log(res.err_msg);
                // alert(res.err_code+res.err_desc+res.err_msg);
                if(res.err_msg == "get_brand_wcpay_request:ok"){
                   // alert(res.err_code+res.err_desc+res.err_msg);
                   
                   window.location.href="http://www.bangbangdream.com/weixinxu.php";
                   
                  
                       
                   }else{
                       //返回跳转到订单详情页面
                       alert(支付失败);
                       
                         
                   }

            }
        );
    }

    function callpay()
    {
        if (typeof WeixinJSBridge == "undefined"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
                document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
            }
        }else{
            jsApiCall();
        }
    }
    </script>
    <script type="text/javascript">
    //获取共享地址
    // function editAddress()
    // {
    //  WeixinJSBridge.invoke(
    //      'editAddress',
    //      <?php echo $editAddress; ?>,
    //      function(res){
    //          var value1 = res.proviceFirstStageName;
    //          var value2 = res.addressCitySecondStageName;
    //          var value3 = res.addressCountiesThirdStageName;
    //          var value4 = res.addressDetailInfo;
    //          var tel = res.telNumber;
                
    //          alert(value1 + value2 + value3 + value4 + ":" + tel);
    //      }
    //  );
    // }
    
    // window.onload = function(){
    //  if (typeof WeixinJSBridge == "undefined"){
    //      if( document.addEventListener ){
    //          document.addEventListener('WeixinJSBridgeReady', editAddress, false);
    //      }else if (document.attachEvent){
    //          document.attachEvent('WeixinJSBridgeReady', editAddress); 
    //          document.attachEvent('onWeixinJSBridgeReady', editAddress);
    //      }
    //  }else{
    //      editAddress();
    //  }
    // };
    
    </script>
    <style type="text/css">
    header{background-color: #f25c17;width: 100%;height: 50px;}
    header img{float: left;height: 40px;margin-top: 5px;margin-left: 2%;}
    header div{float: right;font-size: 1em;margin-top: 25px;margin-right: 2%;}
    header div a{color: #ffffff;}
    header #logo{float: right;height: 40px;width: 40px;border-radius: 50%;}
    input{width:200px; height:40px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;margin-bottom: 30px;}
    body {background: #f5f5f5;margin: 0px;font: normal 100%;padding: 0px;border: none;outline-width: 0px;vertical-align: baseline;font: 16px/1.5 arial, "microsoft yahei", "verdana", sans-serif;}
    a{text-decoration: none;}
    a,img,button,input,textarea,li{-webkit-tap-highlight-color:rgba(255,255,255,0);}
    form,.weixin{text-align: center;}
    .rmb footer{text-align: center;margin-top: 100px;}
    </style>
</head>
<body>

<header>
<a href="select.php"><img src="/templates\default/mobile\images/logo.png"></a>
    
        <!-- <a href="index.php">首页</a> -->
        <a href="user_profile.php"><img src="/data/userface/$user['id'].jpg" onerror=this.src="/data/userface/head.gif" class="img" id="logo"></a>
    

</header>

<div class="rmb">
        <div>
            <div class="pay">
            <p>　　注：如果选择支付宝支付，请将点击按钮后出现的页面在浏览器中打开，完成支付，支付完成后会跳转至首页。</p>
            <p>　　注：如果选择微信支付，付费成功后请点击右上角的“确定”或“完成”跳转页面，防止重复扣费。</p></div><br>

         
            <form action="alipayxu.php">
               <input name="id" type="hidden"  value="<?php echo $user['id'] ?>">
                <input type="submit" value="支付宝支付"  class="submit">
            </form>
            
       
           
        <div class="weixin">
        <button style="width:200px; height:40px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()">微信支付</button>
        </div>


        <footer>
        <span>© Bangbangdream.com</span>
        </footer>
        </div>
</body>

</html>