<!DOCTYPE html>
<html>
<head>
	<title>【搜索】- 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="$dir/style.css">
    <meta http-equiv="X-UA-Compatible" content="edge" />
	<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
<style type="text/css">
.searchtext {padding:0px; padding-left:10px!important; margin: 0px; width:445px!important; height:35px!important; border:#DD5500 solid 2px!important; border-radius:0 !important; outline:none!important;}
</style>
</head>
<body>
<!--{template common_header}-->
<!-- 头部 -->



 

<!-- 这里是限制整个页面宽的大框架 /////////////////开始-->
<div class="frame1">
	
<!--{template publish_header}-->
 

<!-- nav -->
<div>
<ul class="nav1">
  <li><a href="index.php">首页</a></li>
  <li><a class="nav1_act_2" href="list.php?clickid=6&mokuai=goods">校园生活</a></li>
  <li><a class="nav1_act_3" href="list.php?clickid=10&mokuai=parttime">实践实习</a></li>
  <li><a class="nav1_act_4" href="list.php?clickid=13&mokuai=incubation">创业创新</a></li>
  <li><a class="nav1_act_5" href="law_lawshow.php">法律帮助</a></li>
  <li><a rel="5" href="315_abstract.php">全国大学生315俱乐部</a></li>
  <li><a rel="6" href="list.php?clickid=171&mokuai=shop">创习小店</a></li>
</ul>
</div>


<!-- 内容 -->
<div class="contain">
<!-- 列表 -->
<ul class="list">


<!--{loop $goods $key1}-->
<!--{eval $user=ruiqia_query_column("SELECT username FROM user WHERE id=".$key1['userid']."")}-->
    <li>
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key1['id']&clickid=6">$key1['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key1['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=6&mokuai=goods"style="font-size:15px !important;">校园生活</a> -> <a href="list.php?clickid=6&mokuai=goods"style="font-size:15px !important;">校园二手</a></span>
		</ul>
	</li>

<!--{/loop}--><!--{loop $active $key2}-->
    <li>
		<img class="list_shou_img" src="$key2['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key2['id']&clickid=7">$key2['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key2['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key2['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=6&mokuai=goods"style="font-size:15px !important;">校园生活</a> -> <a href="list.php?clickid=7&mokuai=active"style="font-size:15px !important;">校园活动</a></span>
		</ul>
	</li>

<!--{/loop}--><!--{loop $schoolnear $key3}-->
    <li>
		<img class="list_shou_img" src="$key3['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key3['id']&clickid=8">$key3['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key3['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key3['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=6&mokuai=goods"style="font-size:15px !important;">校园生活</a> -> <a href="list.php?clickid=8&mokuai=schoolnear"style="font-size:15px !important;">校园周边</a></span>
		</ul>
	</li>

<!--{/loop}--><!--{loop $find_notice $key4}-->
    <li>
		<img class="list_shou_img" src="$key4['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key4['id']&clickid=9">$key4['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key4['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key4['address']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=6&mokuai=goods"style="font-size:15px !important;">校园生活</a> -> <a href="list.php?clickid=9&mokuai=find_notice"style="font-size:15px !important;">失物招领</a></span>
		</ul>
	</li>

<!--{/loop}--><!--{loop $parttime $key5}-->
    <li>
		<img class="list_shou_img" src="$key5['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key5['id']&clickid=10">$key5['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key5['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key5['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=10&mokuai=parttime"style="font-size:15px !important;">实践实习</a> -> <a href="list.php?clickid=10&mokuai=parttime"style="font-size:15px !important;">兼职</a></span>
		</ul>
	</li>

<!--{/loop}--><!--{loop $intern $key6}-->
    <li>
		<img class="list_shou_img" src="$key6['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key6['id']&clickid=11">$key6['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key6['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key6['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=10&mokuai=parttime"style="font-size:15px !important;">实践实习</a> -> <a href="list.php?clickid=11&mokuai=intern"style="font-size:15px !important;">实习</a></span>
		</ul>
	</li>

<!--{/loop}--><!--{loop $recruit $key7}-->
    <li>
		<img class="list_shou_img" src="$key7['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key7['id']&clickid=12">$key7['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key7['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key7['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=10&mokuai=parttime"style="font-size:15px !important;">实践实习</a> -> <a href="list.php?clickid=12&mokuai=recruit"style="font-size:15px !important;">应聘</a></span>
		</ul>
	</li>

<!--{/loop}--><!--{loop $idea $key9}-->
    <li>
		<img class="list_shou_img" src="$key9['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key9['id']&clickid=14">$key9['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key9['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key9['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=13&mokuai=incubation"style="font-size:15px !important;">创业创新</a> -> <a href="list.php?clickid=14&mokuai=idea"style="font-size:15px !important;">创意集市</a></span>
		</ul>
	</li>

<!--{/loop}--><!--{loop $joblease $key11}-->
    <li>
		<img class="list_shou_img" src="$key11['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key11['id']&clickid=16">$key11['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key11['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key11['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：帮帮校园网</a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=13&mokuai=incubation"style="font-size:15px !important;">创业创新</a> -> <a href="list.php?clickid=16&mokuai=joblease"style="font-size:15px !important;">职位租赁</a></span>
		</ul>
	</li>

<!--{/loop}--><!--{loop $shop $key12}-->
    <li>
		<img class="list_shou_img" src="$key12['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul style="position:relative;">
		<li><span><a href="show.php?list=$key12['id']&clickid=8">$key12['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key12['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key12['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布人：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<span style="display:inline-block;float:right; position:absolute; top:61px; left:580px; width:220px; font-size:15px !important;"> 来源于：<a href="list.php?clickid=4&mokuai=shop"style="font-size:15px !important;">创业创新</a> -> <a href="list.php?clickid=171&mokuai=shop"style="font-size:15px !important;">创习小店</a></span>
		</ul>
	</li>

<!--{/loop}-->

<center class="zanwuxinxi" style="font-size:20px; margin-top:100px; display:none;">暂无相关信息</center>

</ul>
<!-- 广告位置 -->
<div class="ad">
	<img src="/tupian/广告.png">
</div>
</div>




</div>
<!-- 整体大框架///////////////////////////////////////结束 -->


<!-- 这里是尾部 -->
<div class="footer">
<center><a>© Bangbangdream.com</a></center>
</div>

<script type="text/javascript">
	var xinxinum=$(".list li").length;
	if (xinxinum==0) {
		$('.zanwuxinxi').css('display','block');
	};
</script>

</body>
</html>