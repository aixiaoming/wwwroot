<?php
include "function.php";



// 检查是否登录
// is_right();



if ($_POST['submit2']) {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $qq = $_POST['qq'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $word = $_POST['word'];

    $img1 = $_POST['img1'];

// *************************************************************************
// 通过检查                                                               //
// 上传数据 type=1 更新数据type=2 删除数据type=3                          //
// *************************************************************************




if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************


            ruiqia_query("INSERT INTO tutor(userid,name,position,qq,email,company,word,logoimg,temtime) values('".$_SESSION['userid']."','".$name."','".$position."','".$qq."','".$email."','".$company."','".$word."','".$img1."','".$temtime."')");
            unset($_SESSION['querytype']);
            $getID = ruiqia_query_fetch('SELECT*FROM tutor WHERE userid="'.$_SESSION['userid'].'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&ca=3');
        // 这个地方应该链接到相应的页面

    
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE tutor SET name='".$name."',position='".$position."',qq='".$qq."',email='".$email."',company='".$company."',word='".$word."',logoimg='".$img1."' where id='".$_REQUEST['editid']."'");

            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&ca=3');
        // 这个地方应该链接到相应的页面
        

    }

    ruiqia_die("操作数据失败");




}





?>