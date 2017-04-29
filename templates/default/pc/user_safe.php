<html>
<head>
    <title>【安全设置】- 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="$dir/user_style.css">
	<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
</head>


<!--{template user_header}-->

<div class="container">

<!-- 左侧导航菜单 -->
<div class="side">

		<div class="first">
		<span class="side_top"><b><a href="#">个人中心</a></b></span>
		</div>

		<ul id="ul">
		<li><a href="user_profile.php"> 个人资料</a></li>
		<li style="border-left:3px solid #e96c1f;padding-left:47px;"><a href="user_safe.php"> 安全设置</a></li>
		<li  class="click"><label>我的发布</label>
        <img src="/templates/default/pc\images/xia.png" class="publish"  style="display:none;">
        <img src="/templates/default/pc\images/shang.png" class="publish"> 
		</li>
		<div class="publish">
		<li  class="side_center"><a href="published_goods.php">校园二手</a></li>
		<li class="side_center"><a href="published_schoolnear.php">校园周边</a></li>
		<li class="side_center"><a href="published_active.php">校园活动</a></li>
		<li class="side_center"><a href="published_find_notice.php">失物招领</a></li>
		<li class="side_center"><a href="published_recruit.php">招聘应聘</a></li>
		<li class="side_center"><a href="published_parttime.php">兼职</a></li>
		<li class="side_center"><a href="published_intern.php">实习</a></li>
		<!--{if $user['test']==1}-->
		<li class="side_center"><a href="published_idea.php">创意集市</a></li>
		<!--{/if}-->
		<!--{if $user['administrator']==1}-->
		
		<!--{/if}-->
		</div>
		<!--{if $user['administrator']==2}-->
		    <!--{if $user['type']==1}--> 
				 <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4}-->
				 <li><a href="user_checkrmb.php">315俱乐部</a></li>
				 <li><a href="law_show.php">法援在线</a></li>
				 <li><a href="lawer.php">帮帮律师团</a></li>
				 <li><a href="teacher.php">帮辅导师团</a></li>
				 <li><a href="list.php?class=169&mokuai=active&hit=1&clickid=7">会员专属活动</a></li>
				 <li><a href="news.php">我的消息</a></li>
				 <!--{/if}-->
				 <!--{if $user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6}-->
				 <li><a href="user_checkrmb.php">315俱乐部</a></li>
				 <li><a href="time.php">会员期限</a></li>
				 <li><a href="law_show.php">法援在线</a></li>
				 <li><a href="lawer.php">帮帮律师团</a></li>
				 <li><a href="teacher.php">帮辅导师团</a></li>
				 <li><a href="list.php?class=169&mokuai=active&hit=1&clickid=7">会员专属活动</a></li>
				 <li><a href="news.php">我的消息</a></li>
				<!--{/if}-->
			<!--{/if}-->
			<!--{if $user['type']==2}--> 
                 <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4}-->
                 <li><a href="user_checkrmb.php">实名验证申请</a></li>
                 <li><a href="user_checkrmb.php"><a href="user_pay.php">企业VIP会员</a></li>
                 <li><a href="news.php">我的消息</a></li>
                 <!--{/if}-->
                 <!--{if $user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6}-->
                 <li><a href="time.php">会员期限</a></li>
                 <li><a href="user_checkrmb.php">实名验证申请</a></li>
                 <li><a href="user_pay.php">企业VIP会员</a></li>
                 <li><a href="news.php">我的消息</a></li>
                <!--{/if}-->
            <!--{/if}-->
		<!--{elseif $user['administrator']==1}-->
		<li  class="click1"><label>管理员权限</label>
		<img src="/templates/default/pc\images/xia.png" class="publish1">
        <img src="/templates/default/pc\images/shang.png" class="publish1"  style="display:none;"></li>
		<div class="publish1"  style="display:none;">
		<li class="side_center"><a href="admin_return.php">审核申请</a></li>
		<li class="side_center"><a href="complain.php">投诉管理</a></li>
		<li class="side_center"><a href="vippay.php">会员管理</a></li>
		<li class="side_center"><a href="onlinelaw.php">法援在线</a></li>
		<li class="side_center"><a href="onlinelaw_org.php">法援组织</a></li>
		<li class="side_center"><a href="club_write.php">315俱乐部</a></li>
		<li class="side_center"><a href="user_paywrite.php">企业VIP会员</a></li>
		<li class="side_center"><a href="vip_write.php">实名验证</a></li>
		<li class="side_center"><a href="lawer.php">帮帮律师团</a></li>
		<li class="side_center"><a href="teacher.php">帮辅导师团</a></li>
		<li class="side_center"><a href="other.php">其他管理</a></li>
        </div>
		<!--{/if}-->

		</ul>

	</div>


<div class="safe_container">
	<span class="top_span">安全设置</span>
	<div>
	    <span>修改密码</span>
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
</div>

</div>

<!--{template user_footer}-->


<script type="text/javascript">
 var pn = location.pathname;
    
    var as = document.getElementById('ul').getElementsByTagName('a'),find=false;

    for (var i = 0, j = as.length; i < j; i++)
        if (as[i].href.indexOf(pn) != -1) { as[i].className = 'focus'; find = true; break; }
    //if (!find) as[0].className = 'focus';//如果未找到匹配的，需要设置哪个获取焦点可以修改这句

</script>
<script type="text/javascript"> 
	$(document).ready(function(){
	$(".click").click(function(){
	    $(".publish").slideToggle("slow");
	  });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	$(".click1").click(function(){
	    $(".publish1").slideToggle("slow");
	  });
	});
	</script>

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