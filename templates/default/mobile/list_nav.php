<head>
     <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<script type="text/javascript" src="\templates\default\pc\js/jquery.min.js"></script>


<script type="text/javascript"> 


// 展示筛选按钮
function mbselect(sel_classname){
  if ($('#bg').attr('rel')==sel_classname) {
    fadeoutbg();
     
  }else{
    $($('#bg').attr('rel')).css('display','none');
   $('#bg').attr('rel',sel_classname);
      
      if ($('.mb_list_ul').css('top')!='0px') {
        $("#bg").css('height',document.body.offsetHeight);
        $("#bg").css('display','block');
        $('.mb_list_ul').css('top','0px'); 
        $('.mb_list_ul').css('position','fixed');
      $(sel_classname).css('position','fixed');
      $(sel_classname).css('top','37px');
      }
      $(sel_classname).css('display','block');
      
  };
 
}
// 消除页面
function fadeoutbg(showclassname){
  $('#bg').attr('rel','');  
  $("#bg").css('display','none');
  if ($('.mb_list_ul').css('top')=='0px') {
    if ($('.mb_list_ul2').css('display')=='none') {
        $('.mb_list_ul').css('top','105px') ;
    }else{
        $('.mb_list_ul').css('top','155px') ;
    };
  }
  $('.mb_list').children("div").css('display','none');
}




// 获取url内容
function Request(strName){  
var strHref  =  location.href;
// var strHref = "www.cnlei.org/index.htm?a=aaa&b=bbb&c=ccc";  
var intPos = strHref.indexOf("?");  
var strRight = strHref.substr(intPos + 1);  
var arrTmp = strRight.split("&");  
for(var i = 0; i < arrTmp.length; i++) {  
var arrTemp = arrTmp[i].split("=");  
if(arrTemp[0].toUpperCase() == strName.toUpperCase()) return arrTemp[1];  
} 
return "";  
}
$(document).ready(function(){

// nav3的选择条件

    if (Request("mokuai")=="goods") {
        $(".mb_list_ul2_goods").addClass("hlistnavact");
        $(".mb_list_nav3_area").css("display",'block');
        $(".mb_list_nav3_class").css("display",'block');
        $(".mb_list_nav3_class span").css("border",'0px');
        $(".mb_list_nav3_price").css("display",'block');
        $(".mb_list_nav3_new").css("display",'block');
        $(".mb_list_nav3_objective").css("display",'block');
        $(".mb_list_nav3_fabuzhe").css("display",'block');
        var wid = 100/6;
        $('.mb_list_ul>li').css('width',wid+'%');

    };
    if (Request("mokuai")=="active") {
        $(".mb_list_ul2_active").addClass("hlistnavact");
        $(".mb_list_nav3_area").css("display",'block');
        $(".mb_list_nav3_class").css("display",'block');
        $(".mb_list_nav3_class span").css("border",'0px');
        $(".mb_list_nav3_time").css("display",'block');
        var wid = 100/6;
        $('.mb_list_ul>li').css('width',wid+'%');
    };
    if (Request("mokuai")=="schoolnear") {
        $(".mb_list_ul2_schoolnear").addClass("hlistnavact");
        $(".mb_list_nav3_area").css("display",'block');
        $(".mb_list_nav3_class").css("display",'block');
        $(".mb_list_nav3_class span").css("border",'0px');
        var wid = 100/6;
        $('.mb_list_ul>li').css('width',wid+'%');
    };
    if (Request("mokuai")=="find_notice") {
        $(".mb_list_ul2_find_notice").addClass("hlistnavact");
        $(".mb_list_nav3_area").css("display",'block');
        $(".mb_list_nav3_area span").css("border",'0px');
         var wid = 100/6;
        $('.mb_list_ul>li').css('width',wid+'%');
        $('.mb_list_ul').css('top','105px');
        // 删除标题栏
        $('.mb_list_ul2').css('display','none');
    };
    if (Request("mokuai")=="parttime") {
        $(".mb_list_ul2_parttime").addClass("hlistnavact");
        $(".mb_list_nav3_find1").css("display",'block');
        $(".mb_list_nav3_find1 span").css("border",'0px');
        $(".mb_list_nav3_area").css("display",'block');
        $(".mb_list_nav3_class").css("display",'block');
        $(".mb_list_nav3_position").css("display",'block');
        $(".mb_list_nav3_address").css("display",'block');
        $(".mb_list_nav3_education").css("display",'block');
         var wid = 100/6;
        $('.mb_list_ul>li').css('width',wid+'%');
    };
    if (Request("mokuai")=="recruit") {
        $(".mb_list_ul2_recruit").addClass("hlistnavact");
        $(".mb_list_nav3_find2").css("display",'block');
        $(".mb_list_nav3_find2 span").css("border",'0px');
        $(".mb_list_nav3_area").css("display",'block');
        $(".mb_list_nav3_class").css("display",'block');
        $(".mb_list_nav3_position").css("display",'block');
        $(".mb_list_nav3_address").css("display",'block');
        $(".mb_list_nav3_education").css("display",'block');
         var wid = 100/6;
        $('.mb_list_ul>li').css('width',wid+'%');
    };
    if (Request("mokuai")=="intern") {
        $(".mb_list_ul2_intern").addClass("hlistnavact");
        $(".mb_list_nav3_find3").css("display",'block');
        $(".mb_list_nav3_find3 span").css("border",'0px');
        $(".mb_list_nav3_area").css("display",'block');
        $(".mb_list_nav3_class").css("display",'block');
        $(".mb_list_nav3_position").css("display",'block');
        $(".mb_list_nav3_address").css("display",'block');
        $(".mb_list_nav3_education").css("display",'block');
         var wid = 100/6;
        $('.mb_list_ul>li').css('width',wid+'%');
    };
    if (Request("mokuai")=="idea") {
        $(".mb_list_nav3_class").css("display",'block');
        $(".mb_list_nav3_class span").css("border",'0px');
        
        $('.mb_list_ul').css('top','105px');
        // 删除标题栏
        $('.mb_list_ul2').css('display','none');
        var wid = 100/3;
        $('.mb_list_ul>li').css('width',wid+'%');
    };
    if (Request("mokuai")=="partner") {
        // 删除标题栏
        $('.mb_list_ul2').css('display','none');
    };
    if (Request("mokuai")=="joblease") {
        // 删除标题栏
        $('.mb_list_ul').css('display','none');
        $('.mb_list_ul2').css('display','none');
        $('.mb_list_contain').css('display','none');
    };
    if (Request("mokuai")=="shop") {
        // 删除标题栏        $(".mb_list_ul2_schoolnear").addClass("hlistnavact");
        $(".mb_list_nav3_area").css("display",'block');
        var wid = 100/6;
        $('.mb_list_ul>li').css('width',wid+'%');

        
        // $('.mb_list_ul').css('display','none');
        // $('.mb_list_ul2').css('display','none');
        // $('.mb_list_contain').css('display','none');
    };

         var wid = 100/7;
        $('.mb_list_ul2>li').css('width',wid+'%');
        

});

