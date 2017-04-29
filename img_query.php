<?php


/****************************************************************/
/* function home()                                              */
/*                                                              */
/* Main function that displays contents of folders.             */
/****************************************************************/
function home($imgurl) {
  global $folder, $filefolder, $HTTP_HOST;

  if (!$imgurl) {
  $date=date('Ymd',time());
  $filefolder = 'upload/image/'.$date.'/';
}else{
  $filefolder = $imgurl;
}

  $content2 = "";

  $count = "0";
  $style = opendir($folder);
  $a=1;
  $b=1;

  if ($folder) {
    if (ereg("/home/",$folder)) {
      $folderx = ereg_replace("$filefolder", "", $folder);
      $folderx = "http://".$HTTP_HOST."/".$folderx;
    } else {
      $folderx = $folder;
    } 
  }

  while($stylesheet = readdir($style)) {
    if (strlen($stylesheet)>40) { 
      $sstylesheet = substr($stylesheet,0,40)."...";
    } else {
      $sstylesheet = $stylesheet;
    }
    if ($stylesheet[0] != "." && $stylesheet[0] != ".." ) {
     

    

      if (is_readable($folder.$stylesheet)) { 
        $content2[$b] ="\n<li><a href=\"" .$adminfile."?op=ren&file=".$stylesheet. "&folder=$folder\">"."<img src=". $folderx.$stylesheet . " onerror=this.src='upload/image/onerror.png' width='100%'></a>" ; 
        $b++;
      } else


       {
        echo "目录不存在\n";
      }



    $count++;

    } 
  }
  closedir($style);

  




echo "<ul>";

  for ($b=1; $b<count($content2)+1;$b++) {
    $tcoloring   = ($a++ % 2) ? $tbcolor1 : $tbcolor2;

    echo $content2[$b];
  }

  echo"</ul>";

}




//创建全局变量和图片保存文件夹
// 这里是关于创建文件的
global $folder;
if ($imgurl!='') {
  $folder = $imgurl;
}else{
  $date=date('Ymd',time());
  $folder = 'upload/image/'.$date.'/';
}





// 这里是创建文件夹
create_folders($folder);

if (!$imgurl) {
  $date=date('Ymd',time());
  $filefolder = 'upload/image/'.$date.'/';
}else{
  $filefolder = $imgurl;
}




$adminfile = $SCRIPT_NAME;


$meurl = $_SERVER['PHP_SELF'];
$me = end(explode('/',$meurl));


$op = $_REQUEST['op'];


while (preg_match('/\.\.\//',$folder)) $folder = preg_replace('/\.\.\//','/',$folder);
while (preg_match('/\/\//',$folder)) $folder = preg_replace('/\/\//','/',$folder);

if ($folder == '') {
  $folder = $filefolder;
} elseif ($filefolder != '') {
  if (!ereg($filefolder,$folder)) {
    $folder = $filefolder;
  }  
}
 
// 用于创建多级菜单*********************************************
function create_folders($dir) {

    // return is_dir($dir) or (create_folders(dirname($dir)) and mkdir($dir, 0777));
    ruiqia_mkdir($dir);
}




/****************************************************************/
/* function upload()                                            */
/*                                                              */
/* Second step in upload.                                      */
/* Saves the file to the disk.                                  */
/* Recieves $upfile from up() as the uploaded file.             */
/****************************************************************/
function upload($upfile,$imgname) {
global $folder;

if (!$_FILES['myfile']['name']) { var_dump($_FILES['myfile']) ;  die('还没有选择文件！'); } 
else
{ 
   

            $count = count($_FILES['myfile']['name']);
            for ($i = 0; $i < $count; $i++) {

                $tmpfile = $_FILES['myfile']['tmp_name'][$i];
                $file = $_FILES['myfile']['name'][$i];
                if(!is_image($tmpfile))
                {
                echo $file.'不是图片！<br/>';
                }
                else
                {
                    



                    $filesize=abs(filesize($tmpfile)/1024);
                    if($filesize>2048){   
                         echo $file."体积" . $filesize . "kb大于2048kb！<br/>" ;
                         exit();
                    }





                    $file = str_replace(' ', '', $file);
                    $file = stripslashes($file); //删除反斜杠
                    $file = str_replace("'","",$file); 
                    // 如果包含中文就更该文件名
                    if (preg_match("/[\x7f-\xff]/", $file))
                    {
                     $filefix = array_pop(explode(".",$file));//将.jpg等后缀删除
                     $time = time();
                     $file = $time."_".mt_rand().".".$filefix;
                    }
                    if ($imgname!='') {
                     $file = $imgname;
                    }
                    



                    if (move_uploaded_file($tmpfile, $folder . $file)) {
                    echo $file."上传成功！<br/>" . $size;
                    create_from($folder,$file,$time,$i);
                    } else {
                    echo $file."上传失败！<br/>";
                    }


                }

            }


            // header('location:'. $adminfile.'?op=home');




} 



}





