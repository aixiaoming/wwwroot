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
<script type="text/javascript" src="/emperor.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<title>【招聘】- 帮帮校园网</title>
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





<!-- 基本信息表单******************************开始 -->

<form id="message" method="post" action="recruit_sql.php">






<!--{if $check['id']!=""}-->
<!-- 这是修改删除的界面表单 -->

  <input type='hidden' name="editid" value="$editid"/>


<!-- 个人用户 ////////////////////////////////////////////////////////////////////////////-->
<!--{if $user['type']=="1"}-->

  <input type='text' name="class" id="class" value="$check['class']" style="display:none;" />
 
  <label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value="$check['title']" placeholder="请填写发布信息的标题"/>

  <br/><label for="position2"><a>* </a>期望职位</label>
  <input type='text' name="position2" id="position2" value="$check['position2']"/>

  <label for="wage">期望月薪</label>
  <input type='text' name="wage" id="wage" value="$check['wage']"/>

  <br/><label for="test">有无试用期</label>
  <select name="test" id="test">
    <option value="$check['test']">$check['test']</option> 
    <option value="不限">不限</option> 
    <option value="无试用期">无试用期</option> 
    <option value="有试用期">有试用期</option> 
  </select>

  <br/><label for="experience"><a>* </a>工作经验</label>
  <select name="experience" id="experience">
    <option value="$check['experience']">$check['experience']</option> 
    <option value="无">无</option> 
    <option value="1年">1年</option> 
    <option value="2年">2年</option> 
    <option value="3年">3年</option> 
    <option value="4年">4年</option> 
    <option value="5年及以上">5年及以上</option> 
  </select>

  <br/><label for="label">职位标签</label>
  <input type="checkbox" class="checkbox" name="label[]" value="五险一金" <!--{if $check['label1']!=""}--> checked="checked" <!--{/if}-->/>五险一金
  <input type="checkbox" class="checkbox" name="label[]" value="三险一金"  <!--{if $check['label2']!=""}--> checked="checked" <!--{/if}-->/>三险一金
  <input type="checkbox" class="checkbox" name="label[]" value="带薪年假"  <!--{if $check['label3']!=""}--> checked="checked" <!--{/if}-->/>带薪年假
  <input type="checkbox" class="checkbox" name="label[]" value="地铁沿线" <!--{if $check['label4']!=""}--> checked="checked" <!--{/if}-->/>地铁沿线
  <input type="checkbox" class="checkbox" name="label[]" value="包吃住" <!--{if $check['label5']!=""}--> checked="checked" <!--{/if}--> />包吃住
  <input type="checkbox" class="checkbox" name="label[]" value="双休"  <!--{if $check['label6']!=""}--> checked="checked" <!--{/if}-->/>双休
  <input type="checkbox" class="checkbox" name="label[]" value="单休" <!--{if $check['label7']!=""}--> checked="checked" <!--{/if}--> />单休

  <br/><label for="address"><a>* </a>期望工作地点</label>
  <input type='text' name="address" id="address" value="$check['address']"/>

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

  </br>
<!-- 这里是办公照片 -->

  <div class="wuimg" style="width:700px; min-height:125px; margin-left:171px; display:none;">
  <!--{eval loopimg($check);}-->
  </div>

<!-- 上传图片插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">个人照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
   </br>




  <br/><label for="description" style="height:125px !important; width:125px !important; float:left;">个人简介</label>
  <textarea name="description" id="editor">$check['description']</textarea>

  <br/><label for="name"><a>* </a>姓名</label>
  <input type='text' name="name" id="name" value="$check['name']"/>

  <label for="gender">性别</label>
  <select name="gender" id="gender">
    <option value="$check['gender']">$check['gender']</option> 
    <option value="男">男</option> 
    <option value="女">女</option> 
  </select> 

  <label for="old">年龄</label>
  <input type='text' name="old" id="old" value="$check['old']"/>
 

  <br/><label for="education">学历</label>
  <select name="education" id="education">
    <option value="$check['education']">$check['education']</option> 
    <option value="无">无</option> 
    <option value="大专">大专</option> 
    <option value="本科">本科</option> 
    <option value="研究生">研究生</option> 
    <option value="博士">博士</option> 
  </select> 
  
  <label for="school">毕业院校</label>
  <input type='text' name="school" id="school" value="$check['school']"/> 


  <br/><label for="linkqq">联系qq</label>
  <input type='number' name="linkqq" id="linkqq" value="$check['linkqq']"/>

  <label for="linkphone"><a>* </a>联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value="$check['linkphone']"/>

  <label for="linkemail">联系邮箱</label>
  <input type='text' name="linkemail" id="linkemail" value="$check['linkemail']"/>


<!-- 标记个人用户 -->
<input name="find" type="text" value="2" style="display:none;">


