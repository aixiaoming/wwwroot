<?php
include 'function.php';

	$picname = $_FILES['mypic']['name'];
	$picsize = $_FILES['mypic']['size'];
	$picerror = $_FILES['mypic']['error'];
	if($picerror){
    echo '{"title":"图片过大，请处理后上传","text":"","type":"warning"}';
    exit();
	}
	if ($picname !="") {
    if ($picsize > 5024000) {
      echo '{"title":"图片过大，请处理后上传","text":"","type":"warning"}';
      exit();
		}

		$string = strrev($picname);
    $array = explode('.',$string);
		$type=strrev($array[0]);

		//$type = strstr($picname, '.');
		if ($type != "jpg") {
      echo '{"title":"请上传jpg格式的图片","text":"","type":"warning"}';
      exit();
		}

		//上传路径
		$pic_path = $_SERVER['DOCUMENT_ROOT'] ."/data/". $_REQUEST['lei'] ."/".$_SESSION['userid']. ".".strtolower($type);
		move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);

	}
    
	$arr['pic'] = substr($pic_path,32);
	 
	ruiqia_json($arr);
	
?>
