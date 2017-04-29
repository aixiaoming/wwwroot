<?php
include "function.php";



// 检查是否登录
// is_right();


if ($_POST['submit2']!="") {
    $club = $_POST['club'];


    // 上传数据**********************************************************

 ruiqia_query("UPDATE club SET club='".$club."' where id=7");

        header('Location:user_reg.php');


}


?>