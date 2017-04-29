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
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<script type="text/javascript" src="/layer/layer/layer.js"></script>
<script type="text/javascript" src="/emperor.js"></script>

<title>【实习】- 帮帮校园网</title>
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

<form id="message" method="post" action="intern_sql.php">


<!--{if $check['id']!=""}-->
<!-- 这是修改删除的界面表单 -->
  <input type='hidden' name="editid" value="$editid"/>


<!--{if $user['type']=="1"}-->

  <input type='text' name="class" id="class" value="$check['class']" style="display:none;" />

  <label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value="$check['title']"/>


  <br/>
<!-- 上传图片插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">个人照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
  <br/>
<!-- 这里是办公照片 -->

  <div class="wuimg" style="width:700px; min-height:125px; margin-left:171px; display:none;">
  <!--{eval loopimg($check);}-->
  </div>


  <br/><label for="position2"><a>* </a>职位</label>
  <input type='text' name="position2" id="position2" value="$check['position2']"/>
  
  <label for="label">职位标签</label>
  <input type="checkbox" class="checkbox" name="label[]" value="日结" <!--{if $check['label1']!=""}--> checked="checked" <!--{/if}-->/>日结
  <input type="checkbox" class="checkbox" name="label[]" value="月结"  <!--{if $check['label2']!=""}--> checked="checked" <!--{/if}-->/>月结
  <input type="checkbox" class="checkbox" name="label[]" value="完工结"  <!--{if $check['label3']!=""}--> checked="checked" <!--{/if}-->/>完工结

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
 
  <label for="worktime">工作时间</label>
  <input type='text' name="worktime" id="worktime" value="$check['worktime']"/>

  <br/><label for="wage">期望薪资</label>
  <input type='text' name="wage" id="wage" value="$check['wage']"/>

  <label for="wagetime">工资结算时间</label>
  <input type='text' name="wagetime" id="wagetime" value="$check['wagetime']"/>

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

  <br/><label for="begintime">实习开始时间</label>
  <input type='date' name="begintime" id="begintime" value="$check['begintime']"/>
   
  <label for="lasttime">实习结束时间</label>
  <input type='date' name="lasttime" id="lasttime" placeholder="$check['lasttime']"/>




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
 
  <br/><label for="education"><a>* </a>学历</label>
  <select name="education" id="education">
    <option value="$check['education']">$check['education']</option> 
    <option value="大专">大专</option> 
    <option value="本科">本科</option> 
    <option value="研究生">研究生</option> 
    <option value="博士">博士</option> 
  </select>

  <label for="school"><a>* </a>所在高校</label>
  <input type='text' name="school" id="school" value="$check['school']"/> 

  <br/><label for="description" style="height:125px !important; width:125px !important; float:left;">个人简介</label>
  <textarea name="description" id="editor">$check['description']</textarea>

  <br/><label for="linkman">联系人</label>
  <input type='text' name="linkman" id="linkman" value="$check['linkman']"/>
 
  <label for="linkqq">联系qq</label>
  <input type='number' name="linkqq" id="linkqq" value="$check['linkqq']"/>

  <br/><label for="linkphone"><a>* </a>联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value="$check['linkphone']"/>

  <label for="linkemail">联系邮箱</label>
  <input type='text' name="linkemail" id="linkemail" value="$check['linkemail']"/>

<!-- 这是个人会员标志 -->
<input type="text" name="find" value="2" style="display:none;">



<!--{/if}-->




<!--{if $user['type']=="2"}-->
<!-- 实习类型 -->
  <input type='text' name="class" id="class" value="$check['class']" style="display:none;" />

  <br/><label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value="$check['title']"/>

  <br/><label for="danweiname"><a>* </a>单位名称</label>
  <input type='text' name="name" id="danweiname" value="$check['name']"/>





  <br/>
<!-- 上传图片插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">办公照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
  <br/>
