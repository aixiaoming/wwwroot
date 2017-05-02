
<html>
<head>
    <title>【用户登录】- 帮帮校园网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
    <script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/jquery.form.js"></script>
    <script src="/lib/waitMe.js"></script>
    <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
    <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
    <script src='/lib/ruiqia.js'></script>
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>

<header id="header">
    <a href="index.php"><img src="/templates\default/pc\images/logo2.png"></a>
    <span>用户登录</span>
    <div>
        <a href="index.php" class="index">首页</a>
        <a href="user_reg.php">注册</a>
    </div>
</header>

<div id="login_container">
    <div class="form">
        <label>账　号</label>
        <input name="username" type="text" placeholder="手机/邮箱"/><br>
        <label>密　码</label>
        <input name="password" placeholder="密码"  type="password"/><br><br>
        <a href="user_find.php">忘记密码?</a><br><br>
        <input type="submit" name="submit" value="登录" class="submit" acceptButton="Enter">
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
             url: "login_sql.php",
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
 
                   ruiqia_location('/index.php',1500);

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