<?php
include "function.php";



// 检查是否登录
// is_right();


if ($_POST['submit2']!="") {
    $description = $_POST['description'];


    // 发布上传数据**********************************************************

 ruiqia_query("UPDATE bangfu SET description='".$description."' where id=1");

        header('Location:bangfu.php');


}


?>