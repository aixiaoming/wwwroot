<?php
include "function.php";
if($_POST['act']=='logout')
{
	session_destroy();
	echo '{"title":"成功！","text":"退出成功","type":"success"}';
	exit();
}
?>