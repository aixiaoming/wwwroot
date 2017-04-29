<!-- 会员申请填写资料页面
付费用户可填写 -->

<?php
include 'function.php';
is_right();

if ($user['test']==1 or $user['test']==2 or $user['test']==6) {
  ruiqia_die('您已经是会员了');
}
if ($user['test']==3) {
  ruiqia_die('您的申请正在审核中，请耐心等待。');
}
if ($user['pay']!=1) {
  ruiqia_die('请先付费');	
}
// if ($user['test']==4) {
//   ruiqia_die('对不起，您的申请未通过审核','再次申请','user_check2.php');	
// }

// if ($user['pay']==0) {
// 	ruiqia_die('请先付费');
// }

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;


// 解释皮肤
include $template->getfile(ruiqia_self());
?>

