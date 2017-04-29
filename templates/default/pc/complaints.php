<!DOCTYPE html>
<html>
<style>
body {font-family: "微软雅黑"}
ul {list-style: none; width:550px; height:320px; padding:0; padding:5px 20px; margin:0;}
li {margin:0; padding:0; width:100%; font-size: 15px; color:#666666;}
li div {margin:0; padding:0; margin-left:116px; margin-top:10px; width:200px; font-size: 15px; color:#666666;}
#fir_a {margin-bottom:50px;}
#title {color: red !important;}
li label {margin:0; padding:0; width:100px; margin-right:20px; float:left;}
textarea {width:400px; height:150px; padding:10px; margin:0;}
#submit {width:100px; height:35px; font-size: 20px; border: #f48a1a solid 1px; border-radius:3px; float: left; margin-top:20px; margin-left:120px;}
#submit {
    color: #fef4e9;
    border: solid 1px #da7c0c;
    background: #f78d1d;
    background: -webkit-gradient(linear, left top, left bottom, from(#faa51a), to(#f47a20));
    background: -moz-linear-gradient(top,  #faa51a,  #f47a20);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
}
#submit:hover {
    background: #f47c20;
    background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
    background: -moz-linear-gradient(top,  #f88e11,  #f06015);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
}
</style>

<body>



<ul class="form222">
	<li id='fir_a'><label for="title">信息名称：</label><a id="title">$xinxi['title']</a></li>
	<li><label>投诉理由：</label>
		<div>
		<input name="textwhy2" type="radio" value="联系电话虚假" style="margin-left:-5px;" />联系电话虚假<br>
		<input name="textwhy2" type="radio" value="诈骗" style="margin-left:-1px;" />诈骗<br>
		<input name="textwhy2" type="radio" value="涉黄信息" style="margin-left:-1px;" />涉黄信息<br>
		<label for="sdf"><input id="sdf" name="textwhy2" type="radio" value="其它理由" style="margin-left:-1px;" />其它理由<br></label>
		<textarea id="textwhy">请填写其它理由</textarea>
		</div>
	</li>
	<input type="submit" id="submit" name="submit" value="提交" />
</ul>
	<input type="hidden" name="plaintiff" value="$user['id']" />
	<input type="hidden" name="defendant" value="$defendant" />
	<input type="hidden" name="formname" value="$mokuai" />
	<input type="hidden" id="why" name="why" value="" />
	<input type="hidden" name="click" value="$formname" />
	<input type="hidden" name="beiid" value="$xinxi['userid']" />


</body>
</html>

<script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/layer/layer/layer.js"></script>
<script type="text/javascript">
var index = parent.layer.getFrameIndex(window.name); //获取窗口索引



//关闭iframe
$('#submit').click(function(){

var val=$('input:radio[name="textwhy2"]:checked').val();

if (val!='' && val!="其它理由") {
var why=val;
}else{
var why=$('#textwhy').val();
};
$('#why').val(why);


if ($('#why').val()=="") {
	layer.tips('亲，请选择投诉理由或点击其它理由自己填写', '#sdf');
}else{
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
           parent.layer.msg('投诉成功');
   		   parent.layer.close(index); 	  		
      },
      error:function(xhr){
		layer.msg('投诉失败');
      }
    });
}    
});
  
  



</script>