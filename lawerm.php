<?php
include "function.php";




$user=ruiqia_query_fetch("select * from user where id='".$_SESSION['userid']."'");

$news=$_GET['news'];


$lawer=ruiqia_page("SELECT * from law_team  ORDER BY time DESC",3,7,'page');

$lawerm=ruiqia_page("SELECT * from law_team  ORDER BY time DESC",6,7,'page');

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;



// 解释皮肤
include $template->getfile(ruiqia_self());
?>
