function ruiqia_window2(url,title,kuan,gao)
{
		// 这个函数的作用是，如果是手机，为了防止手机显示不全，将新建窗口！
        if(is_Mobile())
        {
        	 
            var url =url;
        	if(url.indexOf('?')> 0)  // 如果找到问号就不加问号
            {
               window.location.href=url+"&backurl="+window.location.href;
             }
            else
            {
             	window.location.href=url+"?&backurl="+window.location.href;
            }



        }
        else
        {
        var ruiqia_view;
        ruiqia_view = getViewSizeWithScrollbar();


		if(kuan==null)  //如果kuan没有接收参数就自动适配
		{
			if(is_Mobile())
			{kuan = ruiqia_view.width - 30;}
		    else{
		    	kuan = ruiqia_view.width - 90;
		    }
		}




		if(gao==null) //如果gao没有接收参数就自动适配
		{
			if(is_Mobile())
			{gao = ruiqia_view.height - 30;}
	     	else
	    	{
            gao = ruiqia_view.height - 70;
		    }
		}

              //启动msgbox
              $.msgbox({
              // closeImg: '/images/close.gif',
               height:gao,
		       width:kuan,
               content:url,
               type :'iframe',
               title: title ,
               });


        }

}





function ruiqia_window(url,title,kuan,gao)
{
		
        var ruiqia_view;
        ruiqia_view = getViewSizeWithScrollbar();


		if(kuan==null)  //如果kuan没有接收参数就自动适配
		{
			if(is_Mobile())
			{kuan = ruiqia_view.width - 30;}
		    else{
		    	kuan = ruiqia_view.width - 350;
		    }
		}




		if(gao==null) //如果gao没有接收参数就自动适配
		{
			if(is_Mobile())
			{gao = ruiqia_view.height - 30;}
	     	else
	    	{
            gao = ruiqia_view.height - 140;
		    }
		}

              //启动msgbox
              $.msgbox({
              // closeImg: '/images/close.gif',
               height:gao,
		       width:kuan,
               content:url,
               type :'iframe',
               title: title ,
               });

}

























//关闭模块处理窗口
function close_ruiqia_window(msg)
    {
          $.closemsgbox(top.window.document,msg);
    }




