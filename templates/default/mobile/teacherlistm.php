<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
    <title>帮辅导师团 - 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="$dir/user_style.css">
	<script type="text/javascript">
	
	</script>
</head>

<!--{template user_header}-->



<div class="rightteacher">

<div class="list" style="border:none;">
<img src="$key['logoimg']">
	<div class="right">
		<label>姓名：</label><label>$key['name']</label><br>
		<label>邮箱：$key['email']</label><br>
		<label>ＱＱ：</label><label>$key['qq']</label><br>
		<label>职务：</label><label>$key['position']</label><br>
		<label>单位：</label><label>$key['company']</label>
	</div>
	
	<div class="bottom">
	  <label>想对大学生说的一句话：</label><br>
	  <div class="textarea">$key['word']</div>
	</div>
</div>

        


<footer style="text-align: center;margin-top:150px;">
<span>© Bangbangdream.com</span>
</footer>
</div>






</html>