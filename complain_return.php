<?php
include 'function.php';
//检查权限
is_right();


$user=ruiqia_query_fetch("select * from user where id='". $_SESSION['userid'] ."' ");

if ($user['administrator']!=1) {
  ruiqia_die(您不是管理员);
}


  $opinion = $_POST['opinion'];
  $id = $_POST['id'];
  $formname = $_POST['formname'];
  $goodsid = $_POST['goodsid'];
  

if ($opinion=='disagree') {
  ruiqia_query ("update complaints set state=3,result=3 where id=".$id." ");
  ruiqia_query ("update complaints set state=3,result=3 where defendant='".$goodsid."' and formname='".$formname."'");
  header('Location:complain.php');
 } 
 if ($opinion=='agree') {
  ruiqia_query ("update complaints set state=3,result=2 where id=".$id." ");
  ruiqia_query ("update complaints set state=3,result=2 where defendant='".$goodsid."' and formname='".$formname."'");
  
     if ($formname=='goods') {
       $img = ruiqia_query_fetch("SELECT*FROM goods WHERE id='".$goodsid."'");
       if ($img['img1']!="") {
         unlink (".".$img['img1']);
       }
       if ($img['img2']!="") {
         unlink (".".$img['img2']);
       }
       if ($img['img3']!="") {
         unlink (".".$img['img3']);
       }
       if ($img['img4']!="") {
         unlink (".".$img['img4']);
       }
       if ($img['img5']!="") {
         unlink (".".$img['img5']);
       }
       if ($img['img6']!="") {
         unlink (".".$img['img6']);
       }
       if ($img['img7']!="") {
         unlink (".".$img['img7']);
       }
       if ($img['img8']!="") {
         unlink (".".$img['img8']);
       }
       if ($img['img9']!="") {
         unlink (".".$img['img9']);
       }
       if ($img['img10']!="") {
         unlink (".".$img['img10']);
       }
        ruiqia_query("DELETE FROM goods WHERE id='".$goodsid."'");
        header('Location:complain.php');
     }

     if ($formname=='active') {
       $img = ruiqia_query_fetch("SELECT*FROM active WHERE id='".$goodsid."'");
        if ($img['img1']!="") {
         unlink (".".$img['img1']);
       }
       if ($img['img2']!="") {
         unlink (".".$img['img2']);
       }
       if ($img['img3']!="") {
         unlink (".".$img['img3']);
       }
       if ($img['img4']!="") {
         unlink (".".$img['img4']);
       }
       if ($img['img5']!="") {
         unlink (".".$img['img5']);
       }
       if ($img['img6']!="") {
         unlink (".".$img['img6']);
       }
       if ($img['img7']!="") {
         unlink (".".$img['img7']);
       }
       if ($img['img8']!="") {
         unlink (".".$img['img8']);
       }
       if ($img['img9']!="") {
         unlink (".".$img['img9']);
       }
       if ($img['img10']!="") {
         unlink (".".$img['img10']);
       } 
        ruiqia_query("DELETE FROM active WHERE id='".$goodsid."'");
        header('Location:complain.php');
        
     }

     if ($formname=='intern') {
       $img = ruiqia_query_fetch("SELECT*FROM intern WHERE id='".$goodsid."'");
        if ($img['img1']!="") {
         unlink (".".$img['img1']);
       }
       if ($img['img2']!="") {
         unlink (".".$img['img2']);
       }
       if ($img['img3']!="") {
         unlink (".".$img['img3']);
       }
       if ($img['img4']!="") {
         unlink (".".$img['img4']);
       }
       if ($img['img5']!="") {
         unlink (".".$img['img5']);
       }
       if ($img['img6']!="") {
         unlink (".".$img['img6']);
       }
       if ($img['img7']!="") {
         unlink (".".$img['img7']);
       }
       if ($img['img8']!="") {
         unlink (".".$img['img8']);
       }
       if ($img['img9']!="") {
         unlink (".".$img['img9']);
       }
       if ($img['img10']!="") {
         unlink (".".$img['img10']);
       }  
        ruiqia_query("DELETE FROM intern WHERE id='".$goodsid."'");
        header('Location:complain.php');
        
     }

     if ($formname=='parttime') {
       $img = ruiqia_query_fetch("SELECT*FROM parttime WHERE id='".$goodsid."'");
        if ($img['img1']!="") {
         unlink (".".$img['img1']);
       }
       if ($img['img2']!="") {
         unlink (".".$img['img2']);
       }
       if ($img['img3']!="") {
         unlink (".".$img['img3']);
       }
       if ($img['img4']!="") {
         unlink (".".$img['img4']);
       }
       if ($img['img5']!="") {
         unlink (".".$img['img5']);
       }
       if ($img['img6']!="") {
         unlink (".".$img['img6']);
       }
       if ($img['img7']!="") {
         unlink (".".$img['img7']);
       }
       if ($img['img8']!="") {
         unlink (".".$img['img8']);
       }
       if ($img['img9']!="") {
         unlink (".".$img['img9']);
       }
       if ($img['img10']!="") {
         unlink (".".$img['img10']);
       }  
        ruiqia_query("DELETE FROM parttime WHERE id='".$goodsid."'");
        header('Location:complain.php');

     }

     if ($formname=='recruit') {
       $img = ruiqia_query_fetch("SELECT*FROM recruit WHERE id='".$goodsid."'");
        if ($img['img1']!="") {
         unlink (".".$img['img1']);
       }
       if ($img['img2']!="") {
         unlink (".".$img['img2']);
       }
       if ($img['img3']!="") {
         unlink (".".$img['img3']);
       }
       if ($img['img4']!="") {
         unlink (".".$img['img4']);
       }
       if ($img['img5']!="") {
         unlink (".".$img['img5']);
       }
       if ($img['img6']!="") {
         unlink (".".$img['img6']);
       }
       if ($img['img7']!="") {
         unlink (".".$img['img7']);
       }
       if ($img['img8']!="") {
         unlink (".".$img['img8']);
       }
       if ($img['img9']!="") {
         unlink (".".$img['img9']);
       }
       if ($img['img10']!="") {
         unlink (".".$img['img10']);
       } 
        ruiqia_query("DELETE FROM recruit WHERE id='".$goodsid."'");
        header('Location:complain.php');
     }

     if ($formname=='schoolnear') {
       $img = ruiqia_query_fetch("SELECT*FROM schoolnear WHERE id='".$goodsid."'");
        if ($img['img1']!="") {
         unlink (".".$img['img1']);
       }
       if ($img['img2']!="") {
         unlink (".".$img['img2']);
       }
       if ($img['img3']!="") {
         unlink (".".$img['img3']);
       }
       if ($img['img4']!="") {
         unlink (".".$img['img4']);
       }
       if ($img['img5']!="") {
         unlink (".".$img['img5']);
       }
       if ($img['img6']!="") {
         unlink (".".$img['img6']);
       }
       if ($img['img7']!="") {
         unlink (".".$img['img7']);
       }
       if ($img['img8']!="") {
         unlink (".".$img['img8']);
       }
       if ($img['img9']!="") {
         unlink (".".$img['img9']);
       }
       if ($img['img10']!="") {
         unlink (".".$img['img10']);
       }  
        ruiqia_query("DELETE FROM schoolnear WHERE id='".$goodsid."'");
        header('Location:complain.php');
     }

     if ($formname=='find_notice') {
       $img = ruiqia_query_fetch("SELECT*FROM find_notice WHERE id='".$goodsid."'");
        if ($img['img1']!="") {
         unlink (".".$img['img1']);
       }
       if ($img['img2']!="") {
         unlink (".".$img['img2']);
       }
       if ($img['img3']!="") {
         unlink (".".$img['img3']);
       }
       if ($img['img4']!="") {
         unlink (".".$img['img4']);
       }
       if ($img['img5']!="") {
         unlink (".".$img['img5']);
       }
       if ($img['img6']!="") {
         unlink (".".$img['img6']);
       }
       if ($img['img7']!="") {
         unlink (".".$img['img7']);
       }
       if ($img['img8']!="") {
         unlink (".".$img['img8']);
       }
       if ($img['img9']!="") {
         unlink (".".$img['img9']);
       }
       if ($img['img10']!="") {
         unlink (".".$img['img10']);
       }  
        ruiqia_query("DELETE FROM find_notice WHERE id='".$goodsid."'");
        header('Location:complain.php');
     }

 } 
  