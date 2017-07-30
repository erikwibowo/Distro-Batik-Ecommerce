<?php
    session_start();
    include("../lib/config.php");

    if (empty($msg)) {
        $msg = "";
    }

    if (isset($_POST['login'])) {
          $name = $_POST["name"];
           $pass = $_POST["pass"];
                $query = mysqli_query($connect, "SELECT * FROM admin WHERE username='$name' AND password= md5('$pass')");
                $data = mysqli_fetch_array($query);
                $count = $query->num_rows;
                
                if ($count == 1) {
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['level']= $data['level'];
                    header('location:index.php');
                }else {
                    $msg = "<p class='alert alert-danger'>Username/password was incorrect!</p>";
                }
            }
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="icon" href="../logo.ico" type="image/x-icon">

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
          <a href="index.php" class="navbar-brand"><b>Distro</b>Batik Pekalongan</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.php" target="_blank">View Page</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <form name="flogin" method="post" class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
        <cennter><h2>Login to Manage the Website</h2><br></cennter>
        <div class="form-group">
          <?php echo $msg; ?>

          <div class="input-group input-group-lg">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" required="true" autofocus name="name" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
          </div><br>
          <div class="input-group input-group-lg">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
            <input type="password" required="true" name="pass" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
          </div>
            <!--<p class="alert alert-danger"><?php echo $msg; ?></p> -->
        </div>
        <input type="submit" name="login" class="btn btn-primary btn-lg col-xs-4 col-xs-offset-4 col-md-4 col-md-offset-4" value="Login">
      </form>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <br><br>
  <footer class="main-footer navbar-fixed-bottom">
    <div class="container">
      <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="index.php"> Distro Batik Pekalongan</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
