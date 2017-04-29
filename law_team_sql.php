<?php
include "function.php";



// 检查是否登录
// is_right();



if ($_POST['submit2']) {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $school = $_POST['school'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];
    $description = $_POST['description'];   
    $address = $_POST['address'];   
    $email = $_POST['email'];   
    $tip = $_POST['tip'];   

    $img1 = $_POST['img'];



// *************************************************************************
// 通过检查                                                               //
// 上传数据 type=1 更新数据type=2 删除数据type=3                          //
// *************************************************************************

if ($name=="") {
    ruiqia_die("标题不能为空");
}


if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************


            ruiqia_query("INSERT INTO law_team(userid,name,position,school,phone,fax,description,address,email,tip,logoimg,temtime) values('".$_SESSION['userid']."','".$name."','".$position."','".$school."','".$phone."','".$fax."','".$description."','".$address."','".$email."','".$tip."','".$img1."','".$temtime."')");
            unset($_SESSION['querytype']);

            $getID = ruiqia_query_fetch('SELECT*FROM law_team WHERE userid="'.$_SESSION['userid'].'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&ca=2');
    
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE law_team SET name='".$name."',position='".$position."',school='".$school."',phone='".$phone."',fax='".$fax."',description='".$description."',address='".$address."',email='".$email."',tip='".$tip."',logoimg='".$img1."' where id='".$_REQUEST['editid']."'");

            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&ca=2');

    }

    ruiqia_die("操作数据失败");




}





?>