<?php

//接收管理员同意其成为会员的请求

include "function.php";

//判断其是否为网站管理员

is_right();
$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$_SESSION['userid']."'");
if ($user['administrator']!=1) {
 ruiqia_die('网站管理员未登录');
}


//确认管理员登陆后，接收管理员发送的信息
$userid=$_POST['userid']; //用户的id
$value=$_POST['opinion'];
$testtime = time()+3600*24*365;

$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$userid."'");


//判断是单位用户还是个人用户

if ($value=='agree') {

  ruiqia_query("UPDATE user SET test=6,testtime='".$testtime."' WHERE id='$userid'");

   header("Location: http://www.bangbangdream.com/vippay.php");
    exit;

}else{
    //验证失败
    ruiqia_query("UPDATE user SET test=0,vip=0 WHERE id='$userid'");
    header("Location: http://www.bangbangdream.com/vippay.php");
    exit;
}




?>