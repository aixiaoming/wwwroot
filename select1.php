<?php
include "function.php";
is_right();


$nav1 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=6");
$nav2 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=10");
$nav3 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=11");
$nav4 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=12");
$nav5 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=7");
$nav6 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=8");
$nav8 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=171");




$user = ruiqia_query_fetch("SELECT*FROM user WHERE id=".$_SESSION['userid']);
if ($user['administrator']=="1" or $user['test']=="1") {
	$nav7 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=14");
}


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>