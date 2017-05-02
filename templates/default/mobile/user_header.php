<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" type="text/css" href="./templates/default/mobile/user_style.css">
	<script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/jquery.form.js"></script>
	<script src="/lib/waitMe.js"></script>
	<link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
    <script src='/lib/sweetalert.js'></script>
	<link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
	<script src='/lib/ruiqia.js'></script>
</head>

<header>
<a href="index.php"><img src="/templates\default/mobile\images/logo.png"></a>
		
        <!-- <a href="index.php">首页</a> -->
        <a href="user_profile.php"><img src="/data/userface/$user['id'].jpg" onerror=this.src="/data/userface/head.gif" class="img" id="logo"></a>
    

</header>

</html>



<script>
// ------------------------------退出按钮点击事件绑定---------------------------
$(function() {

	$("#logout").click(function(){
		 swal({
			title: "退出帮帮网", 
			text: "", 
			type: "warning",
			showCancelButton: true,
			closeOnConfirm: false,
			confirmButtonText: "退出",
			confirmButtonColor: "#ec6c62"
			}, function() {
				$.ajax({
                    type: "post",
                    url: "logout.php",
                    dataType: "json",
                    async: false,
                    cache: false, 
                    data: 'act=logout',
				})
                 // 处理成功
				.done(function(msg) {
					

                    swal({   
                   	title: msg.title,   
                   	text: msg.text,   
                   	timer: 2000,  
                    type: msg.type,
                   	showConfirmButton: true,
                    });
                   
               setTimeout("window.location.href='index.php';",3000);

				})
				// 处理失败
				.error(function(msg) {
					swal("OMG", "退出失败了!", "error")
				});

			});
	});



});
</script>