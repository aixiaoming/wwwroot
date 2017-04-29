<!DOCTYPE html>
<html>
<head>
	<title>【全国大学生315俱乐部】- 帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="$dir/user_style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="$dir/style.css">
    <script src="/lib/waitMe.js"></script>
    <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
    <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
   <!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
    <script src='/lib/ruiqia.js'></script>
    <style type="text/css">
.searchtext {padding:0px; padding-left:10px!important; margin: 0px; width:445px!important; height:34px!important; border:#DD5500 solid 2px!important; border-radius:0 !important; outline:none!important;}
.searchtext:focus {padding:0px; padding-left:10px!important; margin: 0px; width:445px!important; height:34px!important; border:#DD5500 solid 2px!important; border-radius:0 !important; outline:none!important;}
p {margin-top:5px !important; margin-bottom:5px !important;}
</style>
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
    <li><a href="law_lawshow.php">法律帮助</a></li>
    <li><a rel="5" href="315_abstract.php" class="nav1_act_1">全国大学生315俱乐部</a></li>
    <li><a class="nav1_act_shop" rel="6" href="list.php?clickid=171&mokuai=shop">创习小店</a></li>
    <li><a rel="7" href="bangfu.php?mokuai=bangfu">创业帮扶</a></li>
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

           <div class="left111">

            $lawlaw['description']
            <!--{if $user['administrator']==2}-->
                <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4}-->
                    <!--{if $user['pay']==0}-->
                    <a href="user_checkrmb.php" class="incubation_button" style="font-size:15px !important;">申请会员</a>
                    <!--{/if}-->
                    <!--{if $user['pay']==1}-->
                    <a href="user_check.php" class="incubation_button" style="font-size:15px !important;">填写资料</a>
                    <!--{/if}-->
                <!--{/if}-->
            <!--{/if}-->

            <!--{if $user['administrator']==1}-->
            <div class="lawthird">
                

                <form method="post" action="315_abstract_edit.php">
                <input name="editid" type="hidden" value="$lawlaw['id']"/>
                <input type="submit" name="submit" value="修改" class="submitlaw1" />
                </form>
            </div>
            <!--{/if}-->
           </div>

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