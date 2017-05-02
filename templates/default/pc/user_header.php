<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
	<script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/jquery.form.js"></script>
	<script src="/lib/waitMe.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
	<link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
	<link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
	<script src='/lib/ruiqia.js'></script>
	<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>

<header>
	<div class="user_topbar">
	 <div>
		 <div class="left">
		     <span>$city['name']</span>
			 <a href="area_change.php" class="city">【切换城市】</a>
		 </div>
		 <div class="index">
		 <!--{if $user['administrator']==1}-->
				<div class="right">  
				<span>$user['username']</span>
				<span class="ceo">(管理员)</span>
				<a href="index.php"  class="index">返回首页</a>
				<a href="#" id='logout'>退出</a>
				</div>
				<!--{elseif $user['administrator']==2}-->
				    <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7}-->
				    <div class="right">
				    <span>$user['username']</span>
				    <a href="index.php"   class="index">返回首页</a>
				    <a href="#" id='logout'>退出</a>
				    </div>
				    <!--{elseif $user['test']==1}-->
				    <div class="right">
				    <span>$user['username']</span>
				    <img src="/templates/default/pc\images/xue.png" class="img">
				    <a href="index.php"  class="index">返回首页</a>
				    <a href="#" id='logout'>退出</a>
				    </div>
				    <!--{elseif $user['test']==2}-->
				    <div class="right">
				    <span>$user['username']</span> 
				    <img src="/templates/default/pc\images/yan.png" class="img">
				    <a href="index.php" class="index">返回首页</a>
				    <a href="#" id='logout'>退出</a>
				    </div>
				    <!--{elseif $user['test']==6}-->
				    <div class="right">
				    <span>$user['username']</span> 
				    <i><b><span style="color:#ff0000;">vip</span></b></i>
				    <a href="index.php" class="index">返回首页</a>
				    <a href="#" id='logout'>退出</a>
				    </div>
				    <!--{/if}--> 
		<!--{/if}-->
			 
			 
		 </div>
	 </div>
	</div>

	<div class="user_top">
	    <div>
			<a href="index.php"><img src="/templates/default/pc\images/logo.png"></a>
			<div>
			    <div class="topguanli">
				<!-- <a href="" class="user">个人中心</a>
				<a href="user_money.php">管理员权限</a> -->
                </div>
                
				<a href="user_profile.php"><img src="/data/userface/$user['id'].jpg" onerror=this.src="/data/userface/head.gif" class="img" id="logo"></a>
				
			</div>
		</div>
	</div>
</header>








</html>



<script>
// ------------------------------退出按钮点击事件绑定---------------------------
$(function() {

	$("#logout").click(function(){
		 swal({
			title: "退出帮帮网", 
			text: "", 
			type: "warning",
			showCancelButton: true,
			closeOnConfirm: false,
			confirmButtonText: "退出",
			confirmButtonColor: "#ec6c62"
			}, function() {
				$.ajax({
                    type: "post",
                    url: "logout.php",
                    dataType: "json",
                    async: false,
                    cache: false, 
                    data: 'act=logout',
				})
                 // 处理成功
				.done(function(msg) {
					

                    swal({   
                   	title: msg.title,   
                   	text: msg.text,   
                   	timer: 2000,  
                    type: msg.type,
                   	showConfirmButton: true,
                    });
                   
               setTimeout("window.location.href='index.php';",3000);

				})
				// 处理失败
				.error(function(msg) {
					swal("OMG", "退出失败了!", "error")
				});

			});
	});



});
</script>