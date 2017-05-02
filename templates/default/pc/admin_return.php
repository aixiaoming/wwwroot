<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
    <title>【管理员审查会员申请】- 帮帮校园网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <script src="/layer/layer/layer.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>


<!--{template user_header}-->


<div class="admin_container">

        
<!--{if $type=="" or $type==null}-->
    <div class="lei">
    <a href="admin_return.php" class="type">315会员审核</a>
    <a href="admin_return.php?type=real">单位认证审核</a>
    <a href="admin_return.php?type=vip">企业VIP会员审核</a>
    </div>
    <!--{if $checkuser==Array ( )}-->
         <div class="kong">暂时没有人要申请成为315俱乐部会员哦</div>
    <!--{/if}-->
    <!--{loop $checkuser $key}-->
    <div class="total">
        <div class="left">
	        <span>个人用户:</span>
		    <label>$key['id']</label>
		    <span>　　姓名：</span>
		    <label>$key['name']</label><br>
		    <span>在读大学：</span>
		    <label>$key['school']</label><br>
		    <span>手机号码：</span>
		    <label>$key['phone']</label><br>
		    <span>微信号：</span>
		    <label>$key['qq']</label><br>
		    <span>身份证号：</span>
		    <label>$key['idcard']</label><br>
		    <span>通讯地址：</span>
		    <label>$key['address']</label><br>
		    <div class="card1">身份证：</div>
		    <img src="/data/idcard/$key['id'].jpg?rand=<!--{eval echo mt_rand(1000,9999);}-->" class="img">
	    </div>
	    <div class="right">
		    <div class="card">学生证：</div>
		    <img src="/data/student/$key['id'].jpg?rand=<!--{eval echo mt_rand(1000,9999);}-->">
		</div>
	    <form class="form" method="post"  action="check_return.php">
		    <input name="opinion" type="radio" value="agree" />同意
		    <input name="opinion" type="radio" value="disagree" />不同意<br>
		    <input name="userid" type="hidden"  value="$key['id']">
		    <input name="mobile" type="hidden"  value="$key['phone']">
		    <input type="submit" name="submit" value="确定" class="submit"/>
		</form>
	</div>
	<!--{/loop}-->
	<div id="pages">
	   $ruiqia_page
    </div>
<!--{/if}-->

<!--{if $type=="real"}-->
    <div class="lei">
    <a href="admin_return.php">315会员审核</a>
    <a href="admin_return.php?type=real" class="type">单位认证审核</a>
    <a href="admin_return.php?type=vip">企业VIP会员审核</a>
    </div>
    <!--{if $checkuserreal==Array ( )}-->
         <div class="kong">暂时没有人要申请成为实名验证会员哦</div>
    <!--{/if}-->
    <!--{loop $checkuserreal $key}-->
        <div class="total2">
	        <div class="left">
		        <label>单位用户 : </label>
		        <label> $key['id']</label><br>
		        <span>单位名称：</span>
			    <label>$key['name']</label><br>
			    <span>手机号码：</span>
			    <label>$key['phone']</label><br>
			    <span>办公电话：</span>
			    <label>$key['tel']</label><br>
			    <span>通讯地址：</span>
			    <label>$key['address']</label><br>
		        <div class="card1">营业执照：</div>
                <div id="layer-photos-demo" class="layer-photos-demo">
		        <a href="img.php?id=$key['id']" target="_blank"><img layer-src="/data/idcard/$key['id'].jpg" src="/data/idcard/$key['id'].jpg" class="img" alt="点击图片看大图"></a>
		        </div>
		    </div>
		    <div class="right">
		    	<span>单位简介：</span>
			    <textarea readonly>$key['introduction']</textarea>
		    </div>

		    <form class="form2" method="post"  action="check_return.php">
			  
			    <input name="opinion" type="radio" value="agree" />同意
			    <input name="opinion" type="radio" value="disagree" />不同意<br>
			    <input name="userid" type="hidden"  value="$key['id']">
			    <input name="mobile" type="hidden"  value="$key['phone']">
			    <input name="type" type="hidden"  value="real">
			    <input type="submit" name="submit" value="确定"  class="submit"/>
			   
		    </form>
		</div>
		<!--{/loop}-->
	    <div id="pages">
	    	$ruiqia_page
	    </div>
<!--{/if}-->


<!--{if $type=="vip"}-->
    <div class="lei">
    <a href="admin_return.php">315会员审核</a>
    <a href="admin_return.php?type=real">单位认证审核</a>
    <a href="admin_return.php?type=vip"  class="type">企业VIP会员审核</a>
    </div>
    <!--{if $checkuservip==Array ( )}-->
         <div class="kong">暂时没有人要申请成为企业VIP会员哦</div>
    <!--{/if}-->
    <!--{loop $checkuservip $key}-->
        <div class="total2">
	        <div class="left">
		        <label>单位用户 : </label>
		        <label> $key['id']</label><br>
		        <span>单位名称：</span>
			    <label>$key['name']</label><br>
			    <span>手机号码：</span>
			    <label>$key['phone']</label><br>
			    <span>通讯地址：</span>
			    <label>$key['address']</label><br>
		        <div class="card1">营业执照：</div>
		        <a href="img.php?id=$key['id']" target="_blank"><img src="/data/idcard/$key['id'].jpg" class="img" alt="点击图片看大图"></a>
		    </div>
		    <div class="right">
		    	<span>单位简介：</span>
			    <textarea readonly class="vip">$key['introduction']</textarea>
		    </div>

		    <form class="form3" method="post"  action="check_return.php">
			    <label style="color:#ff0000;">该用户申请的是vip会员，请确认该用户已经线下付费10000元</label><br>
			    <input name="opinion" type="radio" value="agree" />同意
			    <input name="opinion" type="radio" value="disagree" />不同意<br>
			    <input name="userid" type="hidden"  value="$key['id']">
			    <input name="mobile" type="hidden"  value="$key['phone']">
			    <input name="type" type="hidden"  value="vip">
			    <input type="submit" name="submit" value="确定"  class="submit"/>
			</form>
		</div>
		
		<!--{/loop}-->
	    <div id="pages">
	    	$ruiqia_page
	    </div>
<!--{/if}-->

      
</div>

<!--{template user_footer}-->


</html>