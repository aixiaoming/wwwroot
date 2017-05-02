<html>
<head>
    <title>【校园周边-我的发布】- 帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
    <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>


<!--{template user_header}-->

<div class="container">

<!-- 左侧导航菜单 -->
<!--{template user_side1}-->


<div class="right_container">
    <span class="top_span">最近发布信息-校园周边</span>
    
    <!--{if $user['administrator']==1}-->
        <div class="guanli">
        <!--{if $type=="" or $type==null}-->
            <a href="published_schoolnear.php" class="type">管理员个人发布</a>
            <a href="published_schoolnear.php?type=admin">　　网站总发布</a>
        <!--{/if}-->
        <!--{if $type=="admin"}-->
            <a href="published_schoolnear.php">管理员个人发布</a>
            <a href="published_schoolnear.php?type=admin" class="type">　　网站总发布</a>
        <!--{/if}-->
        </div>
    <!--{/if}-->

    <!--{if $schoolnear==Array ( )}-->
    <div class="empty">您还没有在校园周边发布过信息哦</div>
    <!--{elseif $schoolnear!=Array ( )}-->
    <!--{loop $schoolnear $key}-->
        <div class="first">
            <div class="second">
                <span>信息号:</span>
                <span>$key['id']</span>
            </div>
            <div class="third">
                <div class="img">
                <!--{if $key['img1']==''}--> 
                <img src="/templates/default/pc\images/published.png"> 
                <!--{/if}-->
                <!--{if $key['img1']!=''}-->
                <img  src="$key['img1']">
                <!--{/if}-->
                </div>
                <div id="title">
                <a href="show.php?list=$key['id']&clickid=8"><span class="title">$key['title']</span></a><br>
                </div>
                <div class="time">
                   <span>$key['time']</span><br>
                </div>                
                <!--{eval $city= substr($key['position'],-6);}-->
               <!--{eval $usercity=ruiqia_query_fetch("select * from area where id='".$city."'");}-->

               <!--{if $usercity['name']==''}-->
               <span>全国</span><span>-校园周边-</span><span>$key['class']</span>
               <!--{/if}-->

               <!--{if $usercity['name']!=''}-->
               <span>$usercity['name']</span><span>-校园周边-</span><span>$key['class']</span>
               <!--{/if}-->
                
            </div>
            <div class="four">
                <form method="post" action="schoolnear_edit.php?querytype=update">
                <input name="editid" type="hidden" value="$key['id']"/>
                <input type="submit" value="修改" />
                </form>
                <form method="post" action="schoolnear_edit.php?querytype=delete">
                <input name="editid" type="hidden" value="$key['id']"/>
                <input type="submit" value="删除"/>
                </form>
            </div>
        </div>
    <!--{/loop}-->
    $ruiqia_page
    <!--{/if}-->
    
</div>

</div>

<!--{template user_footer}-->


</html>
