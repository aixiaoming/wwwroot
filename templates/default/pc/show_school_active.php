
<div class="parttime_show_nav3_left">
  <div class="xiangqing2">
    <h4>$xinxi['title']</h4>
    <ul class="xiangqing_time">
        <li><img src="/tupian/时间.png"><a> $xinxi['time']</a></li>
        <li><img src="/tupian/办公小图标.png"><a> $xinxi['hits']</a></li>
    </ul></br>

    <div class="suoluetu1">
     
<!--{template inkPhoto}-->

    

    </div>


 
    <ul class="xiangqing_xinxi2">
      <li><a class="show_li1">联系人：</a><a class="show_li2">$xinxi['linkman']</a></li>
      <li><a class="show_li1">活动人数：</a><a class="show_li2">$xinxi['people']</a></li>
      <li><a class="show_li1">活动费用：</a><a class="show_li2">$xinxi['rmb']</a></li>
      <li><a class="show_li1">开始时间：</a><a class="show_li2">$xinxi['begintime']</a></li>
      <li><a class="show_li1">结束时间：</a><a class="show_li2">$xinxi['lasttime']</a></li>
      <li><a class="show_li1">活动地址：</a><a class="show_li2">$xinxi['address']</a></li>
      <li><a class="show_li1">联系QQ：</a><a class="show_li2">$xinxi['linkqq']</a></li>
      <li><a class="show_li1">联系电话：</a><a class="show_li2">$xinxi['linkphone']</a></li>
    </ul>





<div class="wupinxiangqing">
  <a class="wupinxiangqing_nav">图文详情</a></br>
  <div class="wupinxiangqing_contain">
    <a>$xinxi['description']</a>
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







