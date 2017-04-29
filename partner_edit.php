<!-- 
、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、
这里是校园二手发布编辑处理页面
、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、
-->
<?php
include "function.php";




// 检查是否登录
is_right();

is_admin();

$class = $_REQUEST['class'];

	$user = ruiqia_query_fetch("SELECT*FROM user WHERE id='".$_SESSION['userid']."'");


//检查是否有修改或删除资格
if ($_REQUEST['querytype']=="update" or $_REQUEST['querytype']=="delete") {
	$check = ruiqia_query_fetch("SELECT*FROM partner WHERE id='".$_REQUEST['editid']."'");
	$editid=$_REQUEST['editid'];
	if ($check['userid']!=$_SESSION['userid'] and $user['administrator']!=1) {
		ruiqia_die('您好！这不是您发布的！您不能编辑或删除');
	}
	if ($_REQUEST['querytype']=="delete" and $_REQUEST['editid']!="") {
		$img = ruiqia_query_fetch("SELECT*FROM partner WHERE id='".$_REQUEST['editid']."'");
		if ($img['img1']!='') {	unlink (".".$img['img1']);	}

		ruiqia_query("DELETE FROM partner WHERE id='".$_REQUEST['editid']."'");
        	
		header('Location:list.php?clickid=15&mokuai=partner');
	}
}elseif($_REQUEST['querytype']!="publish"){
        header('Location:index.php');
}




// 更新浏览数据的函数
hits();


// 判定（发布||修改||删除）
if ($_REQUEST['querytype']=="publish") {
	$_SESSION['querytype']="publish";
}elseif ($_REQUEST['querytype']=="update") {
	$_SESSION['querytype']="update";
}







// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;




// 解释皮肤
include $template->getfile(ruiqia_self());

?>


