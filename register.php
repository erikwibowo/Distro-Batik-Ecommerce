<?php
  session_start();
  include 'lib/config.php';
  if (empty($msg)) {
    $msg = "";
  }
  $web = mysqli_query($connect, "SELECT * FROM website");
  $dweb = mysqli_fetch_array($web);
  $idm = $_SESSION['id_member'];

  if (isset($_POST['submit'])) {
    $no_id = $_POST['id'];
    $nama = $_POST["nama"];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $date = date('Y-m-d');
    $queryup = mysqli_query($connect, "INSERT INTO member VALUES ('','$no_id','$nama','$alamat','$hp','$email','$pass','$date')");
    if ($queryup) {
      $msg = "<p class='alert alert-success'>Pendaftaran Berhasil!</p>";
      ?>
        <script type="text/javascript">
          setTimeout("location.href='index.php?page=login'", 3000);
        </script>
      <?php
      }else {
      $msg = "<p class='alert alert-danger'>Pendaftaran gagal!</p>";
      }
    }
?>
    <div class="main">
      <div class="container" style="width: 100%;">
        <!-- BEGIN CONTENT -->
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <div class="content-form-page">
              <div class="row">
                <center><h1>Create an account</h1></center>
                <div class="col-md-8 col-md-offset-2 col-sm-6">
                <?php echo $msg; ?>
                  <form class="form-horizontal" role="form" method="post">
                    <fieldset>
                      <legend>Your personal details</legend>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">Nomor Identitas (KTP) <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="id" placeholder="Nomor Identitas (KTP)" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">Nama Lengkap <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">No. HP <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="hp" placeholder="No. HP">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Alamat <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <textarea class="form-control" rows="4" name="alamat" placeholder="Alamat Lengkap"></textarea>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Your password</legend>
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
                        <input type="submit" name="submit" class="btn btn-primary" value="Register">
                        <a href="index.php" role="button" class="btn btn-default">Cancel</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
      </div>
    </div>