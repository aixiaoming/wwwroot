<?php


// include 'D:\wwwroot\bangbangdream\wwwroot\ruiqia.php';

include $_SERVER['DOCUMENT_ROOT'] . '/ruiqia.php';


// ruiqia_die('正在修改');

// 连接数据库
ruiqia_db('mysql','localhost','bangbangdream','root','818903ai');
// 启动mysql操作session
ruiqia_session(3600*30*24);








// 看看是否设置了城市，没有的话定位到北京
if(!$_SESSION['cityid'])
{
  $_SESSION['cityid']= 110100;
}
$city= ruiqia_query_fetch("SELECT * FROM area WHERE id=" . $_SESSION['cityid'] );



$city_area = ruiqia_query_fetchall("SELECT * FROM area WHERE parentid=" . $_SESSION['cityid'] );


// 记忆区域
$area=$_GET['area'];

if($area!=null AND ruiqia_noempty("SELECT * FROM area WHERE id=$area"))
{
  $_SESSION['areaid'] = $area;
  
}

if($area=='all')
{
    $_SESSION['areaid'] = '';
}


// 看看是否记忆了区域，没有的话清空
if(!$_SESSION['areaid'])
{
  $_SESSION['areaid']= '';
}else
{
  $area = ruiqia_query_fetch("SELECT * FROM area WHERE id=" . $_SESSION['areaid']."");
}



// 发送邮件
function ruiqia_mail_i($sender,$email,$title,$content)
{
   ruiqia_mail($sender,'smtp.bangbangdream.com','mail@bangbangdream.com','LHLno18045', $email ,$title,$content); 
  
}



// 检察权限
function is_right()
{

  if(empty($_SESSION['userid']))
  { 
    ruiqia_die('对不起，您还没有登录','返回登录界面','user_login.php');
    
    exit();


  }else
  {
              
              global $user;
              if (!$user=ruiqia_query_fetch("SELECT * FROM user WHERE id=" . $_SESSION['userid'] . "")) {
                 session_destroy();
                 header("location:/index.php");
                 
                 exit();
                }
    return true;
  }

}






/*************************************************************赵帝写的函数---------开始**************/

// 提取数据
function ruiqia_c()
{
      $user=ruiqia_query_fetch("SELECT * from user where id=" . $_SESSION['userid'] . "");
      return $user;
}



//网站扣费
function eatmoney()
{
  // if ($_POST['years']<=0) {
  //   ruiqia_die('年数不能为0及负数');
  // }
  $RMB = ruiqia_query_fetch("SELECT * from user where id='".$_SESSION['userid']."'");
  $pay = 10;
  $RMB = $RMB['RMB']-$pay;
  if ($RMB<0) {
    ruiqia_die("余额不足，请及时充值！","返回首页","http:site.php");
  }
  ruiqia_query("UPDATE user set RMB=".$RMB." where id=".$_SESSION['userid']."");
  ruiqia_query('UPDATE site set run=1 WHERE id = '. $_GET['siteid'] .'');
  ruiqia_die('付款成功！',"返回","http:site.php");
}




//访问次数函数
function hits()
{
  $goods=ruiqia_query_fetch("SELECT*FROM goods where userid=0");
  $goods['hits']=$goods['hits']+1;
  ruiqia_query("UPDATE goods set hits='".$goods['hits']."' where userid=0");
}



//删除文件夹及其所有文件函数
function deldir($dir) {
  //先删除目录下的文件：
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
 
  closedir($dh);
  //删除当前文件夹：
  if(rmdir($dir)) {
    return true;
  } else {
    return false;
  }
}





/*调用图片的函数*/

function imgup($imgurl,$imgname){

    include "img_query.php";

}




// 自定义函数，试用goods等循环输出图片其中获得的参数为后台的check数据
function loopimg($check){
  $num=0;
  for ($i=0; $i <=10 ; $i++) { 
    if ($check['img'.$i]!="") {
     $num=$num+1; 
     echo "<div class='delfloor' id='delfloor".$i."'><img src='".$check['img'.$i]."' style='height:125px !important; width:125px !important; margin-right:10px; display:block;'><input name='img".$i."' type='hidden' value='".$check['img'.$i]."'><a id='delimgurl' rel='".$i."' onclick=\"delimg($(this).attr('rel'),'".$check['img'.$i]."')\">删除</a></div>";
    }
  }

echo '<a id="imgnum" rel="'.$num.'" style="display:none;"></a>';
}



function loopimgmb($check){
  $num=0;
  for ($i=0; $i <=10 ; $i++) { 
    if ($check['img'.$i]!="") {
     $num=$num+1; 
     echo "<div class='delfloor' id='delfloor".$i."'><img src='".$check['img'.$i]."' style='height:80px !important; width:80px !important; display:block;'><input name='img".$i."' type='hidden' value='".$check['img'.$i]."'><a id='delimgurl' rel='".$i."' onclick=\"delimg($(this).attr('rel'),'".$check['img'.$i]."')\">删除</a></div>";
    }
  }
echo '<a id="imgnum" rel="'.$num.'" style="display:none;"></a>';
}



function loopimg1($check){
  for ($i=0; $i <=10 ; $i++) { 
    if ($check['img'.$i]!="") {
     echo "</br><img src='".$check['img'.$i]."' style='max-height:850px !important; max-width:850px !important; margin-right:10px;'><input name='img".$i."' type='hidden' value='".$check['img'.$i]."'>";
    }
  }
}

function loopimg2($check){
  for ($i=0; $i <=4 ; $i++) { 
    if ($check['img'.$i]!="") {
     echo "<img src='".$check['img'.$i]."' onclick='changeurl(\"".$check['img'.$i]."\")' style=' border:#DADBDF solid 1px; height:47px !important; width:65px !important; margin:15px 5px; float:left;'>";
    }
  }
}

function loopimg3($check){
  $num = 0;
  for ($i=0; $i <=10 ; $i++) { 
    if ($check['img'.$i]!="") {
     echo "<li><img src='".$check['img'.$i]."'></li>";
     $num++;
    }
  }
  if ($num==0) {
    echo "<li><img src='/data/userface/headmb.gif'></li>";
  }
}
// 这个是movefocus的切图
function loopimg5($check){
  $num = 0;
  for ($i=0; $i <=10 ; $i++) { 
    if ($check['img'.$i]!="") {
     echo "<li><a onclick='return false;'><img src='".$check['img'.$i]."'></a></li>";
     $num++;
    }
  }
  if ($num==0) {
    echo "<li><a onclick='return false;'>img src='/data/userface/headmb.gif'></a></li>";
  }
}

function loopimg4($check){
  for ($i=2; $i <=10 ; $i++) { 
    if ($check['img'.$i]!="") {
     echo "<li><i class='arr2'></i><img src='".$check['img'.$i]."'></li>";
    }
  }

} 






// 判断是否是管理员
// 
// 
function is_admin(){
  $admin2=ruiqia_query_column("SELECT administrator FROM user WHERE id='".$_SESSION['userid']."'"); 
  if ($admin2!="1") {
    ruiqia_die("您没有发布权限！");
  }
}





// ************************************************************赵帝写的函数---------结束************* //
?>

