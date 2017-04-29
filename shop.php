<?php
include "function.php";


$user = ruiqia_query_fetch("SELECT*FROM user WHERE id='".$_SESSION['userid']."'");
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