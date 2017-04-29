<!DOCTYPE html>
<html>
<body>





<!--{if $mokuai=="incubation"}-->
<!-- 这个页面是创业实习中心 -->





<div class="chuang_contain">
	
<div class="chuang_jiangjie">
$description['description']

<!--{if $user['administrator']=="1"}-->

<a class="incubation_button" href="incubation_edit.php?querytype=update" >编辑</a>

<!--{/if}-->

</div>





<!--{elseif $mokuai=="idea"}-->
<!-- 创意集市 -->


<!--{loop $list $key1}-->
    <li>
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul>
		<li><span><a class="goods_shan"  target="_blank" href="show.php?list=$key1['id']&clickid=$clickid">$key1['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
					
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user1['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key1['editor']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布者：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		</ul>
<!--<a class="idea_button" href="{eval echo $mokuai;}--><!--_edit.php?querytype=delete&editid=$key1['id']">删除</a> 
<a class="idea_button" href="{eval echo $mokuai;}--><!--_edit.php?querytype=update&editid=$key1['id']">修改</a>-->
	</li>
<!--{/loop}-->
    $ruiqia_page




<!--{elseif $mokuai=="partner"}-->
<!-- 创业合伙人界面 -->




<!--{loop $list $key1}-->
    <div class="list_partner">
		<img src="$key1['img1']">
<!--{if $user['administrator']=="1"}-->
<a class="partner_button" href="partner_edit.php?querytype=update&editid=$key1['id']">修改</a>
<a class="partner_button" href="partner_edit.php?querytype=delete&editid=$key1['id']">删除</a>
<!--{/if}-->
		<ul>
		<li><a>姓名：$key1['name'] </a></li>
		<li><a>地点：$key1['address'] </a></li>
		<li><a>学历：$key1['education'] </a></li>
		<li><a>在读学校： $key1['school'] </a></li>
		</ul>
	<li><a>荣誉奖项：</a><a class="list_honor">$key1['honor']</a></li>
	</div>
<!--{/loop}-->

    $ruiqia_page







<!--{elseif $nav2=="3"}-->
<!-- 工作 -->






<!--{loop $list $key1}-->
    <li class="chuang_nav2">
		<ul>
		<li class="chuang_title2"><span><a  target="_blank" href="show.php?list=$key1['id']&clickid=$clickid">$key1['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li class="chuang_fabuzhe"><img src="/tupian/小图标.png"><a> 发布者：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		<li><a class="chuang_time"><!--{eval $time = ruiqia_query_column("SELECT time FROM ".$mokuai." WHERE id='".$key1['id']."'");$strArr=explode(' ',$time);echo ($strArr[0]);}--></a></li>
		</ul>
	</li>
<!--{/loop}-->
    $ruiqia_page




<!--{elseif $mokuai=="goods"}-->
<!-- 校园二手 -->


<!--{loop $list $key1}-->
    <li>
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul>
		<li><span><a class="goods_shan"  target="_blank" href="show.php?list=$key1['id']&clickid=$clickid">$key1['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
					
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user1['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key1['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布者：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		</ul>

	</li>
<!--{/loop}-->
    $ruiqia_page




<!--{elseif $mokuai=="active"}-->
<!-- 校园活动 -->


<!--{loop $list $key1}-->



    <li>
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul>
		<li><span><a class="goods_shan"  target="_blank" href="show.php?list=$key1['id']&clickid=$clickid">$key1['title']</a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
					
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user1['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key1['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布者：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		</ul>

	</li>

<!--{/loop}-->



    $ruiqia_page



<!--{elseif $mokuai=="schoolnear"}-->
<!-- 校园周边 -->


<!--{loop $list $key1}-->
    <li>
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul>
		<li><span><a class="goods_shan"  target="_blank" href="show.php?list=$key1['id']&clickid=$clickid">$key1['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
					
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user1['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key1['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布者：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		</ul>

	</li>
<!--{/loop}-->
    $ruiqia_page

<!--{elseif $mokuai=="shop"}-->
<!-- 创习小店 -->


<!--{loop $list $key1}-->
    <li>
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul>
		<li><span><a class="goods_shan"  target="_blank" href="show.php?list=$key1['id']&clickid=$clickid">$key1['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
					
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user1['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key1['school']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布者：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		</ul>

	</li>
<!--{/loop}-->
    $ruiqia_page



<!--{elseif $mokuai=="joblease"}-->
<!-- 职位租赁 -->


<!--{loop $list $key1}-->
    <li>
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul>
		<li><span><a class="goods_shan"  target="_blank" href="show.php?list=$key1['id']&clickid=$clickid">$key1['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
					
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user1['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key1['address']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布者：帮帮校园网</a></li>
		</ul>
<!--{if $user['administrator']=="1"}-->
<a class="idea_button" href="<!--{eval echo $mokuai;}-->_edit.php?querytype=delete&editid=$key1['id']">删除</a> 
<a class="idea_button" href="<!--{eval echo $mokuai;}-->_edit.php?querytype=update&editid=$key1['id']">修改</a>
<!--{/if}-->
	</li>
<!--{/loop}-->
    $ruiqia_page



<!--{else}-->
<!-- 商品列表界面 -->






<!--{loop $list $key1}-->
    <li>
		<img class="list_shou_img" src="$key1['img1']" onerror=this.src="/tupian/实验.png" style="width:100px; height:75px;">
		<ul>
		<li><span><a class="goods_shan"  target="_blank" href="show.php?list=$key1['id']&clickid=$clickid">$key1['title'] </a>
				<!--{eval $user1=ruiqia_query_fetch("select * from user where id='".$key1['userid']."'");}-->
 <!--{if $user1['administrator']==1}-->
					
				<!--{elseif $user1['administrator']==2}-->
				    <!--{if $user1['test']==0 or $user1['test']==3 or $user1['test']==4 or $user1['test']==5}-->

				    <!--{elseif $user1['test']==1}-->
					    <img src="/tupian/学.png">
				    <!--{elseif $user1['test']==2}-->
					    <img src="/tupian/验.png">
				    <!--{/if}--> 
                <!--{/if}-->
		</span></li>
		<li><a>$key1['address']</a></li>
		<li><img src="/tupian/小图标.png"><a> 发布者：<!--{if $user1['administrator']==1}-->帮帮校园网<!--{elseif $user1['administrator']==2}-->$user1['username']<!--{/if}--></a></li>
		</ul>

	</li>
<!--{/loop}-->
    $ruiqia_page


<!--{/if}-->




</body>
</html>