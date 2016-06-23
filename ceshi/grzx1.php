<?php require '../init.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- 兼容性设置 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面 -->
  <title>个人中心top页面</title>
  <!-- Bootstrap -->
  <link href="../public/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./public/css/bootstrap-theme.min.css">
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="../public/js/html5shiv.min.js"></script>
    <script src="../public/js/respond.min.js"></script>
  <![endif]-->
</head>
<body style="background:#feeeed">
 <nav class="navbar navbar-default" style="background:#feeeed">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
          <img src="<?php echo URL ?>./page/imgs/oppo_logo.png" width="250">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../grzx.php" target="_top" class="btn btn-danger">OPPO商城个人中心 </a></li>
        <li><a href="../index.php" target="_blank" class="btn btn-info">回首页</a></li>
        <li><a href="../gwc.php" target="_blank" class="btn btn-primary">购物车</a></li>
        <li><a href="../grzx.php" target="_top" class=" btn btn-success">我的账户</a></li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
</body>
</html>