
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="\templates\default\mobile\moveFocus/css/jquery.jslides.css" media="screen" />
<script type="text/javascript" src="\templates\default\mobile\moveFocus/js/jQuery.js"></script>
<script type="text/javascript" src="\templates\default\mobile\moveFocus/js/iscroll.js"></script>
</head>



<!--效果html开始-->
<div class="wraper">
  <header id="scroll_pic_view" class="scroll_pic_view" style="overflow: hidden; ">



    <div id="scroll_pic_view_div" style="-webkit-transition: -webkit-transform 0ms cubic-bezier(0.33, 0.66, 0.66, 1); -webkit-transform-origin: 0px 0px; -webkit-transform: translate(0px, 0px) translateZ(0px); ">
      <ul id="scroll_pic_view_ul">
           <!--{eval loopimg5($xinxi);}--> 
      </ul>
    </div>
	<script type="text/javascript">
	var imgwidth = $(window).width();
	var widimgbig = $('#scroll_pic_view_ul li').length*$(window).width();
	$('#scroll_pic_view_div').css('width',widimgbig+'px');
	$('#scroll_pic_view_ul li').css('width',imgwidth+'px');
	</script>


    <div>
      <ol id="scroll_pic_nav" class="scroll_pic_nav">
        <script>
				(function(d, $){
					var scrollPicView = d.getElementById("scroll_pic_view"),
					scrollPicViewDiv = d.getElementById("scroll_pic_view_div"),
					lis = scrollPicViewDiv.querySelectorAll("li"),
					w = scrollPicView.offsetWidth,
					len = lis.length;
					for(var i=0; i<len; i++){
						lis[i].style.width = w+"px";
						if(i == len-1){
							scrollPicViewDiv.style.width = w * len + "px";
						}
					}

					var scroll_pic_view = new iScroll('scroll_pic_view', { 
						snap: true,
						momentum: false,
						hScrollbar: false,
						useTransition: true,
						onScrollEnd: function() {
							$("#scroll_pic_nav li").removeClass("on").eq(this.currPageX).addClass("on");
							//$("#scroll_pic_nav li.on").prev().addClass("left");
							//$("#scroll_pic_nav li.on").next().removeClass("left");	
							
							var  list=$("#scroll_pic_nav li");
							for(var k=0;k<list.length;k++){
								if(k<this.currPageX)
									$(list[k]).addClass("left");
								else
									$(list[k]).removeClass("left");
							}												
						}
					});
					//
					var nav_lis = new Array(lis.length);
					d.write('<li class="on"><span>1</span></li>');
					for(var i=1; i<nav_lis.length; i++){										
						d.write("<li><span>"+(i+1)+"</span></li>");				
					}
				})(document, $);
			</script> 
      </ol>
    </div>
  </header>
</div>
<!--效果html结束-->
<div class="clear"></div>


