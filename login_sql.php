<?php 

// 登录后台

include 'function.php';



// 接收用户名
$username = str_replace(' ','',$_POST['username']);



// 如果收到用户名为空
if($username == '') 
{
  echo '{"title":"账号为空","text":"","type":"warning"}';
      exit();
}


// 接收密码并MD5处理
$password = str_replace(' ','',$_POST['password']);
// 如果收到密码为空
if($password == '') 
{
  
  echo '{"title":"密码为空","text":"","type":"warning"}';
      exit();
}


$password=md5($password);


  if (is_email($username)) {
    $user = ruiqia_query_fetch("select * from user where logine='$username'");

    if(!$user)
      { 
         
          echo '{"title":"账号不存在","text":"","type":"warning"}';
            exit();
      }

      if($password != $user['password'])
      { 
        
          echo '{"title":"账号或密码错误","text":"","type":"warning"}';
            exit();      
      } 
  }else{
    $user = ruiqia_query_fetch("select * from user where loginm='$username'");
    if(!$user)
    { 
       
        echo '{"title":"账号不存在","text":"","type":"warning"}';
          exit();
    }

    if($password != $user['password'])
    { 
      
        echo '{"title":"账号或密码错误","text":"","type":"warning"}';
          exit();      
    } 
  }

// 查找用户

if ($user['administrator']==2) {
 
   if ($user['test']==1 or $user['test']==2 or $user['test']==6) {
  if (time()>$user['testtime']) {
   ruiqia_query("UPDATE user SET test=5 where id='".$user['id']."'");
}
}
}



if ($password == $user['password']) {

      /* 用户登陆成功，*/ 


      // 标记用户
$_SESSION['userid'] = $user['id'];
     
 

echo '{"title":"登录成功","text":"","type":"success"}';
      exit(); 

}







?>