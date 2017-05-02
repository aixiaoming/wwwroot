
<!DOCTYPE html>
<html>
<head>
	<title>【法援组织修改】- 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config1.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>
<body> 

<!--{template user_header}-->


<div class="org_container">

	<!-- 左侧导航菜单 -->
	<!--{template user_side}-->
    
<!-- <div class="club">
    <span>法援组织填写</span>
	<form method="post" action="law_sql.php">
	<textarea name="description" id="editor" class="textarea">
		
	</textarea>
    <input name="type" type="hidden" value="update">
	<input type="submit" value="提交" class="submit">
</form>
</div> -->



<div class="middle">

<span class="top_span">法援组织修改</span>
<div class="bar">
<span class="span">上传logo</span>
</div>
<div class="img">
	  <img src="$usermake['images']" onerror=this.src="/data/logolaw/shili.jpg" title="点击图片上传logo，图片大小不能超过1M" alt="点击图片上传logo，图片大小不能超过1M" id="userlogoimg" onclick="document.getElementById('fileupload').click()">
      <input id="fileupload" type="file" accept='image/jpeg' name="mypic" style="display:none;">
      <label>点击图片上传logo</label><br>
</div>



<div class="bar">
<span class="span">文字简介</span>
</div>

<form method="POST" action="law_sql.php">
    <input name="zhai" value="$usermake['zhai']" class="input" maxlength="15">
	<textarea name="description" id="editor">$usermake['description']</textarea>
	<input name="img" id="img" type="hidden" value="$usermake['images']"/>
	<input name="type" type="hidden" value="change">
    <input name="id" type="hidden" value="$usermake['id']">
	<input type="submit" name="submit" value="提交" class="submit">
</form>


</div>

</div>


<footer>
<span>© Bangbangdream.com</span>
</footer>
<script type="text/javascript">
UE.getEditor('editor', {
autoHeightEnabled: false
})
</script>
<script type="text/javascript">
$(function () {
	
	$("#fileupload").wrap("<form id='myupload' action='/action1.php?lei=logolaw' method='post' enctype='multipart/form-data'></form>");

    $("#fileupload").change(function(){
		$("#myupload").ajaxSubmit({
			dataType:  'json',
			beforeSend: function() {

				$("#userlogoimg").fadeOut(300);
				$("#userlogoimg").attr("src",'/data/userface/load.jpg');
    		},
    
			success: function(data) {
		
				var url = data.pic + '?rand=' + Math.random();
				$("#userlogoimg").attr("src", url);
				$("#img").attr("value", url);
				$("#userlogoimg").fadeIn(300);
				 // window.location.href = "/onlinelaw.php";
		        
		
			},
			error:function(xhr){
	             $("#userlogoimg").attr("src",'/data/userface/error.jpg');
			}
		});
	});
	
	
});
</script>

<script type="text/javascript">
        var ue = UE.getEditor('editor');
   </script>

</body>


</html>