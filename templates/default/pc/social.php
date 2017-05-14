<html>
<head>
    <title>【会员申请】- 帮帮校园网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>


<!--{template user_header}-->

<div class="usercheckrmb_container">

<!-- 左侧导航菜单 -->
<div class="side">

        <div class="first">
        <span class="side_top"><b><a href="#">个人中心</a></b></span>
        </div>

        <ul id="ul">
        <li><a href="user_profile.php"> 个人资料</a></li>
        <li><a href="user_safe.php"> 安全设置</a></li>
        <li  class="click"><label>我的发布</label>
        <img src="/templates/default/pc\images/xia.png" class="publish"  style="display:none;">
        <img src="/templates/default/pc\images/shang.png" class="publish"> 
        </li>
        <div class="publish">
        <li  class="side_center"><a href="published_goods.php">校园二手</a></li>
        <li class="side_center"><a href="published_schoolnear.php">校园周边</a></li>
        <li class="side_center"><a href="published_active.php">校园活动</a></li>
        <li class="side_center"><a href="published_find_notice.php">失物招领</a></li>
        <li class="side_center"><a href="published_recruit.php">招聘应聘</a></li>
        <li class="side_center"><a href="published_parttime.php">兼职</a></li>
        <li class="side_center"><a href="published_intern.php">实习</a></li><li class="side_center"><a href="published_chuangye.php">创业项目</a></li>
		<!--{if $user['test']==1}-->
		<li class="side_center"><a href="published_idea.php">创意集市</a></li>
		<!--{/if}-->
        <!--{if $user['administrator']==1}-->
        
        <!--{/if}-->
        </div>
        <!--{if $user['administrator']==2}-->
            <!--{if $user['type']==1}--> 
                 <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4}-->
                 <li><a href="user_checkrmb.php">315俱乐部</a></li>
                 <li  style="border-left:3px solid #e96c1f;padding-left:47px;"><a href="social.php">社会个人认证会员</a></li>
                 <li><a href="law_show.php">法援在线</a></li>
                 <li><a href="lawer.php">帮帮律师团</a></li>
                 <li><a href="teacher.php">帮辅导师团</a></li>
                 <li><a href="list.php?class=169&mokuai=active&hit=1&clickid=7">会员专属活动</a></li>
                 <li><a href="news.php">我的消息</a></li>
                 <!--{/if}-->
                 <!--{if $user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6 or $user['test']==8}-->
                 <li><a href="user_checkrmb.php">315俱乐部</a></li>
                 <li  style="border-left:3px solid #e96c1f;padding-left:47px;"><a href="social.php">社会个人认证会员</a></li>
                 <li><a href="time.php">会员期限</a></li>
                 <li><a href="law_show.php">法援在线</a></li>
                 <li><a href="lawer.php">帮帮律师团</a></li>
                 <li><a href="teacher.php">帮辅导师团</a></li>
                 <li><a href="list.php?class=169&mokuai=active&hit=1&clickid=7">会员专属活动</a></li>
                 <li><a href="news.php">我的消息</a></li>
                <!--{/if}-->
            <!--{/if}-->
            <!--{if $user['type']==2}--> 
                 <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4}-->
                 <li  style="border-left:3px solid #e96c1f;padding-left:47px;"><a href="user_checkrmb.php">实名验证申请</a></li>
                 <li><a href="user_pay.php">企业VIP会员</a></li>
                 <li><a href="news.php">我的消息</a></li>
                 <!--{/if}-->
                 <!--{if $user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6 or $user['test']==8}-->
                 <li><a href="time.php">会员期限</a></li>
                 <li  style="border-left:3px solid #e96c1f;padding-left:47px;"><a href="user_checkrmb.php">实名验证申请</a></li>
                 <li><a href="user_pay.php">企业VIP会员</a></li>
                 <li><a href="news.php">我的消息</a></li>
                <!--{/if}-->
            <!--{/if}-->
        <!--{elseif $user['administrator']==1}-->
        <li  class="click1"><label>管理员权限</label>
        <img src="/templates/default/pc\images/xia.png" class="publish1"  style="display:none;">
        <img src="/templates/default/pc\images/shang.png" class="publish1"></li>
        <div class="publish1">
        <li class="side_center"><a href="admin_return.php">审核申请</a></li>
        <li class="side_center"><a href="complain.php">投诉管理</a></li>
        <li class="side_center"><a href="vippay.php">会员管理</a></li>
        <li class="side_center"><a href="onlinelaw.php">法援在线</a></li>
        <li class="side_center"><a href="onlinelaw_org.php">法援组织</a></li>
        <li class="side_center"><a href="club_write.php">315俱乐部</a></li>
          <li class="side_center"><a href="social_write.php">社会个人认证会员</a></li>
        <li class="side_center"><a href="user_paywrite.php">企业VIP会员</a></li>
        <li class="side_center"><a href="vip_write.php">实名验证</a></li>
        
        <li class="side_center"><a href="lawer.php">帮帮律师团</a></li>
        <li class="side_center"><a href="teacher.php">帮辅导师团</a></li>
        </div>
        <!--{/if}-->

        </ul>

    </div>


