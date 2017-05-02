
<!DOCTYPE html>
<html>
<head>
	<title>【vip会员简介填写】- 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
</head>
<body>

<!--{template user_header}-->

<div class="clubwrite_container">

	<!-- 左侧导航菜单 -->
	<!--{template user_side}-->
    
	<div class="club">
	    <span>企业vip会员简介填写</span>
		<form method="post" action="vip.php">
		<textarea name="vip" id="editor" class="textarea">
			$club['vip']
		</textarea>
	    <input name="pay" value="1" type="hidden">
		<input type="submit" value="提交" class="submit">
		</form>
	</div>

<div>


<!--{template user_footer}-->
</body>


<script type="text/javascript">
        var ue = UE.getEditor('editor');
</script>
</html>