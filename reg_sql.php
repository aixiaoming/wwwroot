<?php


include "function.php";
 

//接收注册信息页面


$value1=$_POST['type1'];
$value2=$_POST['type2'];
$password1 = str_replace(' ','',$_POST['password1']);
$password2 = str_replace(' ','',$_POST['password2']);
$password3 = str_replace(' ','',$_POST['password3']);
$password4 = str_replace(' ','',$_POST['password4']);
$email = str_replace(' ','',$_POST['email']);
$mobile = str_replace(' ','',$_POST['mobile']);
$agreement1 = str_replace(' ','',$_POST['agreement1']);
$agreement2 = str_replace(' ','',$_POST['agreement2']);
$captcha1=$_POST['captcha1'];
$captcha2=$_POST['mobile_code'];


//检查数据



  if ($email=='' and $mobile=='') {
   echo '{"title":"邮箱/手机为空","text":"","type":"warning"}';
            exit();
  }
// 手机注册
if ($email=='') {

    if ($value2=='') {
   
    echo '{"title":"请选择个人或单位","text":"","type":"warning"}';
        exit();
     }
      $username1=ruiqia_query_fetch("select * from user where loginm='".$mobile."'");

      if ($username1['loginm']!='') {
      echo '{"title":"该手机号已被注册","text":"","type":"warning"}';
          exit();
      }
      if($_POST['mobile']!=$_SESSION['mobile'] or $captcha2!=$_SESSION['mobile_code'] or empty($mobile) or empty($captcha2)){
        echo '{"title":"手机验证码输入错误","text":"","type":"warning"}';
        exit();
      }
      if($_POST['password3']=='')
        {
        echo '{"title":"密码不能为空","text":"","type":"warning"}';
          exit();
        }
      $password3 = check_password($password3);


    if($_POST['password4']=='')
        {
          
          echo '{"title":"再次输入密码为空","text":"","type":"warning"}';
          exit();
        }
      $password4 = check_password($password4);


    if($password3 != $password4)
       {

      echo '{"title":"两次输入密码不相等","text":"","type":"warning"}';
          exit();
       }
       if ($agreement2=='') {
      echo '{"title":"请同意帮帮校园网使用协议","text":"","type":"warning"}';
                exit();
      }
    //通过检查,插入数据库
    ruiqia_query("insert into user(username,password,loginm,phone,type) values('".$mobile."','".$password4."','".$mobile."','".$mobile."','".$value2."')");
     $_SESSION['mobile'] = '';
    $_SESSION['mobile_code'] = '';

    echo '{"title":"注册成功","text":"即将返回登录页面","type":"success"}';
   
          exit();
}


// 邮箱注册
if ($mobile=='') {
    
    if ($value1=='') {
     
      echo '{"title":"请选择个人或单位","text":"","type":"warning"}';
          exit();
       }

    if (!is_email($email))
    {

     echo '{"title":"电子邮件地址不正确","text":"","type":"warning"}';
        exit();
    }

    $username1=ruiqia_query_fetch("select * from user where logine='".$email."'");

   
    if ($username1['logine']!='') {
    echo '{"title":"该邮箱已被注册","text":"","type":"warning"}';
        exit();
    }
    
    if($_POST['password1']=='')
        {
       
          echo '{"title":"密码不能为空","text":"","type":"warning"}';
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
    if ($captcha1 == '') {
    //检查验证码
     
     echo '{"title":"没有输入验证码","text":"","type":"warning"}';
          exit();
    }


    if ($captcha1!= $_SESSION['captcha']) {
    //检查验证码

    echo '{"title":"验证码错误","text":"","type":"warning"}';
          exit();
    }
    if ($agreement1=='') {
      echo '{"title":"请同意帮帮校园网使用协议","text":"","type":"warning"}';
                exit();
      }

       //通过检查,插入数据库


     ruiqia_query("insert into user(username,password,logine,email,type) values('".$email."','".$password2."','".$email."','".$email."','".$value1."')");


    echo '{"title":"注册成功","text":"即将返回登录页面","type":"success"}';
          exit();
}













?>

