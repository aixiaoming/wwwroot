<html>
<head>
	<link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
	<script type="text/javascript"> 
	$(document).ready(function(){
	$(".click").click(function(){
	    $(".publish").slideToggle("slow");
	  });
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
	$(".click1").click(function(){
	    $(".publish1").slideToggle("slow");
	  });
	});
	</script>

   <style type="text/css">a.focus{color:#e96c1f!important;font-size: 14px;}</style>
</head>


	<div class="side">

		<div class="first">
		<span class="side_top"><b><a href="#">个人中心</a></b></span>
		</div>

		<ul id="ul">
		<li><a href="user_profile.php"> 个人资料</a></li>
		<li><a href="user_safe.php"> 安全设置</a></li>
		<li  class="click"><label>我的发布</label>
        <img src="/templates/default/pc\images/xia.png" class="publish">
        <img src="/templates/default/pc\images/shang.png" style="display:none;" class="publish"> 
		</li>
		<div class="publish" style="display:none;">
		<li  class="side_center"><a href="published_goods.php">校园二手</a></li>
		<li class="side_center"><a href="published_schoolnear.php">校园周边</a></li>
		<li class="side_center"><a href="published_active.php">校园活动</a></li>
		<li class="side_center"><a href="published_find_notice.php">失物招领</a></li>
		<li class="side_center"><a href="published_recruit.php">招聘应聘</a></li>
		<li class="side_center"><a href="published_parttime.php">兼职</a></li>
		<li class="side_center"><a href="published_intern.php">实习</a></li><li class="side_center"><a href="published_chuangye.php">创业项目</a></li>
		<!--{if $user['test']==1}-->
		<li class="side_center"><a href="published_idea.php">创意集市</a></li>
		<!--{/if}-->
		


		<!--{if $user['administrator']==1}-->
		
		<!--{/if}-->
		</div>
		<!--{if $user['administrator']==2}-->
		    <!--{if $user['type']==1}--> 
				 <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4}-->
				 <li><a href="user_checkrmb.php">315俱乐部</a></li>
         <li><a href="social.php">社会个人认证会员</a></li>
				 <li><a href="law_show.php">法援在线</a></li>
				 <li><a href="lawer.php">帮帮律师团</a></li>
				 <li><a href="teacher.php">帮辅导师团</a></li>
				 <li><a href="list.php?class=169&mokuai=active&hit=1&clickid=7">会员专属活动</a></li>
				 <li><a href="news.php">我的消息</a></li>
				 <!--{/if}-->
				 <!--{if $user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6 or $user['test']==8}-->
				 <li><a href="user_checkrmb.php">315俱乐部</a></li>
         <li><a href="social.php">社会个人认证会员</a></li>
				 <li><a href="time.php">会员期限</a></li>
				 <li><a href="law_show.php">法援在线</a></li>
				 <li><a href="lawer.php">帮帮律师团</a></li>
				 <li><a href="teacher.php">帮辅导师团</a></li>
				 <li><a href="list.php?class=169&mokuai=active&hit=1&clickid=7">会员专属活动</a></li>
				 <li><a href="news.php">我的消息</a></li>
				<!--{/if}-->
			<!--{/if}-->
			<!--{if $user['type']==2}--> 
                 <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4}-->
                
                 <li><a href="user_checkrmb.php">实名验证申请</a></li>
                 <li><a href="user_checkrmb.php"><a href="user_pay.php">企业VIP会员</a></li>
                 <li><a href="news.php">我的消息</a></li>
                 <!--{/if}-->
                 <!--{if $user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6 or $user['test']==8}-->
                 <li><a href="time.php">会员期限</a></li>
                 <li><a href="user_checkrmb.php">实名验证申请</a></li>
                 <li><a href="user_pay.php">企业VIP会员</a></li>
                 <li><a href="news.php">我的消息</a></li>
                <!--{/if}-->
            <!--{/if}-->
		<!--{elseif $user['administrator']==1}-->
		<li  class="click1"><label>管理员权限</label>
		<img src="/templates/default/pc\images/xia.png" class="publish1"  style="display:none;">
        <img src="/templates/default/pc\images/shang.png" class="publish1"></li>
		<div class="publish1">
		<li class="side_center"><a href="admin_return.php">审核申请</a></li>
		<li class="side_center"><a href="complain.php">投诉管理</a></li>
		<li class="side_center"><a href="vippay.php">会员管理</a></li>
		<li class="side_center"><a href="onlinelaw.php">法援在线</a></li>
		<li class="side_center"><a href="onlinelaw_org.php">法援组织</a></li>
		<li class="side_center"><a href="club_write.php">315俱乐部</a></li>
      <li class="side_center"><a href="social_write.php">社会个人认证会员</a></li>
		<li class="side_center"><a href="user_paywrite.php">企业VIP会员</a></li>
		<li class="side_center"><a href="vip_write.php">实名验证</a></li>
		<li class="side_center"><a href="lawer.php">帮帮律师团</a></li>
		<li class="side_center"><a href="teacher.php">帮辅导师团</a></li>
		<li class="side_center"><a href="other.php">其他管理</a></li>
        </div>
		<!--{/if}-->

		</ul>

	</div>
 <script type="text/javascript">
 	var pn = location.pathname;
 	
    var as = document.getElementById('ul').getElementsByTagName('a'),find=false;
	for (var i = 0, j = as.length; i < j; i++)
    if (as[i].href.indexOf(pn) != -1) { as[i].className = 'focus'; find = true; break; }
    //if (!find) as[0].className = 'focus';//如果未找到匹配的，需要设置哪个获取焦点可以修改这句
   </script>


</html>
