<?php
include "function.php";

is_admin_user ();

$type = trim ($_GET['type']);

if (empty($type)) {
  $type = 1;
}

$title = '个人会员';
$lastsql = 'type = 1';
switch ($type){
  case 1:$title = '个人会员';$lastsql = 'type = 1'; break;
  case 2:$title = '单位会员';$lastsql = 'type = 2'; break;
  case 3:$title = '315俱乐部会员';$lastsql = ' test = 1 and type = 1'; break;
  case 4:$title = '实名验证会员';$lastsql = ' test=2 and type=2 and vip=0'; break;
  case 5:$title = '企业vip会员';$lastsql = ' test=6 and type=2 and vip=1'; break;
  case 6:$title = '社会个人认证会员';$lastsql = ' test=8'; break;
}

$sql = 'SELECT * FROM user where ' . $lastsql;
$result = ruiqia_page ($sql,24,7,'page');

//初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
// $template->mobile = true;

// 解释皮肤
include $template->getfile(ruiqia_self());

?>