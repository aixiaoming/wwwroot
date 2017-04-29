
<?php
include 'function.php';
//输入手机号后进入的界面
 
if ($_SESSION['mobile']=='') {
  ruiqia_die('没有这个页面');
}
$user=ruiqia_query_fetch("select * from user where loginm='".$_SESSION['mobile']."'");
if ($user['loginm']=='') {
  ruiqia_die('该手机号未注册');
}

$_SESSION['mobile']=='';

$time = time();


$userm = ruiqia_query_fetch("SELECT * from user_find_pass WHERE user='".$user['id']."' and time>$time");

if ($userm['id']=='') {
  ruiqia_die('该手机号并未找回密码或时间已过');
}

// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;

// 解释皮肤
include $template->getfile(ruiqia_self());

?>