</script> 








<style type="text/css">


</style>

</head>
<div id="bg" onclick='fadeoutbg()'></div>
<ul class='mb_list_ul2'>
    <li><a href="/index.php">首页</a></li>
    <li><a class="mb_list_ul2_goods" href="/list.php?clickid=6&mokuai=goods">二手</a></li>
    <li><a class="mb_list_ul2_schoolnear" href="/list.php?clickid=8&mokuai=schoolnear">周边</a></li>
    <li><a class="mb_list_ul2_active" href="/list.php?clickid=7&mokuai=active">活动</a></li>
    <li><a class="mb_list_ul2_parttime" href="/list.php?clickid=10&mokuai=parttime">兼职</a></li>
    <li><a class="mb_list_ul2_intern" href="/list.php?clickid=11&mokuai=intern">实习</a></li>
    <li><a class="mb_list_ul2_recruit" href="/list.php?clickid=12&mokuai=recruit">招聘</a></li>
</ul>

<ul class='mb_list_ul'>
    <li class='mb_list_nav3_find1' onclick="mbselect('.list_nav3_find1')"><span>类型</span></li>
    <li class='mb_list_nav3_find2' onclick="mbselect('.list_nav3_find2')"><span>类型</span></li>
    <li class='mb_list_nav3_find3' onclick="mbselect('.list_nav3_find3')"><span>类型</span></li> 
    <li class='mb_list_nav3_class' onclick="mbselect('.list_nav3_class')"><span>分类</span></li>
    <li class='mb_list_nav3_area' onclick="mbselect('.list_nav3_area')"><span>区域</span></li>
    <li class='mb_list_nav3_price' onclick="mbselect('.list_nav3_price')"><span>价格</span></li>
    <li class='mb_list_nav3_new' onclick="mbselect('.list_nav3_new')"><span>新旧</span></li>
    <li class='mb_list_nav3_objective' onclick="mbselect('.list_nav3_objective')"><span>方式</span></li>
    <li class='mb_list_nav3_fabuzhe' onclick="mbselect('.list_nav3_fabuzhe')"><span>发布者</span></li>
    <li class='mb_list_nav3_time' onclick="mbselect('.list_nav3_time')"><span>时间</span></li>
    <li class='mb_list_nav3_position' onclick="mbselect('.list_nav3_position')"><span>职位</span></li>
    <li class='mb_list_nav3_education' onclick="mbselect('.list_nav3_education')"><span>学历</span></li>
    <li class='mb_list_nav3_address' onclick="mbselect('.list_nav3_address')"><span>地点</span></li>
