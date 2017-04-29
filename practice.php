<?php
include "function.php";





$practice=ruiqia_query_fetch("select * from incubation where id=1");

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
// $template->mobile = true;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>