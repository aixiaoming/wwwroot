
<span class='xiangqing_header'>商品详情</span>
<div class="suoluetu1">
     
<!--{template inkPhoto}--> 

</div>

<div class="xiangqing_title" style="height:50px;">
  <h4>$xinxi['title']</h4>
  <li><a>区域：$area</a></li>
  <li><a>点击量：$xinxi['hits']</a></li>
  <li><a>$xinxi['time']</a></li>
</div>



<span class="xiangqing_profile_title">发布者信息</span>
<div class="xiangqing_profile">
  <div id="xiangqing_profile_logo">
  <a href="user_profile.php"><img src="/data/userface/$publish_user['id'].jpg" onerror=this.src="/data/userface/head.gif"></a>

  <a class="xiangqing_profile_username">$publish_user['username']</a>
  </div>
  <li style="border-right:1px solid #666666">

  <span>
    <!--{if $publish_user['administrator']==1}-->
            <span style="color:red !important;">管理员</span> 
          
    <!--{elseif $publish_user['administrator']==2}-->
            <!--{if $publish_user['test']==0 or $publish_user['test']==3 or $publish_user['test']==4 or $publish_user['test']==5}-->
            <span style="color:red !important;">个人</span> 
            <!--{elseif $publish_user['test']==1}-->
            <span style="color:red !important;">个人</span> 
            <!--{elseif $publish_user['test']==2}-->
            <span style="color:red !important;">商家</span> 
             
            <!--{/if}--> 
    <!--{/if}-->
  </span><br>
  <span>用户类型</span>
  
<!-- 注册时间 -->
  </li>

  <li>

        <!--{if $publish_user['administrator']==1}-->
          <span style="color:red !important;">管理员</span>
        <!--{elseif $publish_user['administrator']==2}-->
            <!--{if $publish_user['test']==0 or $publish_user['test']==3 or $publish_user['test']==4 or $publish_user['test']==5}-->
          <span style="color:red !important;">未验证</span>    
            <!--{elseif $publish_user['test']==1}-->
              <img src="/tupian/学.png">
            <!--{elseif $publish_user['test']==2}-->
              <img src="/tupian/验.png">
            <!--{/if}--> 
        <!--{/if}-->
  <br><span>是否验证</span>

  </li>

</div>



<span class='xiangqing_profile_title'>基本信息</span>
<ul class="xiangqing_xinxi">
           <!--{if $xinxi['find']==2}-->    
          <!-- 求兼职 -->
      <li><a>姓名：</a><a>$xinxi['name']</a></li>
      <li><a>期望职位：</a><a>$xinxi['position2']</a></li>
      <li><a>期望工作地区：</a><a>$xinxi['address']</a></li>
      <li><a>期望薪资：</a><a>$xinxi['wage']</a></li>
      <li><a>联系QQ：</a><a>$xinxi['linkqq']</a></li>
      <li><a>联系邮箱：</a><a>$xinxi['linkemail']</a></li>
      <!-- 职位标签没写 -->
        <!--{/if}-->

          <!--{if $xinxi['find']==1}-->  
          <!-- 招兼职 -->
      <li><a>单位名称：</a><a>$xinxi['name']</a></li>
      <li><a>年龄要求：</a><a>$xinxi['old']</a></li>
      <li><a>其他说明：</a></br><a>$xinxi['other_state']</a></li>
      <li><a>工作地点：</a><a>$xinxi['address']</a></li>
      <li><a>招聘职位：</a><a>$xinxi['position2']</a></li>
      <li><a>招聘人数：</a><a>$xinxi['people']</a></li>
      <li><a>薪资待遇：</a><a>$xinxi['wage']</a></li>
      <li><a>职位标签：<input type="checkbox" class="checkbox" disabled="true" name="label[]" value="日结" <!--{if $xinxi['label1']!=""}--> checked="checked" <!--{/if}-->/>日结
  <input type="checkbox" class="checkbox" disabled="true" name="label[]" value="月结"  <!--{if $xinxi['label2']!=""}--> checked="checked" <!--{/if}-->/>月结
  <input type="checkbox" class="checkbox" disabled="true" name="label[]" value="完工结"  <!--{if $xinxi['label3']!=""}--> checked="checked" <!--{/if}-->/>完工结</a></li>
      <li><a>联系人：</a><a>$xinxi['linkman']</a></li>

      <li><a>工作经验：</a><a>$xinxi['experience']</a></li>
      <li><a>联系QQ：</a><a>$xinxi['linkqq']</a></li>
      <li><a>联系邮箱：</a><a>$xinxi['linkemail']</a></li>
        <!--{/if}-->


      <li><a>联系电话：</a><a>$xinxi['linkphone']</a></li>
</ul>

<span class='xiangqing_profile_title'>详细描述</span>
<ul class="xiangqing_xinxi">
       <!--{if $xinxi['find']==2}-->    
        <a>年龄：</a><a>$xinxi['old']</a></br></br>
        <a>学历：</a><a>$xinxi['education']</a></br></br>
        <a>工作经验：$xinxi['experience']</a></br></br>
        <a>院校：$xinxi['school']</a></br></br>
        <a>自我描述：</a></br><span style="font-size:15px;">$xinxi['description']</span></br></br></br>
   <!--{/if}-->
   <!--{if $xinxi['find']==1}-->    
        <a>工作地点：$xinxi['address']</a></br></br>
        <a>职位描述：</a></br><span>$xinxi['state']</span></br></br>
        <a>岗位职责：</a></br><span>$xinxi['duty']</span></br></br>
        <a>任职要求：</a></br><span>$xinxi['demand']</span></br></br>
        <a>单位简介：</a></br><span>$xinxi['description']</span></br></br></br>
   <!--{/if}-->
</ul>



      



<span class='xiangqing_profile_title'>帮帮小提示：交易需谨慎</span>
<a href="complaints.php?clickid=$clickid2&list=$listid&mokuai=goods" class="report">信息不靠谱?<span>去举报 〉</span></a>
