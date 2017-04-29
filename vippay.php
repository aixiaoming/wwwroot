<?php
include "function.php";


is_right();

$user=ruiqia_query_fetch("select * from user where id='".$_SESSION['userid']."'");
if ($user['administrator']!=1) {
 ruiqia_die('网站管理员未登录');
}

$num1=ruiqia_query_num('SELECT * FROM user where type=1');
$num2=ruiqia_query_num('SELECT * FROM user where type=2');
$usernum=ruiqia_query_num('SELECT * FROM user where test=1 and type=1');
$realnum=ruiqia_query_num('SELECT * FROM user where test=2 and type=2 and vip=0');
$realvip=ruiqia_query_num('SELECT * FROM user where test=6 and type=2 and vip=1');


$uservip=ruiqia_page("select * from user where test=5 and vip=1",3,7,'page');


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;



// 解释皮肤
include $template->getfile(ruiqia_self());
?>