<!--{if $user['type']==1}--> 
<div class="checkrmb_container">
    <span class="top_span">社会个人认证会员申请</span>
    <div class="bar">
        <label>社会个人认证会员</label>
    </div>
    <!--{if $social['club']=="" or $social['club']=="null"}-->
    <div class="label">管理员还未填写简介哦</div>
    <!--{/if}-->
    <div class="textarea">$social['club']</div>


<!--{if $user['test']==3 && $user['vip']==2}-->
<div class="bar">
        <label>充值</label>
</div>
<label style="margin-left:100px;color:#ff0000;">您的申请正在审核中，请耐心等待。</label>
<!--{/if}-->



<!--{if $user['test']==4}-->
<div class="bar">
        <label>充值</label>
</div>
<label style="margin-left:100px;color:#ff0000;">对不起，您的申请未通过审核</label>
<a href="user_check.php"><button>再次申请</button></a>
<!--{/if}-->

<!--{if $user['test']==0 or $user['test']==5}-->
    <!--{if $user['pay']==0}-->
    <div class="bar">
        <label>充值</label>
    </div>
    <div class="rmb">
        <div>
        <label  class="pay">申请社会个人认证会员，需缴纳会籍费100元/年，然后提交会员资料。<br><br><label style="color:#ff0000;">（注：付费成功后请等待网页跳转，防止重复扣费。）</label></label><br>
       
        <form method="post" action="/alipay/alipayapisocial.php">
            <input name="WIDout_trade_no" type="hidden" value="$user['id']">
            <input name="WIDsubject" type="hidden" value="帮帮校园网社会个人认证会员">
            <input name="WIDtotal_fee" type="hidden" value="100">
            <input name="WIDshow_url" type="hidden" value="http://www.bangbangdream.com/social.php">
            <input type="submit" value="支付宝支付"  class="submit">
        </form>
        
        </div>



    </div>
    <!--{/if}-->
    <!--{if $user['pay']==1 && $user['vip']!=2}-->
    <div class="bar">
      <label>资料填写</label>
    </div>
    <div class="rmb">
      <div>
        您已申请315俱乐部会员，暂不能申请社会个人认证会员。
      </div>
    </div>
    <!--{/if}-->
    <!--{if $user['pay']==1 && $user['vip']==2}-->
    <div class="bar">
        <label>资料填写</label>
    </div>
    <div class="rmb">
        <div>
        您已经付费成功，请前去<br>
            <a href="user_checksocial.php"><button style="width: 100px;height: 30px;background-color: #f58710;border:0px;font-size: 16px;color: #fff;border-radius: 4px;cursor: pointer;margin-top: 10px;">填写资料</button></a>
        </div>
    </div>
    <!--{/if}-->
<!--{/if}-->

    

</div>
 <!--{elseif $user['type']==2}-->
