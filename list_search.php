<!-- 
单独某二手信息列表页如：二手手机或二手车...
点击发布的信息发送其id到详情页goods_show.php进行展示
**这个页面只负责陈列，不能修改删除，但可进入用户中心修改删除**
 -->

<?php
include "function.php";



function search($mokuai,$searched,$field){
	$list = "SELECT*FROM ".$mokuai." WHERE city=".$_SESSION['cityid']." and title LIKE '%".$searched."%' or ".$field." LIKE '%".$searched."%'";
	if (ruiqia_noempty($list)) {
		$goods = ruiqia_query_fetchall($list."order by id ASC");
		return $goods;
	}else{
		return false;
	}
}
function search2($mokuai,$searched){
	$list = "SELECT*FROM ".$mokuai." WHERE title LIKE '%".$searched."%'";
	if (ruiqia_noempty($list)) {
		$goods = ruiqia_query_fetchall($list."order by id ASC");
		return $goods;
	}else{
		return false;
	}
}
	// ruiqia_die($_GET['search_mokuai']);


	$goods = search("goods",$_GET['searched'],'school');
	$schoolnear = search("schoolnear",$_GET['searched'],'school');
	$active = search("active",$_GET['searched'],'school');
	$find_notice = search("find_notice",$_GET['searched'],'address');
	$parttime = search("parttime",$_GET['searched'],'school');
	$recruit = search("recruit",$_GET['searched'],'school');
	$intern = search("intern",$_GET['searched'],'school');
	$idea = search2("idea",$_GET['searched']);
	$joblease = search2("joblease",$_GET['searched']);
	$shop = search("shop",$_GET['searched'],'school');
	// $bangfu = search("bangfu",$_GET['searched'],'school');






// 初始化皮肤引擎
$template = ruiqia_template::getInstance();
$template->auto_update = true;
$template->cache_lifetime = 10;
$template->mobile = true;




// 解释皮肤
include $template->getfile(ruiqia_self());
?>