// 将插入的数据插入到数据库
function create_from($folder,$file,$time,$i){

// 获得网站名字前缀
$type = array_pop(explode("_",ruiqia_self(),-1));

// 如果标记存在就直接上传到指定字段
if ($_SESSION['editid']!='' and $_SESSION['querytype']!='') {
    ruiqia_query("INSERT INTO job_images(jobid,url,time,sitename) values('".$_SESSION['editid']."','".$folder . $file."','".$time."','".$type."')");

  }

// 查看操作类型（发布||修改||删除）
if ($_SESSION['querytype']=='publish' and $i==1) {

    ruiqia_query("INSERT INTO ".$type."(userid) values('".$_SESSION['userid']."')");
    $jobid= ruiqia_lastinsertid();
    ruiqia_query("INSERT INTO job_images(jobid,url,time,sitename) values('".$jobid."','".$folder . $file."','".$time."','".$type."')");
    // $jobid= ruiqia_lastinsertid();
    // $kkkkk=ruiqia_query_fetch("SELECT*FROM job_images where id=$jobid");
    // ruiqia_die($kkkkk['jobid']);
    // 测试能否插入成功
    $_SESSION['editid'] = $jobid;  
    
}

  


}












/****************************************************************/
/* function delete()                                            */
/*                                                              */
/* Second step in delete.                                       */
/* Deletes the actual file from disk.                           */
/* Recieves $upfile from up() as the uploaded file.             */
/****************************************************************/
function delete($dename) {
  global $folder;
  if (!$dename == "") {

 
         if(unlink($folder.$dename))
         {
          $name=$folder.$dename;
          ruiqia_query("DELETE FROM job_images WHERE url='".$name."'");
         header('location:' . $adminfile."?op=home");
        } 
        else 
        {
          echo "无法删除文件！\n";
         }

 
  }
   
}









/****************************************************************/
/* function ren()                                               */
/*                                                              */
/* First step in rename.                                        */
/* Promts the user for new filename.                            */
/* Globals $file and $folder for filename.                      */
/****************************************************************/
function ren($file) {
  global $folder;


  if (!$file == "") {

echo "<div class='xianshi'>";


echo "<br><img src='". $folder . $file . "'  onerror=this.src='upload/image/onerror.png'><br>";





$aa=getimagesize($folder . $file);
$weight=$aa["0"];////获取图片的宽
$height=$aa["1"];///获取图片的高

echo '<br/>';
echo '<label>相对地址</label>';
echo "<textarea class='code'>/" . str_replace('..','', $folder . $file) . "</textarea>";
echo '<br/>';



// echo '<label>绝对地址</label>';
// echo "<textarea class='code'>http://" . $_SERVER['SERVER_NAME'] . str_replace('..','', $folder . $file) . "</textarea>";
// echo '<br/>';
// echo '<br/>';


echo '<label>Html代码</label>';
echo "<textarea class='code'><img src=\"" . str_replace('..','', $folder . $file) . "\" width=\"$weight\" height=\"$height\"/></textarea>";


echo '<br/>';
echo '<label>CSS代码</label>';
echo "<textarea class='code'>background-image: url('" . str_replace('..','', $folder . $file) . "')</textarea>";
echo '<br/>';


echo "<form action=\"".$adminfile."?op=rename\" method=\"post\">\n";
echo 
         "<input type=\"hidden\" name=\"rename\" value=\"".$file."\">\n"
        ."<input type=\"hidden\" name=\"folder\" value=\"".$folder."\">\n"
        ."<input class=\"text\" type=\"text\" size=\"30\" name=\"nrename\" value=\"". $file ."\">\n"
        ."<input type=\"Submit\" value=\"重命名\" >\n";
echo "\n<a href=\"".$adminfile."?op=delete&dename=".$file."&folder=$folder\">删除</a>\n<li>\n";
echo '</form>';   
          

echo '</div>';

  










  } else {
    home();
  }
}


/****************************************************************/
/* function renam()                                             */
/*                                                              */
/* Second step in rename.                                       */
/* Rename the specified file.                                   */
/* Recieves $rename from ren() as the old  filename.            */
/* Recieves $nrename from ren() as the new filename.            */
/****************************************************************/
function renam($rename, $nrename, $folder) {
  global $folder;
  if (!$rename == "") {



    $loc1 = "$folder".$rename; 
    $loc2 = "$folder".$nrename;

    if(rename($loc1,$loc2)) {
      $new = ruiqia_set_url_value('file',$nrename,$_SERVER['HTTP_REFERER']);

      ruiqia_query("UPDATE job_images SET url='".$loc2."' WHERE url='".$loc1."'");

      header('location:' . $new);

    } else {
      echo "重命名出错！\n";
    }
  } else {
    home();
  }
}





/****************************************************************/
/* function switch()                                            */
/*                                                              */
/* Switches functions.                                          */
/* Recieves $op() and switches to it                            *.
/****************************************************************/
switch($op) {

    case "home":
    home($imgurl);
    break;
    
    case "upload":
    upload($_FILES['myfile'],$imgname);
    break;

    case "delete":
    delete($_REQUEST['dename']);
    break;

    case "ren":
    ren($_REQUEST['file']);
    break;

    case "rename":
    renam($_REQUEST['rename'], $_REQUEST['nrename'], $folder);
    break;

    default:
    home($imgurl);
    break;
}

?>
