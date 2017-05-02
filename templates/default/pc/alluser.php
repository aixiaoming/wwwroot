<? if (!class_exists ('ruiqia_template')) header ('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
  <title>【会员管理】- 帮帮校园网</title>
  <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
  <link rel="stylesheet" type="text/css" href="./templates/default/pc/edit2017.css">
  <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="renderer" content="webkit">
</head>

<style>
  .poin {
    cursor: pointer
  }
</style>

<!--{template user_header}-->

<div class="type_container" style="height: 1100px;">

  <!-- 左侧导航菜单 -->
  <!--{template user_side}-->
  <div class="alluser">
    <span class="top_span">会员管理</span>
    <table class="table table-bordered .table-hover">
      <thead>
      <tr>
        <th>序号</th>
        <th>用户名</th>
        <th>邮箱</th>
        <th>手机</th>
        <th>注册时间</th>
        <th>认证状态</th>
      </tr>
      </thead>
      <tbody>
      <!--{eval $num=1;}-->
      <!--{loop $result $res}-->
      <tr>
        <th><!--{eval echo $num;}--></th>
        <th>$res['username']</th>
        <!--{if $res['email']}-->
        <th>$res['email']</th>
        <!--{else}-->
        <th>未设置</th>
        <!--{/if}-->
        <!--{if $res['phone']}-->
        <th>$res['phone']</th>
        <!--{else}-->
        <th>未设置</th>
        <!--{/if}-->
        <th><!--{eval echo substr($res['regtime'],0,10);}--></th>
        <!--{if $res['type']==1}-->
          <!--{if $res['test']!=1}-->
          <th>个人会员</th>
          <!--{/if}-->
          <!--{if $res['test']==1}-->
          <th>315俱乐部会员</th>
          <!--{/if}-->
        <!--{/if}-->
        <!--{if $res['type']==2}-->
          <!--{if $res['test']==2}-->
          <th>实名验证会员</th>
          <!--{elseif $res['test']==6}-->
          <th>企业vip会员</th>
          <!--{else}-->
          <th>单位会员</th>
          <!--{/if}-->
        <!--{/if}-->
      </tr>
      <!--{eval $num++;}-->
      <!--{/loop}-->
      </tbody>
    </table>
    $ruiqia_page
  </div>

</div>
<!--{template user_footer}-->


</html>
