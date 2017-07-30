 <div class="main">
      <div class="container" style="width: 100%;">
        <div class="col-md-12 col-sm-12 ">
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6">
                  <center><h1>Login untuk melanjutkan proses belanja</h1></center><br>
                    <div>
                      <?php
                        if ($_GET['user']== 'wrong') {
                          echo "<p class='alert alert-danger'>Email dan kata sandi tidak cocok!</p>";
                        }
                      ?>
                    </div>
                  <form class="form-horizontal form-without-legend" role="form" method="post" action="aksi_login.php">
                    <div class="form-group">
                      <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="email" class="form-control" name="email" required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="password" class="form-control" name="pass" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <input type="submit" class="btn btn-primary" name="login" value="Login">
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0">
                        <p>Belum punya akun? Daftar <a href="index.php?page=register">di sini.</a></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                        <hr>
                        <div class="login-socio">
                            <p class="text-muted">or login using:</p>
                            <ul class="social-icons">
                                <li><a href="javascript:;" data-original-title="facebook" class="facebook" title="facebook"></a></li>
                                <li><a href="javascript:;" data-original-title="Twitter" class="twitter" title="Twitter"></a></li>
                                <li><a href="javascript:;" data-original-title="Google Plus" class="googleplus" title="Google Plus"></a></li>
                                <li><a href="javascript:;" data-original-title="Linkedin" class="linkedin" title="LinkedIn"></a></li>
                            </ul>
                        </div>
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