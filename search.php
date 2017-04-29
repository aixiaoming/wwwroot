<?php 
include "function.php";

$search = $_POST['search'];
$search_web = $_POST['search_web'];
$search_mokuai = $_POST['search_mokuai'];
// 安全过滤
str_replace('/', '', $search);
str_replace('"', '', $search);
str_replace("'", '', $search);
str_replace(" ", '', $search);
str_replace("+", '', $search);

if($search!='')
{
  header("location:/".$search_web."?searched=".$search."&search_mokuai=".$search_mokuai);
}
else
{
  echo  " <script> history.go(-1); </script> ";
}

?>
