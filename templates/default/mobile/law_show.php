<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>法援在线-帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="./templates/default/mobile/user_style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
    <script type="text/javascript">
    function disp_alert()
    {
    alert("只有全国大学生315俱乐部会员方可进行QQ在线交谈。")
    }
    function disp1_alert()
    {
    alert("请先登录")
    }
    </script>
</head>


<!--{template user_header}-->

<div class="lawfirst">

<!--{loop $law $key}-->


      
            <div class="lawsecond">
                <img src="$key['images']" onerror=this.src="/data/lawlogo/shili.png" class="img">
                <div>
                    <label>姓名 :</label><span>$key['name']</span>


                     <!--{if $_SESSION['userid']==''}-->
                    <span><img src="/templates/default/pc\images/qq.png" alt="点击交流" onclick="disp1_alert()" class="imgimg"></span>
                    <script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=117879";s.parentNode.insertBefore(c,s);})();</script>
                    <!--{/if}-->
                    <!--{if $_SESSION['userid']!=''}-->
                        <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4 or $user['test']==5 or $user['test']==7}-->
                        <span><img src="/templates/default/pc\images/qq.png" alt="点击交流" onclick="disp_alert()" class="imgimg"></span>
                        <script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=117879";s.parentNode.insertBefore(c,s);})();</script>
                        <!--{/if}-->
                        <!--{if $user['test']==1 or $user['test']==2 or $user['test']==6}-->
<!-- <a target="blank" href="http://wpa.qq.com/msgrd?uin=$key['lineqq']&amp;Site=帮帮校园网&amp;Menu=yes"> -->
                        <span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=$key['lineqq']&site=帮帮校园网&menu=yes"><img border="0" src="/templates/default/pc\images/qq.png" alt="点击这里给我发消息" title="点击这里给我发消息" class="imgimg"/></a></span>
                        <script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=117879";s.parentNode.insertBefore(c,s);})();</script>
                        <!--{/if}-->  
                    <!--{/if}-->



                    <br><label>院校 :</label><span>$key['school']</span><br>
                    <!-- <label>学历:</label><span>$key['education']</span><br> -->
                    <label class="ge">格言 : </label><div class="yan">$key['job']</div>
                    

	           
                
                </div>
            </div>
    
<!--{/loop}-->




<footer class="lawfooter">
<span>© Bangbangdream.com</span>
</footer>
</div>   

</html>