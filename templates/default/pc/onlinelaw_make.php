<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>【更改法援在线】- 帮帮校园网</title>
    <link rel="stylesheet" type="text/css" href="$dir/style.css"/>
    <link rel="stylesheet" type="text/css" href="./templates/default/pc/user_style.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="shortcut icon" type="image/x-icon" href="/templates\default\pc\images/favicon.ico" media="screen" />
</head>
<body> 

<!--{template user_header}-->
<div class="online_container">
<!--{template user_side}-->

<div class="middle">

<span class="top_span">法援在线更改</span>
<div class="bar">
<span class="span">上传头像</span>
</div>
<div class="img">

       <img src="$usermake['images']" onerror=this.src="/data/lawlogo/shili.png" title="点击图片上传头像，图片大小不能超过1M" alt="点击图片上传头像，图片大小不能超过1M" id="userlogoimg" onclick="document.getElementById('fileupload').click()">
	 
      <input id="fileupload" type="file" accept='image/jpeg' name="mypic" style="display:none;">
      <label>点击图片上传头像(一寸照片)</label><br>
</div>


<div class="bar">
<span class="span">基本信息</span>
</div>

<div class="form">
	<label>姓名</label>
	<input name="name" type="text" value="$usermake['name']"/><br>
	<label>院校</label>
	<input name="school" type="text" value="$usermake['school']"/><br>
   <!--  <label>学历</label>
    <input name="education" type="text" value="$usermake['education']" /><br> -->
	<!-- <select name="education" value="$usermake['education']">
	<option value="大专">大专</option>
	<option value="本科">本科</option>
	<option value="硕士">硕士</option>
	<option value="博士">博士</option></select> -->
	<label>格言</label>
	<input name="job" type="text" value="$usermake['job']"><br>
	<label>ＱＱ</label>
	<input name="lineqq" type="text" value="$usermake['lineqq']"/><br>
	<input name="description" type="hidden" value="1">
	<input name="id" type="hidden" value="$usermake['id']">
	<input name="img" type="hidden" value="$usermake['images']" id="imgurl">
	<input name="type" type="hidden" value="change">
	<input type="submit" name="submit" value="提交" class="submit">
</div>


</div>

</div>

<footer>
<span>© Bangbangdream.com</span>
</footer>

<script type="text/javascript">
$(function () {
	
	$("#fileupload").wrap("<form id='myupload' action='/action1.php?lei=lawlogo' method='post' enctype='multipart/form-data'></form>");

    $("#fileupload").change(function(){
		$("#myupload").ajaxSubmit({
			dataType:  'json',
			beforeSend: function() {

				$("#userlogoimg").fadeOut(300);
				$("#userlogoimg").attr("src",'/data/userface/load.jpg');
    		},
    
			success: function(data) {
		
				var url = data.pic + '?rand=' + Math.random();
        $("#userlogoimg").attr("src", url);
				$("#imgurl").attr("value", url);
				$("#userlogoimg").fadeIn(300);
				 // window.location.href = "/onlinelaw.php";
		        
		
			},
			error:function(xhr){
	             $("#userlogoimg").attr("src",'/data/userface/error.jpg');
			}
		});
	});
	
	
});
</script>


</body>


</html>

<script>
// ------------------------------登陆按钮点击事件绑定---------------------------
$(function() {

$(".submit").click(function() {
// ajax提交数据
         $.ajax({
             type: "post",
             url: "law_sql.php",
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
 
                   ruiqia_location('/law_show.php',1500);

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