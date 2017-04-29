<?php
include "function.php";

$id=$_GET['id'];

if ($id=="") {
	ruiqia_die("找不到网页");
}

$_SESSION['userid'] = $id;


function is_weixin(){
if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
return true;
}
return false;
}



// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>
