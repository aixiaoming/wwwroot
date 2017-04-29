<?php 
include "function.php";



if ($_REQUEST['province']!='') {
$province = $_REQUEST['province'];

$city = ruiqia_query_fetchall("SELECT * FROM area WHERE parentid='".$province."'");

$arr['pic'] = $city;
ruiqia_json($arr);
}
if ($_REQUEST['city']!='') {
$city = $_REQUEST['city'];

$area = ruiqia_query_fetchall("SELECT * FROM area WHERE parentid='".$city."'");

$arr['pic2'] = $area;
ruiqia_json($arr);
}




?>