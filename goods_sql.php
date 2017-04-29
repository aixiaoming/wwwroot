<?php
include "function.php";


// 检查是否登录
// is_right();



if ($_POST['submit2']) {
    $class = $_POST['class'];
    $model = $_POST['model'];
    $new = $_POST['new'];
    $objective = $_POST['objective'];
    $price = $_POST['price'];
    $title = $_POST['title'];
    $description = $_POST['description'];
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
    $school = $_POST['school'];
    $linkman = $_POST['linkman'];
    $linkqq = $_POST['linkqq'];
    $linkphone = $_POST['linkphone'];
    $type =  $_POST['type'];
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

    if($title=='')    {        ruiqia_die('标题不能为空');     }




// ***********************************************************************************************
// 通过检查                                                                                     //
// 用$_SESSION['querytype']判断【发布（publish）||修改（update）||删除（delete）】              //
// 用$_SESSION['editid']判断是否创建栏目表单（创建则更新，否则创建）                            //
// ***********************************************************************************************

    if($_SESSION['querytype']=='publish') {
        $temtime = time();
    // 发布上传数据**********************************************************

            ruiqia_query("INSERT INTO goods(userid,class,model,new,price,objective,province,city,area,title,school,description,linkman,linkqq,linkphone,type,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,position,temtime) values('".$_SESSION['userid']."','".$class."','".$model."','".$new."','".$price."','".$objective."','".$province."','".$city."','".$area."','".$title."','".$school."','".$description."','".$linkman."','".$linkqq."','".$linkphone."','".$type."','".$img1."','".$img2."','".$img3."','".$img4."','".$img5."','".$img6."','".$img7."','".$img8."','".$img9."','".$img10."','".$position."','".$temtime."')");
            unset($_SESSION['querytype']);

            $getID = ruiqia_query_fetch('SELECT*FROM goods WHERE userid="'.$_SESSION['userid'].'" and title="'.$title.'" and temtime="'.$temtime.'"');

        // $getID = ruiqia_lastinsertid();
        header('Location:publish_success.php?newid='.$getID['id'].'&clickid=6');
    }elseif($_SESSION['querytype']=='update'){
   // 更新数据****************************************************************  

    ruiqia_query("UPDATE goods SET class='".$class."',model='".$model."',new='".$new."',price='".$price."',objective='".$objective."',province='".$province."',city='".$city."',area='".$area."',title='".$title."',school='".$school."',description='".$description."',linkman='".$linkman."',linkqq='".$linkqq."',linkphone='".$linkphone."',type='".$type."',img1='".$img1."',img2='".$img2."',img3='".$img3."',img4='".$img4."',img5='".$img5."',img6='".$img6."',img7='".$img7."',img8='".$img8."',img9='".$img9."',img10='".$img10."',position='".$position."' where id='".$_REQUEST['editid']."'");
            $getID= $_REQUEST['editid'];
        unset($_SESSION['querytype']);

        header('Location:publish_success.php?newid='.$getID.'&clickid=6');

    }

    ruiqia_die("操作数据失败");


}






?>