<!--{/if}-->



<!-- 单位用户 /////////////////////////////////////////////////////////////////////////////-->
<!--{if $user['type']=="2"}-->
 <input type='text' name="class" id="class" value="$check['class']" style="display:none;"/>



  <label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value="$check['title']"/>

  <br/><label for="danweiname"><a>* </a>单位名称</label>
  <input type='text' name="name" id="danweiname" value="$check['name']"/>

  <br/><label for="address"><a>* </a>工作地点</label>
  <input type='text' name="address" id="address" value="$check['address']"/>

  <br/><label for="position2"><a>* </a>职位</label>
  <input type='text' name="position2" id="position2" value="$check['position2']"/>

    <br/><label for="label">职位标签</label>
  <input type="checkbox" class="checkbox" name="label[]" value="五险一金" <!--{if $check['label1']!=""}--> checked="checked" <!--{/if}-->/>五险一金
  <input type="checkbox" class="checkbox" name="label[]" value="三险一金"  <!--{if $check['label2']!=""}--> checked="checked" <!--{/if}-->/>三险一金
  <input type="checkbox" class="checkbox" name="label[]" value="带薪年假"  <!--{if $check['label3']!=""}--> checked="checked" <!--{/if}-->/>带薪年假
  <input type="checkbox" class="checkbox" name="label[]" value="地铁沿线" <!--{if $check['label4']!=""}--> checked="checked" <!--{/if}-->/>地铁沿线
  <input type="checkbox" class="checkbox" name="label[]" value="包吃住" <!--{if $check['label5']!=""}--> checked="checked" <!--{/if}--> />包吃住
  <input type="checkbox" class="checkbox" name="label[]" value="双休"  <!--{if $check['label6']!=""}--> checked="checked" <!--{/if}-->/>双休
  <input type="checkbox" class="checkbox" name="label[]" value="单休" <!--{if $check['label7']!=""}--> checked="checked" <!--{/if}--> />单休

 <br/> <label for="experience"><a>* </a>工作经验</label>
  <select name="experience" id="experience">
    <option value="$check['experience']">$check['experience']</option> 
    <option value="无">无</option> 
    <option value="1年">1年</option> 
    <option value="2年">2年</option> 
    <option value="3年">3年</option> 
    <option value="4年">4年</option> 
    <option value="5年及以上">5年及以上</option> 
  </select>


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

  </br>
<!-- 这里是办公照片 -->

  <div class="wuimg" style="width:700px; min-height:125px; margin-left:171px; display:none;">
  <!--{eval loopimg($check);}-->
  </div>

<!-- 上传图片插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">办公照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
  </br>





  <br/><label for="state">职位描述</label>
  <textarea class="recruit_state" name="state" id="state">$check['state']</textarea>

  <br/><label for="people">招聘人数</label>
  <input type='number' name="people" id="people" value="$check['people']" placeholder=""/>

  <label for="wage">月薪</label>
  <input type='text' name="wage" id="wage" value="$check['wage']"/>
 
  <br/><label for="old">年龄要求</label>
  <input type='text' name="old" id="old" value="$check['old']"/>

  <label for="gender">性别要求</label>
  <select name="gender" id="gender">
    <option value="$check['gender']">$check['gender']</option> 
    <option value="不限">不限</option> 
    <option value="男">男</option> 
    <option value="女">女</option> 
  </select>

  <label for="education">学历要求</label>
  <select name="education" id="education">
    <option value="$check['education']">$check['education']</option> 
    <option value="不限">不限</option> 
    <option value="大专">大专</option> 
    <option value="本科">本科</option> 
    <option value="研究生">研究生</option> 
    <option value="博士">博士</option> 
  </select> 
  
  <br/><label for="test">有无试用期</label>
  <select name="test" id="test">
    <option value="$check['test']">$check['test']</option> 
    <option value="不限">不限</option> 
    <option value="无试用期">无试用期</option> 
    <option value="有试用期">有试用期</option> 
  </select>

  <br/><label for="fee">是否收费</label>
  <select name="fee" id="fee">
    <option value="$check['fee']">$check['fee']</option> 
    <option value="不限">不限</option> 
    <option value="不收费">不收费</option> 
    <option value="收费">收费</option> 
  </select>

  <br/><label for="description" style="height:125px !important; width:125px !important; float:left;">单位简介</label>
  <textarea name="description" id="editor">$check['description']</textarea>

  <br/><label for="linkman">联系人</label>
  <input type='text' name="linkman" id="linkman" value="$check['linkman']"/>
 
  <label for="linkqq">联系qq</label>
  <input type='number' name="linkqq" id="linkqq" value="$check['linkqq']"/>

  <label for="linkphone"><a>* </a>联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value="$check['linkphone']"/>

  <br/><label for="linkemail">联系邮箱</label>
  <input type='text' name="linkemail" id="linkemail" value="$check['linkemail']"/>
