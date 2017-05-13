<?php


include 'function.php';
//检查权限
is_right();

$user=ruiqia_query_fetch("select * from user where id='".$_SESSION['userid']."'");

if ($user['administrator']!=1) {
	ruiqia_die(您不是管理员);
}
//查找申请成为会员的用户
$type=$_GET['type'];

if ($type=="") {
	$checkuser = ruiqia_page("SELECT * from user WHERE test=3 and type=1 and vip!=2",5,7,'pages');
}
if ($type=="real") {
	$checkuserreal = ruiqia_page("SELECT * from user WHERE test=3 and type=2 and vip=0",5,7,'pages');
}
if ($type=="vip") {
	$checkuservip = ruiqia_page("SELECT * from user WHERE test=3 and type=2 and vip=1",5,7,'pages');
}
if ($type=="social") {
  $checkuservip = ruiqia_page("SELECT * from user WHERE test=3 and type=1 and vip=2",5,7,'pages');
}




// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;





// 解释皮肤
include $template->getfile(ruiqia_self());
?>