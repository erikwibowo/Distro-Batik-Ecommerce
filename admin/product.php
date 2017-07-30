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

  if (isset($_POST['submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $date = date("Y-m-d");
    $nama = $_POST['name'];
    $category = $_POST['category'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $disc = $_POST['disc'];
    $disc_p = $_POST['disc_p'];
    $img = $_FILES['img']['name'];
    $imgt = $_FILES['img']['type'];
    $imgs = $_FILES['img']['size'];
    $tmpimg = $_FILES['img']['tmp_name'];
    $path = "../img/produk/".$img;
    if ($imgs <= 1000000) {
      if ($imgt == 'image/jpeg' or $imgt == 'image/png') {
        $queryad = mysqli_query($connect, "INSERT INTO barang values ('','$category','$type','$nama','$size', '$img','$disc','$price','$disc_p','$date')");
        if ($queryad) {
          move_uploaded_file($tmpimg, $path);
        }else{
          $msg = "<p class='alert alert-danger'>Failed to add product!</p>";
        }
      }else {
          $msg = "<p class='alert alert-danger'>Jpg/Png Format!</p>";
        }
    }else {
      $msg = "<p class='alert alert-danger'>Maximum 1Mb!</p>";
    }
    header("location:product.php");
  }
  $id = @$_GET["id"];
  $query = mysqli_query($connect, "SELECT * FROM barang WHERE id_barang = '$id'");
  $dataw = mysqli_fetch_array($query);

  if (isset($_POST['update'])) {
    date_default_timezone_set('Asia/Jakarta');
    $date = date("Y-m-d");
    $nama = $_POST['name'];
    $category = $_POST['category'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $disc = $_POST['disc'];
    $disc_p = $_POST['disc_p'];
    $img = $_FILES['img']['name'];
    $imgt = $_FILES['img']['type'];
    $imgs = $_FILES['img']['size'];
    $tmpimg = $_FILES['img']['tmp_name'];
    $path = "../img/produk/".$img;
    $folder = "../img/produk/$dataw[foto_barang]";
    if (isset($_POST['img'])) {
      unlink($folder);
      if ($imgs <= 1000000) {
        if ($imgt == 'image/jpeg' or $imgt == 'image/png') {
          $queryupil = mysqli_query($connect, "UPDATE barang set id_kategori = '$category', id_jenis = '$type', nama_barang = '$nama', diskon = '$disc' , ukuran = '$size', foto_barang = '$img', harga = '$price', harga_diskon = '$disc_p' , tanggal = '$date' ");
          if ($queryupil) {
            move_uploaded_file($tmpimg, $path);
          }else{
            $msg = "<p class='alert alert-danger'>Failed to add product!</p>";
          }
        }else {
            $msg = "<p class='alert alert-danger'>Jpg/Png Format!</p>";
          }
      }else {
        $msg = "<p class='alert alert-danger'>Maximum 1Mb!</p>";
      }
    } else {
      if ($imgs <= 1000000) {
        if ($imgt == 'image/jpeg' or $imgt == 'image/png') {
          $queryupil = mysqli_query($connect, "UPDATE barang set id_kategori = '$category', id_jenis = '$type', nama_barang = '$nama', ukuran = '$size', foto_barang = '$img', harga = '$price', tanggal = '$date' ");
          if ($queryupil) {
            move_uploaded_file($tmpimg, $path);
          }else{
            $msg = "<p class='alert alert-danger'>Failed to add product!</p>";
          }
        }else {
            $msg = "<p class='alert alert-danger'>Jpg/Png Format!</p>";
          }
      }else {
        $msg = "<p class='alert alert-danger'>Maximum 1Mb!</p>";
      }
    }
    header("location:product.php");
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
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
        <li class="treeview active">
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
            <i class="glyphicon glyphicon-cog" aria-hidden="true"></i> <span>Settings</span>
          </a>
        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
       <?php echo $msg; ?>
          <div class="box box-success box-solid">
            <div class="box-header">
              <h3 class="box-title">Product List</h3><br>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Product</button>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table id="example2" class="table table-stripped table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Discount</th>
                    <th>Price</th>
                    <th>Discount Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no = 1;
                  $queryshow = mysqli_query ($connect, "SELECT * from barang, kategori, jenis WHERE barang.id_kategori = kategori.id_kategori and barang.id_jenis = jenis.id_jenis and diskon = 1 ORDER BY id_barang DESC");
                  while ($datashow = mysqli_fetch_array($queryshow)) {
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><img src="../img/produk/<?php echo $datashow['foto_barang']; ?>" alt="<?php echo $datashow['foto_barang']; ?>" width="40" height="40"></td>
                    <td><?php echo $datashow['nama_barang']; ?></td>
                    <td><?php echo $datashow['ukuran']; ?></td>
                    <td><?php echo $datashow['nama_kategori']; ?></td>
                    <td><?php echo $datashow['nama_jenis']; ?></td>
                    <td><?php echo $datashow['diskon']; ?></td>
                    <td><?php echo "Rp ".number_format($datashow['harga'],0,".","."); ?></td>
                    <td><?php echo "Rp ".number_format($datashow['harga_diskon'],0,".","."); ?></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $datashow['id_barang']; ?>up"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>&nbsp;<a onclick="return confirm('Are you sure?')" class="btn btn-danger" role="button" href="productdel.php?id=<?php echo $datashow['id_barang']; ?>" data-toggle='tooltip' title='Delete'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
                <?php $no++;  } ?>
                </tbody>
              </table>
            </div>
          </div>
      <div id="add" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Product</h4><br>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="id">Image</label>
                            <input type="file" class="form-control" required="true" name="img">
                          </div>
                          <div class="form-group">
                            <label for="nama">Product Name</label>
                            <input type="text" class="form-control" required="true" name="name" placeholder="Product Name">
                          </div>
                          <div class="form-group">
                            <label for="nama">Size</label>
                            <select class="form-control" name="size">
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXl">XXL</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nama">Category</label>
                            <select class="form-control" name="category">
                              <?php
                                $querycat = mysqli_query($connect, "SELECT * FROM kategori");
                                while ($datacat = mysqli_fetch_array($querycat)) {
                                  ?>
                                <option value="<?php echo $datacat['id_kategori']; ?>"><?php echo $datacat['nama_kategori']; ?></option>
                               <?php }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nama">Type</label>
                            <select class="form-control" name="type">
                              <?php
                                $querycat = mysqli_query($connect, "SELECT * FROM jenis");
                                while ($datacat = mysqli_fetch_array($querycat)) {
                                  ?>
                                <option value="<?php echo $datacat['id_jenis']; ?>"><?php echo $datacat['nama_jenis']; ?></option>
                               <?php }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nama">Price</label>
                            <input type="number" class="form-control" required="true" name="price" placeholder="Price">
                          </div>
                          <div class="form-group">
                            <label for="disc">Discount?</label>
                            <select class="form-control" name="disc">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nama">Discount Price</label>
                            <input type="number" class="form-control" name="disc_p" placeholder=" Discount Price">
                          </div>
                          <input type="submit" class="btn btn-success" name="submit" value="Add">&nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php

          $queryup = mysqli_query ($connect, "SELECT barang.id_barang, barang.foto_barang, barang.nama_barang ,barang.ukuran,kategori.nama_kategori, jenis.nama_jenis, barang.harga from barang, kategori, jenis WHERE barang.id_kategori = kategori.id_kategori and barang.id_jenis = jenis.id_jenis");
          while ($dataup = mysqli_fetch_array($queryup)) { ?>
            <div id="<?php echo $dataup['id_barang']; ?>up" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- konten modal-->
                  <div class="modal-content">
                      <!-- heading modal -->
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Update Product</h4><br>
                      </div>
                      <!-- body modal -->
                      <div class="modal-body">
                          <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="id">Image</label>
                              <input type="file" class="form-control" name="img">
                            </div>
                            <div class="form-group">
                              <label for="nama">Product Name</label>
                              <input type="text" class="form-control" required="true" value="<?php echo $dataup['nama_barang']; ?>" name="name" placeholder="Product Name">
                            </div>
                            <div class="form-group" >
                              <label for="nama">Size</label>
                              <select class="form-control" name="size">
                                  <option value="<?php echo $dataup['ukuran']; ?>"><?php echo $dataup['ukuran']; ?></option>
                                  <option value="S">S</option>
                                  <option value="M">M</option>
                                  <option value="L">L</option>
                                  <option value="XL">XL</option>
                                  <option value="XXl">XXL</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="nama">Category</label>
                              <select class="form-control" name="category" >
                                <option value="<?php echo $dataup['nama_kategori']; ?>"><?php echo $dataup['nama_kategori']; ?></option>
                                <?php
                                  $querycat = mysqli_query($connect, "SELECT * FROM kategori");
                                  while ($datacat = mysqli_fetch_array($querycat)) {
                                    ?>
                                  <option value="<?php echo $datacat['id_kategori']; ?>"><?php echo $datacat['nama_kategori']; ?></option>
                                 <?php }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="nama">Type</label>
                              <select class="form-control" name="type">
                                <option value="<?php echo $dataup['nama_jenisma']; ?>"><?php echo $dataup['nama_jenis']; ?></option>
                                <?php
                                  $querycat = mysqli_query($connect, "SELECT * FROM jenis");
                                  while ($datacat = mysqli_fetch_array($querycat)) {
                                    ?>
                                  <option value="<?php echo $datacat['id_jenis']; ?>"><?php echo $datacat['nama_jenis']; ?></option>
                                 <?php }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="nama">Price</label>
                              <input type="text" class="form-control" required="true" name="price" placeholder="Price" value="<?php echo $dataup['harga']; ?>">
                            </div>
                            <div class="form-group">
                            <label for="disc">Discount?</label>
                            <select class="form-control">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nama">Discount Price</label>
                            <input type="number" class="form-control" name="disc_p" placeholder=" Discount Price" value="<?php echo $dataup['harga_diskon']; ?>">
                          </div>
                            <input type="submit" class="btn btn-success" name="update" value="Update">&nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <?php }

        ?>
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
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example2").DataTable();
  });
</script>
</body>
</html>