</ul>



<div class="mb_list">
    

<div class="list_nav3_find1">
<!-- <span>类型：</span> -->
        <!--{if $_SESSION['find']==""}-->
        <a href="?find=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?find=1&hit=1&mokuai=$mokuai&clickid=$clickid">招兼职</a>
        <a href="?find=2&hit=1&mokuai=$mokuai&clickid=$clickid">求兼职</a>
        <!--{/if}-->
        <!--{if $_SESSION['find']!=""}-->
        <a href="?find=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <!--{/if}-->
        <!--{if $_SESSION['find']=="1"}-->
        <a href="?find=1&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">招兼职</a>
        <a href="?find=2&hit=1&mokuai=$mokuai&clickid=$clickid">求兼职</a>
        <!--{/if}-->
        <!--{if $_SESSION['find']=="2"}-->
        <a href="?find=1&hit=1&mokuai=$mokuai&clickid=$clickid">招兼职</a>
        <a href="?find=2&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">求兼职</a>
        <!--{/if}-->
</div>

<div class="list_nav3_find2">
<!-- <span>类型：</span> -->
        <!--{if $_SESSION['find']==""}-->
        <a href="?find=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?find=1&hit=1&mokuai=$mokuai&clickid=$clickid">招聘</a>
        <a href="?find=2&hit=1&mokuai=$mokuai&clickid=$clickid">应聘</a>
        <!--{/if}-->
        <!--{if $_SESSION['find']!=""}-->
        <a href="?find=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <!--{/if}-->
        <!--{if $_SESSION['find']=="1"}-->
        <a href="?find=1&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">招聘</a>
        <a href="?find=2&hit=1&mokuai=$mokuai&clickid=$clickid">应聘</a>
        <!--{/if}-->
        <!--{if $_SESSION['find']=="2"}-->
        <a href="?find=1&hit=1&mokuai=$mokuai&clickid=$clickid">招聘</a>
        <a href="?find=2&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">应聘</a>
        <!--{/if}-->
</div>

<div class="list_nav3_find3">
<!-- <span>类型：</span> -->
        <!--{if $_SESSION['find']==""}-->
        <a href="?find=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?find=1&hit=1&mokuai=$mokuai&clickid=$clickid">招实习</a>
        <a href="?find=2&hit=1&mokuai=$mokuai&clickid=$clickid">求实习</a>
        <!--{/if}-->
        <!--{if $_SESSION['find']!=""}-->
        <a href="?find=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <!--{/if}-->
        <!--{if $_SESSION['find']=="1"}-->
        <a href="?find=1&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">招实习</a>
        <a href="?find=2&hit=1&mokuai=$mokuai&clickid=$clickid">求实习</a>
        <!--{/if}-->
        <!--{if $_SESSION['find']=="2"}-->
        <a href="?find=1&hit=1&mokuai=$mokuai&clickid=$clickid">招实习</a>
        <a href="?find=2&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">求实习</a>
        <!--{/if}-->
</div>

<div class="list_nav3_class">
<!-- <span>分类：</span> -->
        <div class="nav3_fenlei">
            <a href="?class=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
