<?php


include "function.php";

//判断其是否为网站管理员

is_right();
$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$_SESSION['userid']."'");
if ($user['administrator']!=1) {
 ruiqia_die('网站管理员未登录');
}
$club=ruiqia_query_fetch("select * from club where id=3");
// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>

