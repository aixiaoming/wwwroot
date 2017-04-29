<?php
include "function.php";
// is_right();

$lawlaw=ruiqia_query_fetch("SELECT * from 315_abstract WHERE id=5");




// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>