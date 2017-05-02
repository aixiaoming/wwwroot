<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
<head>
    <title>帮辅导师团 - 帮帮校园网</title>
	<link rel="stylesheet" type="text/css" href="./templates/default/mobile/user_style.css">
	<script type="text/javascript">
    function disp_alert()
    {
    alert("您还不是全国大学生315俱乐部会员，请加入后获得帮助！")
    }
    function disp1_alert()
    {
    alert("请先登录")
    }
    </script>
</head>


<!--{template user_header}-->



<div class="rightteacher">
<!--{if $teacher==Array ( )}-->
    <div class="empty">暂时还没有律师团信息哦</div>
    <!--{elseif $teacher!=Array ( )}-->

     <!--{if $news==""}-->

        <!--{loop $teacher $key}-->
        <div class="list">
        <img src="$key['logoimg']">
        	<div class="right">
        		<label>姓名：</label><label>$key['name']</label><br><br>
        		<label>单位：</label><label>$key['company']</label><br><br>
        		<!--{if $_SESSION['userid']==''}-->
        		<a href="#" onclick="disp1_alert()"><div class="more"><label>详情信息>></label></div></a><br>
                <!--{/if}-->

                <!--{if $_SESSION['userid']!=''}-->
        			<!--{if $user['administrator']==1}-->
                    <a href="teacherlistm.php?id=$key['id']"><div class="more"><label>详情信息>></label></div></a><br>
                    <!--{/if}-->
                    <!--{if $user['administrator']==2}-->
                        <!--{if $user['test']!=1}-->
                    	<a href="#" onclick="disp_alert()"><div class="more"><label>详情信息>></label></div></a><br>
                    	<!--{/if}-->
                    	<!--{if $user['test']==1}-->
                    	<a href="teacherlistm.php?id=$key['id']"><div class="more"><label>详情信息>></label></div></a><br>
                    	<!--{/if}-->
                    <!--{/if}-->
                <!--{/if}-->



        	</div>
        	
        	
        </div>       
        <!--{/loop}-->
                    <!--{if $_SESSION['userid']==''}-->
                    <a href="#" onclick="disp1_alert()"><div class="morem"><label>更多>></label></div></a>
                    <!--{/if}-->

                    <!--{if $_SESSION['userid']!=''}-->
                        <!--{if $user['administrator']==1}-->
                        <a href="/teacherm.php?news=all"><div class="morem"><label>更多>></label></div></a>
                        <!--{/if}-->
                        <!--{if $user['administrator']==2}-->
                            <!--{if $user['test']!=1}-->
                            <a href="#" onclick="disp_alert()"><div class="morem"><label>更多>></label></div></a>
                            <!--{/if}-->
                            <!--{if $user['test']==1}-->
                            <a href="/teacherm.php?news=all"><div class="morem"><label>更多>></label></div></a>
                            <!--{/if}-->
                        <!--{/if}-->
                    <!--{/if}-->

        <!--{/if}-->

        <!--{if $news=="all"}-->
        <!--{loop $teacherm $key}-->
        <div class="list">
         <img src="$key['logoimg']">
            <div class="right">
                <label>姓名：</label><label>$key['name']</label><br><br>
                <label>单位：</label><label>$key['company']</label><br><br>
                <!--{if $_SESSION['userid']==''}-->
                <a href="#" onclick="disp1_alert()"><div class="more"><label>详情信息>></label></div></a><br>
                <!--{/if}-->

                <!--{if $_SESSION['userid']!=''}-->
                    <!--{if $user['administrator']==1}-->
                    <a href="teacherlistm.php?id=$key['id']"><div class="more"><label>详情信息>></label></div></a><br>
                    <!--{/if}-->
                    <!--{if $user['administrator']==2}-->
                        <!--{if $user['test']!=1}-->
                        <a href="#" onclick="disp_alert()"><div class="more"><label>详情信息>></label></div></a><br>
                        <!--{/if}-->
                        <!--{if $user['test']==1}-->
                        <a href="teacherlistm.php?id=$key['id']"><div class="more"><label>详情信息>></label></div></a><br>
                        <!--{/if}-->
                    <!--{/if}-->
                <!--{/if}-->



            </div>
            
            
        </div>       
        <!--{/loop}-->
        $ruiqia_page
        <!--{/if}-->

 <!--{/if}-->


<footer>
<span>© Bangbangdream.com</span>
</footer>
</div>






</html>