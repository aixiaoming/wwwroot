<?php

//接收管理员同意其成为会员的请求

include "function.php";

//判断其是否为网站管理员

is_right();
$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$_SESSION['userid']."'");
if ($user['administrator']!=1) {
 ruiqia_die('网站管理员未登录');
}

header("Content-type:text/html; charset=UTF-8");

function Post($curlPost,$url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
    $return_str = curl_exec($curl);
    curl_close($curl);
    return $return_str;
}

function xml_to_array($xml){
  $reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
  if(preg_match_all($reg, $xml, $matches)){
    $count = count($matches[0]);
    for($i = 0; $i < $count; $i++){
    $subxml= $matches[2][$i];
    $key = $matches[1][$i];
      if(preg_match( $reg, $subxml )){
        $arr[$key] = xml_to_array( $subxml );
      }else{
        $arr[$key] = $subxml;
      }
    }
  }
  return $arr;
}

$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";

    $mobile = $_POST['mobile'];
   

    if(empty($mobile)){
      exit('手机号码不能为空');
    }


//确认管理员登陆后，接收管理员发送的信息
$userid=$_POST['userid']; //用户的id
$value=$_POST['opinion'];
$type=$_POST['type'];
$testtime = time()+3600*24*365;

$user=ruiqia_query_fetch("SELECT * from user WHERE id='".$userid."'");


//判断是单位用户还是个人用户
if ($user['type']==1) {
 
if ($value=='agree') {
    
    
    $post_data = "account=cf_bangbangdr&password=ruiqia.com&mobile=".$mobile."&content=".rawurlencode("恭喜，您已成功成为帮帮校园网315俱乐部会员。");
     $gets =  xml_to_array(Post($post_data, $target));
    if($gets['SubmitResult']['code']==2){
      $_SESSION['mobile'] = $mobile; 
    }
    echo $gets['SubmitResult']['msg'];

  ruiqia_query("UPDATE user SET test=1,testtime='".$testtime."' WHERE id='$userid'");
 
        if ($type=="") {
          header("Location: http://www.bangbangdream.com/admin_return.php");
          exit;
        }
        if ($type=="real") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=real");
          exit;
        }
        if ($type=="vip") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=vip");
          exit;
        }
 

}else{
  //验证失败
  //
     $post_data = "account=cf_bangbangdr&password=ruiqia.com&mobile=".$mobile."&content=".rawurlencode("您好，您的审核暂未通过，请重新提交申请资料。");
       $gets =  xml_to_array(Post($post_data, $target));
      if($gets['SubmitResult']['code']==2){
        $_SESSION['mobile'] = $mobile; 
      }
      echo $gets['SubmitResult']['msg'];
  ruiqia_query("UPDATE user SET test=4 WHERE id='$userid'");
  
        if ($type=="") {
          header("Location: http://www.bangbangdream.com/admin_return.php");
          exit;
        }
        if ($type=="real") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=real");
          exit;
        }
        if ($type=="vip") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=vip");
          exit;
        }

}
}else{
  


  if ($user['vip']==1) {
    if ($value=='agree') {

    //成功
    // $post_data = "account=cf_bangbangdr&password=ruiqia.com&mobile=".$mobile."&content=".rawurlencode("恭喜，您已成功成为帮帮校园网企业VIP会员。");
    //    $gets =  xml_to_array(Post($post_data, $target));
    //   if($gets['SubmitResult']['code']==2){
    //     $_SESSION['mobile'] = $mobile; 
    //   }
    //   echo $gets['SubmitResult']['msg'];
    ruiqia_query("UPDATE user SET test=6,testtime='".$testtime."' WHERE id='$userid'");

        if ($type=="") {
          header("Location: http://www.bangbangdream.com/admin_return.php");
          exit;
        }
        if ($type=="real") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=real");
          exit;
        }
        if ($type=="vip") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=vip");
          exit;
        }


  }else{
    //验证失败
    // $post_data = "account=cf_bangbangdr&password=ruiqia.com&mobile=".$mobile."&content=".rawurlencode("您好，您的审核暂未通过，请重新提交申请资料。");
    //    $gets =  xml_to_array(Post($post_data, $target));
    //   if($gets['SubmitResult']['code']==2){
    //     $_SESSION['mobile'] = $mobile; 
    //   }
    //   echo $gets['SubmitResult']['msg'];
    ruiqia_query("UPDATE user SET test=4 WHERE id='$userid'");
        if ($type=="") {
          header("Location: http://www.bangbangdream.com/admin_return.php");
          exit;
        }
        if ($type=="real") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=real");
          exit;
        }
        if ($type=="vip") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=vip");
          exit;
        }
  }
  }
if ($user['vip']==0) {
  //即单位会员
  if ($value=='agree') {
  //验证成功
  
     $post_data = "account=cf_bangbangdr&password=ruiqia.com&mobile=".$mobile."&content=".rawurlencode("恭喜，您已成功成为帮帮校园网实名认证会员。");
       $gets =  xml_to_array(Post($post_data, $target));
      if($gets['SubmitResult']['code']==2){
        $_SESSION['mobile'] = $mobile; 
      }
      echo $gets['SubmitResult']['msg'];
      
  ruiqia_query("UPDATE user SET test=2,testtime='".$testtime."' WHERE id='$userid'");

        if ($type=="") {
          header("Location: http://www.bangbangdream.com/admin_return.php");
          exit;
        }
        if ($type=="real") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=real");
          exit;
        }
        if ($type=="vip") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=vip");
          exit;
        }

}else{
  //验证失败
  $post_data = "account=cf_bangbangdr&password=ruiqia.com&mobile=".$mobile."&content=".rawurlencode("您好，您的审核暂未通过，请重新提交申请资料。");
       $gets =  xml_to_array(Post($post_data, $target));
      if($gets['SubmitResult']['code']==2){
        $_SESSION['mobile'] = $mobile; 
      }
      echo $gets['SubmitResult']['msg'];
  ruiqia_query("UPDATE user SET test=4 WHERE id='$userid'");
        
        if ($type=="") {
          header("Location: http://www.bangbangdream.com/admin_return.php");
          exit;
        }
        if ($type=="real") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=real");
          exit;
        }
        if ($type=="vip") {
          header("Location: http://www.bangbangdream.com/admin_return.php?type=vip");
          exit;
        }
        
}
}


  
}


?>