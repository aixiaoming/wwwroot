<?php
include "function.php";



// 检查是否登录
// is_right();


if ($_POST['submit2']!="") {
    $area = $_POST['area'];
    $description = $_POST['description'];
    $linkman = $_POST['linkman'];
    $linkphone = $_POST['linkphone'];
    $department = $_POST['department'];




    // 发布上传数据**********************************************************
 
    ruiqia_query("UPDATE incubation SET area='".$area."',description='".$description."',linkman='".$linkman."',linkphone='".$linkphone."',department='".$department."' where id=1");

        header('Location:list.php?clickid=13');


}


?>