<?php
include "function.php";



// 检查是否登录
// is_right();

if ($_POST['submit2']) {
    $class = $_POST['class'];
    $title = $_POST['title'];
    $area = $_POST['area'];
    if ($area=='0') {
     $city = $_SESSION['cityid'];  
     $province = ruiqia_query_fetch("SELECT * FROM area WHERE id='".$city."'");
     $province = $province['parentid'];
    }else{
     $city = ruiqia_query_fetch("SELECT * FROM area WHERE id='".$area."'");
     $city = $city['parentid'];
     $province = ruiqia_query_fetch("SELECT * FROM area WHERE id='".$city."'");
     $province = $province['parentid'];
    }
    if ($province!='0') {
        if ($city!='0') {
            if ($area!='0') {
               $position = "tr_0 tr_" . $province . " tr_" . $city . " tr_" . $area;
            }else{
               $position = "tr_0 tr_" . $province . " tr_" . $city; 
            }
        }else{
            $position = "tr_0 tr_" . $province;
        }
    }else{
       $position = ''; 
    }
    $position2 = $_POST['position2'];
    $wage = $_POST['wage'];
    $test = $_POST['test'];
    $experience = $_POST['experience']; 
    for ($i=0; $i < 3; $i++) { 
    $label[$i] = $_POST['label'][$i];
    }
    $address = $_POST['address'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $old = $_POST['old']; 
    $find = $_POST['find']; 
    $education = $_POST['education'];
    $school = $_POST['school'];
    $linkman = $_POST['linkman'];
    $linkqq = $_POST['linkqq'];
    $linkphone = $_POST['linkphone'];
    $linkemail = $_POST['linkemail'];
   

    // $wagetime =$_POST['wagetime'];
    // $worktime =$_POST['worktime'];
    $people = $_POST['people']; 
    $state = $_POST['state']; 
    $fee = $_POST['fee'];

  $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];
    $img4 = $_POST['img4'];
    $img5 = $_POST['img5'];
    $img6 = $_POST['img6'];
    $img7 = $_POST['img7'];
    $img8 = $_POST['img8'];
    $img9 = $_POST['img9'];
    $img10 = $_POST['img10'];

        // 删除图片
    if ($_POST['delnum']>0) {
       for ($q=0; $q <= $_POST['delnum']; $q++) { 
        unlink (".".$_POST['del'.$q]);  
       }
    }
    
// *************************************************************************
// 通过检查                                                               //
// 上传数据 type=1 更新数据type=2 删除数据type=3                          //
// *************************************************************************


    if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************
            ruiqia_query("INSERT INTO recruit(userid,class,wage,province,city,area,position,address,title,description,linkman,linkqq,linkphone,linkemail,education,gender,people,experience,old,state,name,label,position2,school,test,find,label1,label2,label3,label4,label5,label6,label7,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,temtime) values('".$_SESSION['userid']."','".$class."','".$wage."','".$province."','".$city."','".$area."','".$position."','".$address."','".$title."','".$description."','".$linkman."','".$linkqq."','".$linkphone."','".$linkemail."','".$education."','".$gender."','".$people."','".$experience."','".$old."','".$state."','".$name."','".$label."','".$position2."','".$school."','".$test."','".$find."','".$label1."','".$label2."','".$label3."','".$label4."','".$label5."','".$label6."','".$label7."','".$img1."','".$img2."','".$img3."','".$img4."','".$img5."','".$img6."','".$img7."','".$img8."','".$img9."','".$img10."','".$temtime."')");

            unset($_SESSION['querytype']);
            $getID = ruiqia_query_fetch('SELECT*FROM recruit WHERE userid="'.$_SESSION['userid'].'" and title="'.$title.'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&clickid=12');

        
    
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE recruit SET class='".$class."',wage='".$wage."',province='".$province."',city='".$city."',area='".$area."',position='".$position."',address='".$address."',title='".$title."',description='".$description."',linkman='".$linkman."',linkqq='".$linkqq."',linkphone='".$linkphone."',linkemail='".$linkemail."',education='".$education."',gender='".$gender."',people='".$people."',experience='".$experience."',old='".$old."',state='".$state."',name='".$name."',label='".$label."',position2='".$position2."',school='".$school."',test='".$test."',find='".$find."',label1='".$label1."',label2='".$label2."',label3='".$label3."',label4='".$label4."',label5='".$label5."',label6='".$label6."',label7='".$label7."',img1='".$img1."',img2='".$img2."',img3='".$img3."',img4='".$img4."',img5='".$img5."',img6='".$img6."',img7='".$img7."',img8='".$img8."',img9='".$img9."',img10='".$img10."' where id='".$_REQUEST['editid']."'");
            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&clickid=12');
    }

    ruiqia_die("操作数据失败");


 


}

?>