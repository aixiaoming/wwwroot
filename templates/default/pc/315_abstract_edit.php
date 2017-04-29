<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="$dir/style.css">
<!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<script type="text/javascript" src="/jquery.form.js"></script>
<script type="text/javascript" src="/emperor.js"></script>

	<title>【创业实习中心】- 帮帮校园网</title>


</head>
<body>

  <!-- 这里是大框架的开始 -->
<div class="select1_frame1">

<!-- 这里是头部 -->
<div class="select1_logo">
  <a href="index.php"><img src="/tupian/logo.png"></a>
  <span>
  <a class="select1_area">$city['name']</a>
  <a href="area_change.php">切换城市</a>
  </span>
  <div>
    <a href="user_profile.php">$user['username']</a>
    <a> | </a>
    <a href="index.php">返回首页</a>
  </div>
</div>

<!-- 这里是nav -->
<ul class="select1_nav">
  <li><span>1</span><a href="select1.php"> 重新选择类别</a></li>
  <li class="select1_act"><span>2</span><a> 填写信息</a></li>
  <li><span>3</span><a> 发布成功</a></li>
</ul>



<form id="message" method="post" action="315_abstract_sql.php">
<br/><label for="editor" style="display:inline-block !important; width:140px !important; float:left;"><a>* </a>简介</label>
	<textarea name="description" id="editor2">
		$jianjie['description']
	</textarea>
  <input type="hidden" name="edit" value="$jianjie['id']">
	<input type="submit" name="submit2" value="提交" class="submit2">
</form>
</div>




</div>
  <!-- 这里是大框架的结束 -->

<!-- 这里是尾部 -->
<div class="edit_footer">
<center><a>©Bangbangdream.com</a></center>
</div>
<script type="text/javascript">
  var ue = UE.getEditor('editor2');
</script>
</body>
</html>

