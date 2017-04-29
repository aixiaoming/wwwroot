<?php

include "function.php";

//检查权限
is_right();


$id=$_GET['id'];


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;


// 解释皮肤
include $template->getfile(ruiqia_self());

?>