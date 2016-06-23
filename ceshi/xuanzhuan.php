<?php
 date_default_timezone_set("PRC");
 // header("content-type:text/html;charset=utf-8");
 // $i=0;
 if(!empty($_GET)){
 	
	$i = $_GET['i'];
	// echo $i;
 }else{
 	$i=0;
 }
 
	 $img = imagecreatetruecolor(500,500);
	 $white = imagecolorallocate($img,255,255,255);
	 $red = imagecolorallocate($img,255,0,0);
	 $blue = imagecolorallocate($img,0,0,255);
	 $green = imagecolorallocate($img,0,255,0);
	 imagefill($img,0,0,$white);
	 $lens = 90;


		$as = $lens * sin(pi()/30*$i);
		$bs = $lens * cos(pi()/30*$i);
		$xs = 250+$as;
		$ys = 250-$bs;
		imageline($img,250,250,$xs,$ys,$blue);

		header("content-type:image/gif");
 	

		imagegif($img);
		imagedestroy($img); 
 // ob_clean();
 // ob_flush();
 // flush();

// echo $i++;
// sleep(1);
// header('location:./xuanzhuan.php?i='.$i);
?>