<!--{loop $class $key}-->
        <!--{if $_SESSION['class']==$key['name']}-->
        <a href="?class=$key['id']&mokuai=$key['mokuai']&hit=1&clickid=$clickid" class="nav3_act_1">$key['name']</a>
        <!--{/if}-->
        <!--{if $_SESSION['class']!=$key['name']}-->
        <a href="?class=$key['id']&mokuai=$key['mokuai']&hit=1&clickid=$clickid">$key['name']</a>
        <!--{/if}-->
<!--{/loop}-->
        </div>
</div>

<div class="list_nav3_area">
<!-- <span>区域：</span> -->

        <a href="?area=$city['id']&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>

<!--{loop $qu $nav}-->
        <!--{if $_SESSION['area']==$nav['id']}-->
        <a href="?area=$nav['id']&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">$nav['name']</a> 
        <!--{/if}-->
        <!--{if $_SESSION['area']!=$nav['id']}-->
        <a href="?area=$nav['id']&mokuai=$mokuai&hit=1&clickid=$clickid">$nav['name']</a> 
        <!--{/if}-->
<!--{/loop}-->
</div>

<div class="list_nav3_price">
<!-- <span>价格：</span> -->
    <a href="?price=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
    <form method="post" style="display:inline-block;" action="?hit=1&mokuai=$mokuai&clickid=$clickid">
    <a><input id="price_low" type="number" name="price_low" style="width:25%; height:30px; text-align:center;" placeholder="最低价" value="$_SESSION['price_low']" onfocus="">
     - 
    <input id="price_high" type="number" name="price_high" style="width:25%; height:30px; text-align:center;" placeholder="最高价" value="$_SESSION['price_high']">元
    <input name="submit3" style="width:25%; height:30px; text-align:center; border:0px; border-radius:5px;" type="submit" value="筛选"></a>
    
    </form>


</div>

<div class="list_nav3_new">
<!-- <span>新旧：</span> -->
        <!--{if $_SESSION['new']==""}-->
    <a href="?new=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?new=1&hit=1&mokuai=$mokuai&clickid=$clickid">全新</a>
        <a href="?new=2&hit=1&mokuai=$mokuai&clickid=$clickid">9成新</a>
        <a href="?new=3&hit=1&mokuai=$mokuai&clickid=$clickid">8成新</a>
        <a href="?new=4&hit=1&mokuai=$mokuai&clickid=$clickid">7成新</a>
        <a href="?new=5&hit=1&mokuai=$mokuai&clickid=$clickid">7成新以下</a>
        <!--{/if}-->
        <!--{if $_SESSION['new']=="全新"}-->
    <a href="?new=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?new=1&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">全新</a>
        <a href="?new=2&hit=1&mokuai=$mokuai&clickid=$clickid">9成新</a>
        <a href="?new=3&hit=1&mokuai=$mokuai&clickid=$clickid">8成新</a>
        <a href="?new=4&hit=1&mokuai=$mokuai&clickid=$clickid">7成新</a>
        <a href="?new=5&hit=1&mokuai=$mokuai&clickid=$clickid">7成新以下</a>
        <!--{/if}-->
        <!--{if $_SESSION['new']=="9成新"}-->
    <a href="?new=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?new=1&hit=1&mokuai=$mokuai&clickid=$clickid">全新</a>
        <a href="?new=2&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">9成新</a>
        <a href="?new=3&hit=1&mokuai=$mokuai&clickid=$clickid">8成新</a>
        <a href="?new=4&hit=1&mokuai=$mokuai&clickid=$clickid">7成新</a>
        <a href="?new=5&hit=1&mokuai=$mokuai&clickid=$clickid">7成新以下</a>
        <!--{/if}-->
        <!--{if $_SESSION['new']=="8成新"}-->
    <a href="?new=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?new=1&hit=1&mokuai=$mokuai&clickid=$clickid">全新</a>
        <a href="?new=2&hit=1&mokuai=$mokuai&clickid=$clickid">9成新</a>
        <a href="?new=3&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">8成新</a>
        <a href="?new=4&hit=1&mokuai=$mokuai&clickid=$clickid">7成新</a>
        <a href="?new=5&hit=1&mokuai=$mokuai&clickid=$clickid">7成新以下</a>
        <!--{/if}-->
        <!--{if $_SESSION['new']=="7成新"}-->
    <a href="?new=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?new=1&hit=1&mokuai=$mokuai&clickid=$clickid">全新</a>
        <a href="?new=2&hit=1&mokuai=$mokuai&clickid=$clickid">9成新</a>
        <a href="?new=3&hit=1&mokuai=$mokuai&clickid=$clickid">8成新</a>
        <a href="?new=4&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">7成新</a>
        <a href="?new=5&hit=1&mokuai=$mokuai&clickid=$clickid">7成新以下</a>
        <!--{/if}-->
        <!--{if $_SESSION['new']=="7成新以下"}-->
    <a href="?new=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?new=1&hit=1&mokuai=$mokuai&clickid=$clickid">全新</a>
        <a href="?new=2&hit=1&mokuai=$mokuai&clickid=$clickid">9成新</a>
        <a href="?new=3&hit=1&mokuai=$mokuai&clickid=$clickid">8成新</a>
        <a href="?new=4&hit=1&mokuai=$mokuai&clickid=$clickid">7成新</a>
        <a href="?new=5&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">7成新以下</a>
        <!--{/if}-->


