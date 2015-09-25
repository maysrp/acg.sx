<?php
header("Content-type:image/jpeg");
$im=imagecreatefromjpeg("1.jpg");
$a=imagecreatetruecolor(1000,600);
//$a=imagecreate(650,400);
$c=imagecolorallocate($a,110,0,0);
imagefill($a, 0, 0, $c);
imagecopyresampled($a, $im, 120,100,0,0,700,400,1300,700);


ob_clean();
//echo imagesx($im)."*".imagesy($im);
//var_dump(getimagesize("1.jpg"));

imagejpeg($a);
imagejpeg($a,"aa.jpg",10);


?>