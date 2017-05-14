
<head>
	<link rel="stylesheet" type="text/css" href="/templates/default/style.css">

<script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<script src="/lib/waitMe.js"></script>
<link rel="stylesheet" type="text/css" href="/lib/waitMe.css">

<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
<script src='/lib/sweetalert.js'></script>
<link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>



<script src='/lib/ruiqia.js'></script>

</head>


<header>
	<div class="topbar">
	    <div>
			<span>$city['name']</span>
			<a href="area_change.php" class="city">[切换城市]</a>
			<!--{if $_SESSION['userid']==''}-->
			<div class="right">
			<a href="user_login.php"  class="index">登录 </a>
			<a href="user_reg.php">注册</a>
			</div>
			<!--{elseif $_SESSION['userid']!=''}-->
			<!--{eval $user=ruiqia_query_fetch("select * from user where id='".$_SESSION['userid']."'");}-->
			    
                <!--{if $user['administrator']==1}-->
					<div class="topright">  
					<span>$user['username']</span>
					<span class="ceo">(管理员)</span>
					<span><a href="user_profile.php" class="border">个人中心</a></span>
			        <span><a href="logout2.php?act=logout" id='logout'>退出</a></span>
					</div>
				<!--{elseif $user['administrator']==2}-->
				    <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5}-->
					    <div class="topright">
					    <span>$user['username']</span>
					    <span><a href="user_profile.php" class="border">个人中心</a></span>
			            <span><a href="logout2.php?act=logout" id='logout'>退出</a></span>
					    </div>
				    <!--{elseif $user['test']==1}-->
					    <div class="topright">
					    <span>$user['username']</span>
					    <img src="/templates/default/pc\images/xue.png" class="img">
					    <span><a href="user_profile.php" class="border">个人中心</a></span>
			            <span><a href="logout2.php?act=logout" id='logout'>退出</a></span>
					    </div>
				    <!--{elseif $user['test']==2}-->
					    <div class="topright">
					    <span>$user['username']</span> 
					    <img src="/templates/default/pc\images/yan.png" class="img">
					    <span><a href="user_profile.php" class="border">个人中心</a></span>
			            <span><a href="logout2.php?act=logout" id='logout'>退出</a></span>
					    </div>
				    <!--{elseif $user['test']==6}-->
					    <div class="topright">
					    <span>$user['username']</span> 
					    <i><b><span style="color:#ff0000;">vip</span></b></i>
					    <span><a href="user_profile.php" class="border">个人中心</a></span>
			            <span><a href="logout2.php?act=logout" id='logout'>退出</a></span>
					    </div>
        <!--{elseif $user['test']==8}-->
        <div class="topright">
          <span>$user['username']</span>
          <img src="/templates/default/pc\images/yan.png" class="img">
          <span><a href="user_profile.php" class="border">个人中心</a></span>
          <span><a href="logout2.php?act=logout" id='logout'>退出</a></span>
        </div>
				    <!--{/if}--> 
                <!--{/if}-->


       <!--{/if}-->

			
			
		
	</div>
</header>