<!-- 标记单位用户 -->
<input name="find" type="text" value="1" style="display:none;">
<!--{/if}-->
 








<!--{else}-->
<!-- 这是发布的界面表单 -->







<!-- 个人用户 ////////////////////////////////////////////////////////////////////////////-->
<!--{if $user['type']=="1"}-->

  <input type='text' name="class" id="class" value="$classname" style="display:none;" />
 
  <label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" placeholder="请填写发布信息的标题"/>



  <br/><label for="position2"><a>* </a>期望职位</label>
  <input type='text' name="position2" id="position2" value=""/>



  <label for="wage">期望月薪</label>
  <input type='text' name="wage" id="wage" value=""/>

  <br/><label for="test">有无试用期</label>
  <select name="test" id="test">
    <option value="不限">不限</option> 
    <option value="无试用期">无试用期</option> 
    <option value="有试用期">有试用期</option> 
  </select>

  <br/><label for="experience"><a>* </a>工作经验</label>
  <select name="experience" id="experience">
    <option value="无">无</option> 
    <option value="1年">1年</option> 
    <option value="2年">2年</option> 
    <option value="3年">3年</option> 
    <option value="4年">4年</option> 
    <option value="5年及以上">5年及以上</option> 
  </select>

    <br/><label for="label">职位标签</label>
  <input type="checkbox" class="checkbox" name="label[]" value="五险一金" />五险一金
  <input type="checkbox" class="checkbox" name="label[]" value="三险一金" />三险一金
  <input type="checkbox" class="checkbox" name="label[]" value="带薪年假" />带薪年假
  <input type="checkbox" class="checkbox" name="label[]" value="地铁沿线" />地铁沿线
  <input type="checkbox" class="checkbox" name="label[]" value="包吃住" />包吃住
  <input type="checkbox" class="checkbox" name="label[]" value="双休" />双休
  <input type="checkbox" class="checkbox" name="label[]" value="单休" />单休


  <br/><label for="address"><a>* </a>期望工作地点</label>
  <input type='text' name="address" id="address" value=""/>

  <br/><label for="area">地区</label>
  <select name="area" id="area">
    <option value="0">不限</option> 
  <!--{loop $area $key3}-->
    <option value="$key3['id']">$key3['name']</option> 
  <!--{/loop}--> 
  </select> 

  </br>
<!-- 这里是物品上传过的办公照片 -->
  <div class="wuimg" style="width:800px; min-height:125px; margin-left:171px; display:none;"></div>
<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">个人照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
   </br>



  <br/><label for="description"  style="height:125px !important; width:125px !important; float:left;">个人简介</label>
  <textarea name="description" id="editor"></textarea>



  <br/><label for="name"><a>* </a>姓名</label>
  <input type='text' name="name" id="name" value=""/>

  <label for="gender">性别</label>
  <select name="gender" id="gender">
    <option value="男">男</option> 
    <option value="女">女</option> 
  </select> 

  <label for="old">年龄</label>
  <input type='text' name="old" id="old" value=""/>
 

  <br/><label for="education">学历</label>
  <select name="education" id="education">
    <option value="无">无</option> 
    <option value="大专">大专</option> 
    <option value="本科">本科</option> 
    <option value="研究生">研究生</option> 
    <option value="博士">博士</option> 
  </select> 
  
  <label for="school">毕业院校</label>
  <input type='text' name="school" id="school" value=""/> 


  <br/><label for="linkqq">联系qq</label>
  <input type='number' name="linkqq" id="linkqq" value=""/>

  <label for="linkphone"><a>* </a>联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value=""/>

  <label for="linkemail">联系邮箱</label>
  <input type='text' name="linkemail" id="linkemail" value=""/>


<!-- 标记个人用户 -->
<input name="find" type="text" value="2" style="display:none;">


<!--{/if}-->



