<?php
//修改密码
include 'function.php';

// 检查权限 
   is_right();

   // 如果已经登录  就可以重置密码
   
   $password = str_replace(' ','',$_POST['password']);//原密码
   $password1 =str_replace(' ','',$_POST['password1']);
   $password2 = str_replace(' ','',$_POST['password2']);

   //对原密码进行加密处理
   $password = check_password($password);

   //获取数据库中的原密码
   $user=ruiqia_query_fetch("select * from user where id='".$_SESSION['userid']."'");
   if ($password!=$user['password']) {
      echo '{"title":"原密码不正确","text":"","type":"warning"}';
      exit();
   }

 
    if($_POST['password1']=='')
        {
      echo '{"title":"密码为空","text":"","type":"warning"}';
      exit();
        }
      $password1 = check_password($password1);


    if($_POST['password2']=='')
        {
      echo '{"title":"再次输入密码为空","text":"","type":"warning"}';
      exit();
        }
      $password2 = check_password($password2);


    if($password1 != $password2)
       {
      echo '{"title":"两次输入密码不相等","text":"","type":"warning"}';
      exit();
       }


//插入新密码到数据库
   ruiqia_query("update user set password='$password1' where id='".$_SESSION['userid']."'");
    
  //毁灭session
  session_unset($_SESSION['userid']);

  
  
  echo '{"title":"修改成功","text":"","type":"success"}';
      exit();
   
   


?>

