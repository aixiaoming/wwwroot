<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
   <!--{if $type==1}-->
    <title>【315会员简介】- 帮帮校园网</title>
    <!--{elseif $type==2}-->
    <title>【vip会员简介】- 帮帮校园网</title>
    <!--{/if}-->
    <link rel="stylesheet" type="text/css" href="$dir/user_style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
</head>


<!--{template user_header}-->

<div class="usercheckrmb_container">

<!-- 左侧导航菜单 -->
<!--{template user_side}-->

<!--{if $type==1}--> 
<div class="checkrmb_container">
    <span class="top_span">315俱乐部</span>
    <div class="bar">
        <label>315俱乐部简介</label>
    </div>
    <div class="textarea">$club['club']</div>
        
   
</div>
 <!--{elseif $type==2}-->
<div class="checkrmb_container">
    <span class="top_span">vip会员</span>
    <div class="bar">
        <label>vip会员简介</label>
    </div>
    <div class="textarea">$club['vip']</div>

    
</div>
<!--{/if}-->



</div>

<!--{template user_footer}-->


</html>









