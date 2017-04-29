<!DOCTYPE html>
<html>
<head>
  <title>【发布成功】- 帮帮校园网</title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="\templates\default\mobile\css/style.css">
    <style type="text/css">
.footer {position: absolute; bottom:0;}
    </style>
</head>

<body>


<!-- 头部 -->
<!--{template mb_header}-->



<!-- 这里是头部 -->
<div class="select1_header">
  <a href="index.php">首页</a>
  <a> > </a>
  <a href="select1.php">编辑</a>
  <a> > </a>
  <a>发布成功</a>
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

<!-- 这里是尾部 -->
<center class="footer"><a>© Bangbangdream.com</a></center>

</body>
</html>