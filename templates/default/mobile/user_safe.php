<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
    <title>安全设置 - 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="./templates/default/mobile/user_style.css">
</head>


<!--{template user_header}-->





<div class="safe_container">
	<div class="bar">
	    <label>修改密码</label>
	</div>
	<div class="form">
		<label>　用户名</label>
		<span><b>$user['username']</b></span><br>
		    <label>　旧密码</label>
		    <input name="password" type="password" id="password" placeholder="请输入旧密码"><br>
		    <label>　新密码</label>
			<input name="password1" type="password" placeholder="6-16个字符"><br>
			<label>确认密码</label>
			<input name="password2" type="password" placeholder="请再次输入密码"><br>
		    <input type="submit" name="submit" value="完成修改" class="submit">
	</div>



<footer>
<span>© Bangbangdream.com</span>
</footer>
</div>


</html>
<script>
// ------------------------------登陆按钮点击事件绑定---------------------------
$(function() {

$(".submit").click(function() {

           if($("#password").val()=='')
           {
             swal('天啊', '你还没有输入密码！' , 'warning');
             return false;
           };
           
   



// ajax提交数据
         $.ajax({
             type: "post",
             url: "safe.php",
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