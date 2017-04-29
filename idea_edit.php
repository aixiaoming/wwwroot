<!-- 
、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、
这里是校园二手发布编辑处理页面
、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、、
-->
<?php
include "function.php";
// 检查是否登录
is_right();



$user = ruiqia_query_fetch("SELECT*FROM user WHERE id='".$_SESSION['userid']."'");
$class = ruiqia_query_column("SELECT name FROM class WHERE id='".$_REQUEST['class']."'");


//检查是否有修改或删除资格
if ($_REQUEST['querytype']=="update" or $_REQUEST['querytype']=="delete") {

	$check = ruiqia_query_fetch("SELECT*FROM idea WHERE id='".$_REQUEST['editid']."'");
	$editid=$_REQUEST['editid'];
	if ($check['userid']!=$_SESSION['userid'] and $user['test']!=1) {
		ruiqia_die('您好！您没有权限编辑或删除');
	}
	if ($_REQUEST['querytype']=="delete" and $_REQUEST['editid']!="") {
		$img = ruiqia_query_fetch("SELECT*FROM idea WHERE id='".$_REQUEST['editid']."'");
		if ($img['img1']!='') {	unlink (".".$img['img1']);	}
		if ($img['img2']!='') {	unlink (".".$img['img2']);	}
		if ($img['img3']!='') {	unlink (".".$img['img3']);	}
		if ($img['img4']!='') {	unlink (".".$img['img4']);	}
		if ($img['img5']!='') {	unlink (".".$img['img5']);	}
		if ($img['img6']!='') {	unlink (".".$img['img6']);	}
		if ($img['img7']!='') {	unlink (".".$img['img7']);	}
		if ($img['img8']!='') {	unlink (".".$img['img8']);	}
		if ($img['img9']!='') {	unlink (".".$img['img9']);	}
		if ($img['img10']!='') {unlink (".".$img['img10']);	}
		ruiqia_query("DELETE FROM idea WHERE id='".$_REQUEST['editid']."'");
        header('Location:published_idea.php');
	}
}





// 更新浏览数据的函数
hits();


// 判定（发布||修改||删除）
if ($_REQUEST['querytype']=="publish") {
	$_SESSION['editid'] = $_REQUEST['editid'];
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