</div>


<div class="list_nav3_objective">
<!-- <span>方式：</span> -->
        <!--{if $_SESSION['objective']==""}-->
    <a href="?objective=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?objective=1&mokuai=$mokuai&hit=1&clickid=$clickid">捐赠</a>
        <a href="?objective=2&mokuai=$mokuai&hit=1&clickid=$clickid">交换</a>
        <a href="?objective=3&mokuai=$mokuai&hit=1&clickid=$clickid">求购</a>
        <a href="?objective=4&mokuai=$mokuai&hit=1&clickid=$clickid">转让</a>
        <!--{/if}-->
        <!--{if $_SESSION['objective']=="捐赠"}-->
    <a href="?objective=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?objective=1&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">捐赠</a>
        <a href="?objective=2&mokuai=$mokuai&hit=1&clickid=$clickid">交换</a>
        <a href="?objective=3&mokuai=$mokuai&hit=1&clickid=$clickid">求购</a>
        <a href="?objective=4&mokuai=$mokuai&hit=1&clickid=$clickid">转让</a>
        <!--{/if}-->
        <!--{if $_SESSION['objective']=="交换"}-->
    <a href="?objective=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?objective=1&mokuai=$mokuai&hit=1&clickid=$clickid">捐赠</a>
        <a href="?objective=2&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">交换</a>
        <a href="?objective=3&mokuai=$mokuai&hit=1&clickid=$clickid">求购</a>
        <a href="?objective=4&mokuai=$mokuai&hit=1&clickid=$clickid">转让</a>
        <!--{/if}-->
        <!--{if $_SESSION['objective']=="求购"}-->
    <a href="?objective=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?objective=1&mokuai=$mokuai&hit=1&clickid=$clickid">捐赠</a>
        <a href="?objective=2&mokuai=$mokuai&hit=1&clickid=$clickid">交换</a>
        <a href="?objective=3&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">求购</a>
        <a href="?objective=4&mokuai=$mokuai&hit=1&clickid=$clickid">转让</a>
        <!--{/if}-->
        <!--{if $_SESSION['objective']=="转让"}-->
    <a href="?objective=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <a href="?objective=1&mokuai=$mokuai&hit=1&clickid=$clickid">捐赠</a>
        <a href="?objective=2&mokuai=$mokuai&hit=1&clickid=$clickid">交换</a>
        <a href="?objective=3&mokuai=$mokuai&hit=1&clickid=$clickid">求购</a>
        <a href="?objective=4&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">转让</a>
        <!--{/if}-->
</div>

<div class="list_nav3_fabuzhe">
<!-- <span>发布者：</span> -->
    <a href="?fabuzhe=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
        <!--{if $_SESSION['fabuzhe']=="1"}-->
        <a href="?fabuzhe=1&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">个人</a>
        <a href="?fabuzhe=2&hit=1&mokuai=$mokuai&clickid=$clickid">商家</a>
        <!--{/if}-->
        <!--{if $_SESSION['fabuzhe']=="2"}-->
        <a href="?fabuzhe=1&hit=1&mokuai=$mokuai&clickid=$clickid">个人</a>
        <a href="?fabuzhe=2&hit=1&mokuai=$mokuai&clickid=$clickid" class="nav3_act_1">商家</a>
        <!--{/if}-->
        <!--{if $_SESSION['fabuzhe']!="1" and $_SESSION['fabuzhe']!="2"}-->
        <a href="?fabuzhe=1&hit=1&mokuai=$mokuai&clickid=$clickid">个人</a>
        <a href="?fabuzhe=2&hit=1&mokuai=$mokuai&clickid=$clickid">商家</a>
        <!--{/if}-->

