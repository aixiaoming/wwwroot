
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
          <!-- 应聘 -->
      <li><a>姓名：$xinxi['name']</a></li>
      <li><a>期望职位：$xinxi['position2']</a></li>
      <li><a>期望工作地区：$xinxi['address']</a></li>
      <li><a>期望薪资：$xinxi['wage']</a></li>
      <li><a>联系QQ：$xinxi['linkqq']</a></li>
      <li><a>联系邮箱：$xinxi['linkemail']</a></li>
        <!--{/if}-->

          <!--{if $xinxi['find']==1}-->  
          <!-- 招聘 -->
      <li><a>年龄要求：$xinxi['old']</a></li>
      <li><a>招聘职位：$xinxi['position2']</a></li>
      <li><a>薪资待遇：$xinxi['wage']</a></li>
      <li><a>招聘人数：$xinxi['address']</a></li>
     <li><a>工作经验：</a>$xinxi['experience']</li>

      <li><a>联系人：$xinxi['linkman']</a></li>
      <li><a>联系QQ：$xinxi['linkqq']</a></li>
      <li><a>联系邮箱：$xinxi['linkemail']</a></li>
        <!--{/if}-->

      
      <li><a>联系电话：$xinxi['linkphone']</a></li>
</ul>

<span class='xiangqing_profile_title'>详细描述</span>
<ul class="xiangqing_xinxi">
  
   <!--{if $xinxi['find']==2}-->    
        <a>年龄：$xinxi['old']</a></br></br>
        <a>学历：$xinxi['education']</a></br></br>
        <a>院校：$xinxi['school']</a></br></br>
        <a>自我简介：</a></br><span style="font-size:15px;">$xinxi['description']</span></br></br>
   <!--{/if}-->
   <!--{if $xinxi['find']==1}-->    
        <a>工作地点：$xinxi['address']</a></br></br>
        <a>职位描述：</a></br><span>$xinxi['state']</span></br></br></br>
        <a>单位简介：</a></br><span>$xinxi['description']</span></br></br>
   <!--{/if}-->

      
    
</ul>



      



<span class='xiangqing_profile_title'>帮帮小提示：交易需谨慎</span>
<a href="complaints.php?clickid=$clickid2&list=$listid&mokuai=goods" class="report">信息不靠谱?<span>去举报 〉</span></a>
