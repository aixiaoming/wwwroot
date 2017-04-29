<!-- 已发布信息管理 -->
<?php
include "function.php";

//检查权限
is_right();


// 查找发布在失物招领下面的信息
$type=$_GET['type'];

if ($type=="admin") {
	$find_notice = ruiqia_page("SELECT * from idea  ORDER BY time DESC",5,7,'page');
}
if ($type==''or $type==null) {
	$find_notice = ruiqia_page("SELECT * from idea WHERE userid='".$_SESSION['userid']."' ORDER BY time DESC",5,7,'page');

}
 

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;

// 解释皮肤
include $template->getfile(ruiqia_self());



	



?>