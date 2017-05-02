<html>
<head>
    <meta charest="utf-8">
    <title>【重置密码】- 帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
    <script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/jquery.form.js"></script>
    <script src="/lib/waitMe.js"></script>
    <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
    <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
    <script src='/lib/ruiqia.js'></script>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>

<header id="header">
    <a href="index.php"><img src="/templates\default/pc\images/logo2.png"></a>
    <span>重置密码</span>
    <div>
        <a href="index.php" class="index">首页</a>
        <a href="user_reg.php">注册</a>
    </div>
</header>

<div id="container">
    <div class="form" id="form">
        <label>　新密码</label>
        <input name="password1" type="password" placeholder="6-12个字符"><br>
        <label>确认密码</label>
        <input name="password2" type="password" placeholder="再输一次"><br>
        <input name="userid"  type="hidden" value="<!--{eval echo $userid;}-->">
        <input name="token"  type="hidden" value="<!--{eval echo $token;}-->">
        <label>　验证码</label>
        <input type="text" name="captcha" placeholder="请输入验证码" class="captcha">
        <img src="captcha.php" id="captcha_img" onclick="this.setAttribute('src','captcha.php')" title="点击刷新"/><br> 
        <input type="submit" name="submit" value="提交" class="submit">
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
             type: "post",
             url: "reset_pass.php",
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
                    timer: 2000,
                    showConfirmButton: false,

                   });
 
                   ruiqia_location('/user_login.php',1500);

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