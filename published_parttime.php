<!-- 已发布信息管理 -->
<?php
include "function.php";

//检查权限
is_right();



//查找发布在兼职下面的信息

$type=$_GET['type'];

if ($type=="admin") {
   $parttime=ruiqia_page("SELECT * from parttime ORDER BY time DESC",5,7,'page');
	
}
if ($type==''or $type==null) {
   $parttime=ruiqia_page("SELECT * from parttime WHERE userid='".$_SESSION['userid']."' ORDER BY time DESC",5,7,'page');
	
}


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;

// 解释皮肤
include $template->getfile(ruiqia_self());



?>