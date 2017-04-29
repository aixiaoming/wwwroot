<!DOCTYPE html>
<html>
<head>
  <title>【发布创意集市】- 帮帮校园网</title>
  <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" type="text/css" href="$dir/css/style.css">
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config2.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/jquery.form.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<script type="text/javascript" src="/emperor.js"></script>
</head>
<body> 

<!-- 头部 -->
<!--{template mb_header}-->



<!-- 这里是头部 -->
<div class="select1_header">
  <a href="index.php">首页</a>
  <a> > </a>
  <a href="select1.php">重选类别</a>
  <a> > </a>
  <a>填写信息</a>
</div>




<form method="POST" action="idea_sql.php" id="message">





	<!--{if $check['id']!=""}-->
<!-- 这是修改删除的界面表单 -->
  <input type='hidden' name="editid" value="$editid"/>



  <input type='hidden' name="class" id="class" value="$check['class']"/>

  <br/><label for="title"><a class="bitian">* </a>标题</label>
  <input type='text' name="title" id="title" value="$check['title']" placeholder="这将是大标题" />

  <br/><label for="price">价格</label>
  <input type='number' name="price" id="price" value="$check['price']"/>

  <br/><label for="writer">作者</label>
  <input type='text' name="writer" id="writer" value="$check['writer']"/>
 
  <br/><label for="writeqq">作者ＱＱ</label>
  <input type='number' name="writeqq" id="writeqq" value="$check['writeqq']"/>
 
  <br/><label for="writephone">作者电话</label>
  <input type='number' name="writephone" id="writephone" value="$check['writephone']"/><br>


   </br>
<!-- 这是上传图片的插件开始 -->
  <div class="wuimg">
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg"  onclick="document.getElementById('fileupload').click()">
   <!--{eval loopimgmb($check);}-->
   <a class="tishi">图片格式要求为jpg格式<br/>已上传图片<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
  </div>
<!-- 上传图片插件结束 -->
  <br/>

  <br/><div style="width:90px;height:200px;float:left;padding-right:10px;"><label for="editor" style="line-height:15px !important;">作者简介</label></div>
  <div style="height:200px!important;margin-left:110px; overflow-y:scroll !important; overflow-x:hidden !important;" class="bijiqi"><textarea name="writedescription" id="editor" style="width:100%!important;height:100%!important;margin:0px;">$check['writedescription']</textarea></div>

  <br/><div style="width:90px;height:200px;float:left;padding-right:10px;"><label for="editor" style="line-height:15px !important;">创意简介</label></div>
  <div style="height:200px!important;margin-left:110px; overflow-y:scroll !important; overflow-x:hidden !important;" class="bijiqi"><textarea name="idea_description" id="editor3" style="width:100%!important;height:100%!important;margin:0px;">$check['idea_description']</textarea></div>
 





<!--{else}-->
<!-- 这是发布的界面表单 -->






  <input type='hidden' name="class" id="class" value="$class"/>

  <br/><label for="title"><a class="bitian">* </a>标题</label>
  <input type='text' name="title" id="title" placeholder="这将是大标题" />

  <br/><label for="price">价格</label>
  <input type='number' name="price" id="price" value=""/>

  <br/><label for="writer">作者</label>
  <input type='text' name="writer" id="writer" value=""/>
 
  <br/><label for="writeqq">作者ＱＱ</label>
  <input type='number' name="writeqq" id="writeqq" value=""/>
 
  <br/><label for="writephone">作者电话</label>
  <input type='number' name="writephone" id="writephone" value=""/><br>


<!-- 这是上传图片的插件开始 -->
  <div class="wuimg">
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg"  onclick="document.getElementById('fileupload').click()">
  <a class="tishi">图片格式要求为jpg格式<br/>已上传图片<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
  </div>
<!-- 上传图片插件结束 -->

  <br/><div style="width:90px;height:200px;float:left;padding-right:10px;"><label for="editor" style="line-height:15px !important;">作者简介</label></div>
  <div style="height:200px!important;margin-left:110px; overflow-y:scroll !important; overflow-x:hidden !important;" class="bijiqi"><textarea name="writedescription" id="editor" style="width:100%!important;height:100%!important;margin:0px;"></textarea></div>

  <br/><div style="width:90px;height:200px;float:left;padding-right:10px;"><label for="editor" style="line-height:15px !important;">创意简介</label></div>
  <div style="height:200px!important;margin-left:110px; overflow-y:scroll !important; overflow-x:hidden !important;" class="bijiqi"><textarea name="idea_description" id="editor3" style="width:100%!important;height:100%!important;margin:0px;"></textarea></div>







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



<!-- 这里是尾部 -->
<center class="footer"><a>© Bangbangdream.com</a></center>

<script type="text/javascript">
  var wid1=$(window).width()*0.97*0.97*0.9-100;
  var wid2=$(window).width()*0.97*0.97*0.9-200;
  $('input').css('width',wid1);
  $('textarea').css('width',wid1);
  $('select').css('margin-right',wid2);
</script>

<script type="text/javascript">
        var ue = UE.getEditor('editor');
   </script>

<script type="text/javascript">
        var ue = UE.getEditor('editor3');
</script>

<script type="text/javascript">

inputclear('#CCCCCC');

$('#submitbutton').click(function(){
  if($.trim($("#title").val())==""){    inputcheck('#title',".select1_act",'标题不能为空');
  }else{
   $(".submit2").trigger("click"); 
  }
});

</script>
</body>


</html>

