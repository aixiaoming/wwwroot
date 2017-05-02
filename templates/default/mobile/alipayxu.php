<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>315俱乐部会员支付</title>
    <script type="text/javascript">
    function disp_alert()
    {
    alert("请在手机浏览器中打开。")
    }
   
    </script>
    <style type="text/css">
    .bar{width: 98%;line-height: 30px;border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;background: #ffffff;padding-left: 2%;margin-bottom: 20px;margin-top: 20px;max-height: 90px;}
    .list{width: 100%;margin-top: 20px;}
    .img1{width: 150px;float: left;margin-left: 2%;}
    .img2{width: 150px;float: left;margin-left: 2%;margin-right: 51%;}
    .imgxia{width: 100%;min-height: 267px;}
    .imgxia2{width: 100%;min-height: 534px;}
    </style>
	
</head>
<body>
<!--{template user_header}-->
  <div style="color:#ff0000;margin-top:40px;">　　注：请长按此页面，选择“在浏览器打开”后，再点击“确认支付”按钮，否则会重复扣费。</div>
         <center>
         <!--{if !is_weixin()}-->
                <form method="post" action="/alipay/alipayapi3.php">
                <input name="WIDout_trade_no" type="hidden" value="$user['id']">
                <input name="WIDsubject" type="hidden" value="帮帮校园网315俱乐部会员">
                <input name="WIDtotal_fee" type="hidden" value="31.5">
                <input name="WIDshow_url" type="hidden" value="http://www.bangbangdream.com/user_checkrmbm.php">

                <input type="submit" value="确认支付"  style="width:150px;height: 40px;background-color: #f58710;border:0px;font-size: 16px;color: #fff;border-radius: 4px;cursor: pointer;margin-top: 60px;padding-left:0px;">
           
            </form>
        <!--{/if}-->

        <!--{if is_weixin()}-->
            <input type="submit" value="确认支付"  style="width:150px;height: 40px;background-color: #f58710;border:0px;font-size: 16px;color: #fff;border-radius: 4px;cursor: pointer;margin-top: 30px;padding-left:0px;" onclick="disp_alert()">
           
        <!--{/if}--> 
        </center> 

        <!--{if is_weixin()}-->
           <div class="list">
               <div class="bar">
               <label>1、安卓用户请在“空白处长按”或点击“右上角的菜单”，选择在“浏览器中打开”</label>
               </div>
               <div class="imgxia">
               <img src="/templates\default/pc\images/ios3.png" class="img1">
               <img src="/templates\default/pc\images/ios4.png" class="img1">
               </div>
           
               <div class="bar">
               <label>2、选择浏览器，此处以qq浏览器为例，进入浏览器后，点击“确认支付”，完成支付后请等待页面跳转。</label>
               </div>
               <div class="imgxia2">
               <img src="/templates\default/pc\images/a2.png" class="img1">
               <img src="/templates\default/pc\images/an1.png" class="img1">
               <img src="/templates\default/pc\images/an2.png" class="img2">
               </div>
         
               <div class="bar">
               <label>1、ios用户请点击“右上角的菜单”，选择在“Safari中打开”。</label>
               </div>
               <div class="imgxia">
               <img src="/templates\default/pc\images/ios2.png" class="img2">
               </div>
          
               <div class="bar">
               <label>2、进入Safari后，点击“确认支付”，完成支付后请等待页面跳转。</label>
                </div>
                <div class="imgxia">
               <img src="/templates\default/pc\images/i4.png" class="img1">
               <img src="/templates\default/pc\images/i2.png" class="img1">
               </div>
           </div>
        <!--{/if}--> 
</body>
</html>