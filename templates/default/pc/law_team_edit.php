<!DOCTYPE html>
<html>
<head>
	<title>【发布帮帮律师团】- 帮帮校园网</title>
<link rel="stylesheet" type="text/css" href="$dir/style.css">
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config1.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
  <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/jquery.form.js"></script>
  <script type="text/javascript" src="/layer/layer/layer.js"></script>
   <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8"> 
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





<form method="POST" action="law_team_sql.php?editid=$editid" id="message">





	<!--{if $check['id']!=""}-->
<!-- 这是修改删除的界面表单 -->

  <input type='hidden' name="editid" value="$editid"/>


  <br/><label for="name"><a>* </a>姓名</label>
  <input type='text' name="name" id="name" value="$check['name']" placeholder="请填写您的真实姓名" />

  <br/><label for="position">职业</label>
  <input type='text' name="position" id="position" value="$check['position']"/>
  
  <br/><label for="school"><a>* </a>所在单位</label>
  <input type='text' name="school" id="school" value="$check['school']"/>

  <br/><label for="phone">电话</label>
  <input type='number' name="phone" id="phone" value="$check['phone']"/>
 
  <br/><label for="fax">传真</label>
  <input type='text' name="fax" id="fax" value="$check['fax']"/>

 
<br/>


<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">头像</label>
  <img src="$check['logoimg']" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式</a>
<!-- 上传图片插件结束 -->
<!-- 这里是物品上传过的照片 -->
 <br/>
  <input name="img" id="img" type="hidden" value="$check['logoimg']"/>


  </br><label for="editor" style="height:125px !important; width:125px !important; float:left;">个人简介</label>
  <textarea name="description" id="editor">$check['description']</textarea><br>

  <br/><label for="address">办公地点</label>
  <input type='text' name="address" id="address" value="$check['address']"/>
 
  <br/><label for="email">邮箱</label>
  <input type='text' name="email" id="email" value="$check['email']"/>

  </br><label for="editor3" style="height:125px !important; width:125px !important; float:left;">擅长领域</label>
  <textarea name="tip" id="editor3">$check['tip']</textarea>
 





<!--{else}-->
<!-- 这是发布的界面表单 -->







  <br/><label for="name"><a>* </a>姓名</label>
  <input type='text' name="name" id="name" placeholder="请填写您的真实姓名" />

  <br/><label for="position">职业</label>
  <input type='text' name="position" id="position" value=""/>
  
  <br/><label for="school"><a>* </a>所在单位</label>
  <input type='text' name="school" id="school" value=""/>

  <br/><label for="phone">电话</label>
  <input type='number' name="phone" id="phone" value=""/>
 
  <br/><label for="fax">传真</label>
  <input type='text' name="fax" id="fax" value=""/>




  <br/>


<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">头像</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()"><a class="tishi">图片格式要求为jpg格式</a>
<!-- 上传图片插件结束 -->
<!-- 这里是物品上传过的照片 -->
 <br/>
  <input name="img" id="img" type="hidden" value=""/>
  
  <br/><label for="editor" style="height:125px !important; width:125px !important; float:left;">个人简介</label>
  <textarea name="description" id="editor"></textarea><br>

  <br/><label for="address">办公地点</label>
  <input type='text' name="address" id="address" value=""/>
 
  <br/><label for="email">邮箱</label>
  <input type='text' name="email" id="email" value=""/>

  <br/><label for="editor3" style="height:125px !important; width:125px !important; float:left;">擅长领域</label>
  <textarea name="tip" id="editor3"></textarea><br>






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

<footer>
<center><a>©Bangbangdream.com</a></center>
</footer>

<script type="text/javascript">
        var ue = UE.getEditor('editor');
   </script>

<script type="text/javascript">
        var ue = UE.getEditor('editor3');
</script>




<script type="text/javascript">
$(function () {
  
  $("#fileupload").wrap("<form id='myupload' action='/action1.php?lei=lawteamimg' method='post' enctype='multipart/form-data'></form>");

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

inputclear('#CCCCCC');

$('#submitbutton').click(function(){
  if ($.trim($("#name").val())=="") {    inputcheck('#name',".select1_nav",'姓名不能为空');
  }else if ($.trim($("#school").val())=="") {    inputcheck('#school',"#school",'所在单位不能为空');
  }else{
   $(".submit2").trigger("click");
  }
});


// input表单检查函数
// 
// 
function inputcheck(inputidorclass,offsetclass,tipstext){
   layer.tips(tipstext, inputidorclass);
   $("html,body").animate({scrollTop:$(offsetclass).offset().top},400);
   $(inputidorclass).focus();
   $(inputidorclass).css('border-color','#f00');
   $(inputidorclass).val("");
   $(inputidorclass).fadeOut();
   $(inputidorclass).fadeIn();
}

function inputcheck2(inputidorclass,offsetclass,tipstext){
   //正上方
    layer.msg(tipstext, {
        offset: 100,
        shift: 6
    });
   $("html,body").animate({scrollTop:$(offsetclass).offset().top},400);
   $(inputidorclass).focus();
   $(inputidorclass).css('border-color','#f00');
   $(inputidorclass).val("");
   $(inputidorclass).fadeOut();
   $(inputidorclass).fadeIn();
}


// 清除onfocus颜色
function inputclear(clearcolor){
        $(":input").blur(function(){
              $(this).css('border-color',clearcolor);
        });
}
// 
// 
// input表单检查函数结束
</script>


</body>


</html>

