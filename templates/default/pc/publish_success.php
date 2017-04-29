<!DOCTYPE html>
<html>
<head>
  <title>【发布成功】- 帮帮校园网</title>
  <link rel="stylesheet" type="text/css" href="$dir/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
</head>
<body>
  <!-- 这里是大框架的开始 -->
<div class="select1_frame1">

<!-- 这里是头部 -->
<div class="publish_logo">
  <a href="index.php"><img src="/tupian/logo.png"></a>
  <span>
  <a>免费发布信息</a>
  </span>
  <div>
    <a href="index.php">返回首页</a>
    <a> | </a>
    <a href="user_profile.php">用户中心</a>
  </div>
</div>



<!-- 这里是要选择的类型内容 -->
<div class="publish_contain">
  <div>
<!--{if $ca=="1"}-->
    <span>投诉成功</span>
<!--{else}-->
    <span>恭喜您信息已发布成功</span>
<!--{/if}-->

<!--{if $ca=="1"}-->
    <a class="publish_button" href="index.php">返回首页</a>
<!--{elseif $ca=="2"}-->
    <a class="publish_button" href="lawerlist.php?id=$newid">查看信息</a>
    <a href="lawerlist.php?id=$newid">管理信息</a>   
<!--{elseif $ca=="3"}-->
    <a class="publish_button" href="teacher.php?list=$newid">查看信息</a>
    <a href="teacher.php?list=$newid">管理信息</a>
<!--{elseif $ca=="partner"}-->
    <a class="publish_button" href="list.php?clickid=15&mokuai=partner">查看信息</a>
<!--{elseif $ca=="idea"}-->
    <a class="publish_button" href="show.php?list=$newid&clickid=14">查看信息</a>
    <a href="published_idea.php">管理信息</a>
<!--{elseif $ca=="joblease"}-->
    <a class="publish_button" href="show.php?list=$newid&clickid=16">查看信息</a>
    <a href="list.php?clickid=16&mokuai=joblease">管理信息</a>
<!--{else}-->
    <a class="publish_button" <!--{if $ca=="1"}--> href="list.php?clickid=15&mokuai=partner"<!--{else}-->href="show.php?list=$newid&clickid=$clickid"<!--{/if}-->>查看信息</a>
    <!--{if $mokuai=="shop"}-->
    <a href="other.php?list=$newid&clickid=$clickid">管理信息</a>
    <!--{else}-->
    <a href="published_$mokuai.php?list=$newid&clickid=$clickid">管理信息</a>
    <!--{/if}-->
<!--{/if}-->
  </div>

</div>

</div>
  <!-- 这里是大框架的结束 -->
<!-- 这里是尾部 -->
<div class="publish_footer">
<center><a>©Bangbangdream.com</a></center>
</div>
</body>
</html>