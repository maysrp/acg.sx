<?php
	session_start();
	if($_GET["a"]==$_SESSION['yzm']){
		echo $_SESSION['yzm'];
	}


?>
