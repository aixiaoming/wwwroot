<!DOCTYPE html>
<html>
<head>
    <title>详情页 -【帮帮校园网】</title>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="\templates\default\mobile\css/front.css">
    <link rel="stylesheet" type="text/css" href="\templates\default\mobile\css/style.css">
<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/jquery.form.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
</head>
<body>

<!--{if $mokuai=="shop"}-->
<!-- 创习小店 -->
<!--{template show_shop}-->
<!--{/if}-->

<!--{if $nav2=='2'}-->
<!-- 校园生活 -->


<!--{if $mokuai=="goods"}-->
<!-- 校园二手 -->
<!--{template show_school_goods}-->
<!--{/if}-->


<!--{if $mokuai=="active"}-->
<!-- 校园活动 -->
<!--{template show_school_active}-->
<!--{/if}-->

<!--{if $mokuai=="schoolnear"}-->
<!-- 校园周边 -->
<!--{template show_school_schoolnear}-->
<!--{/if}-->

<!--{if $mokuai=="find_notice"}-->
<!-- 失物招领 -->
<!--{template show_school_find_notice}-->
<!--{/if}-->


<!--{elseif $nav2=='3'}-->
<!-- 实践实习 -->

<!--{if $mokuai=="parttime"}-->
<!-- 兼职 -->
<!--{template show_job_parttime}-->
<!--{/if}-->

<!--{if $mokuai=="recruit"}-->
<!-- 招聘 -->
<!--{template show_job_recruit}-->
<!--{/if}-->

<!--{if $mokuai=="intern"}-->
<!-- 实习 -->
<!--{template show_job_intern}-->
<!--{/if}-->


<!--{elseif $nav2=='4'}-->
<!-- 创业创新 -->

<!--{template show_create}-->

<!--{/if}-->



<!-- 发布按钮 -->
<a class="select1_btn" href="select1.php">发布</a>
<!-- 这里是尾部 -->
<center class="footer"><a>© Bangbangdream.com</a></center>
</body>
</html>