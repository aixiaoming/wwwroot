<?php
include "function.php";



// 检查是否登录
// is_right();



if ($_POST['submit2']) {
    $class = $_POST['class'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $idea_description = $_POST['idea_description'];
    $writer = $_POST['writer'];
    $writeqq = $_POST['writeqq'];   
    $writephone = $_POST['writephone']; 
    $writedescription = $_POST['writedescription'];

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

if ($title=="") {
    ruiqia_die("标题不能为空");
}


if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************


            ruiqia_query("INSERT INTO idea(userid,class,title,price,idea_description,writeqq,writephone,writedescription,writer,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,temtime) values('".$_SESSION['userid']."','".$class."','".$title."','".$price."','".$idea_description."','".$writeqq."','".$writephone."','".$writedescription."','".$writer."','".$img1."','".$img2."','".$img3."','".$img4."','".$img5."','".$img6."','".$img7."','".$img8."','".$img9."','".$img10."','".$temtime."')");
            unset($_SESSION['querytype']);

            $getID = ruiqia_query_fetch('SELECT*FROM idea WHERE userid="'.$_SESSION['userid'].'" and title="'.$title.'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&clickid=14&ca=idea');
    
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE idea SET class='".$class."',title='".$title."',price='".$price."',idea_description='".$idea_description."',writer='".$writer."',writeqq='".$writeqq."',writephone='".$writephone."',writedescription='".$writedescription."',img1='".$img1."',img2='".$img2."',img3='".$img3."',img4='".$img4."',img5='".$img5."',img6='".$img6."',img7='".$img7."',img8='".$img8."',img9='".$img9."',img10='".$img10."' where id='".$_REQUEST['editid']."'");

            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&clickid=14&ca=idea');

    }

    ruiqia_die("操作数据失败");




}





?>