
<?php
include 'function.php';
//输入手机号找回密码链接后进入的界面

$mobile = str_replace(' ','',$_POST['mobile']);
$captcha=$_POST['mobile_code'];

$user=ruiqia_query_fetch("select * from user where loginm='".$mobile."'");

if ($mobile!=$user['loginm']) {

  echo '{"title":"该手机没有注册","text":"","type":"warning"}';
      exit();
}

if($_POST['mobile']!=$_SESSION['mobile'] or $captcha!=$_SESSION['mobile_code'] or empty($mobile) or empty($captcha)){
        echo '{"title":"手机验证码输入错误","text":"","type":"warning"}';
        exit();
 }

//通过验证，向数据库插入信息


$time= time() + 900;

$token = md5(time() . "ruiqia");

// 删除之前激活链接
ruiqia_query("DELETE FROM user_find_pass WHERE user='" . $user['id'] . "'");

// 发送激活链接
ruiqia_query("INSERT INTO user_find_pass(user,time,token) values('" . $user['id'] . "','$time','$token')");

 echo '{"title":"成功","text":"即将进入重置页面","type":"success"}';
  
    $_SESSION['mobile_code'] = '';
          exit();

?>



