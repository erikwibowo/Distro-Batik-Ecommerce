<?php
  session_start();
  include("../lib/config.php");

  $nama = $_SESSION['username'];

  if (empty($nama)) {
    header('location:login.php');
    
  }

  if (empty($msg)) {
    $msg = "";
  }

  if (isset($_POST['submitcat'])) {
    $cat = $_POST['namecat'];
    $url = $_POST['urlcat'];
    $queryaddcat = mysqli_query($connect, "INSERT INTO kategori VALUES ('','$cat','$url')");
    header('location:categories.php');
  }

  if (isset($_POST['submittp'])) {
    $tp = $_POST['nametp'];
    $url = $_POST['urltp'];
    $queryaddtp = mysqli_query($connect, "INSERT INTO jenis VALUES ('','$tp','$url')");
    header('location:categories.php');
  }

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
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
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
              <li>
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
        <li class="treeview">
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
        <li class="treeview active">
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
            <i class="glyphicon glyphicon-cog" aria-hidden="true"></i> <span>Settings</span>
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
      <div class="col-md-6">
        <?php echo $msg; ?>
        <div class="box box-success box-solid">
            <div class="box-header">
              <h3 class="box-title">Categories List</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addcat"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>No</th>
                  <th>Categories Name</th>
                  <th>Action</th>
                </tr>
                <?php

                  $querycat = mysqli_query ($connect, "SELECT * FROM kategori");
                  $no = 1;

                  while ($datacat = mysqli_fetch_array($querycat)) {
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $datacat["nama_kategori"]; ?></td>
                      <td><a onclick="return confirm('Are you sure?')" class="btn btn-danger" role="button" href="categoriesdel.php?id=<?php echo $datacat["id_kategori"]; ?>" data-toggle='tooltip' title='Delete'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                    </tr>

                    <?php $no++; ?>
                  <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div id="addcat" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- body modal -->
                    <div class="modal-body">
                        <form method="post">
                          <div class="form-group">
                            <label for="nama">Category Name</label>
                            <input type="text" class="form-control" required="true" name="namecat" placeholder="Category Name">
                          </div>
                          <div class="form-group">
                            <label for="urlcat">URL</label>
                            <input type="text" class="form-control" required="true" name="urlcat" placeholder="URL">
                          </div>
                          <input type="submit" class="btn btn-success" name="submitcat" value="Add">&nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box box-success box-solid">
            <div class="box-header">
              <h3 class="box-title">Type List</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addtp"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>No</th>
                  <th>Type Name</th>
                  <th>URL</th>
                  <th>Action</th>
                </tr>
                <?php

                  $querytp = mysqli_query ($connect, "SELECT * FROM jenis");
                  $no = 1;

                  while ($datatp = mysqli_fetch_array($querytp)) {
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $datatp["nama_jenis"]; ?></td>
                      <td><?php echo $datatp["alamat"]; ?></td>
                      <td><a onclick="return confirm('Are you sure?')" class="btn btn-danger" role="button" href="typedel.php?id=<?php echo $datatp["id_jenis"]; ?>" data-toggle='tooltip' title='Delete'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                    </tr>

                    <?php $no++; ?>
                  <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div id="addtp" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- body modal -->
                    <div class="modal-body">
                        <form method="post">
                          <div class="form-group">
                            <label for="nama">Type Name</label>
                            <input type="text" class="form-control" required="true" name="nametp" placeholder="Type Name">
                          </div>
                          <div class="form-group">
                            <label for="urltp">URL</label>
                            <input type="text" class="form-control" required="true" name="urltp" placeholder="URL">
                          </div>
                          <input type="submit" class="btn btn-success" name="submittp" value="Add">&nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      

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
