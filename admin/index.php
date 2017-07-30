<?php
  session_start();
  include("../lib/config.php");

  $nama = $_SESSION['username'];

  if (empty($nama)) {
    header('location:login.php');
    
  }


  date_default_timezone_set('Asia/Jakarta');
  $date = date('Y-m-d');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Distro Batik Pekalongan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="..//font-awesome/css/font-awesome.min.css">
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
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>BP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> Distro Batik Pekalongan</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->

          <li><a href="../index.php" target="_blank">View Page</a></li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="glyphicon glyphicon-search" aria-hidden="true"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview active">
          <a href="index.php">
            <i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="account.php">
            <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
            <span>Admin</span>
          </a>
        </li>
        <li class="treeview">
          <a href="member.php">
            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
            <span>Member</span>
          </a>
        </li>
        <li class="treeview">
          <a href="product.php">
            <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i> <span>Products</span>
          </a>
        </li>
        <li class="treeview">
          <a href="categories.php">
            <i class="glyphicon glyphicon-tags" aria-hidden="true"></i> <span>Categories</span>
          </a>
        </li>
        <li class="treeview">
          <a href="order.php">
            <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
            <span>Order</span>
          </a>
        </li>
        <li class="treeview">
          <a href="inbox.php">
            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
            <span>Inbox</span>
          </a>
        </li>
        <li class="treeview">
          <a href="about.php">
            <i class="glyphicon glyphicon-book" aria-hidden="true"></i>
            <span>About Batik</span>
          </a>
        </li>
        <li class="treeview">
          <a href="setting.php">
            <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
            <span>Settings</span>
          </a>
        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome <?php echo $_SESSION['username']; ?>!
        <small>This is the recent activity today</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $querypro = $query = mysqli_query ($connect, "SELECT * FROM barang WHERE date_format(tanggal,'%Y-%m-%d') = '$date'");
                $countpro = mysqli_num_rows($querypro);
              ?>
              <h3><?php echo $countpro; ?></h3>

              <p>New Product</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="product.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
         <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
                $queryor = $query = mysqli_query ($connect, "SELECT * FROM about WHERE date_format(tanggal,'%Y-%m-%d') = '$date'");
                $countor = mysqli_num_rows($queryor);
              ?>
              <h3><?php echo $countor; ?></h3>

              <p>New Article</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="about.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $querymem = $query = mysqli_query ($connect, "SELECT * FROM member WHERE date_format(tanggal,'%Y-%m-%d') = '$date'");
                $countmem = mysqli_num_rows($querymem);
              ?>
              <h3><?php echo $countmem; ?></h3>

              <p>New Member</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="member.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                $querybox = $query = mysqli_query ($connect, "SELECT * FROM inbox WHERE date_format(tanggal,'%Y-%m-%d') = '$date'");
                $countbox = mysqli_num_rows($querybox);
              ?>
              <h3><?php echo $countbox; ?></h3>

              <p>New Message</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="inbox.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Order Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a href="../index.php">Distro Batik Pekalongan</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <!-- /.control-sidebar-menu -->

        
        <!-- /.control-sidebar-menu -->

      </div>
      
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
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
