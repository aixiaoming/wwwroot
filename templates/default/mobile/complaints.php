<!DOCTYPE html>
<html>
<head>
	<title>投诉 -【帮帮校园网】</title>
	<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="$dir/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="edge" />
<script type="text/javascript" src="\templates\default\pc\js/jquery.min.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
</head>
<style>
body {font-family: "微软雅黑"}
ul { width:94%; padding:5px 3%; margin:0; height:300px; background:#fff; font-size:15px; list-style:none;}
ul li { width:100%; margin:0; background:#fff; height:35px; line-height:35px; border-bottom:1px solid #e8e8e8; }
ul li input { width:5%; margin:0; height:15px; float:left; margin-top:10px; margin-right:5px;}
textarea {width:100%; height:80px; margin-top:5px;}
#report_btn {width:100%; height:40px; background:#ff6c00; border:0px; text-align:center; line-height:40px; font-size:18px; color:#fff; padding:0; margin:0; margin-top:10px; cursor:pointer;}
.footer { margin-top: 80px;};
</style>

<body>


<!-- 头部 -->
<!--{template mb_header}-->


<ul class="form222">
	<li id='fir_a'>信息名称：<a id="title">$xinxi['title']</a></li>
	<li>投诉理由：</li>
	<li onclick="$('#lxdhxj').trigger('click');">
	<input id='lxdhxj' name="textwhy2" type="radio" value="联系电话虚假" style="" />
	<label for="lxdhxj">联系电话虚假</label>
	</li>
	<li onclick="$('#zp').trigger('click');">
	<input id='zp' name="textwhy2" type="radio" value="诈骗" style="" />
	<label for="zp">诈骗</label>
	</li>
	<li onclick="$('#shxx').trigger('click');">
	<input id='shxx' name="textwhy2" type="radio" value="涉黄信息" style="" />
	<label for="shxx">涉黄信息</label>
	</li>
	<li onclick="$('#qtly').trigger('click');">
	<input id="qtly" onclick="$('#textwhy').focus()" name="textwhy2" type="radio" value="其它理由" style="" />
	<label for="qtly">其它理由</label>
	</li>
	<textarea id="textwhy" onclick="$('#qtly').trigger('click');"></textarea>
	<div id='report_btn'>提交</div>
	<input type="submit" style='display:none;' id="submit" name="submit" value="提交" />
</ul>
	<input type="hidden" name="plaintiff" value="$user['id']" />
	<input type="hidden" name="defendant" value="$defendant" />
	<input type="hidden" name="formname" value="$mokuai" />
	<input type="hidden" id="why" name="why" value="" />
	<input type="hidden" name="click" value="$formname" />
	<input type="hidden" name="beiid" value="$xinxi['userid']" />

<!-- 这里是尾部 -->
<center class="footer"><a>© Bangbangdream.com</a></center>
</body>
</html>

<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
<script type="text/javascript">
var index = parent.layer.getFrameIndex(window.name); //获取窗口索引



//关闭iframe
$('#report_btn').click(function(){

var val=$('input:radio[name="textwhy2"]:checked').val();

if (val!='' && val!="其它理由") {
var why=val;
}else{
var why=$('#textwhy').val();
};
$('#why').val(why);


if ($('#why').val()=="") {
           alert('亲，请选择投诉理由');
	//layer.tips('亲，请选择投诉理由', '#sdf');
}else{
	$('#submit').trigger('click');


    $.ajax({
      cache: true,
      type: "POST",
      url:'complaints_sql.php',
      data:$('input').serialize(),// 你的formid
      async: false,
      dataType:  'json',
      beforeSend: function() {
        },
    
      success: function(data) {
           //layer.msg('投诉成功');
           
           alert('投诉成功');
           window.location.href='list.php?clickid=6&mokuai=goods';
      },
      error:function(xhr){
           alert('投诉失败');
		//layer.msg('投诉失败');
      }
    });
}    
});
  
  



</script>