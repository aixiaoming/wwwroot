<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
  <title>会员期限 - 帮帮校园网</title>
  <meta name="viewport" content="initial-scale=1, user-scalable=0, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" type="text/css" href="./templates/default/mobile/user_style.css">
  <script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/jquery.form.js"></script>
  <script src="/lib/waitMe.js"></script>
  <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
  <script src='/lib/sweetalert.js'></script>
  <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
  <script src='/lib/ruiqia.js'></script>
</head>

<body>
<!--{template user_header}-->

<div style="width: 100%;margin-top: 100px;">

  <div style="margin-left: 10%;">
    <span>　用户名 :　</span>
    <b><label>$user['username']</label></b><br>
    <!--{if $user['test']==5}-->
    <!--{if $user['vip']==1}-->
    <label>您的会员已到期，请等待网站负责人通知续费</label>
    <!--{/if}-->
    <!--{if $user['vip']==0}-->
    <!--{if $user['type']==1}-->
    <label  class="pay">您的会员已到期，请重新申请成为会员。</label>
    <!--{/if}-->
    <!--{if $user['type']==2}-->
    <label class="pay">您的会员已到期，请</label>
    <form method="post" action="/alipay/alipayapi2.php">
      <input name="WIDout_trade_no" type="hidden" value="$user['id']">
      <input name="WIDsubject" type="hidden" value="帮帮校园网实名验证会员">
      <input name="WIDtotal_fee" type="hidden" value="100">
      <input name="WIDshow_url" type="hidden" value="http://www.bangbangdream.com/user_checkrmb.php">
      <input type="submit" value="续费"  class="submit">
    </form>
    <!--{/if}-->
    <!--{/if}-->

    <!--{/if}-->
    <!--{if $user['test']==1 or $user['test']==2 or $user['test']==6 or $user['test']==8}-->
    <span>　　类型 :　</span>
    <!--{if $user['test']==1}-->
    <label>315俱乐部会员</label>
    <!--{/if}-->
    <!--{if $user['test']==2}-->
    <label>实名验证会员</label>
    <!--{/if}-->
    <!--{if $user['test']==6}-->
    <label>企业VIP会员</label>
    <!--{/if}-->
    <!--{if $user['test']==8}-->
    <label>社会个人认证会员</label>
    <!--{/if}-->
    <br><span>到期时间 :　</span>
    <label style="color:#e96c1f;">$date</label>
    <!--{/if}-->
  </div>




  <footer style="text-align: center;margin-top: 80px;">
    <span>© Bangbangdream.com</span>
  </footer>
</div>
</body>