</div>

<div class="list_nav3_time">
<!-- <span>时间：</span> -->
        <!--{if $_SESSION['time']==""}-->
    <a href="?time=all&mokuai=$mokuai&hit=1&clickid=$clickid">全部</a>
        <a href="?time=1&mokuai=$mokuai&hit=1&clickid=$clickid">今日</a>
        <a href="?time=2&mokuai=$mokuai&hit=1&clickid=$clickid">周末</a>
        <a href="?time=3&mokuai=$mokuai&hit=1&clickid=$clickid">最近一周</a>
        <a href="?time=4&mokuai=$mokuai&hit=1&clickid=$clickid">最近一月</a>
        <!--{/if}-->
        <!--{if $_SESSION['time']=="今日"}-->
    <a href="?time=all&mokuai=$mokuai&hit=1&clickid=$clickid">全部</a>
        <a href="?time=1&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">今日</a>
        <a href="?time=2&mokuai=$mokuai&hit=1&clickid=$clickid">周末</a>
        <a href="?time=3&mokuai=$mokuai&hit=1&clickid=$clickid">最近一周</a>
        <a href="?time=4&mokuai=$mokuai&hit=1&clickid=$clickid">最近一月</a>
        <!--{/if}-->
        <!--{if $_SESSION['time']=="周末"}-->
    <a href="?time=all&mokuai=$mokuai&hit=1&clickid=$clickid">全部</a>
        <a href="?time=1&mokuai=$mokuai&hit=1&clickid=$clickid">今日</a>
        <a href="?time=2&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">周末</a>
        <a href="?time=3&mokuai=$mokuai&hit=1&clickid=$clickid">最近一周</a>
        <a href="?time=4&mokuai=$mokuai&hit=1&clickid=$clickid">最近一月</a>
        <!--{/if}-->
        <!--{if $_SESSION['time']=="最近一周"}-->
    <a href="?time=all&mokuai=$mokuai&hit=1&clickid=$clickid">全部</a>
        <a href="?time=1&mokuai=$mokuai&hit=1&clickid=$clickid">今日</a>
        <a href="?time=2&mokuai=$mokuai&hit=1&clickid=$clickid">周末</a>
        <a href="?time=3&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">最近一周</a>
        <a href="?time=4&mokuai=$mokuai&hit=1&clickid=$clickid">最近一月</a>
        <!--{/if}-->
        <!--{if $_SESSION['time']=="最近一月"}-->
    <a href="?time=all&mokuai=$mokuai&hit=1&clickid=$clickid">全部</a>
        <a href="?time=1&mokuai=$mokuai&hit=1&clickid=$clickid">今日</a>
        <a href="?time=2&mokuai=$mokuai&hit=1&clickid=$clickid">周末</a>
        <a href="?time=3&mokuai=$mokuai&hit=1&clickid=$clickid">最近一周</a>
        <a href="?time=4&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">最近一月</a>
        <!--{/if}-->


</div>

<div class="list_nav3_position">
<!-- <span>职位：</span> -->
    <a href="?position=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
    <form method="post" style="display:inline-block;" action="?position=1&hit=1&mokuai=$mokuai&clickid=$clickid">
    <a><input name="position_value" class="onblur" style="width:50%; height:30px; text-align:center;" onfocus=this.className="onfocus" onblur=this.className="onblur" type="text" placeholder="请输入职位" value="$_SESSION['position']">
    <input name="submit3" style="width:25%; height:30px; text-align:center; border:0px; border-radius:5px;" type="submit" value="筛选"></a>     
    </form>
</div>

<div class="list_nav3_address">
<!-- <span>地点：</span> -->
    <a href="?address=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
    <form method="post" style="display:inline-block;" action="?address=1&hit=1&mokuai=$mokuai&clickid=$clickid">
    <a><input name="address_value" class="onblur"  style="width:50%; height:30px; text-align:center;" onfocus=this.className="onfocus_address" onblur=this.className="onblur" type="text" placeholder="请输入地点" value="$_SESSION['address']">
    <input name="submit3" style="width:25%; height:30px; text-align:center; border:0px; border-radius:5px;" type="submit" value="筛选"> </a>
    </form>
</div>

