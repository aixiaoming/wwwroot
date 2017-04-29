<?php
include "function.php";


is_right();

$user=ruiqia_query_fetch("select * from user where id='".$_SESSION['userid']."'");

if ($user['administrator']!=1) {
	ruiqia_die(您不是管理员);
}

$complain=ruiqia_page("SELECT * from complaints where state=1",3,7,'page');


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;



// 解释皮肤
include $template->getfile(ruiqia_self());
?>
