<!DOCTYPE html>
<html>
<head>
	<title>【搜索】- 帮帮校园网</title>
	<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" type="text/css" href="\templates\default\mobile\css/front.css">
    <link rel="stylesheet" type="text/css" href="$dir/css/style.css">
<script type="text/javascript" src="\templates\default\pc\js/jquery.min.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
</head>
<body>



<!-- 头部 -->
<!--{template mb_header}-->




<!-- 搜索条 -->
<!--{template mb_search}-->


<!-- 列表 -->


<ul class="list_di" style="padding:0; margin:0;">
<!--{loop $goods $key1}-->
<!--{eval $user=ruiqia_query_column("SELECT username FROM user WHERE id=".$key1['userid']."")}-->
    <li  class="list_display1">
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul class="list_display2">
		<li><span><a href="show.php?list=$key1['id']&clickid=6">$key1['title'] </a><img src="/tupian/学.png"></span></li>
		<li><a>$key1['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：$user</a></li>
		<li style="margin-left:-30px;"><span style="font-size:15px;"> 来源于：<a href="list.php?clickid=6&mokuai=goods" style="font-size:15px !important;">校园生活</a> -> <a href="list.php?clickid=6&mokuai=goods"style="font-size:15px !important;">校园二手</a></span></li>
		</ul>
	</li>

<!--{/loop}-->
<!--{loop $active $key2}-->
    <li  class="list_display1">
		<img class="list_shou_img" src="$key2['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul class="list_display2">
		<li><span><a href="show.php?list=$key2['id']&clickid=7">$key2['title'] </a><img src="/tupian/学.png"></span></li>
		<li><a>$key2['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：$key2['linkman']</a></li>
		<li style="margin-left:-30px;"><span style="font-size:15px;"> 来源于：<a href="list.php?clickid=6&mokuai=goods" style="font-size:15px !important;">校园生活</a> -> <a href="list.php?clickid=7&mokuai=active"style="font-size:15px !important;">校园活动</a></span></li>
		</ul>
	</li>

<!--{/loop}--><!--{loop $schoolnear $key3}-->
    <li  class="list_display1">
		<img class="list_shou_img" src="$key3['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul class="list_display2">
		<li><span><a href="show.php?list=$key3['id']&clickid=8">$key3['title'] </a><img src="/tupian/学.png"></span></li>
		<li><a>$key3['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：$key3['username']</a></li>
		<li style="margin-left:-30px;"><span style="font-size:15px;"> 来源于：<a href="list.php?clickid=6&mokuai=goods" style="font-size:15px !important;">校园生活</a> -> <a href="list.php?clickid=8&mokuai=schoolnear"style="font-size:15px !important;">校园周边</a></span></li>
		</ul>
	</li>

<!--{/loop}--><!--{loop $find_notice $key4}-->
    <li  class="list_display1">
		<img class="list_shou_img" src="$key4['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul class="list_display2">
		<li><span><a href="show.php?list=$key4['id']&clickid=9">$key4['title'] </a><img src="/tupian/学.png"></span></li>
		<li><a>$key4['address']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：$key4['username']</a></li>
		<li style="margin-left:-30px;"><span style="font-size:15px;"> 来源于：<a href="list.php?clickid=6&mokuai=goods" style="font-size:15px !important;">校园生活</a> -> <a href="list.php?clickid=9&mokuai=find_notice"style="font-size:15px !important;">失物招领</a></span></li>
		</ul>
	</li>

<!--{/loop}--><!--{loop $parttime $key5}-->
    <li  class="list_display1">
		<img class="list_shou_img" src="$key5['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul class="list_display2">
		<li><span><a href="show.php?list=$key5['id']&clickid=10">$key5['title'] </a><img src="/tupian/学.png"></span></li>
		<li><a>$key5['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：$key5['username']</a></li>
		<li style="margin-left:-30px;"><span style="font-size:15px;"> 来源于：<a href="list.php?clickid=10&mokuai=parttime" style="font-size:15px !important;">实践实习</a> -> <a href="list.php?clickid=10&mokuai=parttime">兼职</a></span></li>
		</ul>
	</li>

<!--{/loop}--><!--{loop $intern $key6}-->
    <li  class="list_display1">
		<img class="list_shou_img" src="$key6['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul class="list_display2">
		<li><span><a href="show.php?list=$key6['id']&clickid=11">$key6['title'] </a><img src="/tupian/学.png"></span></li>
		<li><a>$key6['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：$key6['username']</a></li>
		<li style="margin-left:-30px;"><span style="font-size:15px;"> 来源于：<a href="list.php?clickid=10&mokuai=parttime" style="font-size:15px !important;">实践实习</a> -> <a href="list.php?clickid=11&mokuai=intern">实习</a></span></li>
		</ul>
	</li>

<!--{/loop}--><!--{loop $recruit $key7}-->
    <li  class="list_display1">
		<img class="list_shou_img" src="$key7['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul class="list_display2">
		<li><span><a href="show.php?list=$key7['id']&clickid=12">$key7['title'] </a><img src="/tupian/学.png"></span></li>
		<li><a>$key7['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：$key7['username']</a></li>
		<li style="margin-left:-30px;"><span style="font-size:15px;"> 来源于：<a href="list.php?clickid=10&mokuai=parttime" style="font-size:15px !important;">实践实习</a> -> <a href="list.php?clickid=12&mokuai=recruit">应聘</a></span></li>
		</ul>
	</li>

<!--{/loop}--><!--{loop $idea $key9}-->
    <li  class="list_display1">
		<img class="list_shou_img" src="$key9['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul class="list_display2">
		<li><span><a href="show.php?list=$key9['id']&clickid=14">$key9['title'] </a><img src="/tupian/学.png"></span></li>
		<li><a>$key9['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：$key9['username']</a></li>
		<li style="margin-left:-30px;"><span style="font-size:15px;"> 来源于：<a href="list.php?clickid=14&mokuai=idea">创意集市</a></span></li>
		</ul>
	</li>

<!--{/loop}--><!--{loop $joblease $key11}-->
    <li  class="list_display1">
		<img class="list_shou_img" src="$key11['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul class="list_display2">
		<li><span><a href="show.php?list=$key11['id']&clickid=16">$key11['title'] </a><img src="/tupian/学.png"></span></li>
		<li><a>$key11['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：$key11['username']</a></li>
		<li style="margin-left:-30px;"><span style="font-size:15px;"> 来源于：<a href="list.php?clickid=16&mokuai=joblease">职位租赁</a></span></li>
		</ul>
	</li>

<!--{/loop}-->

<center class="zanwuxinxi" style="font-size:20px; margin:0; margin-left:-10%; margin-top:100px; display:none;">暂无相关信息</center>

</ul>



<!-- 这里是尾部 -->
<center class="footer"><a>© Bangbangdream.com</a></center>
<script type="text/javascript">
	var xinxinum=$(".list_di li").length;
	if (xinxinum==0) {
		$('.zanwuxinxi').css('display','block');
	};


</script>

</body>
</html>