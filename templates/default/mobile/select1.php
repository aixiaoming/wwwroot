<!DOCTYPE html>
<html>
<head>
	<title>【选择大类】- 帮帮校园网</title>
	<!-- 这个是title的图标 -->
	<link rel="stylesheet" type="text/css" href="$dir/css/style.css">
	<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
</head>
<body>



<!-- 头部 -->
<!--{template mb_header}-->



<!-- 这里是头部 -->
<div class="select1_header">
	<a href="index.php">首页</a>
	<a> > </a>
	<a>选择类别</a>
</div>

<!-- 这里是要选择的类型内容 -->
<div class='select1_contain'>


<h4 class='select1_title'>校园二手</h4>
<div class="select1_class">
	<!--{loop $nav1 $key1}-->
    <span><a href="goods_edit.php?class=$key1['id']&querytype=publish">$key1['name']</a></span>
	<!--{/loop}-->
</div>

<h4 class='select1_title'>校园活动</h4>
<div class="select1_class">
	<!--{loop $nav5 $key5}-->
	<!--{if $key5['name']!="专属活动"}-->

    <span><a href="active_edit.php?class=$key5['id']&querytype=publish">$key5['name']</a></span>
	
	<!--{/if}-->
	<!--{if $key5['name']=="专属活动"}-->
	<!--{if $user['administrator']=="1"}-->

    <span><a href="active_edit.php?class=$key5['id']&querytype=publish">$key5['name']</a></span>
	
	<!--{/if}-->
	<!--{/if}-->
	<!--{/loop}-->
</div>


<h4 class='select1_title'>校园周边</h4>
<div class="select1_class">
	<!--{loop $nav6 $key6}-->
	<!--{if $key6['name']!="失物招领"}-->
	<span><a href="schoolnear_edit.php?class=$key6['id']&querytype=publish">$key6['name']</a></span><!--{/if}-->
	<!--{/loop}-->
</div>	


<h4 class='select1_title'>失物招领</h4>
<div class="select1_class">
    <span><a href="find_notice_edit.php?class=86&querytype=publish">失物招领</a></span>
</div>	


<h4 class='select1_title'>兼职</h4>
<div class="select1_class">
	<!--{loop $nav2 $key2}-->
    <span><a href="parttime_edit.php?class=$key2['id']&querytype=publish">$key2['name']</a></span>
	<!--{/loop}-->
</div>	



<h4 class='select1_title'>实习</h4>
<div class="select1_class">
	<!--{loop $nav3 $key3}-->
    <span><a href="intern_edit.php?class=$key3['id']&querytype=publish">$key3['name']</a></span>
	<!--{/loop}-->
</div>	
 

<h4 class='select1_title'>应聘</h4>
<div class="select1_class" style="padding-bottom:40px;">
	<!--{loop $nav4 $key4}-->
    <span><a href="recruit_edit.php?class=$key4['id']&querytype=publish">$key4['name']</a></span>
	<!--{/loop}-->
</div>


<!--{if $user['test']==1}-->
<h4 class='select1_title'>创意集市</h4>
<div class="select1_class" style="padding-bottom:10px;">
	<!--{loop $nav7 $key7}-->
    <span><a href="idea_edit.php?class=$key7['id']&querytype=publish">$key7['name']</a></span>
	<!--{/loop}-->
</div>
<!--{/if}-->




</div>


<!-- 这里是尾部 -->
<div class="footer">
<center><a>© Bangbangdream.com</a></center>
</div>

</body>
</html>