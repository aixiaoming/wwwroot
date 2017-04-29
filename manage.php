<?php
include "ruiqia.php";
ruiqia_db();
$tab=ruiqia_query_fetch('mysql' , 'localhost' , 'xiaoyuan' , 'law' , 
	'k6W4w5Y5');

$name=$_POST['name'];
$school=$_POST['school'];
$education=$_POST['education'];
$job=$_POST['job'];
$comment=$_POST['comment'];
ruiqia_query("INSERT INTO FROM WHERE id=".$_POST['tab']." ")
?>