<?php 
include "function.php";


// 检查是否登录
is_right();


is_admin();

//检查是否有修改或删除资格
if ($_REQUEST['querytype']=="update") {
	$user = ruiqia_query_fetch("SELECT*FROM user WHERE id='".$_SESSION['userid']."'");
	if ($user['administrator']!=1) {
		ruiqia_die('您好！您没有权限编辑或删除');
	}
}
$check = ruiqia_query_fetch("SELECT*FROM incubation WHERE id=1");



// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;





// 解释皮肤
include $template->getfile(ruiqia_self());
?>