<?php
include "function.php";



// 检查是否登录
is_right();

if ($_POST['why']!="") {
    $plaintiff = $_POST['plaintiff'];
    $defendant = $_POST['defendant'];
    $formname = $_POST['formname']; 
    $why = $_POST['why']; 
    $click =$_POST['click'];
    $beiid = $_POST['beiid'];

    // 发布上传数据**********************************************************
ruiqia_query("INSERT INTO complaints(plaintiff,defendant,formname,why,click,beiid) values('".$plaintiff."','".$defendant."','".$formname."','".$why."','".$click."','".$beiid."')");
	$json['jieguo']="success";
	ruiqia_json($json);
	
}


?>
