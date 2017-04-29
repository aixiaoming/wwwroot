<?php
include "function.php";

// 检查是否登录
// is_right();


if ($_POST['submit2']) {
    $class = $_POST['class'];
    $name = $_POST['name'];
    $content = $_POST['content'];
    $aim = $_POST['aim'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $school = $_POST['school'];
    $yingye =  $_POST['yingye'];
    $area = $_POST['area'];
    if ($area=='0') {
     $city = $_SESSION['cityid'];  
     $province = ruiqia_query_fetch("SELECT * FROM area WHERE id='".$city."'");
     $province = $province['parentid'];
    }else{
     $city = ruiqia_query_fetch("SELECT * FROM area WHERE id='".$area."'");
     $city = $city['parentid'];is_a(object, class_name);
     $province = ruiqia_query_fetch("SELECT * FROM area WHERE id='".$city."'");
     $province = $province['parentid'];
    }
    if ($province!='0') {
        if ($city!='0') {
            if ($area!='0') {
               $position = "tr_0 tr_" . $province . " tr_" . $city . " tr_" . $area;
            }else{
               $position = "tr_0 tr_" . $province . " tr_" . $city; 
            }
        }else{
            $position = "tr_0 tr_" . $province;
        }
    }else{
       $position = ''; 
    }
    $linkphone = $_POST['linkphone'];

    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];
    $img4 = $_POST['img4'];
    $img5 = $_POST['img5'];
    $img6 = $_POST['img6'];
    $img7 = $_POST['img7'];
    $img8 = $_POST['img8'];
    $img9 = $_POST['img9'];
    $img10 = $_POST['img10'];


    // 删除图片
    if ($_POST['delnum']>0) {
       for ($q=0; $q <= $_POST['delnum']; $q++) { 
        unlink (".".$_POST['del'.$q]);  
       }
    }
 

    if ($title=="") {
        ruiqia_die('标题不能为空！');
    }



 




// *************************************************************************
// 通过检查                                                               //
// 上传数据 type=1 更新数据type=2 删除数据type=3                          //
// *************************************************************************


    if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************
            ruiqia_query("INSERT INTO shop(userid,class,name,province,city,area,position,yingye,school,title,description,linkphone,aim,content,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,temtime) values('".$_SESSION['userid']."','".$class."','".$name."','".$province."','".$city."','".$area."','".$position."','".$yingye."','".$school."','".$title."','".$description."','".$linkphone."','".$aim."','".$content."','".$img1."','".$img2."','".$img3."','".$img4."','".$img5."','".$img6."','".$img7."','".$img8."','".$img9."','".$img10."','".$temtime."')");
            unset($_SESSION['querytype']);

            $getID = ruiqia_query_fetch('SELECT*FROM shop WHERE userid="'.$_SESSION['userid'].'" and title="'.$title.'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&clickid=171');

        
    
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE shop SET class='".$class."',name='".$name."',province='".$province."',city='".$city."',area='".$area."',position='".$position."',yingye='".$yingye."',school='".$school."',title='".$title."',description='".$description."',linkphone='".$linkphone."',aim='".$aim."',content='".$content."',img1='".$img1."',img2='".$img2."',img3='".$img3."',img4='".$img4."',img5='".$img5."',img6='".$img6."',img7='".$img7."',img8='".$img8."',img9='".$img9."',img10='".$img10."' where id='".$_REQUEST['editid']."'");
            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&clickid=171');

    }

    ruiqia_die("操作数据失败");



}


?>