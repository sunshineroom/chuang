<?php require './init.php'; 
  if(empty($_SESSION['home'])){
    redirect('请登录','./dl.php');
  }
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <!-- 兼容性设置 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面 -->
  <title>OPPO商城个人中心</title>

  <!-- Bootstrap -->
  <link href="../public/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./public/css/bootstrap-theme.min.css">
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="../public/js/html5shiv.min.js"></script>
    <script src="../public/js/respond.min.js"></script>
  <![endif]-->
</head>
  <frameset rows="68,*" border="0">
    <frame name="top" src="./page/grzx1.php" scrolling="no">
    <frameset cols="160,*" border="0">
      <frame name="menu" src="./page/grzx2.php">
      <frame name="main" src="./page/grzx3.php">
    </frameset>
  </frameset>

</html>