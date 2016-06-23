<?php require '../init.php';
    $id=$_SESSION['home']['id'];

   $sql = "SELECT `id`,`name`,`yname` FROM ".PRE."user WHERE `id`='$id'";
 
//6.执行SQL语句
   $result = mysql_query($sql);
     
  //7.处理结果集
  if ($result && mysql_num_rows($result)>0 ) {
    //遍历所有数据  
    while ($row = mysql_fetch_assoc($result) ) {
          

      //将数组重组成大数组
      $user_list[]  = $row;
    }
}
  // mysql_close();

  // $row = $user_list[0];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>个人中心mune页面</title>

  <!-- Bootstrap -->
  <link href="../public/css/bootstrap.min.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="./public/js/html5shiv.min.js"></script>
    <script src="./public/js/respond.min.js"></script>
  <![endif]-->
  
</head>

<body style="background:#feeeed;">
  <div class="container">
    <div class="row mt30">

      <div class="panel panel-default">
        <div class="panel-heading" style="background:#f00;">订单</div>
        <div class="list-group">
          <a href="./qbdd.php" target="main" class="list-group-item" style="background:#ccc">全部订单</a>
          <a href="./ywcdd.php" target="main" class="list-group-item">已完成订单</a>
          <a href="./wfhdd.php" target="main" class="list-group-item" style="background:#ccc">未发货</a>
          <a href="./dshdd.php" target="main" class="list-group-item">代收货</a>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" style="background:#f00;">我的信息</div>
        <div class="list-group">
          <a href="./grxx.php" target="main" class="list-group-item" style="background:#ccc">个人信息</a>
          <a href="./xgshdz.php" target="main" class="list-group-item" style="background:#ccc">修改收货地址</a>
          <a href="./xggrxx.php" target="main" class="list-group-item">修改个人信息</a>
        </div>
      </div>
      <form action="./1.php" method="post" enctype="multipart/form-data">
      <?php foreach ($user_list as $val): 

            $img_path = URL.'userimage/';
      $img_path .= substr($val['yname'],0,4).'/';
      $img_path .= substr($val['yname'],4,2).'/';
      $img_path .= substr($val['yname'],6,2).'/100_';
      $img_path .= $val['yname'];
           
      
    ?>
      <div class="panel panel-default">
        <div class="panel-heading">修改头像</div>
        <div class="list-group">
          <a href="./xgtx.php" target="main" class="list-group-item" style="background:#ccc"><img src="<?php echo $img_path;?>" width="100px" height="100px"></a>
        </div>
      </div>
      <?php endforeach;?>
      </form>
      </div>
    </div><!--END row -->
  </div><!-- END container -->
  
  <!-- 必须引入 jQuery -->
  <script src="../public/js/jquery.min.js"></script>
  <!-- 此条JQ的后面引入-->
  <script src="../public/js/bootstrap.min.js"></script>
</body>
</html>