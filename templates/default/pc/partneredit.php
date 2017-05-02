<!DOCTYPE html>
<html>
<head>
	<title>【发布法援在线】- 帮帮校园网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css"/>
    <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/jquery.form.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>
<body> 

<!--{template user_header}-->
<div class="idea_container">
<!--{template user_side}-->

<div class="middle">

<span class="top_span">法援在线发布</span>
<div class="bar">
<span class="span">上传头像</span>
</div>
<div class="img">
	  <img src="/data/lawlogo/shili.png" title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" onclick="document.getElementById('fileupload').click()">
      <input id="fileupload" type="file" accept='image/jpeg' name="mypic" style="display:none;">
      <label>点击图片上传头像，图片大小不能超过1M,格式为jpg,长:宽=9:6(一寸照片)</label><br>
</div>


<div class="bar">
<span class="span">基本信息</span>
</div>

<form method="POST" action="law_sql.php"　class="form">

<!--{if $check['id']!=""}-->
<!-- 这是修改删除的界面表单 -->
  <input type='hidden' name="editid" value="$editid"/>

  <input type='hidden' name="imageurl" value="$check['imageurl']"/>

  <br/><label for="name"><a>姓　　名</a></label>
  <input type='text' name="name" id="name" value="$check['name']"/>

  <br><label for="area"><a>地　　点</a></label>
  <input type='text' name="area" id="area" value="$check['area']"/>

  <br/><label for="school"><a>在读院校</a></label>
  <input type='text' name="school" id="school" value="$check['school']"/>
 
  <br/><label for="education"><a>学　　历</a></label>
  <input type='text' name="education" id="education" value="$check['education']"/>

   <br/><label for="honor"><a>荣誉奖项</a></label>
  <input type='text' name="honor" id="honor" value="$check['honor']"/>
  
<!--{else}-->
<!-- 这是发布的界面表单 -->

  <input type='hidden' name="imageurl" value=""/>

  <br/><label for="name"><a>姓　　名</a></label>
  <input type='text' name="name" id="name" value=""/>

  <br><label for="area"><a>地　　点</a></label>
  <input type='text' name="area" id="area" value=""/>

  <br/><label for="school"><a>在读院校</a></label>
  <input type='text' name="school" id="school" value=""/>
 
  <br/><label for="education"><a>学　　历</a></label>
  <input type='text' name="education" id="education" value=""/>

   <br/><label for="honor"><a>荣誉奖项</a></label>
  <input type='text' name="honor" id="honor" value=""/>
<!--{/if}-->



  
<!--{if $_SESSION['querytype']=='update'}-->
  <br/><input type="submit" name="submit" class="submit" value="修改" style="width: 100px;height: 40px;background-color: #f58710;border:0px;font-size: 20px;color: #fff;border-radius: 4px;float: right; cursor: pointer;margin-top: 20px;margin-right: 377px;"/>
<!--{elseif $_SESSION['querytype']=='delete'}-->
  <br/><input type="submit" name="submit" class="submit" value="删除" style="width: 100px;height: 40px;background-color: #f58710;border:0px;font-size: 20px;color: #fff;border-radius: 4px;float: right; cursor: pointer;margin-top: 20px;margin-right: 377px;"/>
<!--{else}-->
  <br/><input type="submit" name="submit" class="submit" value="提交"  style="width: 100px;height: 40px;background-color: #f58710;border:0px;font-size: 20px;color: #fff;border-radius: 4px;float: right; cursor: pointer;margin-top: 20px;margin-right: 377px;" />
<!--{/if}-->
</form>


</div>

</div>

<footer>
<span>©Bangbangdream.com</span>
</footer>

<script type="text/javascript">
$(function () {
	
	$("#fileupload").wrap("<form id='myupload' action='/action1.php?lei=lawlogo' method='post' enctype='multipart/form-data'></form>");

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


</body>


</html>





