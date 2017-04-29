<!-- vip俱乐部简介 -->
<?php
include "function.php";
//判断其是否为网站管理员

is_right();


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>
