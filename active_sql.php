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
    $address = $_POST['address'];
    $school = $_POST['school'];
    
    $begintime = $_POST['begintime'];
    $lasttime = $_POST['lasttime'];
// 计算周末天数
$week=get_weekend_days($begintime,$lasttime);
//

    $rmb = $_POST['rmb'];
    $people = $_POST['people'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $linkman = $_POST['linkman'];
    $linkqq = $_POST['linkqq'];
    $linkphone = $_POST['linkphone'];
    $abstract = $_POST['abstract'];


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

    if($title==""){
        ruiqia_die('标题不能为空');
    }else{





// *************************************************************************
// 通过检查                                                               //
// 上传数据 type=1 更新数据type=2 删除数据type=3                          //
// *************************************************************************


if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************
            ruiqia_query("INSERT INTO active(userid,class,province,city,area,position,school,address,begintime,lasttime,week,title,rmb,people,description,linkman,linkqq,linkphone,abstract,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,temtime) values('".$_SESSION['userid']."','".$class."','".$province."','".$city."','".$area."','".$position."','".$school."','".$address."','".$begintime."','".$lasttime."','".$week."','".$title."','".$rmb."','".$people."','".$description."','".$linkman."','".$linkqq."','".$linkphone."','".$abstract."','".$img1."','".$img2."','".$img3."','".$img4."','".$img5."','".$img6."','".$img7."','".$img8."','".$img9."','".$img10."','".$temtime."')");
            unset($_SESSION['querytype']);

            $getID = ruiqia_query_fetch('SELECT*FROM active WHERE userid="'.$_SESSION['userid'].'" and title="'.$title.'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&clickid=7');
    
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE active SET class='".$class."',province='".$province."',city='".$city."',area='".$area."',position='".$position."',school='".$school."',address='".$address."',begintime='".$begintime."',lasttime='".$lasttime."',week='".$week."',title='".$title."',rmb='".$rmb."',people='".$people."',description='".$description."',linkman='".$linkman."',linkqq='".$linkqq."',linkphone='".$linkphone."',abstract='".$abstract."',img1='".$img1."',img2='".$img2."',img3='".$img3."',img4='".$img4."',img5='".$img5."',img6='".$img6."',img7='".$img7."',img8='".$img8."',img9='".$img9."',img10='".$img10."' where id='".$_REQUEST['editid']."'");

            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&clickid=7');

    }

    ruiqia_die("操作数据失败");


    }


}




 

function get_weekend_days($start_date,$end_date){ 

if (strtotime($start_date) > strtotime($end_date)) list($start_date, $end_date) = array($end_date, $start_date); 

$start_reduce = $end_add = 0; 

$start_N = date('N',strtotime($start_date)); 
$start_reduce = ($start_N == 7) ? 1 : 0; 

$end_N = date('N',strtotime($end_date)); 
in_array($end_N,array(6,7)) && $end_add = ($end_N == 7) ? 2 : 1; 

$days = abs(strtotime($end_date) - strtotime($start_date))/86400 + 1; 

return floor(($days + $start_N - 1 - $end_N) / 7) * 2 - $start_reduce + $end_add; 
} 
?>