<!-- 这里是办公照片 -->

  <div class="wuimg" style="width:700px; min-height:125px; margin-left:171px; display:none;">
  <!--{eval loopimg($check);}-->
  </div>

  <br/><label for="description" style="height:125px !important; width:125px !important; float:left;">单位简介</label>
  <textarea name="description" id="editor">$check['description']</textarea>
 



  <br/><label for="position2"><a>* </a>实习职位</label>
  <input type='text' name="position2" id="position2" value="$check['position2']"/>
 
  <label for="label">职位标签</label>
  <input type="checkbox" class="checkbox" name="label[]" value="日结" <!--{if $check['label1']!=""}--> checked="checked" <!--{/if}-->/>日结
  <input type="checkbox" class="checkbox" name="label[]" value="月结"  <!--{if $check['label2']!=""}--> checked="checked" <!--{/if}-->/>月结
  <input type="checkbox" class="checkbox" name="label[]" value="完工结"  <!--{if $check['label3']!=""}--> checked="checked" <!--{/if}-->/>完工结


  <br/><label for="duty" style=" width:125px !important; float:left;">岗位职责</label>
  <textarea class="recruit_state" name="duty" id="duty">$check['duty']</textarea>
  
  <br/><label for="demand" style=" width:125px !important; float:left;">任职要求</label>
  <textarea class="recruit_state" name="demand" id="demand">$check['demand']</textarea>

  <br/><label for="gender">性别要求</label>
  <select name="gender" id="gender">
    <option value="$check['gender']">$check['gender']</option> 
    <option value="男">男</option> 
    <option value="女">女</option> 
  </select>

  <label for="old">年龄要求</label>
  <input type='text' name="old" id="old" value="$check['old']"/>

  <br/><label for="education"><a>* </a>学历要求</label>
  <select name="education" id="education">
    <option value="$check['education']">$check['education']</option> 
    <option value="大专">大专</option> 
    <option value="本科">本科</option> 
    <option value="研究生">研究生</option> 
    <option value="博士">博士</option> 
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
 
  <br/><label for="wage">工资</label>
  <input type='text' name="wage" id="wage" value="$check['wage']"/>

  <label for="wagetime">工资结算时间</label>
  <input type='text' name="wagetime" id="wagetime" value="$check['wagetime']"/>



  <br/><label for="begintime">实习开始时间</label>
  <input type='date' name="begintime" id="begintime" value="$check['begintime']"/>
   
  <label for="lasttime">实习结束时间</label>
  <input type='date' name="lasttime" id="lasttime" placeholder="$check['lasttime']"/>

  <br/><label for="people">招聘人数</label>
  <input type='number' name="people" id="people" placeholder="$check['people']"/>

  <label for="worktime">工作时间</label>
  <input type='text' name="worktime" id="worktime" value="$check['worktime']"/>
 
  <br/><label for="address"><a>* </a>工作地点</label>
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

  <br/><label for="other_state" style="height:125px !important; width:125px !important; float:left;">职位描述</label>
  <textarea name="other_state" id="editor4">$check['other_state']</textarea>

  <br/><label for="linkman">联系人</label>
  <input type='text' name="linkman" id="linkman" value="$check['linkman']"/>

  <label for="linkqq">联系qq</label>
  <input type='number' name="linkqq" id="linkqq" value="$check['linkqq']"/>

  <br/><label for="linkphone"><a>* </a>联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value="$check['linkphone']"/>

  <label for="linkemail">联系邮箱</label>
  <input type='text' name="linkemail" id="linkemail" value="$check['linkemail']"/>

  <label for="fee">是否收费</label>
  <select name="fee" id="fee">
    <option <!--{if $check['fee']=='不限'}-->selected = "selected"<!--{/if}--> value="不限">不限</option> 
    <option <!--{if $check['fee']=='不收费'}-->selected = "selected"<!--{/if}--> value="不收费">不收费</option> 
    <option <!--{if $check['fee']=='收费'}-->selected = "selected"<!--{/if}--> value="收费">收费</option> 
  </select>
<!-- 这是单位会员标志 -->
<input type="text" name="find" value="1" style="display:none;">
<!--{/if}-->




<!--{else}-->
<!-- 这是发布的界面表单 -->





<!--{if $user['type']=="1"}-->
  <input type='text' name="class" id="class" value="$classname" style="display:none;" />

  <label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value=""/>




<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">个人照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
  <br/>
