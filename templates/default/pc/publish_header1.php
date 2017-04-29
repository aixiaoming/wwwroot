
<!-- 搜索栏 、标志 -->

<ul class="search">
	<li class="icon"><a href="/index.php"><img src="/tupian/logo.png"></a></li>
	<li class="searchbox">
	<form id="myform" method="post" action="?mokuai=$mokuai&clickid=$clickid">
	<input class="searchtext" placeholder="想搜点什么呢..." type="text" name="search" id="search" value="$search" />
	<div id="searcharea" style="padding:0; margin:0; width:105px; height:35px; float:right;"><input class="submit1" id="searchshow1" name="submit1" type="submit" value="本页搜索"/>
	<input class="submit1" id="searchshow2" style="display:none;" name="submit1" type="submit" value="全站搜索"/></div>

	</form>
	</li>
	<li style="margin-left:65px;"><div class="publishlink"><div><img src="/tupian/修改图标.png"><a href="/select1.php">免费发布信息</a></div><span><a href="user_profile.php">修改/删除信息</a></span></div></li>
</ul>
<script>
if(Request('mokuai')!='incubation' && Request('mokuai')!='partner'){
	$("#searcharea").mouseover(function(){
		$("#searchshow2").css('display','block');
	})
	$("#searcharea").mouseout(function(){
		$("#searchshow2").css('display','none');
	})
}else{
	$("#searchshow1").css('display','none');
	$("#searchshow2").css('display','block');
	$("#searchshow2").attr('value','同城搜索');
}
</script>