<!DOCTYPE html>
<html>
<head>
	<title>【法援在线】- 帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
    <link rel="stylesheet" type="text/css" href="$dir/style.css">
    <script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="/lib/waitMe.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
    <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
    <!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
    <script src='/lib/ruiqia.js'></script>
    <script type="text/javascript">
    function disp_alert()
    {
    alert("只有全国大学生315俱乐部会员方可进行QQ在线交谈。")
    }
    function disp1_alert()
    {
    alert("请先登录")
    }
    </script>
    <style type="text/css">
   .searchtext {padding:0px; padding-left:10px!important; margin: 0px; width:445px!important; height:34px!important; border:#DD5500 solid 2px!important; border-radius:0 !important; outline:none!important;}
   .searchtext:focus{padding:0px; padding-left:10px!important; margin: 0px; width:445px!important; height:34px!important; border:#DD5500 solid 2px!important; border-radius:0 !important; outline:none!important;}
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
</ul>

<ul class="nav2">
    <li><a  href="315_abstract.php">简介</a></li>
    <li><a  href="law_show.php" class="nav2_act_1">法援在线</a></li>
    <li><a  href="list.php?class=169&mokuai=active&hit=1&clickid=7">专属活动</a></li>
</ul>

</div>
<div class="line">

<!--{loop $law $key}-->
<div class="lawfirst">

      
            <div class="lawsecond">
                <img src="$key['images']" onerror=this.src="/data/lawlogo/shili.png">
                <div>
                    <label>姓名:</label><span>$key['name']</span>
                    <br><label>院校:</label><span>$key['school']</span><br>
                    <!-- <label>学历:</label><span>$key['education']</span><br> -->
                    <label>格言:</label><div class="yan">$key['job']</div><br>

                <!--{if $_SESSION['userid']==''}-->
                <span><img src="/templates/default/pc\images/qq.png" alt="点击交流" onclick="disp1_alert()"></span><br>
                <script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=117879";s.parentNode.insertBefore(c,s);})();</script>
                <!--{/if}-->

                <!--{if $user['administrator']==1}-->
                <span><a target="blank" href="tencent://message/?uin=$key['lineqq']&amp;Site=帮帮校园网&amp;Menu=yes"><img src="/templates/default/pc\images/qq.png" alt="点击交流"></a></span>
                <script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=117879";s.parentNode.insertBefore(c,s);})();</script>
                
                <div class="lawthird">
                        <form method="post" action="onlinelaw_make.php">
                        <input name="editid" type="hidden" value="$key['id']"/>
                        <input type="submit" value="修改" class="submit1" />
                        </form>
                        <form method="post" action="law_sql.php">
                        <input name="id" type="hidden" value="$key['id']"/>
                        <input name="imgone" type="hidden" value="$key['images']"/>
                        <input name="type" type="hidden" value="del"/>
                        <input type="submit" value="删除" class="submit"/>
                        </form>
                </div><br>
                <!--{elseif $user['administrator']==2}-->
                    <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7 or $user['test']==2 or $user['test']==6}-->
                    <span><img src="/templates/default/pc\images/qq.png" alt="点击交流" onclick="disp_alert()"></span><br>
                    <script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=117879";s.parentNode.insertBefore(c,s);})();</script>
                    <!--{/if}-->
                    <!--{if $user['test']==1}-->
                    <span><a target="blank" href="tencent://message/?uin=$key['lineqq']&amp;Site=帮帮校园网&amp;Menu=yes"><img src="/templates/default/pc\images/qq.png" alt="点击交流"></a></span><br>
                    <script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=117879";s.parentNode.insertBefore(c,s);})();</script>

                    <!--{/if}-->  
                <!--{/if}-->
                </div>
            </div>
</div>       
<!--{/loop}-->
</div>



                    
                   


<footer class="lawfooter">
<span>© Bangbangdream.com</span>
</footer>


</body>
</html>