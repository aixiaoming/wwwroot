<html>
<head>
    <title>【找回密码】- 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="$dir/user_style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
	<script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/jquery.form.js"></script>
	<script src="/lib/waitMe.js"></script>
	<link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
	<link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
	<script src='/lib/ruiqia.js'></script>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <script type="text/javascript">
    $(document).ready(function(){
      $("#liright").click(function(){
      $(".form").hide();
      $("#form").show();
       $("#liright").addClass("li");
       $("#lileft").removeClass("li");
      });
    });
    $(document).ready(function(){
      $("#lileft").click(function(){
      $(".form").show();
      $("#form").hide();
      $("#liright").removeClass("li");
      $("#lileft").addClass("li");
      });
    });
    </script>
    <script language="javascript">
    function get_mobile_code(){
        $.post('sms.php', {mobile:jQuery.trim($('#mobile').val()),send_code:$_SESSION['send_code']}, function(msg) {
            alert(jQuery.trim(unescape(msg)));
            if(msg=='提交成功'){
                RemainTime();
            }
        });
    };
    var iTime = 59;
    var Account;
    function RemainTime(){
        document.getElementById('zphone').disabled = true;
        var iSecond,sSecond="",sTime="";
        if (iTime >= 0){
            iSecond = parseInt(iTime%60);
            iMinute = parseInt(iTime/60)
            if (iSecond >= 0){
                if(iMinute>0){
                    sSecond = iMinute + "分" + iSecond + "秒";
                }else{
                    sSecond = iSecond + "秒";
                }
            }
            sTime=sSecond;
            if(iTime==0){
                clearTimeout(Account);
                sTime='获取手机验证码';
                iTime = 59;
                document.getElementById('zphone').disabled = false;
            }else{
                Account = setTimeout("RemainTime()",1000);
                iTime=iTime-1;
            }
            }else{
                sTime='没有倒计时';
            }
            document.getElementById('zphone').value = sTime;
        }   
    </script>
    <style type="text/css">
    .li{border-bottom:4px solid #e96c1f;}
    </style>
</head>

<header id="header">
	<a href="index.php"><img src="/templates\default/pc\images/logo2.png"></a>
	<span>找回密码</span>
	<div>
		<a href="index.php" class="index">首页</a>
		<a href="user_reg.php">注册</a>
	</div>
</header>

<div id="container">

    <div class="ul">
    <ul>
        <li id="lileft" class="li">邮箱找回</li>
        <li id="liright">手机找回</li>
    </ul>
    </div>

	<div class="form">
	    <label>　邮箱</label>
	    <input name="find_username" placeholder="请输入注册邮箱"><br>
	    <label>验证码</label>
	    <input type="text" name="captcha" placeholder="请输入验证码" class="captcha">
	    <img src="captcha.php" id="captcha_img" onclick="this.setAttribute('src','captcha.php')" title="点击刷新"/><br> 
	    <input type="submit" name="submit" value="提交" class="submit">
	</div>

    <div id="form" style="display:none;">
        <label>　　手机</label>
        <input  id="mobile" name="mobile" placeholder="请输入手机号"><br>
        <label>　验证码</label>
        <input type="text" name="mobile_code" placeholder="请输入验证码" class="captcha">
        <input id="zphone" type="button" value=" 获取手机验证码 " onClick="get_mobile_code();"><br> 
        <input type="submit" name="submit" value="提交" id="submit">
    </div>
</div>


<footer>
<span>© Bangbangdream.com</span>
</footer>

</html>
<script>
// ------------------------------按钮点击事件绑定---------------------------
$(function() {

$(".submit").click(function() {

  

// ajax提交数据
         $.ajax({
             type:"post",
             url: "find_pass.php",
             dataType: "json",
             async: true,
             cache: false, 
             data: $("input").serialize(),
            
             // 发送数据之前
             beforeSend:function()
                     {
                         // 禁用按钮防止重复提交
                         $(".submit").attr({ disabled: "disabled" });
                         // 运行waitme动画
                         run_waitMe('hide');
                     },


           // 整个ajax操作完成
           complete: function() 
                 {
                        //解除禁止，用户还能操作
                       $(".submit").removeAttr("disabled");
                       // 隐藏waitMe动画
                       $('body').waitMe('hide');
                 }, 


             // 收到服务器的数据
             success: function(msg)
             {
               

                if(msg.type == 'success')
                {
                   
                   
                   swal({   
                    title: msg.title,   
                    text: msg.text,   
                    type: msg.type,
                    timer: 5000,
                    showConfirmButton: true,

                   });
 
                   ruiqia_location('/user_login.php',2000);

                }


                else{
                    swal(msg.title, msg.text , msg.type);
                }
                
                
               

             },
            

             // 没有发送到服务器
             error:function(msg)
             {  
                 swal('提交失败', '请刷新页面再试试'  , 'error');
         
            },


             });




});


});



</script>
<script>
// ------------------------------按钮点击事件绑定---------------------------
$(function() {

$("#submit").click(function() {

  

// ajax提交数据
         $.ajax({
             type:"post",
             url: "find_passm.php",
             dataType: "json",
             async: true,
             cache: false, 
             data: $("input").serialize(),
            
             // 发送数据之前
             beforeSend:function()
                     {
                         // 禁用按钮防止重复提交
                         $("#submit").attr({ disabled: "disabled" });
                         // 运行waitme动画
                         run_waitMe('hide');
                     },


           // 整个ajax操作完成
           complete: function() 
                 {
                        //解除禁止，用户还能操作
                       $("#submit").removeAttr("disabled");
                       // 隐藏waitMe动画
                       $('body').waitMe('hide');
                 }, 


             // 收到服务器的数据
             success: function(msg)
             {
               

                if(msg.type == 'success')
                {
                   
                   
                   swal({   
                    title: msg.title,   
                    text: msg.text,   
                    type: msg.type,
                    timer: 5000,
                    showConfirmButton: true,

                   });
 
                   ruiqia_location('/resetm.php',2000);

                }


                else{
                    swal(msg.title, msg.text , msg.type);
                }
                
                
               

             },
            

             // 没有发送到服务器
             error:function(msg)
             {  
                 swal('提交失败', '请刷新页面再试试'  , 'error');
         
            },


             });




});


});



</script>