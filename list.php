<?php
include "function.php";


// 单独某二手信息列表页如：二手手机或二手车...
// 点击发布的信息发送其id到详情页goods_show.php进行展示
// **这个页面只负责陈列，不能修改删除，但可进入用户中心修改删除**


// 从nav3表中获得name
//
//
function nav3_name($val1,$lei1){
	$nav3 = ruiqia_query_column("SELECT znname FROM nav3 WHERE enname='$val1' and lei1='$lei1'");
	$_SESSION[$val1] = $nav3;
}



$description=ruiqia_query_fetch("SELECT*FROM incubation WHERE id=1");

$user = ruiqia_query_fetch("SELECT*FROM user WHERE id='".$_SESSION['userid']."'");

// 
// 
// 从nav3中获取name成功

/////////////////////////////nav  选择类型/////////////////////////////////////////
// ruiqia_die($_REQUEST['area'].$_REQUEST['class'].$_REQUEST['fabuzhe']);

// 是否选择过nav
if ($_REQUEST['clickid']!="") {
	$clickid = $_REQUEST['clickid'];
	$nav3=ruiqia_query_fetch("SELECT*FROM class WHERE id=".$clickid);
	$mokuai = $nav3['mokuai'];
	if ($_REQUEST['clickid']>19) {	
		if ($_REQUEST['clickid']==171) {
			$clickid = $_REQUEST['clickid'];
		}else{
		$clickid = $nav3['nav3'];
		}
	}
	$nav2=$clickid;
	if ($clickid==171) {	$nav2=4;		}
	if ($clickid>5 and $clickid<10) {		$nav2=2;	}
	if ($clickid>9 and $clickid<13) {		$nav2=3;	}
	if ($clickid>12 and $clickid<17) {		$nav2=4;	}
	if ($clickid>16 and $clickid<20) {		$nav2=5;	}

}else{
	header("location:index.php");
}


// list上方的title
// 
// 
$list_title = ruiqia_query_fetch("SELECT*FROM class WHERE id=".$clickid);



// 输出nav2列表
$list_nav2 = ruiqia_query_fetchall("SELECT*FROM class WHERE nav2=".$nav2);

/////////////////////////////  之前是nav2  ///////////////////////////


//area地区的
//
//
$qu= ruiqia_query_fetchall("SELECT * FROM area WHERE parentid=" . $_SESSION['cityid'] );




// class物品分类
// 
// 

$class = ruiqia_query_fetchall("SELECT*FROM class WHERE nav3='".$_REQUEST['clickid']."'");

/////////////////////////////nav 选择类型  结束//////////////////////////////////////////////////////////////////










//清除选择过的类
//
if ($_REQUEST['hit'] == "" or $_REQUEST['hit'] == null) {
	unset($_SESSION['area']);	unset($_SESSION['class']);	unset($_SESSION['fabuzhe']);	unset($_SESSION['objective']);  unset($_SESSION['time']);	unset($_SESSION['price']);	unset($_SESSION['new']);  unset($_SESSION['test']);	unset($_SESSION['position']);	unset($_SESSION['education']);	unset($_SESSION['address']);  unset($_SESSION['experience']);	unset($_SESSION['label']);  unset($_SESSION['find']);	 unset($_SESSION['price_low']);     unset($_SESSION['price_high']);     unset($_SESSION['search']);
}



// 选择不限的时候清除session；使get数据为空
// 
// if ($_REQUEST['area']=="all") {unset($_SESSION['area']); $_REQUEST['area']='';}
if ($_REQUEST['class']=="all") {unset($_SESSION['class']); $_REQUEST['class']="";}
if ($_REQUEST['fabuzhe']=="all") {unset($_SESSION['fabuzhe']); $_REQUEST['fabuzhe']="";}
if ($_REQUEST['objective']=="all") {unset($_SESSION['objective']); $_REQUEST['objective']="";}
if ($_REQUEST['time']=="all") {unset($_SESSION['time']); $_REQUEST['time']="";}
if ($_REQUEST['price']=="all") {unset($_SESSION['price_low']);unset($_SESSION['price_high']);}
if ($_REQUEST['new']=="all") {unset($_SESSION['new']); $_REQUEST['new']="";}
if ($_REQUEST['test']=="all") {unset($_SESSION['test']); $_REQUEST['test']="";}
if ($_REQUEST['position']=="all") {unset($_SESSION['position']); $_REQUEST['position']="";}
if ($_REQUEST['education']=="all") {unset($_SESSION['education']); $_REQUEST['education']="";}
if ($_REQUEST['address']=="all") {unset($_SESSION['address']); $_REQUEST['address']="";}
if ($_REQUEST['experience']=="all") {unset($_SESSION['experience']); $_REQUEST['experience']="";}
if ($_REQUEST['label']=="all") {unset($_SESSION['label']); $_REQUEST['label']="";}
if ($_REQUEST['find']=="all") {unset($_SESSION['find']); $_REQUEST['find']="";}



