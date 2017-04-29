<?php
include 'function.php';

$mima = str_replace(' ','',$_POST['mima']);


 
// 如果收到用户名为空
if($mima == '12345678') 
{
  
 $_SESSION['mima'] = $mima;

 // ruiqia_die($_SESSION['mima']);
 header('Location: http://www.bangbangdream.com/');
}else{
  echo "密码不正确";
}



?>
<html>
<head>
  <title>biajiqi</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

</head>


</html>