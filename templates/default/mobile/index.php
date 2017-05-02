<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="edge" />
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
    <script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src='/lib/ruiqia.js'></script>
    <link rel="stylesheet" type="text/css" href="./templates/default/mobile/css/style.css">
    <script type="text/javascript" src="/jquery.form.js"></script>
	<script src="/lib/waitMe.js"></script>
	<link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
	<link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
	<script src='/lib/ruiqia.js'></script>
	<script type="text/javascript">
       function disp_alert()
	    {
	    alert("只有全国大学生315俱乐部会员方可进行QQ在线交谈。")
	    }
	    function disp1_alert()
	    {
	    alert("请先登录")
	    }
	    function disp2_alert()
	    {
	    alert("只有全国大学生315俱乐部会员方可查询交流并获得帮助。")
	    }
	</script>
    <title>【帮帮校园网】-大学校园315互助平台,贴心的大学生活好帮手</title>
	<style type="text/css">
    h4{width: 100%;height: 30px; margin-bottom: 10px;margin-top: 10px; border-bottom:1px solid #f5f5f5;}
    .ul{padding: 0px; clear:both;}
    .ul li{width: 96%;margin-left: 2%;margin-top: 2%;background: #fff;list-style-type:none;}
    .ul li a{width: 32%;display: inline-block;line-height: 28px!important;height: 28px!important;overflow: hidden;font-size: 0.9em;text-align: center;white-space: nowrap;text-overflow: ellipsis;}
    .ul2{padding: 0px;}
    .ul2 li{width: 96%;margin-left: 2%;margin-top: 2%;background: #fff;list-style-type:none;padding-top:10px;}
    .index_jianjie{width: 32%;float: left;text-align: center;}
    .index_jianjie a{width: 100%;display: inline-block;line-height: 25px;overflow: hidden;font-size: 0.8em;text-align: center;}
    .ming{width: 96%;margin-left: 2%;margin-top: 2%;background: #fff;min-height:220px;overflow: auto;}
    .ming a{color: #3a67cc;}
    a:hover{color: #ff0000;}
	</style> 
	<script  type="text/javascript">

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
                   	showConfirmButton: false,
                    });
                   
                   setTimeout("window.location.href='index.php';",1000);
             
				})
				// 处理失败
				.error(function(msg) {
					swal("OMG", "退出失败了!", "error")
				});

			});
	});



});
</script>
</head>

<body>

<!--这里是QQ对话框-->
<script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=117879";s.parentNode.insertBefore(c,s);})();</script>


	
<!--{template mb_header}-->

<!--{template mb_search}-->
<!-- nav -->

<div class="hlistnav">
	<li><a href="/index.php" class="hlistnavact">首页</a></li>
	<li><a href="/list.php?clickid=6&mokuai=goods">二手</a></li>
	<li><a href="/list.php?clickid=8&mokuai=schoolnear">周边</a></li>
	<li><a href="/list.php?clickid=7&mokuai=active">活动</a></li>
	<li><a href="/list.php?clickid=10&mokuai=parttime">兼职</a></li>
	<li><a href="/list.php?clickid=11&mokuai=intern">实习</a></li>
	<li><a href="/list.php?clickid=12&mokuai=recruit">招聘</a></li>
	<script type="text/javascript">
	var hlistnavavewid = 100/7; 
	$('.hlistnav>li').css('width',hlistnavavewid+'%');
	</script>
</div>

<div class="hlistnav2">
	<li><a href="/select.php">个人中心</a></li>
	<li><a href="/select1.php">发布信息</a></li>
	<!--{if $_SESSION['userid']==''}-->
	<li><a href="/user_login.php"  id='logout'>登录</a></li>
	<!--{/if}-->
	<!--{if $_SESSION['userid']!=''}-->
	<li><a href="#" id="logout">退出</a></li>
	<!--{/if}-->
	<script type="text/javascript">
	var hlistnav2avewid = 100/3; 
	$('.hlistnav2>li').css('width',hlistnav2avewid+'%');
	</script>
</div>


<div class="index_contain">

<div class="index_c1">

