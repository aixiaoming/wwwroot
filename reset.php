
<?php
include 'function.php';
//点击邮箱找回密码链接后进入的界面
if (isset($_GET['id']))
  {

  $id = $_GET['id'];
  $token = $_GET['token'];
  $time = time();



  // 删除过期数据
  ruiqia_query("DELETE from user_find_pass WHERE time<$time");
  
  $user = ruiqia_query_fetch("SELECT * from user_find_pass WHERE user='$id' AND token='$token' AND time>$time");

  if(!$user)
  {
    ruiqia_die('链接已经过期！','返回登录页面','http://www.bangbangdream.com/');
  }

  $userid = $user['user'];
  // 是否有这个用户
  if(!$user = ruiqia_query_fetch("SELECT * from user WHERE id='$userid'"))
  {
    ruiqia_die('用户不存在！');
  }

//通过验证后就可以提交数据（新的密码）到reset_pass.php页面

}else
{
  ruiqia_die('没有参数！');
}



// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;

// 解释皮肤
include $template->getfile(ruiqia_self());

?>



