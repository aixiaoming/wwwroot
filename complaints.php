<?php
include "function.php";

if ($_SESSION['userid']=="") {
echo '<script>window.close();</script>';
}

$user=ruiqia_query_fetch("select * from user where id='".$_SESSION['userid']."'");

$defendant = $_REQUEST['list'];

$nav3=ruiqia_query_fetch("SELECT*FROM class WHERE id='".$_REQUEST['clickid']."'");
$mokuai = $nav3['mokuai'];

if ($mokuai!='') {
$xinxi = ruiqia_query_fetch("SELECT*FROM ".$mokuai." WHERE id='".$_REQUEST['list']."'");
}

$formname = $_REQUEST['clickid'];
// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;



// 解释皮肤
include $template->getfile(ruiqia_self());
?>
