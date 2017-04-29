<?php
include 'function.php';


ruiqia_mkdir("data/goods");
	$picname = $_FILES['mypic']['name'];
	$picsize = $_FILES['mypic']['size'];
	
	if ($picname !="") {
		if ($picsize > 10024000) {
			// echo "<img src='/data/userface/head.gif'>";
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

		// if ($type != ".jpg") {
		// 	// echo "<img src='/data/userface/head.gif'>";
		// 	exit;
		// }
	
		
			//上传路径
		$pic_path = $_SERVER['DOCUMENT_ROOT'] ."/data/". $_REQUEST['lei'] ."/".time().".".strtolower($type);
		
		move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);

	}
	
	$arr['pic'] = substr($pic_path,32);
	ruiqia_json($arr);

	
?>
