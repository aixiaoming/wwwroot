<?php
include "function.php";


is_right();

$userbei=ruiqia_query_fetchall("select * from complaints where beiid='".$_SESSION['userid']."'");
$usertou=ruiqia_query_fetchall("select * from complaints where plaintiff='".$_SESSION['userid']."'");

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;



// 解释皮肤
include $template->getfile(ruiqia_self());
?>
