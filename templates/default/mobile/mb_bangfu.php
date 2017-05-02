<html>
<head>
    <title>【会员申请】- 帮帮校园网</title>
    
    <link rel="stylesheet" type="text/css" href="./templates/default/mobile/user_style.css">
    <script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/jquery.form.js"></script>
    <script src="/lib/waitMe.js"></script>
    <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
    <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
    <script src='/lib/ruiqia.js'></script>
    <script type="text/javascript">
    //调用微信JS api 支付
    function jsApiCall()
    {
        WeixinJSBridge.invoke(
            'getBrandWCPayRequest',
            $jsApiParameters,
            function(res){
                WeixinJSBridge.log(res.err_msg);
                // alert(res.err_code+res.err_desc+res.err_msg);
                // window.location.href="http://www.baidu.com";
                  if(res.err_msg == "get_brand_wcpay_request:ok"){
                   // alert(res.err_code+res.err_desc+res.err_msg);
                   
                   window.location.href="http://www.bangbangdream.com/weixin.php";
                   
                  
                       
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
    //      $editAddress,
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
</head>
</head>




<div class="usercheckrmb_container">



<!--{if $user['type']==1}--> 
<div class="checkrmb_container">
    <!-- <span class="top_span">315俱乐部会员申请</span> -->
    <div class="bar">
        <label>315俱乐部简介</label>
    </div>
    <!--{if $club['club']=="" or $club['club']=="null"}-->
    <div class="label">管理员还未填写简介哦</div>
    <!--{/if}-->
    <div class="textarea">$club['club']</div>

<!--{if $user['test']==3}-->
    <div class="bar">
        <label>充值</label>
    </div>
<div class="rmb">　　您的申请正在审核中，请耐心等待。</div>
<!--{/if}-->


<!--{if $user['test']==5}-->
<div class="bar">
        <label>续费</label>
</div>
<div class="rmb">　　您的会员已到期，请</label>
<a href="xufei.php"><button style="width: 100px;height: 30px;background-color: #f58710;border:0px;font-size: 16px;color: #fff;border-radius: 4px;cursor: pointer;margin-top: 10px;">续费</button></a>
<!--{/if}-->


<!--{if $user['test']==1}-->
    <div class="bar">
        <label>会员期限</label>
    </div>
<div class="rmb">　　会员期限：$date</div>
<!--{/if}-->

<!--{if $user['test']==4}-->
<div class="bar">
        <label>充值</label>
</div>
<center>
<div class="rmb">对不起，您的申请未通过审核，请</div>
<a href="user_check.php"><button style="width: 100px;height: 30px;background-color: #f58710;border:0px;font-size: 16px;color: #fff;border-radius: 4px;cursor: pointer;margin-top: 10px;">再次申请</button></a>
</center>
<!--{/if}-->

<!--{if $user['test']==0}-->


    <!--{if $user['pay']==0}-->    
    <div class="bar">
        <label>充值</label>
    </div>
    <div class="rmb">
        <div>
            <div class="pay">　　申请全国大学生315俱乐部会员，需缴纳会籍费31.5元/年，然后提交会员资料，会员仅限在校大学生。
            <p>注：如果选择支付宝支付，请把点击按钮后的页面在浏览器中打开，完成支付。</p>
            <p>注：如果选择微信支付，付费成功后请点击右上角的“确定”或“完成”跳转页面，防止重复扣费。</p></div><br>
       
            <form action="alipay.php">
               <input name="id" type="hidden"  value="$user['id']">
                <input type="submit" value="支付宝支付"  class="submit">
            </form>
        <div class="weixin">
        <input style="width:200px; height:40px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" value="微信支付">
        </div>
        </div>
    </div>
    <!--{/if}-->
    <!--{if $user['pay']==1}-->
    <div class="bar">
        <label>资料填写</label>
    </div>
    <div class="rmb">
        <div class="pay1" style="width: 80%!important;margin-top: 10px;margin-left: 10%;text-align: center;height: 40px;">
        您已经付费成功，请前去
        <a href="user_check.php"><button style="width: 100px;height: 30px;background-color: #f58710;border:0px;font-size: 16px;color: #fff;border-radius: 4px;cursor: pointer;margin-top: 10px;">填写资料</button></a>
        </div>
        
    </div>
    <!--{/if}-->

</div>

<!--{/if}-->

<!--{/if}-->


<footer>
<span>© Bangbangdream.com</span>
</footer>
</div>



</html>