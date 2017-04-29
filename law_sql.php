<?php
include "function.php";




is_right();

if ($user['administrator']!=1) {
	ruiqia_die('只有管理员才可以发布');
}


$name=str_replace(' ','',$_POST['name']);
$school=str_replace(' ','',$_POST['school']);
$education=str_replace(' ','',$_POST['education']);
$job=str_replace(' ','',$_POST['job']);
$lineqq=str_replace(' ','',$_POST['lineqq']);
$description=$_POST['description'];
$type=$_POST['type'];
$changeid=$_POST['id'];
$imgone=$_POST['imgone'];
$zhai=str_replace(' ','',$_POST['zhai']);
$img=substr($_POST['img'],0,28);

  
if ($description==1) {
  if ($type=="update") {
    ruiqia_query("insert into law(name,school,education,job,lineqq,description,images) values('".$name."','".$school."','".$education."','".$job."','".$lineqq."','".$description."','".$img."')");
   
    echo '{"title":"上传数据成功","text":"","type":"success"}';
       exit();
  }
    
  if ($type=="change") {
    ruiqia_query("UPDATE law SET name='".$name."',school='".$school."',education='".$education."',job='".$job."',lineqq='".$lineqq."',description='".$description."',images='".$img."' where id='".$changeid."'");
      echo '{"title":"修改成功","text":"","type":"success"}';
       exit();
  }

  if ($type=="del") {

   if ($imgone!="") {
     unlink (".".$imgone);
   }
    
    
    ruiqia_query("DELETE FROM law  where id='".$changeid."'");
   ruiqia_die("删除成功");
    
  }
}
if ($description!=1) {
  
  if ($type=="update") {
    ruiqia_query("insert into law(name,school,education,job,lineqq,description,images,zhai) values('".$name."','".$school."','".$education."','".$job."','".$lineqq."','".$description."','".$img."','".$zhai."')");
   header("Location: http://www.bangbangdream.com/law_lawshow.php");
  }
    
  if ($type=="change") {
    ruiqia_query("UPDATE law SET name='".$name."',school='".$school."',education='".$education."',job='".$job."',lineqq='".$lineqq."',description='".$description."',images='".$img."',zhai='".$zhai."' where id='".$changeid."'");
   header("Location: http://www.bangbangdream.com/law_lawshow.php");
  }

  if ($type=="del") {


   if ($imgone!="") {
     unlink (".".$imgone);
   }
    
    ruiqia_query("DELETE FROM law  where id='".$changeid."'");
   ruiqia_die("删除成功。");
    
  }
}






?>
