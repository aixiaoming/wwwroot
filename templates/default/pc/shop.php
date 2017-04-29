
<!DOCTYPE html>
<html>
<head>
	<title>创习小店</title>
	<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
	<link rel="stylesheet" type="text/css" href="$dir/style.css">
<style type="text/css">
.searchtext {padding:0px; padding-left:10px!important; margin: 0px; width:445px!important; height:31px!important; border:#DD5500 solid 2px!important; border-radius:0 !important; outline:none!important;}
</style> 
</head>
<body>
<!--{template common_header}-->
<!-- 头部 -->



 

<!-- 这里是限制整个页面宽的大框架 /////////////////开始-->
<div class="frame1">
	


<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<script type="text/javascript"> 
// nav3的选择条件

        $(".list_nav3_area").addClass("nav3_block");
        $(".list_nav3_class").addClass("nav3_block");
</script> 
 

<!--{template publish_header1}-->



<!-- nav -->
<div>
<ul class="nav1">
  <li><a href="index.php">首页</a></li>
  <li><a class="nav1_act_2" href="list.php?clickid=6&mokuai=goods">校园生活</a></li>
  <li><a class="nav1_act_3" href="list.php?clickid=10&mokuai=parttime">实践实习</a></li>
  <li><a class="nav1_act_4" href="list.php?clickid=13&mokuai=incubation">创业创新</a></li>
  <li><a class="nav1_act_5" href="law_lawshow.php">法律帮助</a></li>
  <li><a rel="5" href="315_abstract.php">全国大学生315俱乐部</a></li>
  <li><a rel="6" href="shop.php">创习小店</a></li>
</ul>
</div>


<!-- 内容 -->
<div class="contain">
<!-- 列表 -->
<ul class="list">

<!--{loop $list $key1}-->
    <li>
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul>
		<li><span><a class="goods_shan"  target="_blank" href="show.php?list=$key1['id']&clickid=$clickid">$key1['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
					
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user1['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key1['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布者：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		</ul>

	</li>
<!--{/loop}-->
    $ruiqia_page






</ul>
<!-- 广告位置 -->
<!--{template Advertisement}-->
</div>




</div>
<!-- 整体大框架///////////////////////////////////////结束 -->


<!-- 这里是尾部 -->
<div class="footer">
<center><a>© Bangbangdream.com</a></center>
</div>

</body>
</html>