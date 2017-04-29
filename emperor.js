// 上传图片开始
// 
// 
// 
$(function()
{
  if (Request("querytype")=="update") {
    if ($('#imgnum').attr('rel')>0) {
        $(".wuimg").addClass("showimg");
    };
  };
    if (Request("querytype")=="delete") {
        $(".wuimg").addClass("showimg");
  };

})

$(function()
{
  // 如果imgnum不存在
  if (!$("#imgnum").length) {
 var tmp3 = '<a id="imgnum" rel="0" style="display:none;"></a>';

  $('.wuimg').html($('.wuimg').html()+tmp3);
}
    var finishimg=$('#imgnum').attr('rel');
    $('.tishi1').html(finishimg);
    var lastimg=10-$('#imgnum').attr('rel');
    $(".tishi2").html(lastimg);
 
})




$(function() {

var i=$("#imgnum").attr("rel");
  $("#fileupload").wrap("<form id='myupload' action='/action1.php?lei=goods' method='post' enctype='multipart/form-data'></form>");

    $("#fileupload").change(function(){

    $("#myupload").ajaxSubmit({
      dataType:  'json',
      beforeSend: function() {
        
        // $("#userlogoimg").fadeOut(300);
        $("#userlogoimg").attr("src",'/data/userface/load.jpg');
        },
    
      success: function(data) {
        if (data.pic) {

        var i=$("#imgnum").attr("rel");
        i++;if (i<=10) {

        var url = data.pic + '?rand=' + Math.random();

        // $("#img"+i).attr("src", url);
        if ($('#userlogoimg').css('width')=='80px') {
          var tmp1 = "<div class='delfloor' id='delfloor"+i+"'><img src='"+data.pic+"' style='height:80px !important; width:80px !important; display:block;'><input name='img"+i+"' type='hidden' value='"+data.pic+"'><a id='delimgurl' rel='"+i+"' onclick=delimg($(this).attr('rel'),'"+data.pic+"') >删除</a></div>";   

          $('.wuimg').html($('.wuimg').html()+tmp1);
          $('#imgnum').attr('rel',i);
          
        }else{
          var tmp1 = "<div class='delfloor' id='delfloor"+i+"'><img src='"+data.pic+"' style='height:125px !important; width:125px !important; margin-right:10px; display:block;'><input name='img"+i+"' type='hidden' value='"+data.pic+"'><a id='delimgurl' rel='"+i+"' onclick=delimg($(this).attr('rel'),'"+data.pic+"') >删除</a></div>";
          
          $('.wuimg').html($('.wuimg').html()+tmp1);
          $(".wuimg").css("display","block");
          $('#imgnum').attr('rel',i);
        };


          var finishimg=$('#imgnum').attr('rel');
            $('.tishi1').html(finishimg);
           var lastimg=10-$('#imgnum').attr('rel');
           $(".tishi2").html(lastimg);



         // window.location.href = "/user_profile.php";
            

        };
        };
        $("#userlogoimg").attr("src",'/tupian/点击上传.png');
       
        // $("#userlogoimg").fadeIn(300);
    
      },
      error:function(xhr){
               $("#userlogoimg").attr("src",'/data/userface/error.jpg');
               // $("#userlogoimg").fadeIn(300);

      }
    });
  });
  
  
});
//
//
//
// 上传图片结束

// 删除图片
// 
//
function delimg(i,imgurl){
  // input表单记录图片信息

  if ($('#delnum').attr('value')) {
    var abc=$('#delnum').attr('value');
    var delnum=Number(abc)+1;
     var tmp2 = "<input name='del"+delnum+"' type='hidden' value='"+imgurl+"'>";
     $('#delnum').attr('value',delnum);
  }else{
     var tmp2 = "<input name='del1' type='hidden' value='"+imgurl+"'><input id='delnum' type='hidden' name='delnum' value='1' />";
  };
    $('.wuimg').html($('.wuimg').html()+tmp2);
 

  // 删除图片
  $('#delfloor'+i).remove();

  // 更改图片的顺序
  var imgnum=Number($('#imgnum').attr('rel'))+1;
  var b=Number(i)+1;
  for (b; b < imgnum; b++) {
    var c=b-1;

  $('#delfloor'+b).attr('id', 'delfloor'+c);
  $('#delfloor'+c+' > input').attr('name', 'img'+c);
  $('#delfloor'+c+' > a').attr('rel', c);
  };
  var newimgnum=imgnum-2;

  // alert(imgnum);
  // if (newimgnum<=0) {
  //   alert('nio');
  //   $(".wuimg").removeClass("showimg");
  // };
  $('#imgnum').attr('rel', newimgnum);
    var finishimg=$('#imgnum').attr('rel');
    $('.tishi1').html(finishimg);
    var lastimg=10-$('#imgnum').attr('rel');
    $(".tishi2").html(lastimg);
}

//   
//
// 删除图片结束






// 提取url的内容
// 
// 
// 
// 
function Request(strName){  
var strHref  =  location.href;
// var strHref = "www.cnlei.org/index.htm?a=aaa&b=bbb&c=ccc";  
var intPos = strHref.indexOf("?");  
var strRight = strHref.substr(intPos + 1);  
var arrTmp = strRight.split("&");  
for(var i = 0; i < arrTmp.length; i++) {  
var arrTemp = arrTmp[i].split("=");  
if(arrTemp[0].toUpperCase() == strName.toUpperCase()) return arrTemp[1];  
}  
return "";  
}
// 
// 
// 
// 
// 提取url内容结束



// 搜索条
// 
// 
// 

// $(function(){
//   $(".search_ico").click(function(){
//     var keys = $("#search").val();
//     $("#search").focus();

//     if(keys.length>0){
//       $("#myform").submit();
//     }else{
//       $(".search_bar").toggleClass('search_open');
//       return false;
//     }
//   });
// });

// 
// 
// 
// 搜索条结束




// input表单检查函数
// 
// 
function inputcheck(inputidorclass,offsetclass,tipstext){
   layer.tips(tipstext, inputidorclass);
   $("html,body").animate({scrollTop:$(offsetclass).offset().top},400);
   $(inputidorclass).focus();
   $(inputidorclass).css('border-color','#f00');
   $(inputidorclass).val("");
   $(inputidorclass).fadeOut();
   $(inputidorclass).fadeIn();
}

function inputcheck2(inputidorclass,offsetclass,tipstext){
   //正上方
    layer.msg(tipstext, {
        offset: 100,
        shift: 6
    });
   $("html,body").animate({scrollTop:$(offsetclass).offset().top},400);
   $(inputidorclass).focus();
   $(inputidorclass).css('border-color','#f00');
   $(inputidorclass).val("");
   $(inputidorclass).fadeOut();
   $(inputidorclass).fadeIn();
}


// 清除onfocus颜色
function inputclear(clearcolor){
        $(":input").blur(function(){
              $(this).css('border-color',clearcolor);
        });
}
// 
// 
// input表单检查函数结束