//记录选择过的类
//
if ($_REQUEST['area']!="") {$_SESSION['area'] = $_REQUEST['area'];if ($_SESSION['area']==$_SESSION['cityid']) {
	unset($_SESSION['area']);
}}
if ($_REQUEST['class']!="") {
	$classname=ruiqia_query_fetch("SELECT*FROM class WHERE id=".$_REQUEST['class']);
	$_SESSION['class'] = $classname['name'];}
if ($_REQUEST['fabuzhe']!="") {	$_SESSION['fabuzhe']=$_REQUEST['fabuzhe'];}
if ($_REQUEST['objective']!="") {	nav3_name("objective",$_REQUEST['objective']); }
if ($_REQUEST['time']!="") {	nav3_name("time",$_REQUEST['time']);}
if ($_REQUEST['submit3']!="") {$_SESSION['price_low']=$_REQUEST['price_low'];$_SESSION['price_high']=$_REQUEST['price_high'];}
if ($_REQUEST['new']!="") {nav3_name("new",$_REQUEST['new']);}
if ($_REQUEST['test']!="") {nav3_name("test",$_REQUEST['test']);}
if ($_REQUEST['position']!="") {	$_SESSION['position'] = $_REQUEST['position_value'];}
if ($_REQUEST['address']!="") {	$_SESSION['address'] = $_REQUEST['address_value'];}
if ($_REQUEST['education']!="") {nav3_name("education",$_REQUEST['education']);}
if ($_REQUEST['experience']!="") {	nav3_name("experience",$_REQUEST['experience']);}
if ($_REQUEST['label']!="") {		nav3_name("label",$_REQUEST['label']);}
if ($_REQUEST['find']!="") {	$_SESSION['find'] = $_REQUEST['find'];}



// 如果是goods 另外检测选择过的类有 发布者、交易类型（fabuzhe、objective）
// 
// 通过query记录要查询的变量
// 
if ($_SESSION['area']!="") {
	$province=ruiqia_query_fetch("SELECT * FROM area WHERE id='".$_SESSION['cityid']."'");
	$query=" && area='".$_SESSION['area']."'";
}elseif ($mokuai=="goods" or $mokuai=="active" or $mokuai=="schoolnear" or $mokuai=="parttime" or $mokuai=="recruit" or $mokuai=="intern" or $mokuai=="find_notice") {
	$province=ruiqia_query_fetch("SELECT * FROM area WHERE id='".$_SESSION['cityid']."'");
	$query=" && city='". $_SESSION['cityid'] ."'";
}



