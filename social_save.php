
<?php


include "function.php";

//判断其是否为网站管理员

is_right();

$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$_SESSION['userid']."'");
if ($user['administrator']!=1) {
 ruiqia_die('网站管理员未登录');
}

//接收数据
$club=$_POST['club'];
$pay=$_POST['pay'];


//存入数据库

if ($pay==1) {
	ruiqia_query ("UPDATE club SET club='".$club."' where id=8");
  ruiqia_die('保存成功');
}


?>


