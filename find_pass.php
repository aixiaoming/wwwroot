<?php
include 'function.php';


//接收发送的用户名及验证码
 $_REQUEST['captcha']=$_POST['captcha'];
 $find_username=str_replace(' ','',$_POST['find_username']);


//判断是否存在该用户名
$user=ruiqia_query_fetch("select * from user where logine='".$find_username."'");

if ($find_username!=$user['logine']) {

  echo '{"title":"该邮箱还没有注册","text":"","type":"warning"}';
      exit();
}



//判断验证码
if ($_REQUEST['captcha'] == '') {
//检查验证码

 echo '{"title":"没有输入验证码","text":"","type":"warning"}';
      exit();
}


if ($_REQUEST['captcha'] != $_SESSION['captcha']) {
//检查验证码

echo '{"title":"验证码错误","text":"","type":"warning"}';
      exit();
}



//通过验证，向用户邮箱发送激活链接


$time= time() + 900;

$token = md5(time() . "ruiqia");

// 删除之前激活链接
ruiqia_query("DELETE FROM user_find_pass WHERE user='" . $user['id'] . "'");

// 发送激活链接
ruiqia_query("INSERT INTO user_find_pass(user,time,token) values('" . $user['id'] . "','$time','$token')");


//用户名存在，向用户邮箱发送验证码
$sendtime = date('n月j日G时i分',time());
$deadline = date('n月j日G时i分',$time);
$info = "亲爱的<b>" . $user['username'] . "</b>：
<br/><br/>
你于" . $sendtime . "申请密码找回，请于" . $deadline . "之前<a href='http://www.bangbangdream.com/reset.php?id=" . $user['id'] . "&token=" . $token . "'><b>点击这里</b></a>重置密码！
<br/><br/>
也可以复制地址在浏览器中打开：http://www.bangbangdream.com/reset.php?id=" . $user['id'] . "&token=" . $token . "
<br/><br/><br/>
帮帮校园网
";



ruiqia_mail_i('帮帮校园网',$user['logine'],'密码重置链接',$info);



echo '{"title":"密码重置链接已发送到邮箱","text":"请在' . $deadline . '之前登录邮箱重置密码","type":"success"}';
      exit();

?>