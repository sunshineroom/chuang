<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jibu</title>
	<style type="text/css">
		*{margin:0;padding:0;}
		#a{position:absolute;top:20px;left: 20px;}
		#b{position:absolute;
			left:430px;top:20px;float: left;}
	</style>
</head>
<body>
	<div id="a"><img src="psb.jpg" width="400" height="400"></div>
	<div id="b"><img id="sa" src="" width="200" height="200"></div>
	
	<script type="text/javascript">
	var a = document.getElementById('a');
	var b = document.getElementById('b');
	var sa = document.getElementById('sa');
	a.onmousemove = function(e){
		var x = e.clientX;
		var y = e.clientY;
		var ax = a.offsetLeft;
		var ay = a.offsetTop;
		
		//鼠标在图片上的坐标
		var _x = x-ax;
		var _y = y-ay;

		<?php

			$back = imagecreatefromjpeg('./psb.jpg');
			$cuting = imagecreatetruecolor(50,50);
			imagecopyresampled($cuting,$back,0,0,2,2,50,50,50,50);
			$filename = rand().'psb.jpg';
			imagejpeg($cuting,$filename);
			imagedestroy($cuting);
			imagedestroy($back);
		?>
		sa.src = '<?php echo $filename?>';
		// 要截取的坐标
	// 	var yx1 = 0;
	// 	var yx2 = 0;
	// 	var yy1 = 0;
	// 	var yy2 = 0;
	// 	if(_x-10<=0){
	// 		yx1=0;
	// 		yx2 = _x+10;
	// 		if(_y-10<0){
	// 			yy=0;
	// 		}
	// 	}else{
	// 		yx1
	// 	}
	// 	if(_x+10>a.offsetWidth){
	// 		yx = a.offsetWidth;
	// 	}else{
	// 		yx
	// 	}
	// 	if(_y-10<0){
	// 		yy=0;
	// 	}
	// 	if(_y+10>a.offsetTop){
	// 		yy=a.offsetTop;
	// 	}
	// 	yx1 = _x-10;
	// 	yx1 = _x+10;
	// 	yy1 = _y-10;
	// 	yy2 = _y+10;
		function rand(){
			return Math.ceil(Math.random()*10000000)%999999;
		} 
	 }
	</script>
</body>
</html>