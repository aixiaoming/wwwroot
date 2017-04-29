<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
    <head>
        <title>用户登录 - 帮帮校园网</title>
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" type="text/css" href="$dir/user_style.css">
        <script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/jquery.form.js"></script>
        <script src="/lib/waitMe.js"></script>
        <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
        <script src='/lib/sweetalert.js'></script>
        <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
        <script src='/lib/ruiqia.js'></script>
    </head>

<body style="margin:0px;padding:0px;">
    <header style="position: absolute;left: 0px;top: 0px;">
        <a href="index.php"><img src="/templates\default/mobile\images/logo.png"></a>
        <!-- <div class="span">
        <span>用户登录</span>
        </div> -->
        <div>
            <!-- <a href="index.php">首页</a> -->
            <a href="user_reg.php" style="color:#ffffff;">注册</a>
        </div>
    </header>

    <div id="login_container">
        <div class="form">
            <!-- <label>用户名</label> -->
            <input name="username" type="text" placeholder="邮箱/手机"/><br>
            <!-- <label>密　码</label> -->
            <input name="password" placeholder="密码"  type="password"/><br><br>
            <a href="user_find.php">忘记密码?</a><br><br>
            <input type="submit" name="submit" value="登录" class="submit">
        </div>



        <footer>
        <span>© Bangbangdream.com</span>
        </footer>
    </div>
</body>

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