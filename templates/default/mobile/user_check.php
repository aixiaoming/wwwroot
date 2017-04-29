<html>
<head>
    <title>【会员申请】- 帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="$dir/user_style.css">
</head>

<!--{template user_header}-->

<div class="usercheck_container">


<!--{if $user['type']==1}--> 
<div class="check_container">
    <div class="bar">
        <label>图片上传</label>
    </div>
    <!-- <div class="picture"> -->
        <div class="img1">
           <img src="/data/idcard/$user['id'].jpg" onerror=this.src="/data/idcard/idcard.png" id="userlogoimg" onclick="document.getElementById('fileupload1').click()">
        </div>
        <div class="img2">
          <img src="/data/student/$user['id'].jpg" onerror=this.src="/data/idcard/student.png" id="userlogoimg2" onclick="document.getElementById('fileupload2').click()">
        </div>
    <!--  </div> -->
    <div class="bar">
        <label>基本信息</label>
    </div>
    <div class="form">
        <label>　　姓名</label>
        <input name="name" type="text" value=""><br>
        <label>在读大学</label>
        <input name="school" type="text" value="$user['school']"><br>
        <label>　手机号</label>
        <input name="phone" type="text" value="$user['phone']"><br>
        <label>邮递地址</label>
        <input name="address" type="text" value="$user['address']"><br>
        <label>　微信号</label>
        <input name="qq" type="text" value="$user['qq']"><br>
        <label>身份证号</label>
        <input name="idcard" type="text" value="$user['idcard']"><br>
        <input type="submit" name="submit" value="提交" class="submit">
    </div>
</div>
 <!--{elseif $user['type']==2}-->
<div class="check_container">
<!-- <span class="top_span">会员申请</span> -->
<div class="bar">
        <label>图片上传</label>
    </div>
    <div class="img">
        <img src="/data/idcard/$user['id'].jpg" onerror=this.src="/data/idcard/license.png" id="userlogoimg" onclick="document.getElementById('fileupload1').click()">
    </div>
    
    <div class="bar">
        <label>基本信息</label>
    </div>
    <form method="post" action="check.php" class="form">
        <label>单位名称</label>
        <input name="name" type="text" value=""><br>
        <label>　　座机</label>
        <input name="tel" type="text" value="$user['tel']"><br>
        <label>邮递地址</label>
        <input name="address" type="text" value="$user['address']"><br>
        <div class="textarea"><label>单位简介</label></div>
        <textarea name="introduction">$user['introduction']</textarea>
        <input type="submit" name="submit" value="提交" class="submit1">
    </form>
    
</div>
<!--{/if}-->


      <input id="fileupload1" type="file" accept='image/jpeg' name="mypic" style="display:none;">
      <input id="fileupload2" type="file" accept='image/jpeg' name="mypic" style="display:none;">


<footer>
<span>© Bangbangdream.com</span>
</footer>

</div>

<script type="text/javascript">
$(function () {
// alert($("#userlogoimg").attr('rel'));

    $("#fileupload1").wrap("<form id='myupload' action='/action.php?lei=idcard' method='post' enctype='multipart/form-data'></form>");


    $("#fileupload1").change(function(){
        $("#myupload").ajaxSubmit({
            dataType:  'json',
            beforeSend: function() {

                $("#userlogoimg").fadeOut(300);
                $("#userlogoimg").attr("src",'/data/idcard/load.png');
            },
            success: function(data) {
        
                var url = data.pic + '?rand=' + Math.random();
                $("#userlogoimg").attr("src", url);
                $("#userlogoimg").fadeIn(300);
                // window.location.href = "/user_check.php";
            },
            error:function(xhr){
                 $("#userlogoimg").attr("src",'/data/userface/error.jpg');
            }


        });
    });
    
    
});
$(function () {

    $("#fileupload2").wrap("<form id='myupload2' action='/action.php?lei=student' method='post' enctype='multipart/form-data'></form>");

    $("#fileupload2").change(function(){
        $("#myupload2").ajaxSubmit({
            dataType:  'json',
            beforeSend: function() {

                $("#userlogoimg2").fadeOut(300);
                $("#userlogoimg2").attr("src",'/data/idcard/load.png');
            },
    
            success: function(data) {
        
                var url = data.pic + '?rand=' + Math.random();
                $("#userlogoimg2").attr("src", url);
                $("#userlogoimg2").fadeIn(300);
                // window.location.href = "/user_check.php";
                
        
            },
            error:function(xhr){
                 $("#userlogoimg2").attr("src",'/data/userface/error.jpg');
            }


        });
    });
    
    
});


</script>



</html>
<script>
// ------------------------------按钮点击事件绑定---------------------------
$(function() {

$(".submit").click(function() {

       

// ajax提交数据
         $.ajax({
             type: "post",
             url: "check.php",
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