<?php
 date_default_timezone_set("PRC");
 header("content-type:text/html;charset=utf-8");
 $h = date("H");
 $i = date("i");
 $s = date("s");
 $img = imagecreatetruecolor(200,250);
 $white = imagecolorallocate($img,255,255,255);
 $red = imagecolorallocate($img,255,0,0);
 $blue = imagecolorallocate($img,0,0,255);
 $green = imagecolorallocate($img,0,255,0);

imagefill($img,0,0,$white);
imagestring($img,5,20,230,"now:{$h}:{$i}:{$s}",$red);
imageellipse($img,100,100,190,190,$blue);
imagefilledellipse($img,100,100,4,4,$blue);

imagestring($img,3,95,8,"12",$blue);
imagestring($img,3,180,95,"03",$blue);
imagestring($img,3,95,180,"06",$blue);
imagestring($img,3,11,95,"09",$blue);

$lens = 90;
$as = $lens * sin(pi()/30*$s);
$bs = $lens * cos(pi()/30*$s);
$xs = 100+$as;
$ys = 100-$bs;
imageline($img,100,100,$xs,$ys,$blue);

$lenm = 60;
$am = $lenm * sin(pi()/30*$i);
$bm = $lenm * cos(pi()/30*$i);
$xm = 100+$am;
$ym = 100-$bm;
imageline($img,100,100,$xm,$ym,$blue);

$lenh = 40;
$ah = $lenh * sin(pi()/6*$h);
$bh = $lenh * cos(pi()/6*$h);
$xh = 100+$ah;
$yh = 100-$bh;
imageline($img,100,100,$xh,$yh,$blue);



header("content-type:image/gif");
imagegif($img);
imagedestroy($img); 
?>