<ul class="ul">
<li><h4 style="margin-bottom:10px!important;"><a href="list.php?clickid=6&mokuai=goods&class=all" style="color:#000 !important; text-align:left!important; font-size:1.0em!important; line-height:30px !important; padding-left:2%;">校园二手</a></h4>
  <!--{loop $class1 $key1}-->
    <a href="list.php?clickid=6&mokuai=goods&class=$key1['id']">$key1['name']</a>
  <!--{/loop}--> 
</li>

<li><h4><a href="list.php?clickid=7&mokuai=active&class=all" style="color:#000 !important; text-align:left!important; font-size:1.0em!important; line-height:30px !important; padding-left:2%;">校园活动</a></h4>
  <!--{loop $class2 $key2}-->
    <a href="list.php?clickid=7&mokuai=active&class=$key2['id']">$key2['name']</a>
  <!--{/loop}--> 
</li>

<li><h4><a href="list.php?clickid=8&mokuai=schoolnear&class=all" style="color:#000 !important; text-align:left!important; font-size:1.0em!important; line-height:30px !important; padding-left:2%;">校园周边</a></h4>
  <!--{loop $class3 $key3}-->
   <!--{if $key3['name']=='失物招领'}-->
    <a href="list.php?clickid=9&mokuai=find_notice">$key3['name']</a>
   <!--{else}-->
    <a href="list.php?clickid=8&mokuai=schoolnear&class=$key3['id']">$key3['name']</a>
   <!--{/if}-->
  <!--{/loop}--> 
</li>
<li><h4><a href="list.php?clickid=14&mokuai=idea&class=all" style="color:#000 !important; text-align:left!important; font-size:1.0em!important; line-height:30px !important; padding-left:2%;">创意集市</a></h4>
  <!--{loop $class8 $key8}-->
	<a href="list.php?clickid=14&mokuai=idea&class=$key8['id']">$key8['name']</a>
  <!--{/loop}--> 
</li>
</ul>
 
