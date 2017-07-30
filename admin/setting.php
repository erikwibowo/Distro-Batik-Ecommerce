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

  $query = mysqli_query($connect, "SELECT * FROM website WHERE id_website = 5");
  $data = mysqli_fetch_array($query);
   if (isset($_POST['save'])) {
    $nama = $_POST['name'];
    $namafoto = $_FILES['img']['name'];
    $ukuranfoto = $_FILES['img']['size'];
    $tipefoto = $_FILES['img']['type'];
    $tmpfoto = $_FILES['img']['tmp_name'];
    $path = "../img/".$namafoto;
    $folder = "../img/$data[logo]";
    if (isset($_POST['img'])) {
        unlink($folder);
        if ($tipefoto == "image/jpeg" or $tipefoto == "image/png") {
          if ($ukuranfoto <= 1000000) {
            if (move_uploaded_file($tmpfoto, $path)) {
              $query = mysqli_query ($connect, "UPDATE website SET nama = '$nama', logo = '$namafoto' WHERE id_website = 5");
              if ($query) {
                $msg = "<p class='alert alert-success'>Settings saved!</p>";
              }else {
                $msg = "<p class='alert alert-danger'>Settings failled!</p>";
              }
            }
          }else {
          $msg = "<p class='alert alert-danger'>Maximum file 1MB!</p>";
        }
        }else {
          $msg = "<p class='alert alert-danger'>JPG or PNG only!</p>";
        }
         ?>
            <script type="text/javascript">
              setTimeout("location.href='setting.php'", 3000);
            </script>
         <?php             
      }else {
        $query = mysqli_query ($connect, "UPDATE website SET nama = '$nama' WHERE id_website = 5");
        $msg = "<p class='alert alert-success'>Settings saved!</p>";
        ?>
            <script type="text/javascript">
              setTimeout("location.href='setting.php'", 3000);
            </script>
         <?php    
      }
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
        <li class="treeview active">
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
    <h2>Websites Settings</h2>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="col-md-8">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="inputname" class="col-sm-2  control-label">Company name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" placeholder="Company  name" value="<?php echo $data['nama']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="logo" class="col-sm-2 control-label">Company logo<small> (max. 1MB jpg/png)</small></label>
                      <div class="col-sm-8">
                        <input type="file" name="img" class="form-control" name="logo"><br>
                        <?php echo $msg; ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-4">
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                        <a href="dashboard.php" class="btn btn-danger">Cancel</a>
                      </div>
                    </div>
                  </form>
      </div>
      <div class="col-md-4">
        <h2>Preview</h2>
        <?php
          $query = mysqli_query($connect, "SELECT * FROM website");
          while ($data = mysqli_fetch_array($query))
            { ?>
            <tr>
              <td><img src='../img/<?php echo $data['logo']; ?>'</td>
              <td><h4><?php echo $data['nama']; ?></h4></td>
            </tr>
        <?php  };
        ?>
      </div>
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
