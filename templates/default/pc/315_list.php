<!DOCTYPE html>
<html>
<head>
	<title>【全国大学生315俱乐部】- 帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="$dir/user_style.css">
    <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="$dir/style.css">
    <script src="/lib/waitMe.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
    <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
    <script src='/lib/ruiqia.js'></script>
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>
<body>


<!--{template common_header}-->
<div class="lawshow">

<!--{template publish_header}-->

<ul class="nav1">
    <li><a  href="index.php">首页</a></li>
    <li><a rel="1" href="list.php?clickid=6&mokuai=goods">校园生活</a></li>
    <li><a rel="2" href="list.php?clickid=10&mokuai=parttime">实践实习</a></li>
    <li><a rel="3" href="list.php?clickid=13&mokuai=incubation">创业创新</a></li>
    <li><a href="law_show.php">法律帮助</a></li>
    <li><a rel="5" href="315_list.php" class="nav1_act_1">全国大学生315俱乐部</a></li>
</ul>

<ul class="nav2">
    <li><a  href="introduction_315.php" class="nav2_act_1">简介</a></li>
    <li><a  href="law_show.php">法援在线</a></li>
    <li><a  href="list.php?class=169&mokuai=active&hit=1&clickid=7">专属活动</a></li>
</ul>

</div>
<div class="linelaw">

<!--{if $lawlaw==Array ( )}-->
    <div class="empty">管理员还没有发布法援组织哦</div>
<!--{elseif $lawlaw!=Array ( )}-->

<div class="lawlaw">
<!--{loop $lawlaw $key}-->


           <div class="left">
           <!--{if $key['images']!=""}-->
           <img src="$key['images']" class="imgage">
           <!--{/if}-->
            $key['description']
            
            <!--{if $user['administrator']==1}-->
            <div class="lawthird">
                
                <form method="post" action="law_sql.php">
                <input name="id" type="hidden" value="$key['id']"/>
                <input name="type" type="hidden" value="del"/>
                <input type="submit" value="删除" class="submitlaw"/>
                </form>
                <form method="post" action="onlinelaw_orgmake.php">
                <input name="editid" type="hidden" value="$key['id']"/>
                <input type="submit" value="修改" class="submitlaw1" />
                </form>
            </div>
            <!--{/if}-->
$ruiqia_page
           </div>
<!--{/loop}-->

        <div class="right">
            <img src="/templates/default/pc\images/guanggao.png">
        </div>
</div>
<!--{/if}-->
</div>


<footer class="lawfooter">
<span>© Bangbangdream.com</span>
</footer>


</body>
</html>