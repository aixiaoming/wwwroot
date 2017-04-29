<?php
//修改资料界面
include "function.php";

//检查权限
is_right();

$user=ruiqia_query_fetch("select * from user where id=". $_SESSION['userid'] ." ");


//去掉空格
$username = str_replace(' ','',$_POST['username']);
$email = str_replace(' ','',$_POST['email']);
$school = str_replace(' ','',$_POST['school']);
$phone = str_replace(' ','',$_POST['phone']);
$qq = str_replace(' ','',$_POST['qq']);
$introduction=$_POST['introduction'];
$tel = str_replace(' ','',$_POST['tel']);
$address = str_replace(' ','',$_POST['address']);
$logo = str_replace(' ','',$_POST['logo']);


//检查数据
if ($user['type']==1) {
  if (!is_email($email))
  {
 
   echo '{"title":"电子邮件地址不正确","text":"","type":"warning"}';
      exit();
  }
// if (!is_phone($phone)) 
//   {
  
//     echo '{"title":"手机格式不正确","text":"","type":"warning"}';
//       exit();
//   }
// if (!is_number($qq)) {
   
//     echo '{"title":"qq格式不正确","text":"","type":"warning"}';
//       exit();
//   }
if ($user['type']==2) {
  if (!is_number($tel)) {

    echo '{"title":"座机格式不正确","text":"","type":"warning"}';
      exit();
  }
}



 ruiqia_query ("update user set username='$username',email='$email',school='$school',phone='$phone',qq='$qq',introduction='$introduction' ,tel='$tel',address='$address',logo='$logo'  where id=".$_SESSION['userid'] ." ");
 
  echo '{"title":"修改成功","text":"","type":"success"}';
      exit();

 } 




 if ($user['type']==2) {
   if (!is_email($email))
  {
    ruiqia_die("电子邮件地址不正确");
   
  }
// if (!is_phone($phone)) 
//   {
//   ruiqia_die("手机格式不正确");
    
//   }
// if (!is_number($qq)) {
//    ruiqia_die("qq格式不正确");
    
//   }
if ($user['type']==2) {
//   if (!is_number($tel)) {
// ruiqia_die("座机格式不正确");
    
//   }
}



 ruiqia_query ("update user set  username='$username',email='$email',school='$school',phone='$phone',qq='$qq',introduction='$introduction' ,tel='$tel',address='$address',logo='$logo'  where id=".$_SESSION['userid'] ." ");
 ruiqia_die("修改成功");
 }





?>