<!-- 这里是物品上传过的照片 -->
  <div class="wuimg" style="width:800px; min-height:125px; margin-left:171px; display:none;"></div>
  <br/>




  <br/><label for="position2"><a>* </a>职位</label>
  <input type='text' name="position2" id="position2" value=""/>
  
  <br/><label for="label">职位标签</label>
  <input type="checkbox" class="checkbox" name="label[]" value="日结" />日结
  <input type="checkbox" class="checkbox" name="label[]" value="月结" />月结
  <input type="checkbox" class="checkbox" name="label[]" value="完工结" />完工结


  <br/><label for="experience"><a>* </a>工作经验</label>
  <select name="experience" id="experience">
    <option value="无">无</option> 
    <option value="1年">1年</option> 
    <option value="2年">2年</option> 
    <option value="3年">3年</option> 
    <option value="4年">4年</option> 
    <option value="5年及以上">5年及以上</option> 
  </select>
 
  <label for="worktime">工作时间</label>
  <input type='text' name="worktime" id="worktime" value=""/>

  <br/><label for="wage">期望薪资</label>
  <input type='text' name="wage" id="wage" value=""/>

  <label for="wagetime">工资结算时间</label>
  <input type='text' name="wagetime" id="wagetime" value=""/>

  <br/><label for="address"><a>* </a>期望工作地点</label>
  <input type='text' name="address" id="address" value=""/>

  <br/><label for="area">地区</label>
  <select name="area" id="area">
    <option value="0">不限</option> 
  <!--{loop $area $key3}-->
    <option value="$key3['id']">$key3['name']</option> 
  <!--{/loop}--> 
  </select> 

  <br/><label for="begintime">实习开始时间</label>
  <input type='date' name="begintime" id="begintime" value=""/>
   
  <label for="lasttime">实习结束时间</label>
  <input type='date' name="lasttime" id="lasttime" placeholder=""/>





  <br/><label for="name"><a>* </a>姓名</label>
  <input type='text' name="name" id="name" value=""/>
  
  <label for="gender">性别</label>
  <select name="gender" id="gender">
    <option value="男">男</option> 
    <option value="女">女</option> 
  </select>

  <label for="old">年龄</label>
  <input type='text' name="old" id="old" value=""/>
 
  <br/><label for="education"><a>* </a>学历</label>
  <select name="education" id="education">
    <option value="无">无</option> 
    <option value="大专">大专</option> 
    <option value="本科">本科</option> 
    <option value="研究生">研究生</option> 
    <option value="博士">博士</option> 
  </select>

  <label for="school"><a>* </a>所在高校</label>
  <input type='text' name="school" id="school" value=""/> 

  <br/><label for="description" style="height:125px !important; width:125px !important; float:left;">个人简介</label>
  <textarea name="description" id="editor"></textarea>

  <br/><label for="linkman">联系人</label>
  <input type='text' name="linkman" id="linkman" value=""/>
 
  <label for="linkqq">联系qq</label>
  <input type='number' name="linkqq" id="linkqq" value=""/>

  <br/><label for="linkphone"><a>* </a>联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value=""/>

  <label for="linkemail">联系邮箱</label>
  <input type='text' name="linkemail" id="linkemail" value=""/>

<!-- 这是个人会员标志 -->
<input type="text" name="find" value="2" style="display:none;">



<!--{/if}-->




<!--{if $user['type']=="2"}-->
<!-- 实习类型 -->
  <input type='text' name="class" id="class" value="$classname" style="display:none;" />

  <br/><label for="title"><a>* </a>标题</label>
  <input type='text' name="title" id="title" value=""/>



<!-- 这是上传图片的插件开始 -->
  </br><label for="userlogoimg" style="height:125px !important; width:125px !important; float:left;">办公照片</label>
  <img src="/tupian/点击上传.png" onerror=this.src="/data/userface/head.gif"  title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" style="height:125px !important; width:125px !important;" onclick="document.getElementById('fileupload').click()">  <a class="tishi">图片格式要求为jpg格式，<span class="tishi1"></span>张，还可上传<span class="tishi2"></span>张</a>
<!-- 上传图片插件结束 -->
  <br/>
