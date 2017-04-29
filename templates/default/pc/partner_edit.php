<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="$dir/style.css">
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config1.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
  <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/jquery.form.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
  <script type="text/javascript" src="/emperor.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<title>【创业合伙人】- 帮帮校园网</title>
<!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
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
  <li><span>1</span><a href="select1.php">重新选择类别</a></li>
  <li class="select1_act"><span>2</span><a> 填写信息</a></li>
  <li><span>3</span><a> 发布成功</a></li>
</ul>




<!-- 基本信息表单******************************开始 -->

<form method="POST" action="partner_sql.php" id="message">

<!--{if $check['id']!=""}-->
<!-- 这是修改删除的界面表单 -->
  <input type='hidden' name="editid" value="$editid"/>

  <input type='hidden' name="imageurl" value="$check['imageurl']"/>

  <br/><label for="name"><a>* </a>姓名</label>
  <input type='text' name="name" id="name" value="$check['name']"/>

  <br><label for="address">地点</label>
  <input type='text' name="address" id="address" value="$check['address']"/>

  <br/><label for="school">在读院校</label>
  <input type='text' name="school" id="school" value="$check['school']"/>
 
  <br/><label for="education">学历</label>
  <input type='text' name="education" id="education" value="$check['education']"/>






<!-- 上传图片插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">物品照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
  </br>
<!-- 这里是物品照片 -->

  <div class="wuimg" style="width:700px; min-height:125px; margin-left:171px; display:none;">
  <!--{eval loopimg($check);}-->
  </div>
  <br/> 



  <br/><label for="honor">荣誉奖项</label>
  <input type='text' name="honor" id="honor" value="$check['honor']"/>
  
<!--{else}-->
<!-- 这是发布的界面表单 -->


  <br/><label for="name"><a>* </a>姓名</label>
  <input type='text' name="name" id="name" value=""/>

  <br><label for="address">地点</label>
  <input type='text' name="address" id="address" value=""/>

  <br/><label for="school">在读院校</label>
  <input type='text' name="school" id="school" value=""/>
 
  <br/><label for="education">学历</label>
  <input type='text' name="education" id="education" value=""/>





<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
 <br/>
<!-- 这里是物品上传过的照片 -->
  <div class="wuimg" style="width:800px; min-height:125px; margin-left:171px; display:none;"></div>
 <br/>



   <br/><label for="honor">荣誉奖项</label>
  <input type='text' name="honor" id="honor" value=""/>
<!--{/if}-->



  
<!--{if $_SESSION['querytype']=='update'}-->
  <br/><div id="submitbutton" class="submitbtnedit">修改</div>
<!--{elseif $_SESSION['querytype']=='delete'}-->
  <br/><div id="submitbutton" class="submitbtnedit">删除</div>
<!--{else}-->
  <br/><div id="submitbutton" class="submitbtnedit">提交</div>
<!--{/if}-->
 
   <input style="display:none;" type="submit" name="submit2" class="submit2" value="提交"/>


</form>

<!-- 这个是上传图片的表单 -->
      <input id="fileupload" type="file" name="mypic" style="display:none;">

<!-- 基本信息表单*******************结束 -->


</div>
  <!-- 这里是大框架的结束 -->

<!-- 这里是尾部 -->
<div class="edit_footer">
<center><a>bangbang.com</a></center>
</div>


<script type="text/javascript">
        var ue = UE.getEditor('editor');
</script>

<script type="text/javascript">

inputclear('#CCCCCC');

$('#submitbutton').click(function(){
  if ($.trim($("#name").val())=="") {    inputcheck('#name',".select1_nav",'姓名不能为空');
  }else{
   $(".submit2").trigger("click");
  }
});

</script>

</body>
</html>
