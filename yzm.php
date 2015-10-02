<?php
	session_start();
	$_SESSION['yzm']=NULL;

	$d="0123456789zxcvbnmasdfghjklqwertyuiopZXCVBNMASDFGHJKLQWERTYUIOP";
	for ($i=0; $i < 4; $i++) { 
		$m=$d[mt_rand(0,61)];
		$z.=$m;

		# code...
	}
		$_SESSION['yzm']=strtolower($z);

	$yzm=imagecreate(120, 60);
	imagecolorallocate($yzm, 255, 255, 255);
	for ($i=0; $i <4 ; $i++) { 
		$co=mt_rand(0,200);
		$textcol=imagecolorallocate($yzm, $co,$co,$co);
		imagestring($yzm, mt_rand(3,5), 30*$i, 10+mt_rand(0,10), $z[$i], $textcol);
		# code...
	}
	for ($i=0; $i < 4; $i++) { 
		$h=mt_rand(200,250);
		$ho=imagecolorallocate($yzm, $co,$co,$co);
		imagearc($yzm, mt_rand(-60,60), mt_rand(-40,40), mt_rand(120,240), mt_rand(80,160), 0, mt_rand(0,120), $ho);
		# code...
	}
	header('Content-type:image/png');
	ob_clean();
	imagepng($yzm);



?>