<!-- 此页面用于接收失物招领信息，并存取数据库 -->
<?php


include "function.php";
 


is_right();



$title = str_replace(" ", '', $_POST['title']);
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
$linkman = $_POST['linkman'];
$linkqq = str_replace(" ", '', $_POST['linkqq']);
$linkphone = str_replace(" ", '', $_POST['linkphone']);
$description = $_POST['description'];

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

//检查数据
if ($title=="") {
    ruiqia_die("标题不能为空");
}
// *************************************************************************
// 通过检查                                                               //
// 上传数据 type=1 更新数据type=2 删除数据type=3                          //
// *************************************************************************

    if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************
            ruiqia_query("INSERT INTO find_notice(userid,title,address,province,city,area,position,linkman,linkqq,linkphone,description,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,temtime) values('".$_SESSION['userid']."','".$title."','".$address."','".$province."','".$city."','".$area."','".$position."','".$linkman."','".$linkqq."','".$linkphone."','".$description."','".$img1."','".$img2."','".$img3."','".$img4."','".$img5."','".$img6."','".$img7."','".$img8."','".$img9."','".$img10."','".$temtime."')");
            unset($_SESSION['querytype']);
            $getID = ruiqia_query_fetch('SELECT*FROM find_notice WHERE userid="'.$_SESSION['userid'].'" and title="'.$title.'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&clickid=9');
    
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE find_notice SET address='".$address."',title='".$title."',province='".$province."',city='".$city."',area='".$area."',position='".$position."',linkman='".$linkman."',linkqq='".$linkqq."',linkphone='".$linkphone."',description='".$description."',img1='".$img1."',img2='".$img2."',img3='".$img3."',img4='".$img4."',img5='".$img5."',img6='".$img6."',img7='".$img7."',img8='".$img8."',img9='".$img9."',img10='".$img10."' where id='".$_REQUEST['editid']."'");
            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&clickid=9');

    }

ruiqia_die("操作数据失败");



?>

