
<head>

<script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>

<script src="http://zhineng.ruiqia.com/lib/waitMe.js"></script>
<link rel="stylesheet" type="text/css" href="http://zhineng.ruiqia.com/lib/waitMe.css">


<script src='/lib/sweetalert.js'></script>
<link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>

<script src='/lib/ruiqia.js'></script>

</head>


<header>
	<div class="topbar">
	    <div>
	    <img class="topbar_logoimg" src="$dir/images/logo.png">
			<a href="area_change.php" class="city">$city['name']<i class="iconfont" class="icon_header_xia">&#xe602;</i></a>
		</div>
	<!--{template search}-->

	</div>
</header>



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
                   
                    setTimeout("location.reload()",2000); 

				})
				// 处理失败
				.error(function(msg) {
					swal("OMG", "退出失败了!", "error")
				});

			});
	});



});
</script>