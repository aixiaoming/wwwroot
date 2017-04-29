<?php
include "function.php";



$lawlaw=ruiqia_page("SELECT * from law WHERE description!=1" ,3,5,'page');



// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>