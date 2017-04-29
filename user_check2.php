<?php
include 'function.php';

is_right();

if ($user['vip']!=1 or $user['test']!=4) {
  ruiqia_die('找不到网页');
}


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;



// 解释皮肤
include $template->getfile(ruiqia_self());
?>

