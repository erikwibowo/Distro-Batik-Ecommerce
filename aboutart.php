
     <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-8 col-md-offset-2 col-sm-12">
            <h1>About Batik</h1>
            <div class="content-page">
              <?php
                $id = $_GET['id'];
                $query = mysqli_query ($connect, "SELECT * FROM about where id_artikel = '$id'");
                    
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class=" blog-posts">
                  <div class="col-md-12">
                      <h2><?php echo $data['judul']; ?></h2>
                      <ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> <?php echo $data['tanggal']; ?></li>
                        <li><i class="fa fa-comments"></i> 17</li>
                        <li><i class="fa fa-tags"></i> Oleh <?php echo $data['oleh']; ?></li>
                      </ul>
                      <div class="item">
                        <center><img src="img/artikel/<?php echo $data['foto_artikel']; ?>" width=400 alt=""></center>
                      </div>
                      <p><?php echo $data['artikel']; ?></p>
                    </div>      
                </div>
                <!-- END LEFT SIDEBAR -->
                <?php } ?>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>