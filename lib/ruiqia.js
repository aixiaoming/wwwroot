// 取执行文件名网页
function ruiqia_page()
{
    var strUrl=window.location.href;
    var arrUrl=strUrl.split("/");
    var strPage=arrUrl[arrUrl.length-1];
    return strPage;
}

// 定时跳转的函数
function ruiqia_location(url,time)
{
 
 var url = arguments[0] ? arguments[0] : location;
 var time = arguments[1] ? arguments[1] : 0;
 setTimeout('window.location.href="' +  url + '";',time);
}



// 选项卡
$(document).ready(function() {
	jQuery.jqtab = function(tabtit,tab_conbox,shijian) {
		$(tab_conbox).find("li").hide();
		$(tabtit).find("li:first").addClass("thistab").show(); 
		$(tab_conbox).find("li:first").show();
	
		$(tabtit).find("li").bind(shijian,function(){
		  $(this).addClass("thistab").siblings("li").removeClass("thistab"); 
			var activeindex = $(tabtit).find("li").index(this);
			$(tab_conbox).children().eq(activeindex).show().siblings().hide();
			return false;
		});
	
	};
	/*调用方法如下：*/
	$.jqtab("#tabs","#tab_conbox","click");

	
});





//------------------------------------------------离开input时进行判断





function onblursS(obje)
{
   if(obje.value =='')
   {

                    $('#' + obje.id).fadeOut(200);
                    $('#' + obje.id).css("border","1px solid #FFF");
                    $('#' + obje.id).fadeIn(200);
                    // $("#login_btn").attr({ disabled: "disabled" });
                    // $("#reg_btn").attr({ disabled: "disabled" });
                    // $('#'+ obje.id).focus();

             
   }else
   {                
                    $('#' + obje.id).css("border","1px solid #2ECC71");
                    // $("#login_btn").removeAttr("disabled");
                    // $("#reg_btn").removeAttr("disabled");
   }



}


// --------------------------弹窗验证码

// $(function(){


//         var html = "<img src=/back_vcode.php id=vcodeimg onclick=this.setAttribute('src','/back_vcode.php') title=点击刷新/>";
//         swal({   
//             title: "请输入答案",   
//             // imageUrl: "/images/logo.png",
//             text: html,   
//             type: "input",   
//             showCancelButton: true,   
//             closeOnConfirm: false,   
//             html: true,
//             animation: "slide-from-top",   
//             inputPlaceholder: "请输入答案吧" 
//         }, function(inputValue){   
//             if (inputValue === false) return false;      
//             if (inputValue === "") {     
//                 swal.showInputError("请输入!");     
//                 return false   
//             }      
//             swal("棒极了!", "您填写的是: " + inputValue, "success"); 
//         });
 
// });






// 取得浏览器可视尺寸的函数
//不包含滚动条 
function getViewSizeWithoutScrollbar(){
return { 
width : document.documentElement.clientWidth, 
height: document.documentElement.clientHeight 
} 
} 

//包含滚动条 
function getViewSizeWithScrollbar(){
if(window.innerWidth){ 
return { 
width : window.innerWidth, 
height: window.innerHeight 
} 
}else if(document.documentElement.offsetWidth == document.documentElement.clientWidth){ 
return { 
width : document.documentElement.offsetWidth, 
height: document.documentElement.offsetHeight 
} 
}else{ 
return { 
width : document.documentElement.clientWidth + getScrollWith(), 
height: document.documentElement.clientHeight + getScrollWith() 
} 
} 
} 




// 是否为移动设备
function is_Mobile()
{
	var pda_user_agent_list = new Array("2.0 MMP", "240320", "AvantGo","BlackBerry", "Blazer",
			"Cellphone", "Danger", "DoCoMo", "Elaine/3.0", "EudoraWeb", "hiptop", "IEMobile", "KYOCERA/WX310K", "LG/U990",
			"MIDP-2.0", "MMEF20", "MOT-V", "NetFront", "Newt", "Nintendo Wii", "Nitro", "Nokia",
			"Opera Mini", "Opera Mobi",
			"Palm", "Playstation Portable", "portalmmm", "Proxinet", "ProxiNet",
			"SHARP-TQ-GX10", "Small", "SonyEricsson", "Symbian OS", "SymbianOS", "TS21i-10", "UP.Browser", "UP.Link",
			"Windows CE", "WinWAP", "Android", "iPhone", "iPod", "iPad", "Windows Phone", "HTC"/*, "GTB"*/);
	var pda_app_name_list = new Array("Microsoft Pocket Internet Explorer");
	var user_agent = navigator.userAgent.toString();
	for (var i=0; i<pda_user_agent_list.length; i++) {
		if (user_agent.indexOf(pda_user_agent_list[i]) >= 0) {
			return true;
		}
	}
	var appName = navigator.appName.toString();
	for (var i=0; i<pda_app_name_list.length; i++) {
		if (user_agent.indexOf(pda_app_name_list[i]) >= 0) {
			return true;
		}
	}
 
	return false;
}
		





//写cookies 

function setCookie(name,value) 
{ 
    var Days = 30; 
    var exp = new Date(); 
    exp.setTime(exp.getTime() + Days*24*60*60*1000); 
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString(); 
} 

//读取cookies 
function getCookie(name) 
{ 
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
 
    if(arr=document.cookie.match(reg))
 
        return unescape(arr[2]); 
    else 
        return null; 
} 

//删除cookies 
function delCookie(name) 
{ 
    var exp = new Date(); 
    exp.setTime(exp.getTime() - 1); 
    var cval=getCookie(name); 
    if(cval!=null) 
        document.cookie= name + "="+cval+";expires="+exp.toGMTString(); 
} 











// 动态添加网址参数修改网址参数值
 function changeURLParam(contentUrl, key, keyValue) {
        var pattern = key + '=([^&]*)';
        var replaceText = key + '=' + keyValue;
        if (contentUrl.match(pattern)) {
            var tmp = '/' + key + '=[^&]*/';
            tmp = contentUrl.replace(eval(tmp), replaceText);
            return (tmp);
        }
        else {
            if (contentUrl.match('[\?]')) {
                return contentUrl + '&' + replaceText;
            }
            else {
                return contentUrl + '?' + replaceText;
            }
        }
        return contentUrl + '\n' + key + '\n' + keyValue;
    }