<!-- 单位用户 /////////////////////////////////////////////////////////////////////////////-->
<!--{if $user['type']=="2"}-->
 <input type='text' name="class" id="class" value="$classname" style="display:none;"/>

  <label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value=""/>

  <br/><label for="danweiname"><a>* </a>单位名称</label>
  <input type='text' name="name" id="danweiname" value=""/>

  <br/><label for="address"><a>* </a>工作地点</label>
  <input type='text' name="address" id="address" value=""/>

  <br/><label for="area">地区</label>
  <select name="area" id="area">
    <option value="0">不限</option> 
  <!--{loop $area $key3}-->
    <option value="$key3['id']">$key3['name']</option> 
  <!--{/loop}--> 
  </select> 

  <br/><label for="position2"><a>* </a>职位</label>
  <input type='text' name="position2" id="position2" value=""/>

    <br/><label for="label">职位标签</label>
  <input type="checkbox" class="checkbox" name="label[]" value="五险一金" />五险一金
  <input type="checkbox" class="checkbox" name="label[]" value="三险一金" />三险一金
  <input type="checkbox" class="checkbox" name="label[]" value="带薪年假" />带薪年假
  <input type="checkbox" class="checkbox" name="label[]" value="地铁沿线" />地铁沿线
  <input type="checkbox" class="checkbox" name="label[]" value="包吃住" />包吃住
  <input type="checkbox" class="checkbox" name="label[]" value="双休" />双休
  <input type="checkbox" class="checkbox" name="label[]" value="单休" />单休


  <br/><label for="experience"><a>* </a>工作经验</label>
  <select name="experience" id="experience">
    <option value="无">无</option> 
    <option value="1年">1年</option> 
    <option value="2年">2年</option> 
    <option value="3年">3年</option> 
    <option value="4年">4年</option> 
    <option value="5年及以上">5年及以上</option> 
  </select>



  </br>
<!-- 这里是物品上传过的办公照片 -->
  <div class="wuimg" style="width:800px; min-height:125px; margin-left:171px; display:none;"></div>
<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">办公照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
  </br>




  <br/><label for="state" style=" width:125px !important; float:left;">职位描述</label>
  <textarea class="recruit_state" name="state" id="state"></textarea>

  <br/><label for="people">招聘人数</label>
  <input type='number' name="people" id="people" placeholder=""/>

  <label for="wage">月薪</label>
  <input type='text' name="wage" id="wage" value=""/>

 
  <br/><label for="old">年龄要求</label>
  <input type='text' name="old" id="old" value=""/>

  <label for="gender">性别要求</label>
  <select name="gender" id="gender">
    <option value="">不限</option> 
    <option value="男">男</option> 
    <option value="女">女</option> 
  </select>

  <label for="education">学历要求</label>
  <select name="education" id="education">
    <option value="不限">不限</option> 
    <option value="大专">大专</option> 
    <option value="本科">本科</option> 
    <option value="研究生">研究生</option> 
    <option value="博士">博士</option> 
  </select> 
  
  <br/><label for="test">有无试用期</label>
  <select name="test" id="test">
    <option value="不限">不限</option> 
    <option value="无试用期">无试用期</option> 
    <option value="有试用期">有试用期</option> 
  </select>

  <br/><label for="fee">是否收费</label>
  <select name="fee" id="fee">
    <option value="不限">不限</option> 
    <option value="不收费">不收费</option> 
    <option value="收费">收费</option> 
  </select>

  <br/><label for="description" style="height:125px !important; width:125px !important; float:left;">单位简介</label>
  <textarea name="description" id="editor"></textarea>

  <br/><label for="linkman">联系人</label>
  <input type='text' name="linkman" id="linkman" value=""/>
 
  <label for="linkqq">联系qq</label>
  <input type='number' name="linkqq" id="linkqq" value=""/>

  <label for="linkphone"><a>* </a>联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value=""/>

  <br/><label for="linkemail">联系邮箱</label>
  <input type='text' name="linkemail" id="linkemail" value=""/>
<!-- 标记单位用户 -->
<input name="find" type="text" value="1" style="display:none;">
<!--{/if}-->





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

<!-- 基本信息表单*******************结束 -->




<!-- 这个是上传图片的表单 -->
      <input id="fileupload" type="file" name="mypic" style="display:none;">




</div>
  <!-- 这里是大框架的结束 -->

<!-- 这里是尾部 -->
<div class="edit_footer">
<center><a>©Bangbangdream.com</a></center>
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
  }else if($("#danweiname").attr('type')=="text" && $.trim($("#danweiname").val())==""){    inputcheck('#danweiname',"#danweiname",'单位名称不能为空');
  }else if($("#name").attr('type')=="text" && $.trim($("#name").val())==""){    inputcheck('#name',"#name",'姓名不能为空');
  }else if($.trim($("#position2").val())==""){    inputcheck('#position2',"#position2",'职位不能为空');
  }else if($.trim($("#address").val())==""){    inputcheck('#address',"#address",'工作地点不能为空');
  }else if($.trim($("#experience").val())==""){    inputcheck('#experience',"#experience",'工作经验不能为空');
  }else if($.trim($("#linkphone").val())==""){    inputcheck('#linkphone',"#linkphone",'联系手机不能为空');
  }else{
    var reg = /^1[3|4|5|8][0-9]\d{4,8}$/;
    if(!reg.test($.trim($("#linkphone").val()))){    inputcheck('#linkphone',"#linkqq",'请输入正确的手机号'); 
    }else{       $(".submit2").trigger("click");    }
  }
});

</script>

</body>
</html>
