
     <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <h1>About Batik</h1>
            <div class="content-page">
              <?php
                $perpage = 3;

                if (isset($_GET['hal'])) {
                  $page = $_GET['hal'];
                }else {
                  $page = 1;
                }

                if ($page > 1) {
                  $start = ($page * $perpage) - $perpage;
                }else {
                  $start = 0;
                }

                $query = mysqli_query ($connect, "SELECT * FROM about ORDER BY id_artikel DESC LIMIT $start, $perpage");
                    
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-12 blog-posts">
                  <div class="col-md-4 col-sm-4">
                      <img class="img-responsive" alt="<?php echo $data['foto_artikel']; ?>" src="img/artikel/<?php echo $data['foto_artikel']; ?>">
                    </div>
                    <div class="col-md-8 col-sm-8">
                      <h2><a href="index.php?page=read&id=<?php echo $data['id_artikel']; ?>"><?php echo $data['judul']; ?></a></h2>
                      <ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> <?php echo $data['tanggal']; ?></li>
                        <li><i class="fa fa-comments"></i> 17</li>
                        <li><i class="fa fa-tags"></i> Oleh <?php echo $data['oleh']; ?></li>
                      </ul>
                      <p><?php echo substr($data['artikel'],0,400),'...'; ?></p>
                      <a href="index.php?page=read&id=<?php echo $data['id_artikel']; ?>" class="more">Read more <i class="icon-angle-right"></i></a>
                    </div>    
                </div>
                <!-- END LEFT SIDEBAR -->
              </div>
              <hr>
              <?php } ?>
              <div class="container-fluid">
               <div class="row">
                  <center>
                  <nav>
                  <ul class="pagination pagination-lg">
                  <?php

                    $query = mysqli_query($connect, "SELECT * FROM about");
                    $jmlbaris = mysqli_num_rows($query);
                    $halaman = ceil($jmlbaris/$perpage);
                    for($i = 1; $i <=$halaman; $i++){
                      echo "<li><a href='index.php?page=blog&hal=$i'>$i </a></li>";
                    }
                   ?>
                  </ul>
                </nav>
                </center>
               </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>