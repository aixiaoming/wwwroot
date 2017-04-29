
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="$dir/style.css">
     <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
     <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<script type="text/javascript"> 
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


// nav1/2的高亮显示
    // $(".nav1_act_"+Request("clickid")).addClass("nav1_act_1");

if (Request("searched")!='') {
    $(".nav3").addClass("nav3_yincang");
    $(".nav2").addClass("nav3_yincang");
};
    
    if (Request("clickid")>5) {
        if (Request("clickid")<10) {
            $(".nav1_act_2").addClass("nav1_act_1");
             $(".nav1_act_"+Request("clickid")).addClass("nav2_act_1");
        // if (Request("clickid")==9){
        //          $(".nav3").addClass("nav3_yincang");
        //      }
        };
    };

         if (Request("clickid")>9) {
            if (Request("clickid")<13) {
                $(".nav1_act_3").addClass("nav1_act_1");
             $(".nav1_act_"+Request("clickid")).addClass("nav2_act_1");
            };
         };

         if (Request("clickid")>12) {
            if (Request("clickid")<17) {
                $(".nav1_act_4").addClass("nav1_act_1");
             $(".nav1_act_"+Request("clickid")).addClass("nav2_act_1");
             if (Request("clickid")!=14){
                 $(".nav3").addClass("nav3_yincang");
             }
            };
         };

         if (Request("clickid")>16) {
            if (Request("clickid")<20) {
                $(".nav1_act_5").addClass("nav1_act_1");
             $(".nav1_act_"+Request("clickid")).addClass("nav2_act_1");
            };
         };

         if (Request("clickid")=='171') {
                $(".nav1_act_4").addClass("nav1_act_1");
                $(".nav1_act_"+Request("clickid")).addClass("nav2_act_1");
         };


// nav3的选择条件

    if (Request("mokuai")=="goods") {
        $(".list_nav3_area").addClass("nav3_block");
        $(".list_nav3_class").addClass("nav3_block");
        $(".list_nav3_price").addClass("nav3_block");
        $(".list_nav3_new").addClass("nav3_block");
        $(".list_nav3_objective").addClass("nav3_block");
        $(".list_nav3_fabuzhe").addClass("nav3_block");

    };
    if (Request("mokuai")=="active") {
        $(".list_nav3_area").addClass("nav3_block");
        $(".list_nav3_class").addClass("nav3_block");
        $(".list_nav3_time").addClass("nav3_block");
    };
    if (Request("mokuai")=="schoolnear") {
        $(".list_nav3_area").addClass("nav3_block");
        $(".list_nav3_class").addClass("nav3_block");
    };
    if (Request("mokuai")=="find_notice") {
        $(".list_nav3_area").addClass("nav3_block");
    };
    if (Request("mokuai")=="parttime") {
        $(".list_nav3_find1").addClass("nav3_block");
        $(".list_nav3_area").addClass("nav3_block");
        $(".list_nav3_class").addClass("nav3_block");
        $(".list_nav3_position").addClass("nav3_block");
        $(".list_nav3_address").addClass("nav3_block");
        $(".list_nav3_education").addClass("nav3_block");
        $(".list_nav3_experience").addClass("nav3_block");
        // $(".list_nav3_label").addClass("nav3_block");
        // $(".list_nav3_worktime").addClass("nav3_block");
    };
    if (Request("mokuai")=="recruit") {
        $(".list_nav3_find2").addClass("nav3_block");
        $(".list_nav3_area").addClass("nav3_block");
        $(".list_nav3_class").addClass("nav3_block");
        $(".list_nav3_position").addClass("nav3_block");
        $(".list_nav3_address").addClass("nav3_block");
        $(".list_nav3_education").addClass("nav3_block");
        $(".list_nav3_experience").addClass("nav3_block");
        // $(".list_nav3_label").addClass("nav3_block");
    };
    if (Request("mokuai")=="intern") {
        $(".list_nav3_find3").addClass("nav3_block");
        $(".list_nav3_area").addClass("nav3_block");
        $(".list_nav3_class").addClass("nav3_block");
        $(".list_nav3_position").addClass("nav3_block");
        $(".list_nav3_address").addClass("nav3_block");
        $(".list_nav3_education").addClass("nav3_block");
        $(".list_nav3_experience").addClass("nav3_block");
        // $(".list_nav3_label").addClass("nav3_block");
        // $(".list_nav3_worktime").addClass("nav3_block");
    };
    if (Request("mokuai")=="idea") {
        // $(".list_nav3_area").addClass("nav3_block");
        $(".list_nav3_class").addClass("nav3_block");
    };

    if (Request("mokuai")=="shop") {
        $(".list_nav3_area").addClass("nav3_block");
    };


});

</script> 
 
</head>

<!--{template publish_header1}-->



