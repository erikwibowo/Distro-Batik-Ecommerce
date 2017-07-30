<?php

  session_start();

  include("lib/config.php");
  if (empty($msg)) {
    $msg = "";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $msgi = $_POST["msg"];
                $email = $_POST["email"];
                date_default_timezone_set('Asia/Jakarta');
                $date = date("Y-m-d");
                $time = date("H:i:s");
                $error = 0;

                if (empty("$name") or empty($email) or empty($msgi) ){
                  $msg = "<p class='alert alert-danger'>Semua inputan harus diisi!</p>";
                  $error = 1;
                }

                if ($error == 0) {

                  $query = mysqli_query($connect, "INSERT INTO inbox values ('','$name','$email','$date','$time','$msgi')");

                  if ($query) {
                    $msg = "<p class='alert alert-success'>Pesan/masukan anda telah dikirim</p>";
                    ?>
                      <script type="text/javascript">
                        setTimeout("location.href='contactus.php'", 3000);
                      </script>
                    <?php
                  }else {
                    $msg = "<p class='alert alert-danger'>Pesan/masukan gagal dikirim!</p>";
                  }
                }
              }
  $web = mysqli_query($connect, "SELECT * FROM website");
  $dweb = mysqli_fetch_array($web);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Distro Batik Pekalongan - Hubungi Kami</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="icon" href="logo.ico" type="image/x-icon">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><img src='img/<?php echo $dweb['logo']; ?>' width=25 height=25></a>
          <a href="index.php" class="navbar-brand"><?php echo $dweb['nama']; ?></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Katalog</a></li>
            <li><a href="order.php">Pemesanan</a></li>
            <li class="active"><a href="contactus.php">Hubungi Kami</a></li>
            <li><a href="about.php">Tentang Batik</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Cari...">
            </div>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <div class="col-md-6">
        <center><h3>Ada masalah? Silahkan kirim pesan/keluhan anda</h3></center>
        <?php echo $msg; ?>
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label for="inputname" class="col-sm-4 control-label">Name (required)</label>
            <div class="col-sm-8">
              <input type="text" required="true" class="form-control" name="name" placeholder="Your name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputemail" class="col-sm-4 control-label">Email (required)</label>
            <div class="col-sm-8">
              <input type="email" required="true" class="form-control" name="email" placeholder="Your email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputmessage" class="col-sm-4 control-label">Message</label>
            <div class="col-sm-8">
              <textarea class="form-control" required="true" rows="5" name="msg" placeholder="Input your Message here..."></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-danger">Clear</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer navbar-static-bottom">
    <div class="container">
      <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="index.php"> <?php echo $dweb['nama']; ?></a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
