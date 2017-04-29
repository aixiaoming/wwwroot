<?php
include "function.php";



// 检查是否登录
// is_right();



if ($_POST['submit2']) {

    $address = $_POST['address'];
    $school = $_POST['school'];
    $education = $_POST['education'];
    $name = $_POST['name'];
    $honor = $_POST['honor'];

    $img1 = $_POST['img1'];


// *************************************************************************
// 通过检查                                                               //
// 上传数据 type=1 更新数据type=2 删除数据type=3                          //
// *************************************************************************


    if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************

            ruiqia_query("INSERT INTO partner(address,school,education,name,honor,img1,temtime) values('".$address."','".$school."','".$education."','".$name."','".$honor."','".$img1."','".$temtime."')");
            unset($_SESSION['querytype']);
            $getID = ruiqia_query_fetch('SELECT*FROM partner WHERE name="'.$name.'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&clickid=15&ca=partner');

    
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE partner SET address='".$address."',school='".$school."',education='".$education."',name='".$name."',honor='".$honor."',img1='".$img1."' where id='".$_REQUEST['editid']."'");
            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&clickid=15&ca=partner');

    }

    ruiqia_die("操作数据失败");


}

?>