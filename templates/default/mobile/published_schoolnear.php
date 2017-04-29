<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
    <title>【校园周边-我的发布】- 帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="$dir/user_style.css">
</head>


<!--{template user_header}-->

<div class="container">



<div class="right_container">
    

    <table>
		<tr>
			<td><a href="/published_goods.php">校园二手</a></td>
			<td><a href="/published_schoolnear.php" class="type">校园周边</a></td>
			<td><a href="/published_active.php">校园活动</a></td>
            <!--{if $user['test']==1}-->
            <td><a href="/published_idea.php">创意集市</a></td>
            <!--{/if}-->
		</tr>
    </table>
			
	<table>
		<tr>
			<td><a href="/published_find_notice.php">失物招领</a></td>
			<td><a href="/published_recruit.php">招聘应聘</a></td>
			<td><a href="/published_parttime.php">兼职</a></td>
			<td><a href="/published_intern.php">实习</a></td>
		</tr>
	</table>
    
    <!--{if $user['administrator']==1}-->
        <div class="guanli">
        <!--{if $type=="" or $type==null}-->
        <table>
        	<tr>
        		<td><a href="published_schoolnear.php" class="type">管理员个人发布</a></td>
        		<td><a href="published_schoolnear.php?type=admin">网站总发布</a></td>
        	</tr>
        </table>
        <!--{/if}-->
        <!--{if $type=="admin"}-->
        <table>
        	<tr>
        		<td><a href="published_schoolnear.php">管理员个人发布</a></td>
        		<td><a href="published_schoolnear.php?type=admin" class="type">网站总发布</a></td>
        	</tr>
        </table>
        <!--{/if}-->
        </div>
    <!--{/if}-->

    <!--{if $schoolnear==Array ( )}-->
    <div class="empty">您还没有在校园周边发布过信息哦</div>
    <!--{elseif $schoolnear!=Array ( )}-->
    <!--{loop $schoolnear $key}-->
        <div class="first">
            <!-- <div class="second">
                <span>信息号:</span>
                <span>$key['id']</span>
            </div> -->
            <div class="third">
                <div class="img">
                <!--{if $key['img1']==''}--> 
                <img src="/templates/default/pc\images/publish.png"> 
                <!--{/if}-->
                <!--{if $key['img1']!=''}-->
                <img  src="$key['img1']">
                <!--{/if}-->
                </div>
                <div id="title">
                <div class="title">
                <a href="show.php?list=$key['id']&clickid=8"><span>$key['title']</span></a><br>
                </div> 
                <span>$key['time']</span><br>
                <div class="title">
                <!--{eval $city= substr($key['position'],-6);}-->
               <!--{eval $usercity=ruiqia_query_fetch("select * from area where id='".$city."'");}-->
                <!--{if $usercity['name']==''}-->
               <span>全国</span><span>-校园周边-</span><span>$key['class']</span>
               <!--{/if}-->

               <!--{if $usercity['name']!=''}-->
               <span>$usercity['name']</span><span>-校园周边-</span><span>$key['class']</span>
               <!--{/if}-->
                </div> 
                </div> 
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


<footer>
<label>© Bangbangdream.com</label>
</footer>

</div>



</html>