<div class="list_nav3_education">
<!-- <span>学历：</span> -->
        <!--{if $_SESSION['education']==""}-->
    <a href="?education=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
        <a href="?education=1&mokuai=$mokuai&hit=1&clickid=$clickid">大专</a>
        <a href="?education=2&mokuai=$mokuai&hit=1&clickid=$clickid">本科</a>
        <a href="?education=3&mokuai=$mokuai&hit=1&clickid=$clickid">研究生</a>
        <a href="?education=4&mokuai=$mokuai&hit=1&clickid=$clickid">博士</a>
        <!--{/if}-->
        <!--{if $_SESSION['education']=="大专"}-->
    <a href="?education=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
        <a href="?education=1&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">大专</a>
        <a href="?education=2&mokuai=$mokuai&hit=1&clickid=$clickid">本科</a>
        <a href="?education=3&mokuai=$mokuai&hit=1&clickid=$clickid">研究生</a>
        <a href="?education=4&mokuai=$mokuai&hit=1&clickid=$clickid">博士</a>
        <!--{/if}-->
        <!--{if $_SESSION['education']=="本科"}-->
    <a href="?education=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
        <a href="?education=1&mokuai=$mokuai&hit=1&clickid=$clickid">大专</a>
        <a href="?education=2&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">本科</a>
        <a href="?education=3&mokuai=$mokuai&hit=1&clickid=$clickid">研究生</a>
        <a href="?education=4&mokuai=$mokuai&hit=1&clickid=$clickid">博士</a>
        <!--{/if}-->
        <!--{if $_SESSION['education']=="研究生"}-->
    <a href="?education=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
        <a href="?education=1&mokuai=$mokuai&hit=1&clickid=$clickid">大专</a>
        <a href="?education=2&mokuai=$mokuai&hit=1&clickid=$clickid">本科</a>
        <a href="?education=3&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">研究生</a>
        <a href="?education=4&mokuai=$mokuai&hit=1&clickid=$clickid">博士</a>
        <!--{/if}-->
        <!--{if $_SESSION['education']=="博士"}-->
    <a href="?education=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
        <a href="?education=1&mokuai=$mokuai&hit=1&clickid=$clickid">大专</a>
        <a href="?education=2&mokuai=$mokuai&hit=1&clickid=$clickid">本科</a>
        <a href="?education=3&mokuai=$mokuai&hit=1&clickid=$clickid">研究生</a>
        <a href="?education=4&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">博士</a>
        <!--{/if}-->




</div>

<!-- <div class="list_nav3_experience">
<span>工作经验：</span>
    <a href="?experience=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
</div> -->



<!-- 兼职的标签 -->
<div class="list_nav3_label">
<!-- <span>标签：</span> -->
        <!--{if $_SESSION['label']==""}-->
    <a href="?label=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
        <a href="?label=1&mokuai=$mokuai&hit=1&clickid=$clickid">日结</a>
        <a href="?label=2&mokuai=$mokuai&hit=1&clickid=$clickid">月结</a>
        <a href="?label=3&mokuai=$mokuai&hit=1&clickid=$clickid">完工结</a>
        <!--{/if}-->
        <!--{if $_SESSION['label']=="日结"}-->
    <a href="?label=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
        <a href="?label=1&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">日结</a>
        <a href="?label=2&mokuai=$mokuai&hit=1&clickid=$clickid">月结</a>
        <a href="?label=3&mokuai=$mokuai&hit=1&clickid=$clickid">完工结</a>
        <!--{/if}-->
        <!--{if $_SESSION['label']=="月结"}-->
    <a href="?label=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
        <a href="?label=1&mokuai=$mokuai&hit=1&clickid=$clickid">日结</a>
        <a href="?label=2&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">月结</a>
        <a href="?label=3&mokuai=$mokuai&hit=1&clickid=$clickid">完工结</a>
        <!--{/if}-->
        <!--{if $_SESSION['label']=="完工结"}-->
    <a href="?label=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
        <a href="?label=1&mokuai=$mokuai&hit=1&clickid=$clickid">日结</a>
        <a href="?label=2&mokuai=$mokuai&hit=1&clickid=$clickid">月结</a>
        <a href="?label=3&mokuai=$mokuai&hit=1&clickid=$clickid" class="nav3_act_1">完工结</a>
        <!--{/if}-->

</div>
</div>
