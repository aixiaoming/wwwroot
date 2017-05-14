<html>
<head>
  <title>【会员管理】- 帮帮校园网</title>
  <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
  <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="renderer" content="webkit">
</head>

<style>
  .poin{cursor:pointer}
</style>

<!--{template user_header}-->

<div class="type_container">


  <!-- 左侧导航菜单 -->
  <!--{template user_side}-->

  <div class="vippay">
    <span class="top_span">会员管理</span>
    <div class="bar">
      <label>会员总览</label>
    </div>
    <div class="num">
      <div class="left">
        <a href="./alluser.php?type=1"><label class="poin">注册个人会员:</label></a><br>
        <a href="./alluser.php?type=2"><label class="poin">注册单位会员:</label></a><br>
        <a href="./alluser.php?type=3"><label class="poin">315俱乐部会员:</label></a><br>
        <a href="./alluser.php?type=6"><label class="poin">社会个人认证会员:</label></a><br>
        <a href="./alluser.php?type=4"><label class="poin">实名验证会员:</label></a><br>
        <a href="./alluser.php?type=5"><label class="poin">企业VIP会员:</label></a><br>
      </div>
      <div class="right">
        <a href="./alluser.php?type=1"><label class="poin">$num1</label></a><br>
        <a href="./alluser.php?type=2"><label class="poin">$num2</label></a><br>
        <a href="./alluser.php?type=3"><label class="poin">$usernum</label></a><br>
        <a href="./alluser.php?type=6"><label class="poin">$social</label></a><br>
        <a href="./alluser.php?type=4"><label class="poin">$realnum</label></a><br>
        <a href="./alluser.php?type=5"><label class="poin">$realvip</label></a><br>
      </div>
    </div>
    <div class="bar">
      <label>待续费vip</label>
    </div>
    <!--{if $uservip==Array ( )}-->
    <div class="empty">还没有过期的企业vip会员哦</div>
    <!--{elseif $uservip!=Array ( )}-->
    <!--{loop $uservip $key}-->
    <div class="list">
      <div class="left">
        <label>用户昵称：</label><label>$key['username']</label><br>
        <label>手机：</label><label>$key['phone']</label><br>
        <label>座机：</label><label>$key['tel']</label><br>

      </div>
      <div class="right">
        <label>单位名称：</label><label>$key['name']</label><br>
        <label>地址：</label><label>$key['address']</label><br>
      </div>
      <form method="post" action="vippaypay.php">
        <input name="opinion" type="radio" value="agree"/><label>延期</label>
        <input name="opinion" type="radio" value="disagree"/><label>删除</label><br>
        <input name="userid" type="hidden" value="$key['id']">
        <input type="submit" name="submit" value="确定" class="submit"/>
      </form>
    </div>
    <!--{/loop}-->
    $ruiqia_page
    <!--{/if}-->


  </div>


</div>
<!--{template user_footer}-->


</html>