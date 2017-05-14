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
  $email = $_POST['email'];
  $idcard = $_POST['idcard'];

  //检查数据
  if(!$name){
    echo '{"title":"姓名不能为空","text":"","type":"warning"}';
    exit();
  }
  if(!$school){
    echo '{"title":"在读大学不能为空","text":"","type":"warning"}';
    exit();
  }
  if(!$address){
    echo '{"title":"联系地址不能为空","text":"","type":"warning"}';
    exit();
  }
  if(!$phone){
    echo '{"title":"手机号不能为空","text":"","type":"warning"}';
    exit();
  }
  if(!$email){
    echo '{"title":"邮箱姓名不能为空","text":"","type":"warning"}';
    exit();
  }
  if(!$idcard){
    echo '{"title":"身份证件号不能为空","text":"","type":"warning"}';
    exit();
  }
  if (!is_number($phone)) 
    {

      echo '{"title":"手机格式不正确","text":"","type":"warning"}';
      exit(); 
    }

  if (!is_number($phone))
  {

    echo '{"title":"手机格式不正确","text":"","type":"warning"}';
    exit();
  }

  $filename = './data/idcard/'.$_SESSION['userid'].'.jpg';

  if(!file_exists($filename)){
    echo '{"title":"没有上传学生证或校园卡正面图片","text":"","type":"warning"}';
    exit();
  }

  $filename1 = './data/student/'.$_SESSION['userid'].'.jpg';
  if(!file_exists($filename1)){
    echo '{"title":"没有上传学生证或校园卡背面图片","text":"","type":"warning"}';
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

  ruiqia_query ("update user set name='$name',school='$school',address='$address',phone='$phone',email='$email',idcard='$idcard',test=3 where id=".$_SESSION['userid'] ." ");

 
echo '{"title":"资料上传成功","text":"请等待网站管理员审核通过","type":"success"}';
      exit();
}else{

  $name = $_POST['name'];//单位名称
  $introduction=$_POST['introduction'];
  $email=$_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $license = $_POST['license'];
  $idcard = $_POST['idcard'];
  $vip = $_POST['vip'];

  if(!$name || !$email || !$phone || !$address || !$license || !$idcard){
    ruiqia_die('内容填写不完整，请返回填写。');
  }
  //检查过后插入数据库
  ruiqia_query ("update user set name='$name',introduction='$introduction',phone='$phone',email='$email',address='$address',license='$license',vip='$vip',idcard='$idcard',test=3  where id=".$_SESSION['userid'] ." ");

ruiqia_die('资料上传成功,请等待网站管理员审核通过');
 
}
?>