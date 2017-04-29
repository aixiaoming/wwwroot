
<?php
include "function.php";


is_right();

$user=ruiqia_query_fetch("select * from user where id='".$_SESSION['userid']."'");
if ($user['administrator']==2) {
	if ($user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5) {
		ruiqia_die('您还不是全国大学生315俱乐部会员，请加入后获得帮助！');
	}
}

$id=$_GET['id'];

$key=ruiqia_query_fetch("select * from tutor where id='".$id."'");

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;



// 解释皮肤
include $template->getfile(ruiqia_self());
