<?php
include "function.php";



// 检查是否登录
// is_right();



if ($_POST['submit2']) {

    $rmb = $_POST['rmb'];
    $area = $_POST['area'];
    $address = $_POST['address'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $linkman = $_POST['linkman'];
    $linkqq = $_POST['linkqq'];
    $linkphone = $_POST['linkphone'];
    $begintime = $_POST['begintime']; 
    $lasttime = $_POST['lasttime']; 
    $people = $_POST['people'];
 

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

// *************************************************************************
// 通过检查                                                               //
// 上传数据 type=1 更新数据type=2 删除数据type=3                          //
// *************************************************************************

    if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************
            ruiqia_query("INSERT INTO joblease(rmb,area,address,title,description,linkman,linkqq,linkphone,begintime,lasttime,people,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,temtime) values('".$rmb."','".$area."','".$address."','".$title."','".$description."','".$linkman."','".$linkqq."','".$linkphone."','".$begintime."','".$lasttime."','".$people."','".$img1."','".$img2."','".$img3."','".$img4."','".$img5."','".$img6."','".$img7."','".$img8."','".$img9."','".$img10."','".$temtime."')");
            unset($_SESSION['querytype']);
            $getID = ruiqia_query_fetch('SELECT*FROM joblease WHERE title="'.$title.'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&clickid=16&ca=joblease');

    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE joblease SET rmb='".$rmb."',area='".$area."',address='".$address."',title='".$title."',description='".$description."',linkman='".$linkman."',linkqq='".$linkqq."',linkphone='".$linkphone."',begintime='".$begintime."',lasttime='".$lasttime."',people='".$people."',img1='".$img1."',img2='".$img2."',img3='".$img3."',img4='".$img4."',img5='".$img5."',img6='".$img6."',img7='".$img7."',img8='".$img8."',img9='".$img9."',img10='".$img10."' where id='".$_REQUEST['editid']."'");
            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&clickid=16&ca=joblease');

    }

    ruiqia_die("操作数据失败");





}




?>