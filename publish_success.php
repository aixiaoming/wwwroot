
<?php
include "function.php";

$ca = $_REQUEST['ca'];
$newid = $_REQUEST['newid'];
$mokuai=ruiqia_query_column("SELECT mokuai FROM class WHERE id='".$_REQUEST['clickid']."'");
$clickid = $_REQUEST['clickid'];






// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>