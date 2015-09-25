<?php

			header("Content-type:image/jpeg");
			
			session_start();
			



			$pn=$_SESSION['photo'];
			ob_clean(); //清空缓存区

			$jugg=getimagesize($pn);//用于判断图片文件
			if ($jugg) {
				switch ($jugg[2]) {
					case '1':
						
						$im=imagecreatefromgif($pn);
						break;
					case '2':
						
						$im=imagecreatefromjpeg($pn);
						break;
					
					default:
						$im=imagecreatefrompng($pn);
						break;
				
				}
				# code...
				$size=$_SESSION['ch'];
				switch ($size) {
					case '1':
						$w=$jugg[0]/4;
						$h=$jugg[1]/4;

						# code...
						break;
					case '2':
						# code...
						$w=$jugg[0]/2;
						$h=$jugg[1]/2;

						break;
					
					default:
						# code...
						$w=3*$jugg[0]/4;
						$h=3*$jugg[1]/4;
						break;
				}
				//echo $w." ".$h;
				$new=imagecreatetruecolor($w, $h);

				imagecopyresampled($new, $im, 0,0,0,0,$w,$h,$jugg[0],$jugg[1]);
				
				switch ($jugg[2]) {
					case '1':
						
						imagegif($new,$pn);
						break;
					case '2':
						
						imagejpeg($new,$pn,"5");
						break;
					
					default:
					
						imagepng($new,$pn);
						break;
				
				}
				imagedestroy($new);



			}
		
			




?>
