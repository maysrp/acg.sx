<input type="input" name="a"id="a">
<input type="input" name="b" id="b">
<button onclick="aaa()">1111111</button>
<div id="in">
</div>
<script type="text/javascript">


function aaa(){

	var ajax=new XMLHttpRequest();
	ajax.open("POST","post.php");
	var data="a="+document.getElementById('a').value+
			"&b="+document.getElementById('b').value;
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(data);
	//alert(data);
	ajax.onreadystatechange=function(){
	if (ajax.readyState===4&&ajax.status===200) {

			document.getElementById('in').innerHTML=ajax.responseText;
	};
}
}

</script>
