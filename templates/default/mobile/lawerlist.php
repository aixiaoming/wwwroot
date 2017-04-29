<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>帮帮律师团 - 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="$dir/user_style.css">
</head>


<!--{template user_header}-->


                       
<div class="rightlawlaw">
<div class="list">
<img src="$key['logoimg']">
	<div class="right">
	    <label>姓名：</label><label>$key['name']</label><br>
		<label>电话：</label><label>$key['phone']</label><br>
		<label>职业：</label><label>$key['position']</label><br>
		<label>传真：</label><label>$key['fax']</label><br>
		<label>邮箱：$key['email']</label><br>
	</div>
	<div class="dan">
	<label>办公地点：</label><label>$key['address']</label><br>
	<label>所在单位：</label><label>$key['school']</label>
	</div>   
</div>

<span>个人简介</span><br>
<div class="textarea">$key['description']</div>
<span>擅长领域</span><br>
<div class="textarea">$key['tip']</div>




<footer>
<label>© Bangbangdream.com</label>
</footer>



</html>
