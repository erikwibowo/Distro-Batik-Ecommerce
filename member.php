<?php
  session_start();
  
  include 'lib/config.php';

if (empty($msg)) {
    $msg = "";
  }
  $idm = $_SESSION['id_member'];

  if (isset($_POST['update'])) {
    $no_id = $_POST['nomor_id'];
    $nama = $_POST["nama_member"];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $queryup = mysqli_query($connect, "UPDATE member set nomor_id= '$no_id', nama_member = '$nama', alamat = '$alamat' , no_hp = '$hp', email = '$email', password = '$pass' where id_member = '$idm' ");
    if ($queryup) {
      $msg = "<p class='alert alert-success'>Update success!</p>";
      ?>
        <script type="text/javascript">
          setTimeout("location.href='index.php?page=member'", 3000);
        </script>
      <?php
      }else {
      $msg = "<p class='alert alert-danger'>Update Failled!</p>";
      }
    }
?>
    <div class="container-fluid">
      <?php
        $query = mysqli_query($connect, "SELECT * FROM member where id_member = '$idm'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="col-md-4 col-md-offset-4">
          <center><h2>Data Member</h2></center>
            <?php echo $msg; ?>
          <div class="box box-warning box-solid">
            <div class="box-header">
              <h3 class="box-title"><?php echo $data['nama_member']; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-responsive">
                <tr>
                  <td>No. ID</td>
                  <td><?php echo $data['nomor_id']; ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><?php echo $data['alamat']; ?></td>
                </tr>
                <tr>
                  <td>No. Telp</td>
                  <td><?php echo $data['no_hp']; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><?php echo $data['email']; ?></td>
                </tr>
              </table><br><br>
              <div class="pull-right">
                <a href="#sunting" class="btn btn-primary fancybox-fast-view">Sunting</a>&nbsp;
                <a href="logout.php" class="btn btn-box-tool btn-danger">Keluar</a>&nbsp;&nbsp;&nbsp;<br><br>
              </div>
            </div>
          </div>
        </div>
        <?php }
      ?>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <div id="sunting" style="display: none; width: 700px;">
  <?php
    $query = mysqli_query($connect, "SELECT * FROM member where id_member = '$idm'");
        while ($data = mysqli_fetch_array($query)) {
  ?>
                <div class="product-page product-pop-up">
                  <div class="row">
                    <center><h1>Edit account</h1></center>
                <div class="col-md-8 col-md-offset-2">
                <?php echo $msg; ?>
                  <form class="form-horizontal" role="form" method="post">
                    <fieldset>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">Nomor Identitas (KTP) <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="nomor_id" placeholder="Nomor Identitas (KTP)" required value="<?php echo $data['nomor_id']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">Nama Lengkap <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="nama_member" placeholder="Nama Lengkap" required value="<?php echo $data['nama_member']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="email" placeholder="Email" required value="<?php echo $data['email']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">No. HP <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="hp" placeholder="No. HP" value="<?php echo $data['no_hp']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Alamat <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <textarea class="form-control" rows="4" name="alamat" placeholder="Alamat Lengkap"><?php echo $data['alamat']; ?></textarea>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="password" name="pass" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm-password" class="col-lg-4 control-label">Confirm password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password">
                        </div>
                      </div>
                    </fieldset>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <input type="submit" name="update" class="btn btn-primary" value="Update">
                      </div>
                    </div>
                  </form>
                </div>
                  </div>
                </div>
        </div>
        <?php } ?>sss