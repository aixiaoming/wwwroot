<?php
include 'ruiqia.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>实验页面</title>
<script type="text/javascript" src="\templates\default\pc\js/jquery.min.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
</head>
<body>
<button id="selectbtn" onclick="hundan()">筛选</button>
</body>
</html>

<script type="text/javascript">
	$('selectbtn').click(function(){
		alert('nihao');
	})
	function shiyan(){
		alert('nihao');
	}


function hundan(){
//询问框
layer.open({
    title: '提示',
    content: '您确定要刷新一下本页面吗？',
    btn: ['嗯', '不要'],
    yes: function(index){
        location.reload();
        layer.close(index);
    }
});
//正上方
// layer.msg('灵活运用offset', {
//     offset: 0,
//     shift: 6
// });
}


</script>