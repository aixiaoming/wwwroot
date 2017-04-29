
<head>
<link href="\templates\default\mobile/css/style_img.css" rel="stylesheet" type="text/css" />
<script src="\templates\default\mobile/js/jquery.js" language="javascript" type="text/javascript"></script>
<script src="\templates\default\mobile/js/jqueryPhoto.js" type="text/javascript"></script>
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<!--[if IE 6]>
<script src="\templates\default\mobile/js/ie6PNG.js" type="text/javascript"></script>
<script type="text/javascript">DD_belatedPNG.fix('*');</script>
<![endif]-->
</head>
<!--效果html开始-->
 <div class="inkPhoBox">
 <div class="main">
    <div class="left">

      <div class="mod18">
      <span id="prevTop" class="btn prev"></span>
      <span id="nextTop" class="btn next"></span>
       <div class="bigImgBox">
        <div id="picBox" class="picBox">
          <ul class="cf" id="img_cen">
           <!--{eval loopimg3($xinxi);}-->
          </ul>
        </div>
       </div>

        <div class="smImgBox">
        <span id="prev" class="btn prev"></span>
        <span id="next" class="btn next"></span>
        <div id="listBox" class="listBox">
          <ul class="cf">
          <li class="on"><i class="arr2"></i><img src="$xinxi['img1']" onerror=this.src="/data/userface/headmb.gif"></li>
           <!--{eval loopimg4($xinxi);}-->
          </ul>
        </div>
        </div>


        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
 </div>
<!--效果html结束-->





<script type="text/javascript">


var t_img; // 定时器
var isLoad = true; // 控制变量
 
// 判断图片加载状况，加载完成后回调
isImgLoad(function(){
    // 加载完成
  $("#img_cen li").css("width",$(window).width()+'px');
    var imglength = $("#img_cen img").length;
  for (var i = 0; i < imglength; i++) {
  $("#img_cen > li > img:eq("+i+")").css("padding-top",(220-$("#img_cen > li > img:eq("+i+")").height())/2);
  };

});


// 判断图片加载的函数
function isImgLoad(callback){
    // 注意我的图片类名都是cover，因为我只需要处理cover。其它图片可以不管。
    // 查找所有封面图，迭代处理
    $('#img_cen img').each(function(){
        // 找到为0就将isLoad设为false，并退出each
        if(this.height === 0){
            isLoad = false;
            return false;
        }
    });
    // 为true，没有发现为0的。加载完毕
   

    if(isLoad){
        clearTimeout(t_img); // 清除定时器
        // 回调函数
        callback();
    // 为false，因为找到了没有加载完成的图，将调用定时器递归
    }else{
        isLoad = true;
        t_img = setTimeout(function(){
            isImgLoad(callback); // 递归扫描
        },500); // 我这里设置的是500毫秒就扫描一次，可以自己调整
    }
}


</script>


