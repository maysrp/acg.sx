<?php

	session_start();
	echo $_SESSION['yzm'];
?>

<img src="yzm.php">
<input type="text" id="yzm">
<button onclick=yz()>aa</button>

<script type="text/javascript">
function yz(){
	var ajax=new XMLHttpRequest();
	ajax.open("GET","asd.php?a="+document.getElementById("yzm").value);
	ajax.send();
	ajax.onreadystatechange=function(){
		if (ajax.readyState===4&&ajax.status===200) {
	
			alert(ajax.responseText);
		};
	};
};



</script>
<?php


	echo $_SESSION['yzm'];//因为是先执本脚本的php，一开始并没有获得session 因此不存在，再执行img里面的，因为session是全局变量，所以慢一拍！
?>