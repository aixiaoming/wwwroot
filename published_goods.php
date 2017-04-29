<?php
include "function.php";

//检查权限
is_right();


// 查找发布在校园二手下面的信息
// $goods=ruiqia_query_fetchall("select * from goods where userid='".$_SESSION['userid']."' ORDER BY time DESC");
$type=$_GET['type'];

if ($type=="admin") {
	$goods = ruiqia_page("SELECT * from goods  ORDER BY time DESC",5,7,'page');
}
if ($type==''or $type==null) {
	$goods = ruiqia_page("SELECT * from goods WHERE userid='".$_SESSION['userid']."' ORDER BY time DESC",5,7,'page');
}
 

 


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;

// 解释皮肤
include $template->getfile(ruiqia_self());



	



?>