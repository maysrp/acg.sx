<?php

	$a=imagecreatefromjpeg("1.jpg");
	ob_clean();
	imagejpeg($a);

?>