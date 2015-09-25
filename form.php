<?php

	//require("photoChange.php");

			
		if (isset($_POST['sc'])) {
			# code.

			session_start();

			$pt=$_FILES['s']['tmp_name'];//表单中“s”，文件。
			$pn=$_FILES['s']['name'];
			move_uploaded_file($pt, $pn);
	
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
				$size=$_POST['ch'];
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
			//imagesavealpha($im, true);
			imagealphablending($new, false);//不合并颜色,直接用$im图像颜色替换,包括透明色;(单色模式)
			imagesavealpha($new, true);//不要丢了$resize_im图像的透明色;

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


			}
?>

<head>
	<meta charset="utf-8">
</head>
<center>
<h2>图片压缩</h2>
<br>
<div class="form">
<table>
<form action="" method="post" enctype="multipart/form-data">

	<tr><td colspan="2">
	图文件：<input type="file" name="s">
	</tr></td>
	<tr>
	<td>
	缩小比例：<select name="ch" >
		<option value ="1" >小</optional>
		<option value ="2" selected>中</optional>
		<option value ="3" >大</optional>

	</select>
	</td>
	<td>
	<input type="submit" name="sc" value="上传" >
	</td>
	</tr>
</form>
<table>
</div>
<div class="photo">
<img src="<?php echo isset($pn)?$pn:NULL ?>">
</div>
</center>
