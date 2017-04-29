<?php 
include "function.php";


// 检查是否登录
is_right();

$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$_SESSION['userid']."'");
if ($user['administrator']!=1) {
 ruiqia_die('网站管理员未登录');
}

$editid=$_POST['editid'];

$jianjie = ruiqia_query_fetch("SELECT*FROM 315_abstract WHERE id=5");

if ($_REQUEST['id']!="" and $_REQUEST['type']=="del") {

	if ($user['administrator']!=1) {
		ruiqia_die('您好！您没有权限编辑或删除');
	}
		$img = ruiqia_query_fetch("SELECT*FROM 315_abstract WHERE id='".$_REQUEST['id']."'");
		// unlink (".".$img['img1']);	

		ruiqia_query("DELETE FROM 315_abstract WHERE id='".$_REQUEST['id']."'");
			
        header('Location:315_abstract.php');
}





// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;





// 解释皮肤
include $template->getfile(ruiqia_self());
?>