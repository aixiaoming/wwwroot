<!DOCTYPE html>
<html>
<head>
	<title>【发布帮辅导师团】- 帮帮校园网</title>
  <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" type="text/css" href="$dir/css/style.css">
<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/jquery.form.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">



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




<form method="POST" action="tutor_sql.php" id="message">





	<!--{if $check['id']!=""}-->
<!-- 这是修改删除的界面表单 -->
  <input type='hidden' name="editid" value="$editid"/>




  <br/><label for="name"><a>* </a>姓名</label>
  <input type='text' name="name" id="name" value="$check['name']" placeholder="请填写您的真实姓名" />

  <br/><label for="position">职务</label>
  <input type='text' name="position" id="position" value="$check['position']"/>

  <br/><label for="qq">联系QQ</label>
  <input type='number' name="qq" id="qq" value="$check['qq']"/>

  <br/><label for="email">联系邮箱</label>
  <input type='text' name="email" id="email" value="$check['email']"/>
 
  <br/><label for="company">所在单位</label>
  <input type='text' name="company" id="company" value="$check['company']"/>
 

   </br>


<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="line-height:5px !important;">头像</label>
  <img src="$check['logoimg']" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">
<!-- 上传图片插件结束 -->
<!-- 这里是物品上传过的照片 -->
 <br/>
  <input name="img1" id="img" type="hidden" value="$check['logoimg']"/>


  </br><label for="editor" style="line-height:15px !important;">想对大学生说的一句话</label>
  <textarea name="word" id="editor">$check['word']</textarea><br>





<!--{else}-->
<!-- 这是发布的界面表单 -->







  <br/><label for="name"><a>* </a>姓名</label>
  <input type='text' name="name" id="name" placeholder="请填写您的真实姓名" />

  <br/><label for="position">职务</label>
  <input type='text' name="position" id="position" value=""/>

  <br/><label for="email">联系邮箱</label>
  <input type='text' name="email" id="email" value=""/>

  <br/><label for="qq">联系QQ</label>
  <input type='number' name="qq" id="qq" value=""/>

  <br/><label for="company">所在单位</label>
  <input type='text' name="company" id="company" value=""/>
 

  <br/>
<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="line-height:5px !important;">头像</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">
<!-- 上传图片插件结束 -->
<!-- 这里是物品上传过的照片 -->
 <br/>
  <input name="img1" id="img" type="hidden" value=""/>

  
  <br/><label for="editor" style="line-height:15px !important;">想对大学生说的一句话</label>
  <textarea name="word" id="editor"></textarea><br>




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
  if ($.trim($("#name").val())=="") {    inputcheck('#name',".select1_nav",'标题不能为空');
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

