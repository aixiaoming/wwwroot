<?php
include "function.php";


is_right();

$user=ruiqia_query_fetch("select * from user where id='".$_SESSION['userid']."'");


if ($user['administrator']==2) {
	if ($user['test']!=1) {
		ruiqia_die('您还不是全国大学生315俱乐部会员，请加入后获得帮辅！');
	}
}

$teacher=ruiqia_page("SELECT * from tutor  ORDER BY time DESC",4,7,'page');



// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>