if ($_SESSION['class']!="") {	$query=$query." && class='".$_SESSION['class']."' ";}
if ($_SESSION['time']!="") {
	if ($_SESSION['time']=="今日") {
		$time_date=date("Y-m-d",time());
	$query=$query." && begintime <='".$time_date."' ";
	$query=$query." && lasttime >=  '".$time_date."'";
}
	if ($_SESSION['time']=="周末") {
	$time_date=date("Y-m-d",time());
	$end_weekend6=date("Y-m-d",mktime(0, 0 , 0,date("m"),date("d")-date("w")+6,date("Y")));
	$query=$query." && lasttime >=  '".$end_weekend6."'";
	$query=$query." && lasttime >=  '".$time_date."'";
	$query=$query." && week > 0";
}
	if ($_SESSION['time']=="最近一周") {
		$time_date=date("Y-m-d",time());
		$time_week=date("Y-m-d",time()+3600*24*7);
	$query=$query." && begintime <= '".$time_week."' and lasttime >=  '".$time_date."'";
	}
	if ($_SESSION['time']=="最近一月") {
		$time_date=date("Y-m-d",time());
		$time_week=date("Y-m-d",time()+3600*24*30);
	$query=$query." && begintime <= '".$time_week."' and lasttime >=  '".$time_date."'";
	}
}
if ($_SESSION['fabuzhe']!="") {	$query=$query." && type='".$_SESSION['fabuzhe']."' ";}
if ($_SESSION['objective']!="") {	$query=$query." && objective='".$_SESSION['objective']."' ";}
if ($_SESSION['price_low']!="") {	$query=$query." && price>='".$_SESSION['price_low']."' ";}
if ($_SESSION['price_high']!="") {	$query=$query." && price<='".$_SESSION['price_high']."' ";}
if ($_SESSION['new']!="") {	$query=$query." && new='".$_SESSION['new']."' ";}
if ($_SESSION['test']!="") {	$query=$query." && test='".$_SESSION['test']."' ";}
if ($_SESSION['position']!="") {	$query=$query." && position LIKE '%".$_SESSION['position']."%' ";}
if ($_SESSION['address']!="") {	$query="&& address LIKE '%".$_SESSION['address']."%' ";}
if ($_SESSION['education']!="") {	$query=$query." && education='".$_SESSION['education']."' ";}
if ($_SESSION['experience']!="") {	$query=$query." && experience='".$_SESSION['experience']."' ";}
if ($_SESSION['label']!="") {	$query=$query." && label='".$_SESSION['label']."' ";}
if ($_SESSION['find']!="") {	$query=$query." && find='".$_SESSION['find']."' ";}
// 搜索插件
if ($_POST['submit1']=='本页搜索' or $_SESSION['search']!='') {
	if ($_POST['submit1']!='') {
		$search = $_POST['search'];
	// 安全过滤
	str_replace('/', '', $search);
	str_replace('"', '', $search);
	str_replace("'", '', $search);
	str_replace(" ", '', $search);
	str_replace("+", '', $search);

	unset($_SESSION['area']);	unset($_SESSION['class']);	unset($_SESSION['fabuzhe']);	unset($_SESSION['objective']);  unset($_SESSION['time']);	unset($_SESSION['price']);	unset($_SESSION['new']);  unset($_SESSION['test']);	unset($_SESSION['position']);	unset($_SESSION['education']);	unset($_SESSION['address']);  unset($_SESSION['experience']);	unset($_SESSION['label']);  unset($_SESSION['find']);	 unset($_SESSION['price_low']);     unset($_SESSION['price_high']);
	$_REQUEST['class']="";$_REQUEST['fabuzhe']="";$_REQUEST['objective']="";$_REQUEST['time']="";$_REQUEST['new']="";$_REQUEST['test']="";$_REQUEST['position']="";$_REQUEST['education']="";$_REQUEST['address']="";$_REQUEST['experience']="";$_REQUEST['label']="";$_REQUEST['find']="";

	}elseif ($_SESSION['search']!=''){
		$search = $_SESSION['search'];
	}
	
	
	if($search!=''){
		if ($mokuai=='goods') {
		$query=$query." && title LIKE '%".$search."%' or school LIKE '%".$search."%'";
			}elseif ($mokuai=='schoolnear') {
		$query=$query." && title LIKE '%".$search."%' or school LIKE '%".$search."%'";
			}elseif ($mokuai=='active') {
		$query=$query." && title LIKE '%".$search."%' or school LIKE '%".$search."%'";
			}elseif ($mokuai=='find_notice') {
		$query=$query." && title LIKE '%".$search."%' or address LIKE '%".$search."%'";
			}elseif ($mokuai=='parttime') {
		$query=$query." && title LIKE '%".$search."%' or school LIKE '%".$search."%'";
			}elseif ($mokuai=='recruit') {
		$query=$query." && title LIKE '%".$search."%' or school LIKE '%".$search."%'";
			}elseif ($mokuai=='intern') {
		$query=$query." && title LIKE '%".$search."%' or school LIKE '%".$search."%'";
			}elseif ($mokuai=='idea') {
		$query=$query." && title LIKE '%".$search."%'";
			}elseif ($mokuai=='shop') {
		$query=$query." && title LIKE '%".$search."%'";
			}elseif ($mokuai=='joblease') {
		$query=$query." && title LIKE '%".$search."%'";
			}elseif ($mokuai=='incubation' or $mokuai=='partner') {
		  header("location:/list_search.php?searched=".$search."&search_mokuai=".$mokuai);
			}

		$_SESSION['search']=$search;
	}
}elseif($_POST['submit1']=='全站搜索' or $_POST['submit1']=='同城搜索'){
	$search = $_POST['search'];

	// 安全过滤
	str_replace('/', '', $search);
	str_replace('"', '', $search);
	str_replace("'", '', $search);
	str_replace(" ", '', $search);
	str_replace("+", '', $search);
	if($search!='')
	{
	  header("location:/list_search.php?searched=".$search."&search_mokuai=".$mokuai);
	}
}
// 
// 
// 



// 查询数据库
// 
// 
if ($query!="") 
{
// ruiqia_die($query);

	if ($mokuai=="parttime" or $mokuai=="recruit" or $mokuai=="intern") {
	$list = ruiqia_page("SELECT*FROM ".$mokuai." WHERE 1=1 ".$query." ORDER BY time DESC",13,7,'page');
	}else{
	$list = ruiqia_page("SELECT*FROM ".$mokuai." WHERE 1=1 ".$query." ORDER BY time DESC",6,7,'page');	
	}
}else{
	if ($mokuai=="parttime" or $mokuai=="recruit" or $mokuai=="intern") {
		$list = ruiqia_page("SELECT*FROM ".$mokuai." ORDER BY time DESC",13,7,'page');
	}else{
	$list = ruiqia_page("SELECT*FROM ".$mokuai." ORDER BY time DESC",6,7,'page');	
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