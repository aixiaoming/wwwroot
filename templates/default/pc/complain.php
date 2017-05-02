<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
    <title>【投诉管理】- 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
	<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
	<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>


<!--{template user_header}-->

<div class="type_container">



<!-- 左侧导航菜单 -->
<!--{template user_side}-->
           
   
    
                       

<div class="complain">
  <span class="top_span">投诉管理</span>
     
<!--{if $complain==Array ( )}-->
 <div class="empty">暂时没有被投诉的信息哦</div>
<!--{elseif $complain!=Array ( )}-->  
<!--{loop $complain $key}-->
<div class="list">
	<div class="top">
		<label>信息号：</label><label>$key['id']</label>
	</div>
	<!--{eval $usertou=ruiqia_query_fetch("select * from user where id='".$key['plaintiff']."'");}-->
     <div class="left">
		<label>投诉人：</label><label>$usertou['username']</label><br>
		<label>邮箱：</label><label>$usertou['email']</label><br>
		<label>时间：</label><label>$key['time']</label><br>
		<label>原因：</label><div>$key['why']</div>
	</div>
	<div class="right">
	    <!--{if $key['formname']=='goods'}-->
        <!--{eval $why=ruiqia_query_fetch("select * from goods where id='".$key['defendant']."'");}-->
        <!--{/if}-->
        <!--{if $key['formname']=='active'}--> 
        <!--{eval $why=ruiqia_query_fetch("select * from active where id='".$key['defendant']."'");}-->
        <!--{/if}-->
        <!--{if $key['formname']=='intern'}--> 
        <!--{eval $why=ruiqia_query_fetch("select * from intern where id='".$key['defendant']."'");}-->
        <!--{/if}-->
        <!--{if $key['formname']=='parttime'}-->
        <!--{eval $why=ruiqia_query_fetch("select * from parttime where id='".$key['defendant']."'");}--> 
        <!--{/if}-->
        <!--{if $key['formname']=='recruit'}-->
        <!--{eval $why=ruiqia_query_fetch("select * from recruit where id='".$key['defendant']."'");}-->
        <!--{/if}-->
        <!--{if $key['formname']=='schoolnear'}-->
        <!--{eval $why=ruiqia_query_fetch("select * from schoolnear where id='".$key['defendant']."'");}-->
        <!--{/if}-->
        <!--{if $key['formname']=='find_notice'}-->
        <!--{eval $why=ruiqia_query_fetch("select * from find_notice where id='".$key['defendant']."'");}-->
        <!--{/if}-->
	
	<label>投诉内容：</label><br>
		<div class="rightlist">
		<!--{if $why['img1']==''}--> 
        <img src="/templates/default/pc\images/published.png"> 
        <!--{/if}-->
        <!--{if $why['img1']!=''}-->
        <img  src="$why['img1']">
        <!--{/if}-->
		<a target="_blank" href="show.php?list=$why['id']&clickid=$key['click']"><span>$why['title']</span></a><br>
	<!--{eval $user2=ruiqia_query_fetch("select * from user where id='".$why['userid']."'");}-->
		<label>发布者:</label><label>$user2['username']</label>
		<label>$why['time']</label><br>
		<label>邮箱：</label><label>$user2['email']</label>
		</div>
		<div class="bottom">
		<form class="form" method="post"  action="complain_return.php">
		    <input name="opinion" type="radio" value="disagree" /><label>驳回投诉</label>
		    <input name="opinion" type="radio" value="agree" /><label>删除信息</label>
		    <input name="id" type="hidden"  value="$key['id']">
		    <input name="goodsid" type="hidden"  value="$key['defendant']">
		    <input name="formname" type="hidden"  value="$key['formname']">
		    <input type="submit" name="submit" value="确定" class="submit"/>
		</form>
		</div>
	</div>
</div>
<!--{/loop}-->
$ruiqia_page
<!--{/if}-->

</div>


</div>
<!--{template user_footer}-->


</html>