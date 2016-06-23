<body>
 <img id="time" src="./shijian.php">
 <script>
  setInterval(function(){
  	document.getElementById('time').src='shijian.php?'+Math.random();

  },1000);
 </script>
 </body>