
<?php
/*
header("Content-type:image/gif");
$im=imagecreate(500, 500);
imagecolorallocate($im,255,255,255);
$filled=imagecolorallocate($im, 222, 233, 233);
$filled2=imagecolorallocate($im, 100, 103, 133);
$filled3=imagecolorallocate($im, 0, 203, 0);
$red=imagecolorallocate($im, 255,0,0);
imagefilledrectangle($im, 10, 10, 400, 400, $filled);
imagefilledrectangle($im, 40, 40, 300, 300, $filled2);
imagerectangle($im, 50, 50, 200, 250, $filled3);
imagearc($im,90,100,50,20,0,360,$red);
imagearc($im,160,100,50,20,0,360,$red);
imagearc($im,120,180,50,20,20,160,$red);
imageline($im,25,26,120,180,$red );
ob_clean();
imagegif($im);



*/
header("Content-type:image/png");
$code=NULL;
$a="1234567890qwertyuiopasdfghjklzxcvbnm";
for ($i=1; $i <=4 ; $i++) { 

	$code.=$a{mt_rand(0,35)};



	# code...
}
echo $code;
$yzm=imagecreate(80, 20);
//$pixel=imagecolorallocate($yzm,0,0,0);
imagecolorallocate($yzm, 255,255,255);
$pixel=imagecolorallocate($yzm,0,0,0);
for ($i=0; $i <20 ; $i++) { 
	imagesetpixel($yzm,mt_rand(0,79),mt_rand(0,19),$pixel);
	

	# code...
}

for ($i=0; $i <strlen($code); $i++) {
	$m=$code[$i];
	$textcolor=imagecolorallocate($yzm, mt_rand(0,100),  mt_rand(0,150), mt_rand(0,200));

	$font=mt_rand(3,5);
	$x=20*$i+mt_rand(0,2);
	$y=2;

	imagestring($yzm, $font, $x,$y, $m, $textcolor);



	# code...
}
for ($i=0; $i < 3; $i++) { 
	imagearc($yzm,mt_rand(-80,80),mt_rand(-20,20),mt_rand(50,200),mt_rand(40,80),mt_rand(0,360),mt_rand(0,360),$pixel);
	# code...
}
ob_clean();
imagepng($yzm);
imagedestroy($yzm);
/*
$m=39431;
echo dechex($m);
header("Content-type:image/gif");
$im=imagecreate(80,200);
imagecolorallocate($im, 255, 255, 255);
$cot=imagecolorallocate($im, 22, 52,41);
imagestring($im,5, 10, 10, $m, $cot);
ob_clean();
imagegif($im);



header("Content-type:image/jpeg");
$im=imagecreatefromjpeg("1.jpg");
$co=imagecolorallocate($im,25,250,82);
$f="c:/windows/fonts/simhei.ttf";
$z=iconv("utf-8","utf-8","你蛮难"); 
imageTTFText($im,20,15,480,340,$co,$f,$z);
ob_clean();

imagejpeg($im);
imagedestroy($im);
*/
?>
