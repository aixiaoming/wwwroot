<!DOCTYPE html>
<html>
<head>
	<title>【职位租赁】- 帮帮校园网</title>
<link rel="stylesheet" type="text/css" href="$dir/style.css">
<!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config1.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
  <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/jquery.form.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<script type="text/javascript" src="/layer/layer/layer.js"></script>
<script type="text/javascript" src="/emperor.js"></script>
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
  <li><span>1</span><a href="select1.php"><!--{if $class!=""}--> 重新选择类别<!--{elseif $class=""}--> 选择类别<!--{elseif $check[id]=!""}--> 重新选择类别<!--{/if}--></a></li>
  <li class="select1_act"><span>2</span><a> 填写信息</a></li>
  <li><span>3</span><a> 发布成功</a></li>
</ul>


<form method="POST" action="joblease_sql.php" id="message">



<!-- 这是修改删除的界面表单 -->


<!--{if $check['id']!=""}-->
  <input type='hidden' name="editid" value="$editid"/>

  <label for="rmb">活动费用</label>
  <input type='text' name="rmb" id="rmb" value="$check['rmb']"/>

  <br/><label for="area">地点</label>
  <input type='text' name="area" id="area" value="$check['area']"/>

  <br/><label for="address">工作地点</label>
  <input type='text' name="address" id="address" value="$check['address']"/>

  <br/><label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value="$check['title']"/><br>
 
 
  <br/><label for="editor" style="height:125px !important; width:125px !important; float:left;">职位简介</label>
  <textarea name="description" id="editor">$check['description']</textarea>

  



<!-- 上传图片插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">活动照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
   </br>
<!-- 这里是活动照片 -->

  <div class="wuimg" style="width:700px; min-height:125px; margin-left:171px; display:none;">
  <!--{eval loopimg($check);}-->
  </div>
  <br/>




  <br/><label for="linkman">联系人</label>
  <input type='text' name="linkman" id="linkman" value="$check['linkman']"/>
 
  <label for="linkqq">联系ＱＱ</label>
  <input type='number' name="linkqq" id="linkqq" value="$check['linkqq']"/>

  <label for="linkphone">联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value="$check['linkphone']"/>
  
  <br/><label for="begintime">开始时间</label>
  <input type='date' name="begintime" id="begintime" value="$check['begintime']"/>

  <label for="lasttime">结束时间</label>
  <input type='date' name="lasttime" id="lasttime" value="$check['lasttime']"/>

  <label for="people">招募人数</label>
  <input type='number' name="people" id="people" value="$check['people']"/>



<!--{else}-->
<!-- 这是发布的界面表单 -->





  <label for="rmb">活动费用</label>
  <input type='text' name="rmb" id="rmb" value=""/>

  <br/><label for="area">　　地点</label>
  <input type='text' name="area" id="area" value=""/>

  <br/><label for="address">工作地点</label>
  <input type='text' name="address" id="address" value=""/>

  <br/><label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value=""/><br>





<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">活动照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
  <br/>
<!-- 这里是物品上传过的照片 -->
  <div class="wuimg" style="width:800px; min-height:125px; margin-left:171px; display:none;"></div>
 <br/>





  <br/><label for="editor">职位简介</label>
  <textarea name="description" id="editor" value=""></textarea>

 
  <br/><label for="linkman">　联系人</label>
  <input type='text' name="linkman" id="linkman" value=""/>
 
  <label for="linkqq">联系ＱＱ</label>
  <input type='number' name="linkqq" id="linkqq" value=""/>

  <label for="linkphone">联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value=""/>
  
  <br/><label for="begintime">开始时间</label>
  <input type='date' name="begintime" id="begintime" value=""/>

  <label for="lasttime">结束时间</label>
  <input type='date' name="lasttime" id="lasttime" value=""/>

  <label for="people">招募人数</label>
  <input type='number' name="people" id="people" value=""/>





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

</div>

</div>

<div class="edit_footer">
<center><a>©Bangbangdream.com</a></center>
</div>



<script type="text/javascript">
  var ue = UE.getEditor('editor');
</script>
<script type="text/javascript">

// 检查时间先后
$("#begintime").bind("input propertychange", function() {
  if ($("#lasttime").val()!='') {
  if ($("#begintime").val()>$("#lasttime").val()) {
    inputcheck('#begintime',"#begintime",'哎呀，开始时间与结束时间冲突了');
  };
  };
});
$("#lasttime").bind("input propertychange", function() {
  if ($("#begintime").val()!='') {
  if ($("#begintime").val()>$("#lasttime").val()) {
    inputcheck('#lasttime',"#begintime",'哎呀，开始时间与结束时间冲突了');
  };
  };
});
///////////



inputclear('#CCCCCC');

$('#submitbutton').click(function(){
  if ($.trim($("#title").val())=="") {    inputcheck('#title',".select1_nav",'标题不能为空');
  }else{
   $(".submit2").trigger("click");
  }
});

</script>
</body>
</html>





