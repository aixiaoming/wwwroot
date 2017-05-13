<?php
include 'function.php';
//检查权限
is_right();


$user=ruiqia_query_fetch("select * from user where id='". $_SESSION['userid'] ."' ");



//个人认证要提交的资料
if ($user['type']==1 && $user['vip']==2) {

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $idcard = $_POST['idcard'];

  //检查数据
  if(!$name){
    echo '{"title":"姓名不能为空","text":"","type":"warning"}';
    exit();
  }
  if(!$address){
    echo '{"title":"联系地址不能为空","text":"","type":"warning"}';
    exit();
  }
  if(!$email){
    echo '{"title":"邮箱不能为空","text":"","type":"warning"}';
    exit();
  }
  if(!$idcard){
    echo '{"title":"身份证号不能为空","text":"","type":"warning"}';
    exit();
  }
  if (!is_number($phone)) 
    {
      echo '{"title":"手机格式不正确","text":"","type":"warning"}';
      exit(); 
    }

  $filename = './data/idcard/'.$_SESSION['userid'].'.jpg';

  if(!file_exists($filename)){
    echo '{"title":"没有上传身份证正面图片","text":"","type":"warning"}';
    exit();
  }

  $filename1 = './data/student/'.$_SESSION['userid'].'.jpg';
  if(!file_exists($filename1)){
    echo '{"title":"没有上传身份证反面图片","text":"","type":"warning"}';
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

  ruiqia_query ("update user set name='$name',address='$address',email='$email',phone='$phone',idcard='$idcard',test=3 where id=".$_SESSION['userid'] ." ");

  echo '{"title":"资料上传成功","text":"请等待网站管理员审核通过","type":"success"}';
      exit();
}
?>