<!-- 这里是物品上传过的照片 -->
  <div class="wuimg" style="width:800px; min-height:125px; margin-left:171px; display:none;"></div>
  <br/>



  <br/><label for="danweiname"><a>* </a>单位名称</label>
  <input type='text' name="name" id="danweiname" value=""/>

  <br/><label for="description"  style="height:125px !important; width:125px !important; float:left;">单位简介</label>
  <textarea name="description" id="editor"></textarea>
 



  <br/><label for="position2"><a>* </a>实习职位</label>
  <input type='text' name="position2" id="position2" value=""/>
 
  <br/><label for="label">职位标签</label>
  <input type="checkbox" class="checkbox" name="label[]" value="日结" />日结
  <input type="checkbox" class="checkbox" name="label[]" value="月结" />月结
  <input type="checkbox" class="checkbox" name="label[]" value="完工结" />完工结

  <br/><label for="duty" style=" width:125px !important; float:left;">岗位职责</label>
  <textarea class="recruit_state" name="duty" id="duty"></textarea>
  

  <br/><label for="demand" style=" width:125px !important; float:left;">任职要求</label>
  <textarea class="recruit_state" name="demand" id="demand"></textarea>

  <br/><label for="gender">性别要求</label>
  <select name="gender" id="gender">
    <option value="不限">不限</option> 
    <option value="男">男</option> 
    <option value="女">女</option> 
  </select>

  <label for="old">年龄要求</label>
  <input type='text' name="old" id="old" value=""/>

  <br/><label for="education"><a>* </a>学历要求</label>
  <select name="education" id="education">
    <option value="无">无</option> 
    <option value="大专">大专</option> 
    <option value="本科">本科</option> 
    <option value="研究生">研究生</option> 
    <option value="博士">博士</option> 
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
 
  <br/><label for="wage">工资</label>
  <input type='text' name="wage" id="wage" value=""/>

  <label for="wagetime">工资结算时间</label>
  <input type='text' name="wagetime" id="wagetime" value=""/>



  <br/><label for="begintime">实习开始时间</label>
  <input type='date' name="begintime" id="begintime" value=""/>
   
  <label for="lasttime">实习结束时间</label>
  <input type='date' name="lasttime" id="lasttime" placeholder=""/>

  <br/><label for="people">招聘人数</label>
  <input type='number' name="people" id="people" placeholder=""/>

  <label for="worktime">工作时间</label>
  <input type='text' name="worktime" id="worktime" value=""/>
 
  <br/><label for="address"><a>* </a>工作地点</label>
  <input type='text' name="address" id="address" value=""/>

  <br/><label for="area">地区</label>
  <select name="area" id="area">
    <option value="0">不限</option> 
  <!--{loop $area $key3}-->
    <option value="$key3['id']">$key3['name']</option> 
  <!--{/loop}--> 
  </select> 

  <br/><label for="other_state" style="height:125px !important; width:125px !important; float:left;">职位描述</label>
  <textarea name="other_state" id="editor4"></textarea>

  <br/><label for="linkman">联系人</label>
  <input type='text' name="linkman" id="linkman" value=""/>

  <label for="linkqq">联系qq</label>
  <input type='number' name="linkqq" id="linkqq" value=""/>

  <br/><label for="linkphone"><a>* </a>联系电话</label>
  <input type='number' name="linkphone" id="linkphone" value=""/>

  <label for="linkemail">联系邮箱</label>
  <input type='text' name="linkemail" id="linkemail" value=""/>

  <label for="fee">是否收费</label>
  <select name="fee" id="fee">
    <option value="">不限</option> 
    <option value="不收费">不收费</option> 
    <option value="收费">收费</option> 
  </select>
<!-- 这是单位会员标志 -->
<input type="text" name="find" value="1" style="display:none;">
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



<!-- 这个是上传图片的表单 -->
      <input id="fileupload" type="file" name="mypic" style="display:none;">
<!-- 基本信息表单*******************结束 -->


</div>
  <!-- 这里是大框架的结束 -->

<!-- 这里是尾部 -->
<div class="edit_footer">
<center><a>©Bangbangdream.com</a></center>
</div>



</body>
</html>
<script type="text/javascript">
  var ue = UE.getEditor('editor');
  var ue = UE.getEditor('editor4');
</script>
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
  }else if($.trim($("#position2").val())==""){    inputcheck('#position2',"#position2",'职位不能为空');
  }else if($.trim($("#address").val())==""){    inputcheck('#address',"#address",'工作地点不能为空');
  }else if($.trim($("#education").val())==""){    inputcheck('#education',"#education",'学历不能为空');
  }else if($("#school").attr('type')=="text" && $.trim($("#school").val())==""){    inputcheck('#school',"#school",'所在高校不能为空');
  }else if($.trim($("#experience").val())==""){    inputcheck('#experience',"#experience",'工作经验不能为空');
  }else if($("#danweiname").attr('type')=="text" && $.trim($("#danweiname").val())==""){    inputcheck('#danweiname',"#danweiname",'单位名称不能为空');
  }else if($("#name").attr('type')=="text" && $.trim($("#name").val())==""){    inputcheck('#name',"#name",'姓名不能为空');
  }else if($.trim($("#linkphone").val())==""){    inputcheck('#linkphone',"#linkphone",'联系手机不能为空');
  }else{
    var reg = /^1[3|4|5|8][0-9]\d{4,8}$/;
    if(!reg.test($.trim($("#linkphone").val()))){    inputcheck('#linkphone',"#linkphone",'请输入正确的手机号'); 
    }else{       $(".submit2").trigger("click");    }
  }
});

</script>