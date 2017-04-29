
<div class="parttime_show_nav3_left">




  <div class="xiangqing2">
    <h4>$xinxi['title']</h4>
    <ul class="xiangqing_time">
        <li><img src="/tupian/时间.png"><a> $xinxi['time']</a></li>
        <li><img src="/tupian/办公小图标.png"><a> $xinxi['hits']</a></li>
    </ul></br>

  
    <ul class="xiangqing_xinxi3">



          <!--{if $xinxi['find']==2}-->    
          <!-- 应聘 -->
      <li><a class="show_li1">姓名：</a><a class="show_li2">$xinxi['name']</a></li>
      <li><a class="show_li1">期望职位：</a><a class="show_li2">$xinxi['position2']</a></li>
      <li><a class="show_li1">期望工作地区：</a><a class="show_li2">$xinxi['address']</a></li>
      <li><a class="show_li1">期望薪资：</a><a class="show_li2">$xinxi['wage']</a></li>
      <li><a class="show_li1">联系QQ：</a><a class="show_li2">$xinxi['linkqq']</a></li>
      <li><a class="show_li1">联系邮箱：</a><a class="show_li2">$xinxi['linkemail']</a></li>
        <!--{/if}-->

          <!--{if $xinxi['find']==1}-->  
          <!-- 招聘 -->
      <li><a class="show_li1">年龄要求：</a><a class="show_li2">$xinxi['old']</a></li>
      <li><a class="show_li1">招聘职位：</a><a class="show_li2">$xinxi['position2']</a></li>
      <li><a class="show_li1">薪资待遇：</a><a class="show_li2">$xinxi['wage']</a></li>
      <li><a class="show_li1">招聘人数：</a><a class="show_li2">$xinxi['address']</a></li>
     <li><a class="show_li1">工作经验：</a><a class="show_li2">$xinxi['experience']</a></li>

      <li><a class="show_li1">联系人：</a><a class="show_li2">$xinxi['linkman']</a></li>
      <li><a class="show_li1">联系QQ：</a><a class="show_li2">$xinxi['linkqq']</a></li>
      <li><a class="show_li1">联系邮箱：</a><a class="show_li2">$xinxi['linkemail']</a></li>
        <!--{/if}-->

      
      <li><a class="show_li1">联系电话：</a><a class="show_li2">$xinxi['linkphone']</a></li>
    </ul>


<div class="wupinxiangqing">
  <a class="wupinxiangqing_nav">信息详情</a></br>
  <div class="wupinxiangqing_contain"> 


   <!--{if $xinxi['find']==2}-->    
        <a class="show_li3">年龄：</a><a class="show_li2">$xinxi['old']</a></br></br>
        <a class="show_li3">学历：</a><a class="show_li2">$xinxi['education']</a></br></br>
        <a class="show_li3">院校：</a><a class="show_li2">$xinxi['school']</a></br></br>
        <a class="show_li3">自我简介：</a><a class="show_li4">$xinxi['description']</a>
        <a class="show_li3">个人照片：</a></br>
   <!--{/if}-->
   <!--{if $xinxi['find']==1}-->    
        <a class="show_li3">工作地点：</a><a class="show_li2">$xinxi['address']</a></br></br>
        <a class="show_li3">职位描述：</a><a class="show_li4">$xinxi['state']</a>
        <a class="show_li3">单位简介：</a><a class="show_li4">$xinxi['description']</a>
        <a class="show_li3">公司图片：</a></br>

   <!--{/if}-->

      
  <!--{eval loopimg1($xinxi);}-->
    
  </div>
</div>




  </div>


















<div class="parttime_show_nav3_right">


<center class="fabuzhe2">
    <div class="fabuzhe_tupian">
      <a href="user_profile.php"><img src="/data/userface/$publish_user['id'].jpg" onerror=this.src="/data/userface/head.gif" style="width: 100px; height:100px; margin-top: 50px;border-radius: 50%;"></a><br>
      <a>$publish_user['username']</a><span>
 <!--{if $publish_user['administrator']==1}-->
          （管理员）
        <!--{elseif $publish_user['administrator']==2}-->
            <!--{if $publish_user['test']==0 or $publish_user['test']==3 or $publish_user['test']==4 or $publish_user['test']==5}-->

            <!--{elseif $publish_user['test']==1}-->
             （个人用户）
            <!--{elseif $publish_user['test']==2}-->
             （商家用户）
            <!--{/if}--> 
                <!--{/if}--></span>
    </div>
    
    <div class="fabuzhe_time">
      <!-- <li><a>加入时间:$date</a></li> -->
      <li>（实名认证情况）</li>
      <li>

 <!--{if $publish_user['administrator']==1}-->
          <span style="color:red !important;">（管理员）</span>
        <!--{elseif $publish_user['administrator']==2}-->
            <!--{if $publish_user['test']==0 or $publish_user['test']==3 or $publish_user['test']==4 or $publish_user['test']==5}-->
              （未验证）
            <!--{elseif $publish_user['test']==1}-->
              <img src="/tupian/学.png">
            <!--{elseif $publish_user['test']==2}-->
              <img src="/tupian/验.png">
            <!--{/if}--> 
                <!--{/if}--></li>
    </div>


  <center class="parttime_ad"><img src="/tupian/广告.png"></center>
</center>




</div>


</div>