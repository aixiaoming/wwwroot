<?php
include "function.php";



// 检查是否登录
// is_right();


if ($_POST['submit2']) {
    $class = $_POST['class'];
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
    $title = $_POST['title'];
    $position2 = $_POST['position2'];
    $label1 = $_POST['label1'];
    $label2 = $_POST['label2'];
    $label3 = $_POST['label3'];
    $wage = $_POST['wage'];
    $address = $_POST['address'];
    $experience = $_POST['experience']; 
    $description = $_POST['description'];
    $name = $_POST['name'];
    $old = $_POST['old']; 
    $gender = $_POST['gender'];
    $linkman = $_POST['linkman'];
    $linkqq = $_POST['linkqq'];
    $linkphone = $_POST['linkphone'];
    $linkemail = $_POST['linkemail'];
    $education = $_POST['education'];
    $school = $_POST['school'];

    $worktime =$_POST['worktime'];
    $begintime = $_POST['begintime']; 
    $lasttime = $_POST['lasttime']; 
    $people = $_POST['people']; 
    $duty = $_POST['duty'];
    $demand = $_POST['demand']; 
    $other_state = $_POST['other_state']; 
    $fee = $_POST['fee'];
    $find = $_POST['find'];

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
            ruiqia_query("INSERT INTO parttime(userid,class,province,city,area,position,title,address,description,linkman,linkqq,linkphone,linkemail,education,school,label,worktime,gender,begintime,lasttime,people,experience,old,name,duty,wage,demand,position2,other_state,fee,find,label1,label2,label3,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,temtime) values('".$_SESSION['userid']."','".$class."','".$province."','".$city."','".$area."','".$position."','".$title."','".$address."','".$description."','".$linkman."','".$linkqq."','".$linkphone."','".$linkemail."','".$education."','".$school."','".$label."','".$worktime."','".$gender."','".$begintime."','".$lasttime."','".$people."','".$experience."','".$old."','".$name."','".$duty."','".$wage."','".$demand."','".$position2."','".$other_state."','".$fee."','".$find."','".$label1."','".$label2."','".$label3."','".$img1."','".$img2."','".$img3."','".$img4."','".$img5."','".$img6."','".$img7."','".$img8."','".$img9."','".$img10."','".$temtime."')");
            unset($_SESSION['querytype']);
            $getID = ruiqia_query_fetch('SELECT*FROM parttime WHERE userid="'.$_SESSION['userid'].'" and title="'.$title.'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&clickid=10');
        
    
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE parttime SET class='".$class."',province='".$province."',city='".$city."',area='".$area."',position='".$position."',title='".$title."',address='".$address."',description='".$description."',linkman='".$linkman."',linkqq='".$linkqq."',linkphone='".$linkphone."',linkemail='".$linkemail."',education='".$education."',label='".$label."',worktime='".$worktime."',gender='".$gender."',begintime='".$begintime."',lasttime='".$lasttime."',people='".$people."',experience='".$experience."',school='".$school."',old='".$old."',name='".$name."',duty='".$duty."',wage='".$wage."',demand='".$demand."',position2='".$position2."',other_state='".$other_state."',fee='".$fee."',find='".$find."',label1='".$label1."',label2='".$label2."',label3='".$label3."',img1='".$img1."',img2='".$img2."',img3='".$img3."',img4='".$img4."',img5='".$img5."',img6='".$img6."',img7='".$img7."',img8='".$img8."',img9='".$img9."',img10='".$img10."' where id='".$_REQUEST['editid']."'");
            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&clickid=10');

    }

    ruiqia_die("操作数据失败");


}


?>