//ruiqia_box
(function($) {

	$.msgbox = function(o) {

		if(typeof(o) == 'string'){ o = { content:o } }                          // 如果参数给出字符串， 则直接进行提示（text）
		var opts = o || {};                                                     // 用于接收参数
		
		opts.width             = o.width 		         || 800;                    // 提示框的宽度
		opts.height            = o.height 		       || 700,                    // 提示框的高度
		opts.autoClose         = o.autoClose 	       || 0;                      // 自动关闭的时间, 0则不会自动关闭
		opts.title 			       = o.title 		         || '提示',                 // 提示框标题
		opts.wrapperClass	     = o.wrapperClass      || 'msgbox_wrapper';       // 提示框外框class
		opts.titleClass 	     = o.titleClass 	     || 'msgbox_title';         // 提示框标题class
		opts.closeClass        = o.closeClass        || 'msgbox_close';         // 提示框关闭按钮class
		opts.titleWrapperClass = o.titleWrapperClass || 'msgbox_title_wrapper'; // 提示框标题行class
		opts.mainClass 		     = o.mainClass   	     || 'msgbox_main';          // 内容框class
		opts.bgClass 		       = o.bgClass 	         || 'msgbox_bg';            // 背景层class
		opts.buttonClass	     = o.buttonClass       || 'msgbox_button';        // 内容框中button的class
		opts.inputboxClass     = o.inputboxClass     || 'msgbox_inputbox';      // 内容框中input box的class
		opts.type 			       = o.type 		         || 'text';                 // 内容的类型
		// support:  text, url(=get), iframe, confirm, alert; confirm, alert is added in version 4.0, input added in V5.0
		opts.content 		       = o.content 	         || 'Hello, world!';        // 内容
		opts.onClose           = o.onClose           || function(){};          // 关闭时执行的事件 
		opts.closeImg	  	     = o.closeImg	         || '';                     // 关闭按钮图标, 空则显示"关闭"
		opts.bgOpacity		     = o.bgOpacity	       || 0.6;   			            // from 0 to 1  背景透明度
		opts.onAjaxed   	     = o.onAjaxed          || function(){};          // ajax执行完之后的事件 
		opts.onInputed         = o.onInputed         || function(){};
		opts.enableDrag        = typeof o.enableDrag != 'boolean' ? true : o.enableDrag; // 默认允许拖拽
		opts.bgAnimate         = typeof o.bgAnimate  != 'boolean' ? true : o.bgAnimate;  // 开启背景动画
		opts.boxAnimate        = typeof o.boxAnimate != 'boolean' ? true : o.boxAnimate; // 开启提示框动画
		
		var returnValue = false;        // 返回值, 用于confirm和input
		var relTop      = 0;            // 提示框离窗口上边的距离
		var relLeft     = 0;            // 提示框离窗口左边的距离, 用于页面滚动时保持窗口不动
		
		var $background = $("<div>")
			.attr('id', 'jMsgboxBg')    // 用来进行外部关闭
			.css({
				 'position'	: 'absolute',
				 'top'		: '0',
				 'left'		: '0',
				 'z-index'	: '9999',
				 'opacity'  : '0'
			})
			.addClass(opts.bgClass)
			.appendTo('body')
			.dblclick(closeMe)          // 双击关闭提示框
			.click(function(){          // 单击闪烁提示框
				flashTitle(0.5, 4, 80);
			});
			
		if(opts.bgAnimate)              // 背景渐变
			$background.animate({'opacity':opts.bgOpacity});
		else
			$background.css('opacity',opts.bgOpacity);

		var $wrapper = $("<div>")
			.attr('id', 'jMsgboxBox')   // 用来进行外部关闭
			.css({
				'width' 	: opts.width + 'px',
				'height' 	: opts.height + 'px',
				'position' 	: 'absolute',
				'z-index'	: '10000',
				'display'   : 'none'
			})
			.addClass(opts.wrapperClass)
			.appendTo('body');
		if(opts.boxAnimate)             // 展开提示框
			$wrapper.slideDown("normal"); 
		else
			$wrapper.css('display', '');
		
		var $titleWrapper = $("<ul><li>提示</li><li> <i class='iconfont'>&#xe605;</i></li></ul>")
			.addClass(opts.titleWrapperClass)
			.appendTo($wrapper);
			
		var $titleLi = $("li:first", $titleWrapper)
			.html(opts.title)
			.addClass(opts.titleClass);
			
		var $closeLi = $titleLi.next()
			.addClass(opts.closeClass)
			.mousedown(closeMe)         // 关闭提示框
		if(opts.closeImg != '')
			$closeLi.html("<img src='"+opts.closeImg+"'' border='0' />"); // 载入关闭图标
						
		var $main = $(document.createElement("div"))
			.addClass(opts.mainClass)
			.appendTo($wrapper);
			
		$main.height( opts.height - $titleWrapper.outerHeight(true) - $main.outerHeight(true) + $main.height() ); // 计算内容框高度

		



		



		function closeMe(){
			if(opts.boxAnimate)
				$wrapper.slideUp('normal');
			else $wrapper.remove();
			if(opts.bgAnimate)
				$background.fadeOut();
			else $background.remove();
			opts.onClose(returnValue);				
		}
		
		function isVisible(){
			return	$background.is(":visible") &&
					$wrapper.is(":visible");
		}

		function autoCloseMe(autoClose){			
			if( autoClose > 0 && isVisible() ){ // prevent manually closing, 防止人为关闭后,计时器还在运行
				autoCloseStr = autoClose + " 秒后关闭 ...";
				$titleLi.html(opts.title + "   " + autoCloseStr);		
				autoClose --;
				if( autoClose == 0 ) 
					closeMe();	
				setTimeout(function(){ autoCloseMe(autoClose) }, 1000);	
			}		
		}
	
		function flashTitle(opacity, times, interval, flag){ // 闪烁标题(模拟windows)
			if( times > 0 ) {
				flag = !flag;
				op = flag ? opacity : 1;
				$titleWrapper.css('opacity',op);	
				setTimeout(function(){ flashTitle(opacity, times-1, interval, flag) }, interval);
			}
		}
		
		




		function resetPosition() {
			$background.css({
				 'width'	: document.documentElement.scrollWidth + 'px',
				 'height'	: document.documentElement.scrollHeight + 'px'
			});

			fixBox();     // 定位初始位置
		}
		

	



		function fixBox(){  // 定位box
				
                  var ruiqia_view;  
                  ruiqia_view = getViewSizeWithScrollbar();  //获取真实的宽和高
                  gao = ruiqia_view.height;
		          kuan = ruiqia_view.width;

              

		         

			 	  if(is_Mobile()){  //移动设备存在自动旋转的问题，所以要调整宽高

					  		  $wrapper.css({		
					  		  'height': gao -30 + 'px',
		                      'width': kuan -30 + 'px',
			                  'top': $(window).scrollTop() + 15 + 'px',   //上边15px
			         	      'left': $(window).scrollLeft() + 15 + 'px',   //左边15px
		                      });	

				            }

				  else
				  {
		                       relLeft = (kuan - opts.width)/2; //左右居中的左边真实高度
			                   relTop = (gao - opts.height)/2;  //上下居中的上边真实高度


					  			$wrapper.css({		
			                	'top': $(window).scrollTop() + relTop + 'px',   //上下居中
			                	'left': $(window).scrollLeft() + relLeft + 'px'		//左右居中
		                    	});	
				  }

                    
                   // 调整iframe
		           var iframe = $(window.document).find("#iframe");
                   iframe.height('100%');


			
		}







		function msgbox(){	// 按类型填充内容
			switch(opts.type){
				case 'input':
					$main.html(opts.content);
					var $inputbox = $("<input type='text' />")
						.appendTo($main)
						.addClass(opts.inputboxClass);
					var $buttonWrapper = $("<div>")
						.css({
							'text-align':'center',
							'padding':'15px 0'
						})
						.appendTo($main);
					var $yesButton = $("<input type=button value=' OK '>")
						.appendTo($buttonWrapper)
						.addClass(opts.buttonClass)
						.after("     ")
						.click(function(){
							opts.onInputed($inputbox.val());  // 返回输入的值
							closeMe();
						});
					var $noButton = $("<input type=button value=' Cancel '>")
						.appendTo($buttonWrapper)
						.addClass(opts.buttonClass)
						.click(closeMe);
					break;
				case 'alert':
					$main.html(opts.content);
					var $buttonWrapper = $("<div>")
						.css({
							'text-align':'center',
							'padding':'15px 0'
						})
						.appendTo($main);
					var $OKButton = $("<input type=button value=' OK '>")
						.appendTo($buttonWrapper)
						.addClass(opts.buttonClass)
						.click(closeMe);
					break;
				case 'confirm':
					$main.html(opts.content);
					//oneBox();
					var $buttonWrapper = $("<div>")
						.css({
							'text-align':'center',
							'padding':'15px 0'
						})
						.appendTo($main);
					var $yesButton = $("<input type=button value=' Yes '>")
						.appendTo($buttonWrapper)
						.addClass(opts.buttonClass)
						.after("     ")
						.click(function(){
							returnValue = true;
							closeMe();
						});
					var $noButton = $("<input type=button value=' No '>")
						.appendTo($buttonWrapper)
						.addClass(opts.buttonClass)
						.click(function(){
							returnValue = false;
							closeMe();
						});
					break;					
				case 'get':
				case 'ajax':
				case 'url':
					$main.text("Loading ...").load(
						opts.content,
						'',
						function(data){
							(opts.onAjaxed)(data);	
						}
					);
					break;			
				case 'iframe':
					$("<iframe id='iframe' name='iframe' frameborder='0' marginheight='0' marginwidth='0'></iframe>")
						.appendTo($main)
						.attr({
							'width'			: '100%',
							'height'		: '100%',
							'scrolling' 	: 'auto',
							'src'			: opts.content
						});
					break;
				default:
					$main.html(opts.content);
			}	

		}
		


		resetPosition();
		
		$(window)  // just in case user is changing size of page while loading
			.load(resetPosition)		
			.resize(resetPosition)
			.scroll(fixBox);

		msgbox();	//填充内容
		
		if( opts.autoClose > 0 )  // 自动关闭
			autoCloseMe(opts.autoClose);
			
		o.outClose = closeMe;   // 从外部执行关闭
		
		if( opts.enableDrag )
			$wrapper.Drags({  // 允许拖拽
				handler : $titleWrapper,
				onMove: function(){ $(window).unbind('scroll') },
				onDrop: function(){
					relTop = $wrapper.getCss('top') - $(window).scrollTop();
					relLeft = $wrapper.getCss('left') - $(window).scrollLeft();
					$(window).scroll(fixBox);
				}
			});
		
		return this;
	}	
	
	$.closemsgbox = function(o,url){
		o = o || window.document;
		if( o.constructor=='[object HTMLDocument]' )
			o = { document : o };
		var opts = o || {};
		opts.document   = o.document || window.document;                      // 关闭哪个页面的msgbox
		opts.bgAnimate  = typeof o.bgAnimate  == 'undefined' ? true : o.bgAnimate;     // 开启背景动画
		opts.boxAnimate = typeof o.boxAnimate == 'undefined' ? true : o.boxAnimate;    // 开启提示框动画
		opts.onClose   = o.onClose || function(){};
		

        var $wrapper = $(o.getElementById('jMsgboxBox'));
        var $background = $(o.getElementById('jMsgboxBg'));
		if(opts.boxAnimate)
			$wrapper.slideUp('normal');
		else $wrapper.remove();
		if(opts.bgAnimate)
			$background.fadeOut();
		else $background.remove();
		opts.onClose();

        
         if(url!=null)
          {
           top.window.location.href = url; //更变父窗口地址
          }else
          {
          	top.window.location.reload(); //刷新父窗口
          }


	}
	
})(jQuery);