</div>
<div class="index_c2">
	<div class="index_c3">
		<ul class="ul">
		<li><h4><a href="list.php?clickid=10&mokuai=parttime&class=all" style="color:#000 !important; text-align:left!important; font-size:1.0em!important; line-height:30px !important; padding-left:2%;">兼职</a></h4>
		  <!--{loop $class4 $key4}-->
		    <a href="list.php?clickid=10&mokuai=parttime&class=$key4['id']">$key4['name']</a>
		  <!--{/loop}--> 
		</li>

		<li><h4><a href="list.php?clickid=11&mokuai=intern&class=all" style="color:#000 !important; text-align:left!important; font-size:1.0em!important; line-height:30px !important; padding-left:2%;">实习</a></h4>
		  <!--{loop $class5 $key5}-->
		    <a href="list.php?clickid=11&mokuai=intern&class=$key5['id']">$key5['name']</a>
		  <!--{/loop}--> 
		</li>

		<li><h4><a href="list.php?clickid=12&mokuai=recruit&class=all" style="color:#000 !important; text-align:left!important; font-size:1.0em!important; line-height:30px !important; padding-left:2%;">应聘</a></h4>
		  <!--{loop $class6 $key6}-->
		    <a href="list.php?clickid=12&mokuai=recruit&class=$key6['id']">$key6['name']</a>
		  <!--{/loop}--> 
		</li>
		<li><h4><a href="list.php?clickid=13&mokuai=incubation" style="color:#000 !important; text-align:left!important; font-size:1.0em!important; line-height:30px !important; padding-left:2%;">创业创新</a></h4>

		    <a href="/practice.php">实习中心</a>

		    <a href="list.php?clickid=16&mokuai=joblease">职位租赁</a>
		   
		    <a href="list.php?clickid=15&mokuai=partner">创业合伙人</a>
		    
		</li>
		</ul>
	</div>
	<div>

		<div class="ming">
			<h4><a href="law_show.php" style="color:#000 !important; padding-left:2%;">法援在线</a></h4>
			<span class="index_jianjie_1">
			<!--{loop $law_online $key8}-->

		  <!--{if $i1>=1 and $i1<=3}-->
		  <!--{eval $i1++;}-->
			<div class="index_jianjie">
		   		<a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="law_show.php"><img src="$key8['images']" style="width:70px; height:85px;display:inline-block;"></a><br>
				<a href="law_show.php">姓名：$key8['name']</a></br>
		   		<a href="law_show.php">$key8['school']</a>
                <!--{if $_SESSION['userid']==''}-->
                <span><img src="/templates/default/pc\images/qq.png" alt="点击交流" onclick="disp1_alert()"></span><br>
                <!--{/if}-->

                <!--{if $user['administrator']==1}-->
                <span><a target="blank" href="tencent://message/?uin=$key8['lineqq']&amp;Site=帮帮校园网&amp;Menu=yes"><img src="/templates/default/pc\images/qq.png" alt="点击交流"></a></span><br>
                <!--{elseif $user['administrator']==2}-->
                    <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
                    <span><img src="/templates/default/pc\images/qq.png" alt="点击交流" onclick="disp_alert()"></span><br>
                    <!--{/if}-->
                    <!--{if $user['test']==1}-->
                    <span><a target="blank" href="tencent://message/?uin=$key8['lineqq']&amp;Site=帮帮校园网&amp;Menu=yes"><img src="/templates/default/pc\images/qq.png" alt="点击交流"></a></span><br>
                    <!--{/if}-->
                <!--{/if}-->
			</div>
		  <!--{/if}-->
		  
		  <!--{/loop}--> 	
		  <a href="law_show.php" class="jianjie_gengduo"  style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
			</span>
		  </div>
	

		<div class="ming">
			<h4><a href="lawer.php" style="color:#000 !important; padding-left:2%;">帮帮律师团</a></h4>
			
			<!--{loop $law_team $key9}-->

			  <!--{if $i2>=1 and $i2<=3}-->
			  <!--{eval $i2++;}-->
				 <div class="index_jianjie">
				  <!--{if $_SESSION['userid']==''}-->
				   	<a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" onclick="disp1_alert()"><img src="$key9['logoimg']" style="width:70px; height:85px;"></a><br>
					<a herf="#" onclick="disp1_alert()">$key9['name']</a></br>
			   		<a herf="#" onclick="disp1_alert()">$key9['school']</a>
		          <!--{/if}-->

				  <!--{if $_SESSION['userid']!=''}-->
			  <!--{eval $user=ruiqia_query_fetch('SELECT*FROM user WHERE id='.$_SESSION['userid']);}-->

		          <!--{if $user['administrator']==1}-->
		              <a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="lawerlist.php?id=$key9['id']"><img src="$key9['logoimg']" style="width:70px; height:85px;"></a><br>
					  <a href="lawerlist.php?id=$key9['id']">$key9['name']</a></br>
			   		  <a href="lawerlist.php?id=$key9['id']">$key9['school']</a>
		          <!--{elseif $user['administrator']==2}-->
		              <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
		              <a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" onclick="disp2_alert()"><img src="$key9['logoimg']" style="width:70px; height:85px;"></a><br>
					  <a herf="#" onclick="disp2_alert()">$key9['name']</a></br>
				   	  <a herf="#" onclick="disp2_alert()">$key9['school']</a>
		              <!--{/if}-->
		              <!--{if $user['test']==1}-->
		              <a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="lawerlist.php?id=$key9['id']"><img src="$key9['logoimg']" style="width:70px; height:85px;"></a><br>
					  <a href="lawerlist.php?id=$key9['id']">$key9['name']</a></br>
			   		  <a href="lawerlist.php?id=$key9['id']">$key9['school']</a>
		              <!--{/if}-->
		          <!--{/if}-->
		          <!--{/if}-->
				 </div>
			  <!--{/if}-->
			  
			<!--{/loop}--> 	
				  <!--{if $_SESSION['userid']==''}-->
		  	  <a class="jianjie_gengduo" onclick="disp1_alert()" style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
		          <!--{/if}-->

		          <!--{if $user['administrator']==1}-->
		  	  <a href="lawerm.php" class="jianjie_gengduo" style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
		          <!--{elseif $user['administrator']==2}-->
		              <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
		  	  <a class="jianjie_gengduo" onclick="disp2_alert()" style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
		              <!--{/if}-->
		              <!--{if $user['test']==1}-->
		  	  <a href="lawerm.php" class="jianjie_gengduo" style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
		              <!--{/if}-->
		          <!--{/if}-->
			  
		</div>

		<div class="ming">
			<h4><a href="teacherm.php" style="color:#000 !important; padding-left:2%;">帮辅导师团</a></h4>
		
			<!--{loop $tutor $key10}-->
		 
			  <!--{if $i4>=1 and $i4<=3}-->
			  <!--{eval $i4++;}-->
				<div class="index_jianjie">
				  <!--{if $_SESSION['userid']==''}-->
				    <a herf="#" onclick="disp1_alert()"><img src="$key10['logoimg']" style="width:70px; height:85px;"></a>
					<a herf="#" onclick="disp1_alert()">$key10['name']</a></br>
			   		<a herf="#" onclick="disp1_alert()">$key10['company']</a>
		          <!--{/if}-->

		          <!--{if $user['administrator']==1}-->
					<a href="teacherlistm.php?id=$key10['id']"><img src="$key10['logoimg']" style="width:70px; height:85px;"></a>
					<a href="teacherlistm.php?id=$key10['id']">$key10['name']</a></br>
			   		<a href="teacherlistm.php?id=$key10['id']">$key10['company']</a>
		          <!--{elseif $user['administrator']==2}-->
		              <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
					<a herf="#" onclick="disp2_alert()"><img src="$key10['logoimg']" style="width:70px; height:85px;"></a>
					<a herf="#" onclick="disp2_alert()">$key10['name']</a></br>
			   		<a herf="#" onclick="disp2_alert()">$key10['company']</a>
		              <!--{/if}-->
		              <!--{if $user['test']==1}-->
		            <a><img src="$key10['logoimg']" style="width:70px; height:85px;"></a>
					<a href="teacherlistm.php?id=$key10['id']">$key10['name']</a></br>
			   		<a href="teacherlistm.php?id=$key10['id']">$key10['company']</a>
		              <!--{/if}-->
		          <!--{/if}-->
				</div>
			  <!--{/if}-->
			  
			  <!--{/loop}--> 
			   <!--{if $_SESSION['userid']==''}-->
		  	  <a class="jianjie_gengduo" onclick="disp1_alert()" style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
		          <!--{/if}-->

		          <!--{if $user['administrator']==1}-->
		  	  <a href="teacherm.php" class="jianjie_gengduo" style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
		          <!--{elseif $user['administrator']==2}-->
		              <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
		  	  <a class="jianjie_gengduo" onclick="disp2_alert()" style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
		              <!--{/if}-->
		              <!--{if $user['test']==1}-->
		  	  <a href="teacherm.php" class="jianjie_gengduo" style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
		              <!--{/if}-->
		          <!--{/if}-->	
			  
		</div>

        <div class="ming">
			<h4><a href="list.php?class=169&mokuai=active&hit=1&clickid=7" style="color:#000 !important; padding-left:2%;">315会员专属活动</a></h4>
			
			<!--{loop $zhuanshu $key11}-->
		 
			  <!--{if $i6>=1 and $i6<=3}-->
			  <!--{eval $i6++;}-->
				<div class="index_jianjie">
			   		<a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="show.php?list=$key11['id']&clickid=7"><img src="$key11['img1']" style="width:70px; height:85px;"></a><br>
					<a href="show.php?list=$key11['id']&clickid=7" style="100%;height:56px;line-height:28px;overflow:hidden;">$key11['abstract']</a></br>
				</div>
			  <!--{/if}-->
			  
			  <!--{/loop}--> 	
		  	  <a href="list.php?class=169&mokuai=active&hit=1&clickid=7" class="jianjie_gengduo" style="width: 32%;line-height: 30px;height: 30px;float: right!important;text-align:right;margin-right:20px;">更多>></a>
			 
		</div>
		
		
	</div>
</div>


</div>





<!-- 这里是尾部 -->
<center class="footer" style="height:70px !important;">

	<a>京ICP备15057993号</a></br><a>违法信息举报：mail@bangbangdream.com</a></br>
	<a style="color: #848484 !important;" href="index_aboutour.php">关于我们</a>
	<a> | </a>
	<a style="color: #848484 !important;" href="index_intoour.php">加入我们</a>
	<a> | </a>
	<a style="color: #848484 !important;" href="index_linkour.php">联系我们</a>

</center>




   

</body>
</html>
