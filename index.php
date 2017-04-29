<?php
include "function.php";

// if ($_SESSION['mima']=="") {
// 	header('Location: http://www.bangbangdream.com/bianji.php');
// }


$i1=1;
$i2=1;
$i3=1;
$i4=1;
$i5=1;
$i6=1;

//校园二手
$class1 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=6");
// 校园活动
$class2 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=7");
// 校园周边
$class3 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=8");
// 兼职
$class4 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=10");
// 实习
$class5 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=11");
// 招聘
$class6 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=12");
// 创业创新
$class7 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav2=4");
// 创意集市
$class8 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3=14");


// 法援在线
$law_online = ruiqia_query_fetchall("SELECT*FROM law WHERE description=1");

// 帮帮律师团
$law_team = ruiqia_query_fetchall("SELECT*FROM law_team");

// 法援组织
$lawlaw=ruiqia_query_fetchall("SELECT * from law WHERE description!=1");

// 帮辅导师团
$tutor = ruiqia_query_fetchall("SELECT*FROM tutor");

// 315会员专属活动
$zhuanshu = ruiqia_query_fetchall("SELECT*FROM active WHERE class='专属活动'");


if ($_GET['talk']!="") {
	is_right();
	ruiqia_die($_GET['talk']);
	// 是否是315会员
	if ($user['administrator']==1) {
		// 管理员可以交谈
	header('Location:tencent://message/?uin=$_GET["talk"]&amp;Site=帮帮校园网&amp;Menu=yes');
	}elseif ($user['administrator']==2) {
		// 非管理员判断
		if ($user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7) {
			// 提示不是315会员，不可以交谈
			ruiqia_die("您不是315会员");
		}
		if ( $user['test']==1 or $user['test']==2 or $user['test']==6) {
			// 该用户315会员可以交谈
	header('Location:tencent://message/?uin=$_GET["talk"]&amp;Site=帮帮校园网&amp;Menu=yes');
		}
	}
}


// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;


// 解释皮肤
include $template->getfile(ruiqia_self());
?>

