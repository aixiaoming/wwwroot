<!DOCTYPE html>
<html>
<head>
	<title>【选择大类】- 帮帮校园网</title>
	<!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
	<link rel="stylesheet" type="text/css" href="$dir/style.css">
	<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
</head>
<body>


	<!-- 这里是大框架的开始 -->
<div class="select1_frame1">

<!-- 这里是头部 -->
<div class="select1_logo">
  <a href="index.php"><img src="/tupian/logo.png"></a>
  <span>
  <a class="select1_area">$city['name']</a>
  <a href="area_change.php">切换城市</a>
  </span>
  <div>
  <!--{if $user['username']!=""}--><a href="user_profile.php">$user['username']</a><!--{elseif $user['username']=""}--><a href="user_login.php">登录</a><!--{/if}-->
    <a> | </a>
    <a href="index.php">返回首页</a>
  </div>
</div>

<!-- 这里是nav -->
<ul class="select1_nav">
	<li class="select1_act"><span>1</span><a> 选择类别</a></li>
	<li><span>2</span><a> 填写信息</a></li>
	<li><span>3</span><a> 发布成功</a></li>
</ul>


<!-- 这里是要选择的类型内容 -->
<ul class="select1_contain">

	<li>
	<h4 href="">校园二手</h4>
	<!--{loop $nav1 $key1}-->
    <span><a href="goods_edit.php?class=$key1['id']&querytype=publish">$key1['name']</a></span>
	<!--{/loop}-->
	</li>

	<li>
	<h4 href="">校园活动</h4>
	<!--{loop $nav5 $key5}-->
	<!--{if $key5['name']!="专属活动"}-->

    <span><a href="active_edit.php?class=$key5['id']&querytype=publish">$key5['name']</a></span>
	
	<!--{/if}-->
	<!--{/loop}-->
	</li>
	<li>
	<h4 href="">校园周边</h4>
	<!--{loop $nav6 $key6}-->
	<!--{if $key6['name']!="失物招领"}-->
	<span><a href="schoolnear_edit.php?class=$key6['id']&querytype=publish">$key6['name']</a></span><!--{/if}-->
	<!--{/loop}-->
	</li>	

	<li>
	<h4 href="">失物招领</h4>
    <span><a href="find_notice_edit.php?class=86&querytype=publish">失物招领</a></span>
	</li>

	<li>
	<h4 href="">兼职</h4>
	<!--{loop $nav2 $key2}-->
    <span><a href="parttime_edit.php?class=$key2['id']&querytype=publish">$key2['name']</a></span>
	<!--{/loop}-->
	</li>

	<li>
	<h4 href="">实习</h4>
	<!--{loop $nav3 $key3}-->
    <span><a href="intern_edit.php?class=$key3['id']&querytype=publish">$key3['name']</a></span>
	<!--{/loop}-->
	</li>
 
	<li>
	<h4 href="">应聘</h4>
	<!--{loop $nav4 $key4}-->
    <span><a href="recruit_edit.php?class=$key4['id']&querytype=publish">$key4['name']</a></span>
	<!--{/loop}-->
	</li>


<!--{if $user['test']=="1"}-->
	<h4 href="" style="color:#ED8149;">仅315会员可发布：</h4>

	<li>
	<h4 href="">创意集市：</h4>
	<!--{loop $nav7 $key7}-->
    <span><a href="idea_edit.php?class=$key7['id']&querytype=publish">$key7['name']</a></span>
	<!--{/loop}-->
	</li>
<!--{/if}-->


<!--{if $user['administrator']=="1"}-->
	<h4 href="" style="color:#ED8149;">仅管理员可发布：</h4>
	<li>
<span><a href="incubation_edit.php?querytype=publish">实习中心简介</a></span>
<span><a href="partner_edit.php?querytype=publish">创业合伙人</a></span>
<span><a href="joblease_edit.php?querytype=publish">职位租赁</a></span>
<span><a href="shop_edit.php?querytype=publish">创习小店</a></span>
	</li>


	<li>
	<h4 href="">全国大学生315俱乐部：</h4>

    <span><a href="315_abstract_edit.php?querytype=publish">简介</a></span>
    <span><a href="law_team_edit.php?querytype=publish">帮帮律师团</a></span>
    <span><a href="tutor_edit.php?querytype=publish">帮辅导师团</a></span>
    <span><a href="active_edit.php?class=169&querytype=publish">专属活动</a></span>

	</li>





	<li>
	<h4 href="">网站信息：</h4>

    <span><a href="index_aboutour_edit.php?querytype=publish">关于我们</a></span>
    <span><a href="index_intoour_edit.php?querytype=publish">加入我们</a></span>
    <span><a href="index_linkour_edit.php?querytype=publish">联系我们</a></span>
    <span><a href="agreement_xieyipub.php">帮帮校园网使用协议</a></span>

	</li>


<!--{/if}-->



</ul>

</div>
	<!-- 这里是大框架的结束 -->

<!-- 这里是尾部 -->
<div class="footer">
<center><a>© Bangbangdream.com</a></center>
</div>

</body>
</html>