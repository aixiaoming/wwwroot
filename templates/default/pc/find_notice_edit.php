<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="$dir/style.css">
<!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config1.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/jquery.form.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
  <script type="text/javascript" src="/emperor.js"></script>

<title>【失物招领】- 帮帮校园网</title>

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





<!-- 基本信息表单* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 开始 -->

 <form id="message" method="post" action="find_notice_sql.php">



<!--{if $check['area']!=""}-->
<!-- 这是修改删除的界面表单 -->
  <input type='hidden' name="editid" value="$editid"/>

 <br/><label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value="$check['title']" placeholder="请填写物品的标题"/>


  <br/><label for="area">地区</label>
  <select name="area" id="area">
    <option value="$check['area']">$areaname</option>
  <!--{if $check['area']!='0'}-->
    <option value="0">不限</option> 
  <!--{/if}-->
  <!--{loop $area $key5}-->
  <!--{if $check['area']!=$key5['id']}-->
    <option value="$key5['id']">$key5['name']</option> 
  <!--{/if}-->
  <!--{/loop}--> 
  </select>  

  <br/><label for="address"><a>* </a>所在高校</label>
  <input type='text' name="address" id="address" value="$check['address']" placeholder="请输入所在高校"/>
  </br>


<!-- 这里是物品照片 -->



<!-- 上传图片插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">物品照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">
  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
  <div class="wuimg" style="width:700px; min-height:125px; margin-left:171px; display:none;">
  <!--{eval loopimg($check);}-->
  </div>
 
  <br/><br/><label for="editor" style="height:200px !important; width:125px !important; float:left;">描述</label>
  <textarea name="description" id="editor">$check['description']</textarea>



  <br/><label for="linkman"><a>* </a>联系人</label>
  <input type='text' name="linkman" id="linkman" value="$check['linkman']"/>

  <br/><label for="linkqq"><a>* </a>联系qq</label>
  <input type='text' name="linkqq" id="linkqq" value="$check['linkqq']"/>

  <br/><label for="linkphone"><a>* </a>联系电话</label>
  <input type='text' name="linkphone" id="linkphone" value="$check['linkphone']"/>




<!--{else}-->
<!-- 这是发布的界面表单 -->





  <br/><label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value="" placeholder="请填写物品的标题"/>

  
  <br/><label for="area">地区</label>
  <select name="area" id="area">
    <option value="0">不限</option> 
  <!--{loop $area $key3}-->
    <option value="$key3['id']">$key3['name']</option> 
  <!--{/loop}--> 
  </select>  

  <br/><label for="address"><a>* </a>所在高校</label>
  <input type='text' name="address" id="address" value="" placeholder="请输入所在高校"/>
  </br>



<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">物品照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">
    <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
<!-- 这里是物品上传过的照片 -->
  <div class="wuimg" style="width:800px; min-height:125px; margin-left:171px; display:none;"></div>

  <br/><br/><label for="editor" style="height:200px !important; width:125px !important; float:left;">描述</label>
  <textarea name="description" id="editor"></textarea>

  <br/><label for="linkman"><a>* </a>联系人</label>
  <input type='text' name="linkman" id="linkman" value=""/>

  <br/><label for="linkqq"><a>* </a>联系qq</label>
  <input type='text' name="linkqq" id="linkqq" value=""/>

  <br/><label for="linkphone"><a>* </a>联系电话</label>
  <input type='text' name="linkphone" id="linkphone" value=""/>



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

<!-- 基本信息表单* * * * * * * * * * * * * * * * * * * 结束 -->




<!-- 这个是上传图片的表单 -->
      <input id="fileupload" type="file" name="mypic" style="display:none;">



</div>
  <!-- 这里是大框架的结束 -->

<!-- 这里是尾部 -->
<div class="edit_footer">
<center><a>bangbang.com</a></center>
</div>
<script type="text/javascript">
$(function(){
  $('#province').change(function(){
    $('#city option:not(:first)').remove();
    $('#area option:not(:first)').remove();
    var province=$(this).val();
          // alert(province);
    if ($('#province').val()!='0') {
      // 省份选择不为空
      var url = "/cityselect.php";
      var args = {'province':province};
      $.getJSON(url, args, function(data){
        if (data.pic.length == 0) {
          alert("当前省份没有城市");
        }else{
          for (var i = 0; i < data.pic.length; i++) {
            var cityId = data.pic[i]['id'];
            var cityName = data.pic[i]['name'];

            $('#city').append("<option value='" + cityId + "'>" + cityName + "</option>");
          };
        };
      });
    };
  });

  $('#city').change(function(){
    $('#area option:not(:first)').remove();
    var city=$(this).val();
    if ($('#city').val()!='0') {
      // 区域选择不为空
      var url = "/cityselect.php";
      var args = {'city':city};
      $.getJSON(url, args, function(data){
        if (data.pic2.length == 0) {
          alert("当前城市没有区域");
        }else{
          for (var i = 0; i < data.pic2.length; i++) {
            var areaId = data.pic2[i]['id'];
            var areaName = data.pic2[i]['name'];

            $('#area').append("<option value='" + areaId + "'>" + areaName + "</option>");
          };
        };
      });
    };
  });
})
// 百度编辑器
// 
// 
  var ue = UE.getEditor('editor');
</script>
<script type="text/javascript">

inputclear('#CCCCCC');

$('#submitbutton').click(function(){
  if ($.trim($("#title").val())=="") {    inputcheck('#title',".select1_nav",'标题不能为空');
  }else if($.trim($("#address").val())==""){    inputcheck('#address',"#title",'所在高校不能为空');
  }else if($.trim($("#linkman").val())==""){    inputcheck('#linkman',"#address",'联系人不能为空');
  }else if($.trim($("#linkqq").val())==""){    inputcheck('#linkqq',"#linkman",'联系QQ不能为空');
  }else if($.trim($("#linkphone").val())==""){    inputcheck('#linkphone',"#linkqq",'联系手机不能为空');
  }else{
    var re=/^[1-9][0-9]{4,}$/;
    var reg = /^1[3|4|5|8][0-9]\d{4,8}$/;
    if(!re.test($("#linkqq").val())){    inputcheck('#linkqq',"#linkman",'请输入正确的QQ号');    
    }else if(!reg.test($.trim($("#linkphone").val()))){    inputcheck('#linkphone',"#linkqq",'请输入正确的手机号'); 
    }else{       $(".submit2").trigger("click");    }
  }
});

</script>
</body>
</html>

