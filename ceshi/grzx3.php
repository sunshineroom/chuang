<?php require '../init.php';?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>个人中心main页面</title>

  <!-- Bootstrap -->
  <link href="../public/css/bootstrap.min.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="./public/js/html5shiv.min.js"></script>
    <script src="./public/js/respond.min.js"></script>
  <![endif]-->
</head>

<body style="background:#feeeed">
  <div class="container">
    <div class="row">
      <h2>OPPO商城个人中心 <small><span class="glyphicon glyphicon-time"></span> 最近登录时间<?php echo date('Y年m月d日 H:i:s') ?></small></h2>
    </div><!--END  row 1 -->
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">最新订单</h3>
          </div>
          <div class="panel-body">
            暂无数据
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">订单状态</h3>
          </div>
          <div class="panel-body">
            暂无数据
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">统计相关</h3>
          </div>
          <div class="panel-body">
            暂无数据
          </div>
        </div>
      </div>
      

    </div><!-- END row 2 -->
  </div><!-- END container -->
  <!-- 必须引入 jQuery -->
  <script src="../public/js/jquery.min.js"></script>
  <!-- 此条JQ的后面引入-->
  <script src="../public/js/bootstrap.min.js"></script>
</body>
</html>