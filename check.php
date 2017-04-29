<?php
include 'function.php';
//检查权限
is_right();


$user=ruiqia_query_fetch("select * from user where id='". $_SESSION['userid'] ."' ");



//个人认证要提交的资料
if ($user['type']==1) {



  $name = $_POST['name'];
  $school = $_POST['school'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $qq = $_POST['qq'];
  $idcard = $_POST['idcard'];
  
  

  //检查数据
  if (!is_number($phone)) 
    {

      echo '{"title":"手机格式不正确","text":"","type":"warning"}';
      exit(); 
    }
  // if (!is_number($qq)) {

  //     echo '{"title":"qq格式不正确","text":"","type":"warning"}';
  //     exit(); 
  //   }
  // if (!is_card($idcard)) {

  //     echo '{"title":"身份证格式不正确","text":"","type":"warning"}';
  //     exit();
  //   }

 
//通过检查  将数据库中以上数据更新

  ruiqia_query ("update user set name='$name',school='$school',address='$address',phone='$phone',qq='$qq',idcard='$idcard',test=3 where id=".$_SESSION['userid'] ." ");
  
 
echo '{"title":"资料上传成功","text":"请等待网站管理员审核通过","type":"success"}';
      exit();
}else{

 
  //单位会员资料认证
 

  $name = $_POST['name'];//单位名称
  $introduction=$_POST['introduction'];
  $tel = $_POST['tel'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $license = $_POST['license'];
  $vip = $_POST['vip'];
  



  //检查过后插入数据库
  ruiqia_query ("update user set name='$name',introduction='$introduction',phone='$phone',tel='$tel',address='$address',license='$license',vip='$vip',test=3  where id=".$_SESSION['userid'] ." ");

ruiqia_die('资料上传成功,请等待网站管理员审核通过');
 
}
?>