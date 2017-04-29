<?php
include "function.php";


if ($_SESSION['userid']!="") {
$user = ruiqia_query_fetch("SELECT*FROM user WHERE id=".$_SESSION['userid']);
}




/////////////////////////////nav  选择类型/////////////////////////////////////////
$clickid2=$_REQUEST['clickid'];
// 是否选择过nav
if ($_REQUEST['clickid']!="") {
	$clickid = $_REQUEST['clickid'];
	$nav3=ruiqia_query_fetch("SELECT*FROM class WHERE id='".$_REQUEST['clickid']."'");
	$mokuai = $nav3['mokuai'];
	if ($_REQUEST['clickid']>19) {
		if ($_REQUEST['clickid']==171) {
			$clickid = $_REQUEST['clickid'];
		}else{
		$clickid = $nav3['nav3'];	
		}
	}
	$nav2=$clickid;
	if ($clickid>5 and $clickid<10) {
		$nav2=2;
	}
	if ($clickid>9 and $clickid<13) {
		$nav2=3;
	}
	if ($clickid>12 and $clickid<17) {
		$nav2=4;
	}
	if ($clickid>16 and $clickid<20) {
		$nav2=5;
	}


}else{
	header("location:index.php");
}



// 输出nav2列表
$list_nav2 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav2=".$nav2);


/////////////////////////////  之前是nav2  ///////////////////////////
$xinxi = ruiqia_query_fetch("SELECT*FROM ".$mokuai." WHERE id='".$_REQUEST['list']."'");
$listid=$_REQUEST['list'];
$date=substr($xinxi['time'],0,10);
 
 if ($xinxi['position']=='') {
	$area = '全国';
 }else{
$posprovinceid = substr($xinxi['position'],-6);
$area = ruiqia_query_column("SELECT name FROM area WHERE id='".$posprovinceid."'");
}


ruiqia_query("UPDATE ".$mokuai." SET hits='".$xinxi['hits']."'+1 WHERE id='".$_REQUEST['list']."'");





// 右边信息栏
// 
// 
if ($mokuai=="joblease") {
	$xinxi['userid']=1005;
}

$publish_user = ruiqia_query_fetch("SELECT*FROM user WHERE id='".$xinxi['userid']."'");


$date=date("Y年m月d日",$publish_user['time']);
// diffDate(date("Y-m-d"，time()),$publish_user['time']);

//







// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>