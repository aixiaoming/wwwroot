<?php
include "function.php";



// 检查是否登录
// is_right();


if ($_POST['submit2']!="") {
    $description = $_POST['description'];


    // 发布上传数据**********************************************************

 ruiqia_query("UPDATE 315_abstract SET description='".$description."' where id=5");

        header('Location:315_abstract.php');


}


?>