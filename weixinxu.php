<?php
include "function.php";

$testtime=time()+3600*24*365;
ruiqia_query("UPDATE user SET pay=1,test=1,testtime='".$testtime."' where id='".$_SESSION['userid']."'");
header("location: http://www.bangbangdream.com/user_checkrmbm.php");

?>