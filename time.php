<?php


include "function.php";

//判断其是否为网站管理员

is_right();
$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$_SESSION['userid']."'");

if ($user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6) {
	$date = date('Y-m-d',$user['testtime']);
}else{
	ruiqia_die('您还不是会员');
}

if ($user['administrator']==2) {

		if ($user['test']==1 or $user['test']==2 or $user['test']==6) {
			if (time()>$user['testtime']) {
			 ruiqia_query("UPDATE user SET test=5,pay=0 where id='".$user['id']."'");
		    }
		}	
}


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;





// 解释皮肤
include $template->getfile(ruiqia_self());
?>