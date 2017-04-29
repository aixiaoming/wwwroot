
<!doctype html>
<html>
<head>
<title>【详情页】- 帮帮校园网</title>
<link rel="stylesheet" type="text/css" href="$dir/style.css">
<!-- 这个是title的图标 -->
<link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" /> 
<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<script type="text/javascript"> 
function addClass(id,stylestr){
var o=document.getElementById(id);
o.className=o.className+" "+stylestr;
o=null;
}
function changeurl(stylestr){
$("#suoluetu2").attr('src',stylestr); 
}

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

    $(".nav1_act_"+Request("clickid")).addClass("nav1_act_1");
    if (Request("clickid")>5) {
        if (Request("clickid")<10) {
            $(".nav1_act_2").addClass("nav1_act_1");
             $(".nav1_act_"+Request("clickid")).addClass("nav2_act_1");
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
            };
         };

         if (Request("clickid")>16) {
            if (Request("clickid")<20) {
                $(".nav1_act_5").addClass("nav1_act_1");
             $(".nav1_act_"+Request("clickid")).addClass("nav2_act_1");
            };
         };

         if (Request("clickid")==171) {
                $(".nav1_act_shop").addClass("nav1_act_1");
                 $(".nav2").addClass("nav3_yincang");
         };


});

</script>
<style type="text/css">
.searchtext {padding:0px; padding-left:10px!important; margin: 0px; width:445px!important; height:31px!important; border:#DD5500 solid 2px!important; border-radius:0 !important; outline:none!important;}
</style> 
</head>
<body>

<!--{if $mokuai=="shop"}-->
<!--{template common_header}-->
<!-- 头部 -->
<!--{/if}-->

<!--{if $nav2=='2'}-->
<!-- 校园生活 -->
<!--{template common_header2}-->
<!-- 头部 -->



<!--{elseif $nav2=='3'}-->
<!-- 实践实习 -->

<!--{template common_header}-->
<!-- 头部 -->


<!--{elseif $nav2=='4'}-->
<!-- 创业创新 -->


<!--{if $mokuai=="idea"}-->
<!--{template common_header2}-->
<!-- 头部 -->
<!--{/if}-->

<!--{if $mokuai=="joblease"}-->
<!--{template common_header2}-->
<!-- 头部 -->
<!--{/if}-->

<!--{if $mokuai=="incubation"}-->
<!--{template common_header}-->
<!-- 头部 -->
<!--{/if}-->

<!--{if $mokuai=="partner"}-->
<!--{template common_header}-->
<!-- 头部 -->
<!--{/if}-->





<!--{/if}-->


<button id="d" class="parentIframe" onclick="fuchuang()">举报投诉</button>
    <input type="hidden" id="list" name="list" value="$_REQUEST['list']" />
    <input type="hidden" id="clickid" name="clickid" value="$_REQUEST['clickid']" />
    


<!-- 这里是限制整个页面宽的大框架 /////////////////开始-->
<div class="frame1">

<!--{template publish_header}-->


<!-- nav -->
<div>
<ul class="nav1">
<li><a href="index.php">首页</a></li>
<li><a class="nav1_act_2" href="list.php?clickid=6&mokuai=goods">校园生活</a></li>
<li><a class="nav1_act_3" href="list.php?clickid=10&mokuai=intern">实践实习</a></li>
<li><a class="nav1_act_4" href="list.php?clickid=13&mokuai=incubation">创业创新</a></li>
<li><a class="nav1_act_5" href="law_lawshow.php">法律帮助</a></li>
<li><a rel="5" href="315_abstract.php">全国大学生315俱乐部</a></li>
<li><a class="nav1_act_shop" rel="6" href="list.php?clickid=171&mokuai=shop">创习小店</a></li>
<li><a rel="7" href="bangfu.php?mokuai=bangfu">创业帮扶</a></li>
</ul>
</div>


<div>
<ul class="nav2">
<!--{loop $list_nav2 $nav}-->
<li><a class="nav1_act_$nav['id']" href="list.php?clickid=$nav['id']&mokuai=$nav['mokuai']">$nav['name']</a></li>
<!--{/loop}-->
</ul>
</div>



<!--{if $mokuai=="shop"}-->
<!-- 创习小店 -->

<!--{template show_shop}-->
<!--{/if}-->


<!--{if $nav2=='2'}-->
<!-- 校园生活 -->


<!--{if $mokuai=="goods"}-->
<!-- 校园二手 -->
<!--{template show_school_goods}-->
<!--{/if}-->


<!--{if $mokuai=="active"}-->
<!-- 校园活动 -->
<!--{template show_school_active}-->
<!--{/if}-->

<!--{if $mokuai=="schoolnear"}-->
<!-- 校园周边 -->
<!--{template show_school_schoolnear}-->
<!--{/if}-->

<!--{if $mokuai=="find_notice"}-->
<!-- 失物招领 -->
<!--{template show_school_find_notice}-->
<!--{/if}-->


<!--{elseif $nav2=='3'}-->
<!-- 实践实习 -->

<!--{if $mokuai=="parttime"}-->
<!-- 兼职 -->
<!--{template show_job_parttime}-->
<!--{/if}-->

<!--{if $mokuai=="recruit"}-->
<!-- 招聘 -->
<!--{template show_job_recruit}-->
<!--{/if}-->

<!--{if $mokuai=="intern"}-->
<!-- 实习 -->
<!--{template show_job_intern}-->
<!--{/if}-->


<!--{elseif $nav2=='4'}-->
<!-- 创业创新 -->

<!--{template show_create}-->


<!--{/if}-->





</div>
<!-- 整体大框架///////////////////////////////////////结束 -->


<!-- 这里是尾部 -->
<div class="footer">
<center><a>© Bangbangdream.com</a></center>
</div>

</body>
</html>
</body>
</html>
<script type="text/javascript">
var list=$('#list').val();
var clickid=$('#clickid').val();
    function fuchuang(){
    layer.open({
        type: 2,
        title: '举报该信息',
        maxmin: true,
        shadeClose: true, //点击遮罩关闭层
        area : ['600px' , '450px'],
        offset: '100px',
        content: ['/complaints.php?list='+list+'&clickid='+clickid, 'no']
}); 
};
</script>