<html>
<head>
    <title>【会员申请】- 帮帮校园网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>

<!--{template user_header}-->

<div class="usercheck_container">

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
        <li class="side_center"><a href="published_intern.php">实习</a></li>
		<!--{if $user['test']==1}-->
		<li class="side_center"><a href="published_idea.php">创意集市</a></li>
		<!--{/if}-->
        <!--{if $user['administrator']==1}-->
        
        <!--{/if}-->
        </div>
        <!--{if $user['administrator']==2}-->
            <!--{if $user['type']==1}--> 
                 <!--{if $user['test']==0 or $user['test']==3 or $user['test']==4}-->
                 <li  style="border-left:3px solid #e96c1f;padding-left:47px;"><a href="user_checkrmb.php">315俱乐部</a></li>
                <li><a href="social.php">社会个人认证会员</a></li>
                 <li><a href="law_show.php">法援在线</a></li>
                 <li><a href="lawer.php">帮帮律师团</a></li>
                 <li><a href="teacher.php">帮辅导师团</a></li>
                 <li><a href="list.php?class=169&mokuai=active&hit=1&clickid=7">会员专属活动</a></li>
                 <li><a href="news.php">我的消息</a></li>
                 <!--{/if}-->
                 <!--{if $user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6}-->
                 <li><a href="user_checkrmb.php">315俱乐部</a></li>
                  <li><a href="social.php">社会个人认证会员</a></li>
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
                 <!--{if $user['test']==1 or $user['test']==2 or $user['test']==5 or $user['test']==6}-->
                 <li><a href="time.php">会员期限</a></li>
                 <li  style="border-left:3px solid #e96c1f;padding-left:47px;"><a href="user_checkrmb.php">实名验证申请</a></li>
                 <li><a href="user_pay.php">企业VIP会员</a></li>
                 <li><a href="news.php">我的消息</a></li>
                <!--{/if}-->
            <!--{/if}-->
        <!--{elseif $user['administrator']==1}-->
        <li  class="click1"><label>管理员权限</label>
        <img src="/templates/default/pc\images/xia.png" class="publish1">
        <img src="/templates/default/pc\images/shang.png" class="publish1"  style="display:none;"></li>
        <div class="publish1"  style="display:none;">
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



<div class="check_container">
    <span class="top_span">会员申请</span>
    <div class="bar">
        <label>图片上传</label>
    </div>
    <!-- <div class="picture"> -->
        <div class="img1">
           <img src="/data/idcard/$user['id'].jpg?rand=<!--{eval echo mt_rand(1000,9999);}-->" onerror=this.src="/data/idcard/idcard.png" id="userlogoimg" onclick="document.getElementById('fileupload1').click()">
        </div>
        <div class="img2">
          <img src="/data/student/$user['id'].jpg?rand=<!--{eval echo mt_rand(1000,9999);}-->" onerror=this.src="/data/idcard/student.png" id="userlogoimg2" onclick="document.getElementById('fileupload2').click()">
        </div>
    <!--  </div> -->
    <div class="bar">
        <label>基本信息</label>
    </div>
    <div class="form">
        <label>　　姓名</label>
        <input name="name" type="text" value="$user['name']"><br>
        <label>　手机号</label>
        <input name="phone" type="text" value="$user['phone']"><br>
        <label>联系地址</label>
        <input name="address" type="text" value="$user['address']"><br>
        <label>　　邮箱</label>
        <input name="email" type="text" value="$user['qq']"><br>
        <label>身份证号</label>
        <input name="idcard" type="text" value="$user['idcard']"><br>
        <input type="submit" name="submit" value="提交" class="submit">
    </div>
</div>
      <input id="fileupload1" type="file" accept='image/jpeg' name="mypic" style="display:none;">
      <input id="fileupload2" type="file" accept='image/jpeg' name="mypic" style="display:none;">
</div>

<!--{template user_footer}-->



<script type="text/javascript">
$(function () {
// alert($("#userlogoimg").attr('rel'));

    $("#fileupload1").wrap("<form id='myupload' action='/actionalert.php?lei=idcard' method='post' enctype='multipart/form-data'></form>");


    $("#fileupload1").change(function(){
        $("#myupload").ajaxSubmit({
            dataType:  'json',
            beforeSend: function() {

                $("#userlogoimg").fadeOut(300);
                $("#userlogoimg").attr("src",'/data/idcard/idcard.png');
            },
    
            success: function(data) {
                if(data.type == 'warning')
                {
                    swal({
                        title: data.title,
                        text: data.text,
                        type: data.type,
                        timer: 2000,
                        showConfirmButton: false,
                    });
                    $("#userlogoimg").fadeIn(300);
                }
                else{
                    var url = data.pic + '?rand=' + Math.random();
                    $("#userlogoimg").attr("src", url);
                    $("#userlogoimg").fadeIn(300);
                }
                // window.location.href = "/user_check.php";
            },
            error:function(xhr){
                swal('提交失败', '请刷新页面再试试'  , 'error');
                $("#userlogoimg").attr("src",'/data/userface/error.jpg');
            }


        });
    });
    
    
});
$(function () {

    $("#fileupload2").wrap("<form id='myupload2' action='/actionalert.php?lei=student' method='post' enctype='multipart/form-data'></form>");

    $("#fileupload2").change(function(){
        $("#myupload2").ajaxSubmit({
            dataType:  'json',
            beforeSend: function() {

                $("#userlogoimg2").fadeOut(300);
                $("#userlogoimg2").attr("src",'/data/idcard/load.png');
            },
    
            success: function(data) {

                if(data.type == 'warning')
                {
                    swal({
                        title: data.title,
                        text: data.text,
                        type: data.type,
                        timer: 2000,
                        showConfirmButton: false,
                    });
                    $("#userlogoimg").fadeIn(300);
                }
                else{
                    var url = data.pic + '?rand=' + Math.random();
                    $("#userlogoimg2").attr("src", url);
                    $("#userlogoimg2").fadeIn(300);
                }

                // window.location.href = "/user_check.php";
            },
            error:function(xhr){
                swal('提交失败', '请刷新页面再试试'  , 'error');
                $("#userlogoimg2").attr("src",'/data/userface/error.jpg');
            }


        });
    });
    
    
});


</script>
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




</html>
<script>
// ------------------------------登陆按钮点击事件绑定---------------------------
$(function() {

$(".submit").click(function() {

       

// ajax提交数据
         $.ajax({
             type: "post",
             url: "checksocial.php",
             dataType: "json",
             async: true,
             cache: false, 
             data: $("input").serialize(),
            
             // 发送数据之前
             beforeSend:function()
                     {
                         // 禁用按钮防止重复提交
                         $(".submit").attr({ disabled: "disabled" });
                         // 运行waitme动画
                         run_waitMe('hide');
                     },


           // 整个ajax操作完成
           complete: function() 
                 {
                        //解除禁止，用户还能操作
                       $(".submit").removeAttr("disabled");
                       // 隐藏waitMe动画
                       $('body').waitMe('hide');
                 }, 


             // 收到服务器的数据
             success: function(msg)
             {
               

                if(msg.type == 'success')
                {
                   
                   
                   swal({   
                    title: msg.title,   
                    text: msg.text,   
                    type: msg.type,
                    timer: 2000,
                    showConfirmButton: false,

                   });
 
                   ruiqia_location('/user_check.php',1500);

                }


                else{
                    swal(msg.title, msg.text , msg.type);
                }
                
                
               

             },
            

             // 没有发送到服务器
             error:function(msg)
             {
                 swal('提交失败', '请刷新页面再试试'  , 'error');
         
            },


             });




});


});



</script>