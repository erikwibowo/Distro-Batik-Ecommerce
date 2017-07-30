    <?php

      include 'add_to_cart.php';
    ?> 
    <div class="main">
      <div class="container" style="width: 100%;">
      <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
          <?php require 'layout/sidebar.php'; ?>
          <!-- BEGIN CONTENT -->
          <div class="col-md-10 col-sm-8">
            <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-20">
          
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->
            <h2>Katalog Batik Couple</h2>
            <?php 
              $perpage = 8;

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

              $querypro = mysqli_query($connect, "SELECT * FROM barang a, jenis b, kategori c where a.id_kategori = c.id_kategori and a.id_jenis = b.id_jenis and a.id_kategori = 3  ORDER BY id_barang DESC LIMIT $start, $perpage");
              while ($datapro = mysqli_fetch_array($querypro)) {
                if ($datapro['diskon'] == 1) { ?>
                  <form method="post" action="index.php?page=katalog&amp;id=<?php echo $datapro['id_barang']; ?>">
                  <div class="col-md-3 margin-bottom-20">
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="img/produk/<?php echo $datapro['foto_barang']; ?>" class="img-responsive" alt="<?php echo $datapro['nama_barang']; ?>">
                      <div>
                        <a href="img/produk/<?php echo $datapro['foto_barang']; ?>" class="btn btn-default fancybox-button">Zoom</a>
                        <a href="#<?php echo $datapro['id_barang']; ?>product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                      </div>
                    </div>
                    <div class="sticker sticker-sale"></div>
                    <h3><a href="index.php?page=detail-diskon&id=<?php echo $datapro['id_barang']; ?>"><?php echo $datapro['nama_barang']; ?></a>&nbsp;<strike><?php echo "Rp ".number_format($datapro['harga'],0,".","."); ?></strike></h3>
                    <div class="pi-price"><?php
                      if ($datapro['diskon'] == 0) {
                        echo "Rp ".number_format($datapro['harga'],0,".",".");
                      }else {
                        echo "Rp ".number_format($datapro['harga_diskon'],0,".",".");
                      }
                      ?>
                      
                        
                      </div>
                    <input type="hidden" name="id_barang" value="<?php echo $datapro['id_barang']; ?>">
                    <input type="hidden" name="nama_barang" value="<?php echo $datapro['nama_barang']; ?>">
                    <input type="hidden" name="foto_barang" value="<?php echo $datapro['foto_barang']; ?>">
                    <input type="hidden" name="harga_barang" value="<?php echo $datapro['harga']; ?>">
                    <input type="hidden" name="harga_diskon" value="<?php echo $datapro['harga_diskon']; ?>">
                    <input type="hidden" name="ukuran_barang" value="<?php echo $datapro['ukuran']; ?>">
                    <input type="hidden" name="kategori_barang" value="<?php echo $datapro['nama_kategori']; ?>">
                    <input type="hidden" name="jenis_barang" value="<?php echo $datapro['nama_jenis']; ?>">
                    <input type="submit" name="addtocart" class="btn btn-default add2cart" value="Add to cart">
                  </div>
                </div>
                </form>
               <?php }else { ?>
                <form method="post" action="index.php?page=katalog&amp;id=<?php echo $datapro['id_barang']; ?>">
                <div class="col-md-3 margin-bottom-20">
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="img/produk/<?php echo $datapro['foto_barang']; ?>" class="img-responsive" alt="<?php echo $datapro['nama_barang']; ?>">
                    <div>
                      <a href="img/produk/<?php echo $datapro['foto_barang']; ?>" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#<?php echo $datapro['id_barang']; ?>product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="index.php?page=detail&id=<?php echo $datapro['id_barang']; ?>"><?php echo $datapro['nama_barang']; ?></a></h3>
                  <div class="pi-price"><?php
                    if ($datapro['diskon'] == 0) {
                      echo "Rp ".number_format($datapro['harga'],0,".",".");
                    }else {
                      echo "Rp ".number_format($datapro['harga_diskon'],0,".",".");
                    }
                    ?>
                    
                      
                    </div>
                  <input type="hidden" name="id_barang" value="<?php echo $datapro['id_barang']; ?>">
                  <input type="hidden" name="nama_barang" value="<?php echo $datapro['nama_barang']; ?>">
                  <input type="hidden" name="foto_barang" value="<?php echo $datapro['foto_barang']; ?>">
                  <input type="hidden" name="harga_barang" value="<?php echo $datapro['harga']; ?>">
                  <input type="hidden" name="harga_diskon" value="<?php echo $datapro['harga_diskon']; ?>">
                  <input type="hidden" name="ukuran_barang" value="<?php echo $datapro['ukuran']; ?>">
                  <input type="hidden" name="kategori_barang" value="<?php echo $datapro['nama_kategori']; ?>">
                  <input type="hidden" name="jenis_barang" value="<?php echo $datapro['nama_jenis']; ?>">
                  <input type="submit" name="addtocart" class="btn btn-default add2cart" value="Add to cart">
                </div>
              </div>
              </form>
              <?php }
            } 
            ?>
          </div>
          <!-- END CONTENT -->
          <div class="container-fluid">
               <div class="row">
                  <div class="col-xs-12">
                    <nav>
                    <ul class="pagination pagination-lg">
                      <?php
                          $query = mysqli_query($connect, "SELECT * FROM barang");
                          $jmlbaris = mysqli_num_rows($query);
                          $halaman = ceil($jmlbaris/$perpage);
                          for($i = 1; $i <=$halaman; $i++){
                            if ($i > 1) {
                              echo "<li><a href='index.php?page=katalog&hal=$prev'> Prev </a></li>";
                              echo "<li class='pull-right'><a href='index.php?page=katalog&hal=$next'> Next </a></li>";
                            }
                            
                          }
                       ?>
                    </ul>
                  </nav>
                </div>
             </div>
          </div>
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
    <!-- BEGIN POPUP -->
    <?php
      $querypop = mysqli_query($connect, "SELECT * FROM barang, kategori, jenis WHERE barang.id_kategori = kategori.id_kategori and barang.id_jenis = jenis.id_jenis and diskon = 1");
      while ($datapop = mysqli_fetch_array($querypop)) { ?>
        <!-- BEGIN fast view of a product -->
        <div id="<?php echo $datapop['id_barang']; ?>product-pop-up" style="display: none; width: 700px;">
                <div class="product-page product-pop-up">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-3">
                      <div class="product-main-image">
                        <img src="img/produk/<?php echo $datapop['foto_barang']; ?>" alt="<?php echo $datapop['foto_barang']; ?>" class="img-responsive">
                        <div class="sticker sticker-sale"></div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-9">
                      <h2><?php echo $datapop['nama_barang']; ?></h2>
                      <div class="price-availability-block clearfix">
                        <div class="price">
                          <strong><?php echo "Rp ".number_format($datapop['harga'],0,".","."); ?></strong><strike><?php echo "Rp ".number_format($datapop['harga_diskon'],0,".","."); ?></strike>
                        </div>
                      </div>
                      <table>
                        <tr>
                          <td><h4>Ukuran</h4></td>
                          <td><h4>&nbsp;:&nbsp;</h4></td>
                          <td><h4> <?php echo $datapop['ukuran']; ?></h4></td>
                        </tr>
                        <tr>
                          <td><h4>Kategori</h4></td>
                          <td><h4>&nbsp;:&nbsp;</h4></td>
                          <td><h4> <?php echo $datapop['nama_kategori']; ?></h4></td>
                        </tr>
                        <tr>
                          <td><h4>Jenis Batik</h4></td>
                          <td><h4>&nbsp;:&nbsp;</h4></td>
                          <td><h4> <?php echo $datapop['nama_jenis']; ?></h4></td>
                        </tr>
                        </table>
                      <div class="product-page-cart">
                        <button class="btn btn-primary" type="submit">Add to cart</button>
                        <a href="index.php?page=detail-diskon&id=<?php echo $datapop['id_barang']; ?>" class="btn btn-default">More details</a>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <!-- END fast view of a product -->
      <?php }
    ?>
    <?php
      $querypop = mysqli_query($connect, "SELECT * FROM barang, kategori, jenis WHERE barang.id_kategori = kategori.id_kategori and barang.id_jenis = jenis.id_jenis and diskon = 0");
      while ($datapop = mysqli_fetch_array($querypop)) { ?>
        <!-- BEGIN fast view of a product -->
        <div id="<?php echo $datapop['id_barang']; ?>product-pop-up" style="display: none; width: 700px;">
                <div class="product-page product-pop-up">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-3">
                      <div class="product-main-image">
                        <img src="img/produk/<?php echo $datapop['foto_barang']; ?>" alt="<?php echo $datapop['foto_barang']; ?>" class="img-responsive">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-9">
                      <h2><?php echo $datapop['nama_barang']; ?></h2>
                      <div class="price-availability-block clearfix">
                        <div class="price">
                          <strong><?php echo "Rp ".number_format($datapop['harga'],0,".","."); ?></strong>
                        </div>
                      </div>
                      <table>
                        <tr>
                          <td><h4>Ukuran</h4></td>
                          <td><h4>&nbsp;:&nbsp;</h4></td>
                          <td><h4> <?php echo $datapop['ukuran']; ?></h4></td>
                        </tr>
                        <tr>
                          <td><h4>Kategori</h4></td>
                          <td><h4>&nbsp;:&nbsp;</h4></td>
                          <td><h4> <?php echo $datapop['nama_kategori']; ?></h4></td>
                        </tr>
                        <tr>
                          <td><h4>Jenis Batik</h4></td>
                          <td><h4>&nbsp;:&nbsp;</h4></td>
                          <td><h4> <?php echo $datapop['nama_jenis']; ?></h4></td>
                        </tr>
                        </table>
                      <div class="product-page-cart">
                        <button class="btn btn-primary" type="submit">Add to cart</button>
                        <a href="index.php?page=detail&id=<?php echo $datapop['id_barang']; ?>" class="btn btn-default">More details</a>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <!-- END fast view of a product -->
      <?php }
    ?>