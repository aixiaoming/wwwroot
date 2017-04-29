<?php
include "function.php";
is_right();
$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$_SESSION['userid']."'");
if ($user['administrator']!=1) {
 ruiqia_die('网站管理员未登录');
}

$editid=$_POST['editid'];

$usermake=ruiqia_query_fetch("SELECT * from law WHERE id='".$editid."'");

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;


// 解释皮肤
include $template->getfile(ruiqia_self());

?>