<?php
//找回密码
include 'function.php';



   $password1 = str_replace(' ','',$_REQUEST['password1']);
   $password2 = str_replace(' ','',$_REQUEST['password2']);
   $userid = $_POST['userid'];
   $captcha=$_POST['captcha'];
   
   if(!$userid)
   {
    echo '{"title":"用户名不存在","text":"","type":"warning"}';
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
    //判断验证码
    if ($captcha == '') {
    //检查验证码
   
      echo '{"title":"没有输入验证码","text":"","type":"warning"}';
      exit();
    }


    if ($captcha != $_SESSION['captcha']) {
    //检查验证码
  
     echo '{"title":"验证码错误","text":"","type":"warning"}';
      exit();
    }



   //插入新密码到数据库
   ruiqia_query("UPDATE user SET password='$password1' WHERE id='$userid'");

   // 删除找回密码的记录
   ruiqia_query("DELETE from user_find_pass WHERE user='$userid'");


    
     echo '{"title":"修改成功","text":"","type":"success"}';
      exit();




?>