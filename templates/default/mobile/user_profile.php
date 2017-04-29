<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
    <title>个人资料 - 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="$dir/css/user_style.css">
</head>

<!--{template user_header}-->

<div class="type_container">



<!--{if $user['type']==1}--> 
<div class="typeone_container">
	
	<div class="bar">
		<label>修改头像</label>
    </div>
	<div class="img">
	  <label>点击图片上传头像(jpg，小于1M）</label>
      <img src="/data/userface/$user['id'].jpg" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" onclick="document.getElementById('fileupload').click()">

      <input id="fileupload" type="file" accept='image/jpeg' name="mypic" style="display:none;">
    </div>
	<div class="bar1">
		<label>修改资料</label>
    </div>
    
    <div class="form">
        <label>　　昵称</label>
        <input name="username" type="text" value="$user['username']"><br>
	    <!--{if $user['loginm']!=""}-->
        <label>　　手机</label>
        <input type="text" name="phone" value="$user['phone']" readonly="readonly"/><br>
        <!--{/if}-->
        <!--{if $user['loginm']==""}-->
        <label>　　手机</label>
        <input name="phone" type="text" value="$user['phone']"><br>
        <!--{/if}-->
	   	<label>　　ＱＱ</label>
		<input name="qq" type="text" value="$user['qq']"><br>
		<!--{if $user['logine']!=""}-->
        <label>　　邮箱</label>
        <input type="text"  name="email" value="$user['email']" readonly="readonly"/><br>
        <!--{/if}-->
        <!--{if $user['logine']==""}-->
        <label>　　邮箱</label>
        <input name="email" type="text" value="$user['email']"><br>
        <!--{/if}-->
		<label>　　地址</label>
		<input name="address" type="text" value="$user['address']"><br>
	    <label>在读大学</label>
		<input name="school" type="text" value="$user['school']"><br>
		<input type="submit" name="submit" value="完成修改" class="submit">
    </div>
<footer>
<span>© Bangbangdream.com</span>
</footer>
</div>
<!--{elseif $user['type']==2}-->
<div class="typeone_container">
	<div class="bar">
		<label>修改头像</label>
	</div>
	
	<div class="img">
	  <label>点击图片上传头像(jpg，小于1M）</label>
      <img src="/data/userface/$user['id'].jpg" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" onclick="document.getElementById('fileupload').click()">

      <input id="fileupload" type="file" accept='image/jpeg' name="mypic" style="display:none;">
    </div>

	<div class="bar1">
		<label>修改资料</label>
    </div>
    <!-- <label class="user">　用户名</label>
    <b><span>　$user['username']</span></b><br> -->
    <form method="post" action="profile.php" class="form">
        <label>　　昵称</label>
        <input name="username" type="text" value="$user['username']"><br>
	   <!--{if $user['loginm']!=""}-->
        <label>　　手机</label>
        <input type="text" name="phone" value="$user['phone']" readonly="readonly"/><br>
        <!--{/if}-->
        <!--{if $user['loginm']==""}-->
        <label>　　手机</label>
        <input name="phone" type="text" value="$user['phone']"><br>
        <!--{/if}-->
	   	<label>　　ＱＱ</label>
		<input name="qq" type="text" value="$user['qq']"><br>
		<label>　　座机</label>
	   	<input name="tel" type="text" value="$user['tel']"><br>
		<!--{if $user['logine']!=""}-->
        <label>　　邮箱</label>
        <input type="text"  name="email" value="$user['email']" readonly="readonly"/><br>
        <!--{/if}-->
        <!--{if $user['logine']==""}-->
        <label>　　邮箱</label>
        <input name="email" type="text" value="$user['email']"><br>
        <!--{/if}-->
		<label>　　地址</label>
		<input name="address" type="text" value="$user['address']"><br>
	    <div id="textarea"><label>单位简介</label></div>
		<textarea name="introduction" value="">$user['introduction']</textarea><br>
		<input type="submit" name="submit" value="完成修改" class="submit1">
    </form>
    <footer>
<span>© Bangbangdream.com</span>
</footer>
</div>


<!--{/if}-->


</div>






<script type="text/javascript">
$(function() {
	
	$("#fileupload").wrap("<form id='myupload' action='/action.php?lei=userface' method='post' enctype='multipart/form-data'></form>");

    $("#fileupload").change(function(){
		$("#myupload").ajaxSubmit({
			dataType:  'json',
			beforeSend: function() {

				$("#userlogoimg").fadeOut(300);
				$("#userlogoimg").attr("src",'/data/userface/load.jpg');
    		},
    
			success: function(data) {
				
				var url = data.pic + '?rand=' + Math.random();
				$("#userlogoimg").attr("src", url);
				$("#logo").attr("src", url);
				$("#userlogoimg").fadeIn(300);
				 // window.location.href = "/user_profile.php";
		        
		
			},
			error:function(xhr){
	             $("#userlogoimg").attr("src",'/data/userface/error.jpg');
			}
		});
	});
	
	
});
</script>


</html>
<script>
// ------------------------------登陆按钮点击事件绑定---------------------------
$(function() {

$(".submit").click(function() {

  
// ajax提交数据
         $.ajax({
             type: "post",
             url: "profile.php",
             dataType: "json",
             async: true,
             cache: false, 
             data: $("input").serialize() || $("textarea").serialize(),
                   
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
 
                   ruiqia_location('/user_profile.php',1500);

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