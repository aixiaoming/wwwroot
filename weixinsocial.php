<?php
include "function.php";


ruiqia_query("UPDATE user SET pay=1,vip=2 where id='".$_SESSION['userid']."'");
header("location: http://www.bangbangdream.com/user_checksocial.php");

?>