<div class="checkrmb_container">
    <span class="top_span">实名验证</span>
    <div class="bar">
        <label>实名验证简介</label>
    </div>
    <div class="textarea">$club['vip']</div>



    <!--{if $user['test']==3}-->
    <div class="bar">
            <label>充值</label>
        </div>
    <label style="margin-left:100px;color:#ff0000;">您的申请正在审核中，请耐心等待。</label>
    <!--{/if}-->

    <!--{if $user['test']==4}-->
    <div class="bar">
            <label>充值</label>
        </div>
    <label style="margin-left:100px;color:#ff0000;">对不起，您的申请未通过审核</label>
    <a href="user_check.php"><button>再次申请</button></a>
    <!--{/if}-->

    <!--{if $user['test']==0}-->
        <!--{if $user['pay']==0}-->
        <div class="bar">
            <label>充值</label>
        </div>
        <div class="rmb">
            <div>
            <label  class="pay">申请实名验证会员会员，需缴纳会籍费100元/年，然后提交会员资料。<br><br><label style="color:#ff0000;">（注：付费成功后请等待网页跳转，防止重复扣费。）</label></label><br>

            <form method="post" action="/alipay/alipayapi.php">
                <input name="WIDout_trade_no" type="hidden" value="$user['id']">
                <input name="WIDsubject" type="hidden" value="帮帮校园网实名验证会员">
                <input name="WIDtotal_fee" type="hidden" value="100">
                
                <input name="WIDshow_url" type="hidden" value="http://www.bangbangdream.com/user_checkrmb.php">
                <input type="submit" value="支付宝支付"  class="submit">
            </form>
            </div>
        </div>
        <!--{/if}-->
        <!--{if $user['pay']==1}-->
        <div class="bar">
            <label>资料填写</label>
        </div>
        <div class="rmb">
            <div>
            您已经付费成功，请前去<br>
            <a href="user_check.php"><button style="width: 100px;height: 30px;background-color: #f58710;border:0px;font-size: 16px;color: #fff;border-radius: 4px;cursor: pointer;margin-top: 10px;">填写资料</button></a>
            </div>
        </div>
        <!--{/if}-->
    <!--{/if}-->


    

    
</div>
<!--{/if}-->



</div>

<!--{template user_footer}-->


</html>


<script type="text/javascript">
 var pn = location.pathname;
    
    var as = document.getElementById('ul').getElementsByTagName('a'),find=false;

    for (var i = 0, j = as.length; i < j; i++)
        if (as[i].href.indexOf(pn) != -1) { as[i].className = 'focus'; find = true; break; }
    //if (!find) as[0].className = 'focus';//如果未找到匹配的，需要设置哪个获取焦点可以修改这句

</script>
<script type="text/javascript"> 
    $(document).ready(function(){
    $(".click").click(function(){
        $(".publish").slideToggle("slow");
      });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
    $(".click1").click(function(){
        $(".publish1").slideToggle("slow");
      });
    });
</script>
<script>
var t1;
var sum=0;

$(document).ready(function() {
	
	function update_native_state()
	{
      sum++;
      if(sum>600){window.clearInterval(t1);return false;}
       if(sum>180){
       	m=sum%10;
       	if (m!=0) {return false;}
       }

       $(".sum").html(sum);
       $.get{'D:\wwwroot\bangbangdream\wwwroot\sdk/example\native_notify.php?id=$_POST['id'];',function(data){
       	v=eval("("+data+")");
       	if{v.state=='userparing'}{$(".bottom").html('微信购买成功');}
       	if (v.state=='success') {
       		window.clearInterval(t1);
       		if (v.url=='') {
       			$(".qr img").attr('src', 'done.png');
       			$(".bottom").html('chenggong,<a href=></a>');
       			}else{
       				window.location.href=v.url;
       			}
       		}
       
    });
} 

t1=window.setInterval(update_native_state,1000);
window.onblur=function(){
	clearInterval(t1);
};

window.onfocus=function(){
	t1=setInterval(function(){
		update_native_state();
	},1000
		);
}
});
</script>