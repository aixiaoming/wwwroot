<?php
include "function.php";

if ($_SESSION['userid']!="") {
$user=ruiqia_query_fetch("select * from user where id=". $_SESSION['userid'] ." ");
}

$law = ruiqia_query_fetchall("SELECT * from law WHERE description=1");




// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>