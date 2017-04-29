<?php
include 'function.php';


// 接受城市并切换
$cityid = $_GET['cityid'];
if($cityid!=null AND ruiqia_noempty("SELECT * FROM area WHERE id=$cityid"))
{
    $_SESSION['cityid'] = $cityid;
    $_SESSION['areaid']= '';
			// 切换完毕，跳回切换的页面
			header("location:index.php");


}

$shi= ruiqia_query_fetch("SELECT * FROM area WHERE id=" . $_SESSION['cityid'] );

// 省
$sheng=ruiqia_query_fetchall('SELECT * FROM area WHERE level=1 ORDER BY sort');

?>

<!DOCTYPE html>
<html>
<head>
	<title>城市切换-帮帮校园网</title>
	<!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
	<style type="text/css">
        img{border: none;}
		span { width: 30px; height: 30px;font-size: 14px;color: #545454;}
		a{text-decoration: none;line-height: 30px;margin-left: 13px;font-size: 13px;}
		a:hover{color: #ff0000;text-decoration: underline;}
		.container{width: 1200px;min-height: 1000px;margin:auto;}
		#header{width: 1200px;height: 85px;margin: auto;border-bottom: 1px solid #dbe0f7;margin-bottom: 30px;}
		#header img{margin-top: 20px;}
		#header span{color: #666666;font-size: 20px;}
		#header div{float: right;margin-top: 50px;}
		#header div a{color: #666666;margin:0px;}
	    footer{width: 1200px;height: 60px;margin:auto;text-align: center;padding-top: 30px;border-top: 1px solid #e6e6e6;color: #666666;margin-top: 30px;font-color: #ccc;}
    </style>
</head>
<body>


<header id="header">
    <a href="index.php"><img src="/templates\default/pc\images/logo2.png"></a>
    <span>　城市切换</span>
    <div>
        <a href="index.php">返回首页</a>
       <!--  <a href="user_reg.php">　注册</a> -->
    </div>
</header>

<div class="container">
<?php foreach ($sheng as $key) {
	  echo "<b>"."<span>".$key['name']."</span>"."</b>";
	  $shi= ruiqia_query_fetchall("SELECT * FROM area WHERE level=2 AND parentid=$key[id] ORDER BY sort");
	  foreach ($shi as $val) {
         echo "<a href='?cityid=" . $val['id'] . "'>" . $val['name'] . "</a> ";
	  }

	  echo'<br />';
}
?>
</div>

<footer>
<span>© Bangbangdream.com</span>
</footer>

</body>
</html>