<!-- nav -->
<div>
<ul class="nav1">
  <li><a href="index.php">首页</a></li>
  <li><a class="nav1_act_2" href="list.php?clickid=6&mokuai=goods">校园生活</a></li>
  <li><a class="nav1_act_3" href="list.php?clickid=10&mokuai=parttime">实践实习</a></li>
  <li><a class="nav1_act_4" href="list.php?clickid=13&mokuai=incubation">创业创新</a></li>
  <li><a class="nav1_act_5" href="law_lawshow.php">法律帮助</a></li>
  <li><a rel="5" href="315_abstract.php">全国大学生315俱乐部</a></li>
  <li><a rel="6" href="list.php?clickid=171&mokuai=shop">创习小店</a></li>
  <li><a rel="7" href="bangfu.php?mokuai=bangfu">创业帮扶</a></li>

</ul>
</div>


<div>
<ul class="nav2">
<!--{loop $list_nav2 $nav}-->
<li><a class="nav1_act_$nav['id']" href="?clickid=$nav['id']&mokuai=$nav['mokuai']">$nav['name']</a></li>
<!--{/loop}-->
<!--{if $nav['id']==13 or $nav['id']==14 or $nav['id']==15 or $nav['id']==16 or $nav['id']==171}-->
<li><a href="bangfu.php?mokuai=bangfu">创业帮扶</a></li>
<!--{/if}-->
</ul>
</div>




<div class="nav3">

<div class="list_nav3_find1">
<span><a>类型：</a></span>
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
<span><a>类型：</a></span>
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
<span><a>类型：</a></span>
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
<span><a>分类：</a></span>
        <div class="nav3_fenlei">
            <a href="?class=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
<!--{loop $class $key}-->

        <!--{if $_SESSION['class']==$key['name']}-->
        <a href="?class=$key['id']&mokuai=$key['mokuai']&hit=1&clickid=$clickid" class="nav3_act_1">$key['name']</a>
        <!--{/if}-->

        <!--{if $_SESSION['class']!=$key['name']}-->

        <!--{if $key['name']!='失物招领'}-->
        <a href="?class=$key['id']&mokuai=$key['mokuai']&hit=1&clickid=$clickid">$key['name']</a>
        <!--{elseif $key['name']=='失物招领'}-->
        <a href="list.php?clickid=9&mokuai=find_notice">$key['name']</a>
        <!--{/if}-->

        <!--{/if}-->
<!--{/loop}-->
        </div>
</div>

<div class="list_nav3_area">
<span><a>区域：</a></span>

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
<span><a>价格：</a></span>
    <a href="?price=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
    <form method="post" style="display:inline-block;" action="?hit=1&mokuai=$mokuai&clickid=$clickid">
    <input id="price_low" type="number" name="price_low" style="width:50px; text-align:center;" placeholder="最低价" value="$_SESSION['price_low']" onfocus="">
     - 
    <input id="price_high" type="number" name="price_high" style="width:50px; text-align:center;" placeholder="最高价" value="$_SESSION['price_high']">元
    <input name="submit3" type="submit" value="价格筛选">
    </form>


</div>

<div class="list_nav3_new">
<span><a>新旧：</a></span>
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
<span><a>方式：</a></span>
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
<span><a>发布者：</a></span>
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
<span><a>时间：</a></span>
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
<span><a>职位：</a></span>
    <a href="?position=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
    <form method="post" style="display:inline-block;" action="?position=1&hit=1&mokuai=$mokuai&clickid=$clickid">
    <input name="position_value" class="onblur" onfocus=this.className="onfocus" onblur=this.className="onblur" type="text" placeholder="请输入职位" value="$_SESSION['position']">        
    </form>
</div>

<div class="list_nav3_address">
<span><a>地点：</a></span>
    <a href="?address=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
    <form method="post" style="display:inline-block;" action="?address=1&hit=1&mokuai=$mokuai&clickid=$clickid">
    <input name="address_value" class="onblur" onfocus=this.className="onfocus_address" onblur=this.className="onblur" type="text" placeholder="请输入地点" value="$_SESSION['address']">      
    </form>
</div>

<div class="list_nav3_education">
<span><a>学历：</a></span>
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
<span><a>工作经验：</a></span>
    <a href="?experience=all&hit=1&mokuai=$mokuai&clickid=$clickid">不限</a>
</div> -->



<!-- 兼职的标签 -->
<div class="list_nav3_label">
<span><a>标签：</a></span>
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



<!-- 招聘的标签 -->
<!-- <div class="list_nav3_label2">
<span><a>标签：</a></span>
    <form>
        <input type="checkbox" name="label">
    </form>
</div>
 -->



<!-- <div class="list_nav3_worktime">
<span><a>工作时间：</a></span>
    <a href="?worktime=all&mokuai=$mokuai&hit=1&clickid=$clickid">不限</a>
    
</div> -->






</div>

</html>

