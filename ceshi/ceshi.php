<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dian</title>
<style>
	#wamp{
		width:500px;
		height:200px;
		background:#abcdef;
		margin:0 auto;
		/*padding-top:20px;*/
		position:relative;
		border:1px solid red;
	}
	#ren{
		width:200px;
		height:50px;
		background:blue;
		margin:20px auto;
		position:relative;
		text-align:center;
		font-size:30px;
		color:red;
	}
	#btn{
		width:200px;
		height:50px;
		background:yellow;
		text-align:center;
		font-size:30px;
		/*border:1px solid red;*/
		margin:20px auto;
		display:block;
		/*margin-left:20px;*/
	}

</style>
</head>
<body>
	<div id="wamp">
		<div id="ren">姓名</div>
		<button id="btn" onclick="start()" >开始</button>
	</div> 
</body>
<script>
	var names = ["苍老师","小泽老师","武老师","海老师","波老师"];
	var dian = document.getElementById("btn");
	var ming = document.getElementById("ren");
	var hu;
	function start(){
		if(dian.innerHTML == '开始'){
			hu = setInterval(function(){ming.innerHTML = names[parseInt(Math.random()*100%4)]},100);

			document.getElementById("btn").innerHTML = '结束';
	}else{
		clearInterval(hu);
		document.getElementById("btn").innerHTML = '开始';
	}
}
	
</script>
</html>