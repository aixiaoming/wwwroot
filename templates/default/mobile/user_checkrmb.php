<html>
<head>
    <title>【会员申请】- 帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="$dir/user_style.css">
</head>


<!--{template user_header}-->

<div class="usercheckrmb_container">



<!--{if $user['type']==1}--> 
<div class="checkrmb_container">
    <!-- <span class="top_span">315俱乐部会员申请</span> -->
    <div class="bar">
        <label>315俱乐部简介</label>
    </div>
    <!--{if $club['club']=="" or $club['club']=="null"}-->
    <div class="label">管理员还未填写简介哦</div>
    <!--{/if}-->
    <div class="textarea">$club['club']</div>

    <!--{if $user['pay']==0}-->    
    <div class="bar">
        <label>充值</label>
    </div>
    <div class="rmb">
        <div>
        <div class="pay">　　如果要申请成为315俱乐部会员，请先付费，然后填写资料</div><br>
       
        <form method="post" action="/alipay/alipayapi.php">
            <input name="WIDout_trade_no" type="hidden" value="$user['id']">
            <input name="WIDsubject" type="hidden" value="帮帮校园网315俱乐部会员">
            <input name="WIDtotal_fee" type="hidden" value="31.5">
            <input name="WIDshow_url" type="hidden" value="http://www.bangbangdream.com/user_checkrmb.php">
            <input type="submit" value="充值"  class="submit">
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
        您已经付费成功，请前去
        <a href="user_check.php"><button>填写资料</button></a>
        </div>
    </div>
    <!--{/if}-->

</div>
 <!--{elseif $user['type']==2}-->
<div class="checkrmb_container">
    <span class="top_span">实名验证</span>
    <div class="bar">
        <label>实名验证简介</label>
    </div>
    <div class="textarea">$club['vip']</div>

    <!--{if $user['pay']==0}-->
    <div class="bar">
        <label>充值</label>
    </div>
    <div class="rmb">
        <div>
        <div class="pay">　　如果要申请成为实名验证会员，请先付费，然后填写资料。</div>><br>

        <form method="post" action="/alipay/alipayapi.php">
            <input name="WIDout_trade_no" type="hidden" value="$user['id']">
            <input name="WIDsubject" type="hidden" value="帮帮校园网实名验证会员">
            <input name="WIDtotal_fee" type="hidden" value="100">
            <input name="WIDshow_url" type="hidden" value="http://www.bangbangdream.com/user_checkrmb.php">
            <input type="submit" value="充值"  class="submit">
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
        您已经付费成功，请前去
        <a href="user_check.php"><button>填写资料</button></a>
        </div>
    </div>
    <!--{/if}-->

    
</div>
<!--{/if}-->


<footer>
<span>© Bangbangdream.com</span>
</footer>
</div>



</html>