
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
 <img id="time" src="xuanzhuan.php">


 <script>
 	var j=0;
  	setInterval(function(){  	
  		document.getElementById('time').src='./xuanzhuan.php?i='+j;
  		j++;
  		console.log(j);
  	},100);
  </script>

</body>
</html>