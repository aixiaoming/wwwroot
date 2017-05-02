
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="edge" />
<meta name="keywords" content="校园二手，大学生维权，校园渠道、大学生兼职，校园兼职，大学生实习，校园招聘，校园活动，校园周边，校园服务，校园推广，校园活动赞助，大学生创新创业，职前培训，权威法律顾问，资深企业法务，在线法律咨询，法律援助，大学生315会员" />
<meta name="description" content="帮帮校园网为企事业单位、中小微企业、创业团队提供精准、高效、省钱的招聘、推广、法律顾问及一站式贴心服务。为在校大学生提供兼职、实习、应聘、社会实践、创新创业的校企信息无缝零对接服务，法律护航，安全有保障，大学校园生活好帮手。">
<link rel="stylesheet" type="text/css" href="/templates/default/pc/css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 

<script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>

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
<title>【帮帮校园网】-大学生校企平台，校园生活服务、兼职、实习、招聘、推广、活动赞助、创新创业校企信息无缝零对接，精准高效节省，安全有保障</title>
	<link rel="stylesheet" type="text/css" href="./templates/default/pc/style.css">


<!-[if IE]>
<script src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"></script>
<![endif]->

<style type="text/css">
.searchtext {padding:0px; padding-left:10px!important; margin: 0px; width:445px!important; height:31px!important; border:#DD5500 solid 2px!important; border-radius:0 !important; outline:none!important;}
</style> 
</head>

<body>
<!--这个是弹出对话-->
<script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=117879";s.parentNode.insertBefore(c,s);})();</script>



<!--{template common_header}-->


<!-- 这里是限制整个页面宽的大框架 /////////////////开始-->
<div class="frame1">
	
<!--{template publish_header}-->

<!-- nav -->
<div>
<ul class="nav1">
	<li><a class="nav1_act_1" href="index.php">首页</a></li>
	<li><a rel="1" href="list.php?clickid=6&mokuai=goods">校园生活</a></li>
	<li><a rel="2" href="list.php?clickid=10&mokuai=parttime">实践实习</a></li>
	<li><a rel="3" href="list.php?clickid=13&mokuai=incubation">创业创新</a></li>
	<li><a rel="4" href="law_lawshow.php">法律帮助</a></li>
	<li><a rel="5" href="315_abstract.php">全国大学生315俱乐部</a></li>
	<li><a rel="6" href="list.php?clickid=171&mokuai=shop">创习小店</a></li>
  	<li><a rel="7" href="bangfu.php?mokuai=bangfu">创业帮扶</a></li>
</ul>
</div>

<div class="index_contain">

<div class="index_c1">

<ul>
<li><h4><a href="list.php?clickid=6&mokuai=goods&class=all" style="color:#000 !important;">校园二手</a></h4>
  <!--{loop $class1 $key1}-->
    <a href="list.php?clickid=6&mokuai=goods&class=$key1['id']">$key1['name']</a>
  <!--{/loop}--> 
</li>

<li><h4><a href="list.php?clickid=7&mokuai=active&class=all" style="color:#000 !important;">校园活动</a></h4>
  <!--{loop $class2 $key2}-->
    <a href="list.php?clickid=7&mokuai=active&class=$key2['id']">$key2['name']</a>
  <!--{/loop}--> 
</li>

<li><h4><a href="list.php?clickid=8&mokuai=schoolnear&class=all" style="color:#000 !important;">校园周边</a></h4>
  <!--{loop $class3 $key3}-->
  <!--{if $key3['name']=='失物招领'}-->
    <a href="list.php?clickid=9&mokuai=find_notice">$key3['name']</a>
  <!--{else}-->
    <a href="list.php?clickid=8&mokuai=schoolnear&class=$key3['id']">$key3['name']</a>
  <!--{/if}-->
  <!--{/loop}--> 
</li>
<li><h4><a href="list.php?clickid=14&mokuai=idea&class=all" style="color:#000 !important;">创意集市</a></h4>
  <!--{loop $class8 $key8}-->
	<a href="list.php?clickid=14&mokuai=idea&class=$key8['id']">$key8['name']</a>
  <!--{/loop}--> 
</li>
</ul>
 
</div>
<div class="index_c2">
	<div class="index_c3">
		<ul>
		<li><h4><a href="list.php?clickid=10&mokuai=parttime&class=all" style="color:#000 !important;">兼职</a></h4>
		  <!--{loop $class4 $key4}-->
		    <a href="list.php?clickid=10&mokuai=parttime&class=$key4['id']">$key4['name']</a>
		  <!--{/loop}--> 
		</li>

		<li><h4><a href="list.php?clickid=11&mokuai=intern&class=all" style="color:#000 !important;">实习</a></h4>
		  <!--{loop $class5 $key5}-->
		    <a href="list.php?clickid=11&mokuai=intern&class=$key5['id']">$key5['name']</a>
		  <!--{/loop}--> 
		</li>

		<li><h4><a href="list.php?clickid=12&mokuai=recruit&class=all" style="color:#000 !important;">应聘</a></h4>
		  <!--{loop $class6 $key6}-->
		    <a href="list.php?clickid=12&mokuai=recruit&class=$key6['id']">$key6['name']</a>
		  <!--{/loop}--> 
		</li>
		<li><h4><a href="list.php?clickid=13&mokuai=incubation&class=all" style="color:#000 !important;">创业创新</a></h4>

		    <a href="list.php?clickid=13&mokuai=incubation">实习中心</a>
		    <a href="list.php?clickid=14&mokuai=idea">创意集市</a>
		    <a href="list.php?clickid=15&mokuai=partner">创业合伙人</a>
		    <a href="list.php?clickid=16&mokuai=joblease">职位租赁</a>
		    <a href="list.php?clickid=171&mokuai=shop">创习小店</a>
		    <a href="bangfu.php?mokuai=bangfu">创业帮扶</a>
		</li>
		</ul>
	</div>
	<div>
		<ul>
		<li>
			<h4><a href="law_show.php" style="color:#000 !important;">法援在线</a></h4>
			<span class="index_jianjie_1" style="height:180px !important;">
			<!--{loop $law_online $key8}-->

		  <!--{if $i1>=1 and $i1<=3}-->
		  <!--{eval $i1++;}-->
			<div class="index_jianjie">
		   		<a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="law_show.php"><img src="$key8['images']" style="width:70px; height:85px;display:inline-block;"></a>
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
		  <a href="law_show.php" class="jianjie_gengduo" style="margin-top:170px !important;">更多>></a>
			</span>
		  
		</li>

		<li>
			<h4><a href="lawer.php" style="color:#000 !important;">帮帮律师团</a></h4>
			<span class="index_jianjie_1">
			<!--{loop $law_team $key9}-->

			  <!--{if $i2>=1 and $i2<=3}-->
			  <!--{eval $i2++;}-->
				 <div class="index_jianjie">
				  <!--{if $_SESSION['userid']==''}-->
				   	<a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" onclick="disp1_alert()"><img src="$key9['logoimg']" style="width:70px; height:85px;"></a>
					<a onclick="disp1_alert()">$key9['name']</a></br>
			   		<a onclick="disp1_alert()">$key9['school']</a>
		          <!--{/if}-->

		          <!--{if $user['administrator']==1}-->
		              <a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="lawerlist.php?id=$key9['id']"><img src="$key9['logoimg']" style="width:70px; height:85px;"></a>
					  <a href="lawerlist.php?id=$key9['id']">$key9['name']</a></br>
			   		  <a href="lawerlist.php?id=$key9['id']">$key9['school']</a>
		          <!--{elseif $user['administrator']==2}-->
		              <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
		              <a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" onclick="disp2_alert()"><img src="$key9['logoimg']" style="width:70px; height:85px;"></a>
					  <a onclick="disp2_alert()">$key9['name']</a></br>
				   	  <a onclick="disp2_alert()">$key9['school']</a>
		              <!--{/if}-->
		              <!--{if $user['test']==1}-->
		              <a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="lawerlist.php?id=$key9['id']"><img src="$key9['logoimg']" style="width:70px; height:85px;"></a>
					  <a href="lawerlist.php?id=$key9['id']">$key9['name']</a></br>
			   		  <a href="lawerlist.php?id=$key9['id']">$key9['school']</a>
		              <!--{/if}-->
		          <!--{/if}-->
				 </div>
			  <!--{/if}-->
			  
			<!--{/loop}--> 	
				  <!--{if $_SESSION['userid']==''}-->
		  	  <a class="jianjie_gengduo" onclick="disp1_alert()">更多>></a>
		          <!--{/if}-->

		          <!--{if $user['administrator']==1}-->
		  	  <a href="lawer.php" class="jianjie_gengduo">更多>></a>
		          <!--{elseif $user['administrator']==2}-->
		              <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
		  	  <a class="jianjie_gengduo" onclick="disp2_alert()">更多>></a>
		              <!--{/if}-->
		              <!--{if $user['test']==1}-->
		  	  <a href="lawer.php" class="jianjie_gengduo">更多>></a>
		              <!--{/if}-->
		          <!--{/if}-->
			  </span>
		</li>

		<li>
			<h4><a href="law_lawshow.php" style="color:#000 !important;">法援组织</a></h4>
			<span class="index_jianjie_1">
			<!--{loop $lawlaw $key9}-->
		 
			  <!--{if $i5>=1 and $i5<=3}-->
			  <!--{eval $i5++;}-->
				<div class="index_jianjie">
			   		<a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="law_lawshow.php"><img src="$key9['images']" style="width:70px; height:85px;"></a>
			   		<a href="law_lawshow.php" style="line-height:20px;">$key9['zhai']</a></br>
				</div>
			  <!--{/if}-->
			  
			  <!--{/loop}--> 	
		  	  <a href="law_lawshow.php" class="jianjie_gengduo">更多>></a>
			  </span>
		</li>

		<li>
			<h4><a href="teacher.php" style="color:#000 !important;">帮辅导师团</a></h4>
			<span class="index_jianjie_1">
			<!--{loop $tutor $key10}-->
		 
			  <!--{if $i4>=1 and $i4<=3}-->
			  <!--{eval $i4++;}-->
				<div class="index_jianjie">
				  <!--{if $_SESSION['userid']==''}-->
				    <a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" onclick="disp1_alert()"><img src="$key10['logoimg']" style="width:70px; height:85px;"></a>
					<a onclick="disp1_alert()">$key10['name']</a></br>
			   		<a onclick="disp1_alert()">$key10['company']</a>
		          <!--{/if}-->

		          <!--{if $user['administrator']==1}-->
					<a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="teacher.php"><img src="$key10['logoimg']" style="width:70px; height:85px;"></a>
					<a href="teacher.php">$key10['name']</a></br>
			   		<a href="teacher.php">$key10['company']</a>
		          <!--{elseif $user['administrator']==2}-->
		              <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
					<a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" onclick="disp2_alert()"><img src="$key10['logoimg']" style="width:70px; height:85px;"></a>
					<a onclick="disp2_alert()">$key10['name']</a></br>
			   		<a onclick="disp2_alert()">$key10['company']</a>
		              <!--{/if}-->
		              <!--{if $user['test']==1}-->
		            <a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="teacher.php"><img src="$key10['logoimg']" style="width:70px; height:85px;"></a>
					<a href="teacher.php">$key10['name']</a></br>
			   		<a href="teacher.php">$key10['company']</a>
		              <!--{/if}-->
		          <!--{/if}-->
				</div>
			  <!--{/if}-->
			  
			  <!--{/loop}--> 
			   <!--{if $_SESSION['userid']==''}-->
		  	  <a class="jianjie_gengduo" onclick="disp1_alert()">更多>></a>
		          <!--{/if}-->

		          <!--{if $user['administrator']==1}-->
		  	  <a href="teacher.php" class="jianjie_gengduo">更多>></a>
		          <!--{elseif $user['administrator']==2}-->
		              <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
		  	  <a class="jianjie_gengduo" onclick="disp2_alert()">更多>></a>
		              <!--{/if}-->
		              <!--{if $user['test']==1}-->
		  	  <a href="teacher.php" class="jianjie_gengduo">更多>></a>
		              <!--{/if}-->
		          <!--{/if}-->	
			  </span>
		</li>

		<li>
			<h4><a href="list.php?class=169&mokuai=active&hit=1&clickid=7" style="color:#000 !important;">315会员专属活动</a></h4>
			<span class="index_jianjie_1">
			<!--{loop $zhuanshu $key11}-->
		 
			  <!--{if $i6>=1 and $i6<=3}-->
			  <!--{eval $i6++;}-->
				<div class="index_jianjie">
			   		<a style="height:85px !important; width:70px !important; margin-bottom:10px !important;" href="show.php?list=$key11['id']&clickid=7"><img src="$key11['img1']" style="width:70px; height:85px;"></a>
					<a href="show.php?list=$key11['id']&clickid=7">$key11['abstract']</a></br>
				</div>
			  <!--{/if}-->
			  
			  <!--{/loop}--> 	
		  	  <a href="list.php?class=169&mokuai=active&hit=1&clickid=7" class="jianjie_gengduo">更多>></a>
			  </span>
		</li>
		</ul>
	</div>
</div>


</div>




</div>
<!-- 整体大框架///////////////////////////////////////结束 -->


<!-- 这里是尾部 -->
<div class="footer">
<center class="index_f">

<div class="" style="border-top:#DCD2E6 solid 1px; width:1200px;padding:0px auto; padding-top:25px; margin-bottom:5px; position:relative;">

	<a>京ICP备15057993号  违法信息举报：mail@bangbangdream.com</a><img src="\tupian\qrcode_for_gh_7696f2c74755_258.jpg" style="width:70px; position:absolute; top:0px; margin-left:20px;"></br>
	<a href="index_aboutour.php">关于我们</a>
	<a> | </a>
	<a href="index_intoour.php">加入我们</a>
	<a> | </a>
	<a href="index_linkour.php">联系我们</a>
	
	
</div>




   

</body>
</html>