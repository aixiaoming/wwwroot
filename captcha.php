<?php
    include 'ruiqia.php';
    ruiqia_session(3600*30*24);
    getCode(75, 36);
    function getCode($w, $h) {
	$im = imagecreate($w, $h);

	//imagecolorallocate($im, 14, 114, 180); // background color
	$red = imagecolorallocate($im, 255, 77, 77);
	$green = imagecolorallocate($im, 33, 180, 12);
	$blue = imagecolorallocate($im, 77, 166, 255);

	$num1 = rand(1, 20);
	$num2 = rand(1, 20);

	$_SESSION['captcha'] = $num1 + $num2;

	$gray = imagecolorallocate($im, 118, 151, 199);
	$black = imagecolorallocate($im, mt_rand(200, 250), mt_rand(200, 250), mt_rand(200, 250));

	//画背景
	imagefilledrectangle($im, 0, 0, $w, $h, $black);

	//在画布上随机生成大量点，起干扰作用;
	for ($i = 0; $i < 80; $i++) {
		imagesetpixel($im, rand(0, $w), rand(0, $h), $gray);
	}

	imagestring($im, 5, 8, 10, $num1, $red);
	imagestring($im, 5, 26, 10, "+", $green);
	imagestring($im, 5, 35, 10, $num2, $red);
	imagestring($im, 5, 52, 9, "=", $red);
	imagestring($im, 5, 61, 10, "?", $blue);

	header("Content-type: image/png");
	imagepng($im);
	imagedestroy($im);
	exit;
}
?>
