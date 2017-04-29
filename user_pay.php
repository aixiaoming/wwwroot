<?php
include "function.php";
//判断其是否为网站管理员

is_right();

// if ($user['vip']==1) {
// 	if ($user['test']==1 or $user['test']==6) {
// 	  ruiqia_die('您已经是会员了');
// 	}
// 	if ($user['test']==3) {
// 	  ruiqia_die('您的申请正在审核中，请耐心等待','首页','index.php');	
// 	}
// 	if ($user['test']==4) {
// 	  ruiqia_die('对不起，您的申请未通过审核','再次申请','user_check2.php');	
// 	}
// }



$club=ruiqia_query_fetch("select * from club where id=2");

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;





// 解释皮肤
include $template->getfile(ruiqia_self());
?>