//ruiqia_box拖放功能
(function($) {
    $.extend($.fn, {
        getCss: function(key) {
            var v = parseInt(this.css(key));
            if (isNaN(v))
                return false;
            return v;
        }
    });
    $.fn.Drags = function(opts) {
        var ps = $.extend({
            zIndex: 20,
            opacity: .7,
            handler: null,
            onMove: function() { },
            onDrop: function() { },
			range: ''
        }, opts);
        var dragndrop = {
            drag: function(e) {
                var dragData = e.data.dragData;
				var dx = dragData.left + e.pageX - dragData.offLeft;
				var dy = dragData.top + e.pageY - dragData.offTop;
				var r  = dragData.newRange;
				if( r!='' )
                	dragData.target.css({
                    	left: dx < r[3] ? r[3] : ( dx > r[1] ? r[1] : dx ),
                    	top: dy < r[0] ? r[0] : ( dy > r[2] ? r[2] : dy )
						//left: dx,
						//top: dy
                	});
				else
					dragData.target.css({
						left: dx,
						top: dy
                	});
                dragData.target.css({
					'opacity': ps.opacity,
					'cursor' : 'move'
				});
                dragData.onMove(e);
            },
            drop: function(e) {
                var dragData = e.data.dragData;
                dragData.target.css(dragData.oldCss); //.css({ 'opacity': '' });
                dragData.handler.css('cursor', dragData.oldCss.cursor);
                dragData.onDrop(e);
                $(document).unbind('mousemove', dragndrop.drag)
                    .unbind('mouseup', dragndrop.drop);
            }
        }

        return this.each(function() {
            var me = this;
            var handler = null;
            if (typeof ps.handler == 'undefined' || ps.handler == null)
                handler = $(me);
            else
                handler = (typeof ps.handler == 'string' ? $(ps.handler, this) : ps.handler);
            handler.bind('mousedown', { e: me }, function(s) {
                var target = $(s.data.e);
                var oldCss = {};
                if (target.css('position') != 'absolute') {
                    try {
                        target.position(oldCss);
                    } catch (ex) { }
                    target.css('position', 'absolute');
                }
                oldCss.cursor = target.css('cursor') || 'default';
                oldCss.opacity = target.getCss('opacity') || 1;
				var newRange = [];
				if( ps.range == 'window' ){
					newRange = [  // top, right, bottom, left
						$(window).scrollTop(), 
						$(window).scrollLeft()+$(window).width() - target.outerWidth(), 
						$(window).scrollTop()+$(window).height() - target.outerHeight(),
						$(window).scrollLeft()
					];
				}
				else if( ps.range == 'document' ){
					newRange = [
						0,
						$(document).width() - target.outerWidth(),
						$(document).height() - target.outerHeight(),
						0
					];
				} else if( typeof ps.range == 'object' ) {
					newRange = [
						ps.range[0],
						ps.range[1] - target.outerWidth(),
						ps.range[2] - target.outerWidth(),
						ps.range[3]
					];
				} else newRange = ''
                var dragData = {
                    left: oldCss.left || target.getCss('left') || 0,
                    top: oldCss.top || target.getCss('top') || 0,
                    width: target.width() || target.getCss('width'),
                    height: target.height() || target.getCss('height'),
                    offLeft: s.pageX,
                    offTop: s.pageY,
                    oldCss: oldCss,
                    onMove: ps.onMove,
                    onDrop: ps.onDrop,
                    handler: handler,
                    target: target,
					newRange: newRange
                }
				
                target.css({
					//'opacity': ps.opacity,
					'cursor' : 'move'
				});
                $(document).bind('mousemove', { dragData: dragData }, dragndrop.drag)
                   .bind('mouseup', { dragData: dragData }, dragndrop.drop);
            });
        });
    }
})(jQuery); 