<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>315俱乐部简介填写-帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="$dir/user_style.css">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
    <script src="/lib/waitMe.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
	<link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
	<link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
    <script src='/lib/ruiqia.js'></script>
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>
<body>

<!--{template user_header}-->

<div class="clubwrite_container">

	<!-- 左侧导航菜单 -->
	<!--{template user_side}-->
    
<div class="club">
    <span>315俱乐部简介填写</span>
	<form method="post" action="club.php">
	<textarea name="club" id="editor" class="textarea">
		$club['club']
	</textarea>
    <input name="pay" value="1" type="hidden">
	<input type="submit" value="提交" class="submit">
</form>
</div>






</div>
<!--{template user_footer}-->
</body>


<script type="text/javascript">
        var ue = UE.getEditor('editor');
</script>
</html>