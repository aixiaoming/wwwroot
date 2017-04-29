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
	<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
	<style type="text/css">
html {margin: 0px;outline-width: 0px;border-width: 0px;vertical-align: baseline;padding: 0px;font-size: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;overflow: auto;}

body {background: #f5f5f5;margin: 0px;font: normal 100%;padding: 0px; margin:0px;border: none;outline-width: 0px;vertical-align: baseline;font: 16px/1.5 arial, "microsoft yahei", "verdana", sans-serif;}
a{text-decoration: none;}
div {padding:0px; margin: 0px;}
a,img,button,input,textarea{-webkit-tap-highlight-color:rgba(255,255,255,0);}
.mb_list_header {
width:100%; height:50px; background: #f25c17;
}
.textmb {line-height: 70px; font-size: 18px; float: right; margin-right: 10%;}
.mb_list_header img {height:35px; margin-top: 7px; margin-left: 2%;}

.container {padding:10px 3%; width: 97%;}
.container p {width: 100%; }

.container { width:94%; margin:0; padding:0px 3%; color: #a6a6a6; font-size: 14px; }
.container p { width:94%; padding:0 3%; height: 40px; margin:0;  line-height: 40px; color:#000; font-size: 15px; margin-bottom: 1px; }

.container a {display: inline-block; min-width: 26%; height: 25px; padding:0 3%; margin:0px; line-height: 25px; color: #1155CC;}
footer { width:100%; text-align: center; height:30px; margin-top:50px; padding-top: 20px; font-size: 12px; background: rgba(39,34,44,0.8); color: #848484;}

    </style>
</head>
<body>


	<!-- 头部 -->
<div class="mb_list_header">
    <a href="select.php"><img src="/templates\default/mobile\images/logo.png"></a>
    <a class="textmb">切换城市</a>
</div>



<div class="container">
<?php foreach ($sheng as $key) {
	  echo "<p>"."<span>".$key['name']."</span>"."</p>";
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
