<?php
include 'function.php';



	$picname = $_FILES['mypic']['name'];
	$picsize = $_FILES['mypic']['size'];
	
	if ($picname !="") {
		if ($picsize > 10024000) {
			echo "<img src='/data/userface/head.gif'>";
			exit;
		}

		$string = strrev($picname);
        $array = explode('.',$string);
		$type=strrev($array[0]);
		

		//$type = strstr($picname, '.');
		if ($type != "jpg") {
			echo "<img src='/data/userface/head.gif'>";
			exit;
		}

		// $type = strstr($picname, '.');
		// if ($type != ".jpg") {
		// 	echo "<img src='/data/userface/head.gif'>";
		// 	exit;
		// }
	
		
		//上传路径
		$pic_path = $_SERVER['DOCUMENT_ROOT'] ."/data/". $_REQUEST['lei'] ."/".$_SESSION['userid']. ".".strtolower($type);
		
		move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);

	}
    
	$arr['pic'] = substr($pic_path,32);
	 
	ruiqia_json($arr);
	
?>
