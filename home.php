
    <div class="main">
      <div class="container" style="width: 100%;">
        <!-- BEGIN SALE PRODUCT -->
        <div class="row margin-bottom-40">
            <div class="col-md-12 sale-product">
              <h2>Diskon</h2>
              <div class="owl-carousel owl-carousel5">
                <?php
                  $queryhits = mysqli_query($connect, "SELECT * FROM barang WHERE diskon = 1 ORDER BY id_barang DESC LIMIT 0, 10");
                  while ($datahits = mysqli_fetch_array($queryhits)) { ?>
                <div>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="img/produk/<?php echo $datahits['foto_barang']; ?>" class="img-responsive" alt="<?php echo $datahits['foto_barang']; ?>">
                      <div>
                        <a href="img/produk/<?php echo $datahits['foto_barang']; ?>" class="btn btn-default fancybox-button">Zoom</a>
                        <a href="#<?php echo $datahits['id_barang']; ?>product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                      </div>
                    </div>
                    <h3><a href="index.php?page=detail-diskon&id=<?php echo $datahits['id_barang']; ?>"><?php echo $datahits['nama_barang']; ?></a>&nbsp;<strike><?php echo "Rp ".number_format($datahits['harga'],0,".","."); ?></strike></h3>
                    <div class="pi-price"><?php echo "Rp ".number_format($datahits['harga_diskon'],0,".","."); ?></div>
                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                    <div class="sticker sticker-sale"></div>
                  </div>
                </div>
                  <?php  }
                  ?>
              </div>
          <!-- END SALE PRODUCT -->
          </div>
          <!-- BEGIN SALE PRODUCT -->
            <div class="col-md-12 sale-product">
              <h2>Produk Terbaru</h2>
              <div class="owl-carousel owl-carousel5">
                <?php
                  $queryhits = mysqli_query($connect, "SELECT * FROM barang ORDER BY id_barang DESC LIMIT 0, 10");
                  while ($datahits = mysqli_fetch_array($queryhits)) { ?>
                <div>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="img/produk/<?php echo $datahits['foto_barang']; ?>" class="img-responsive" alt="<?php echo $datahits['foto_barang']; ?>">
                      <div>
                        <a href="img/produk/<?php echo $datahits['foto_barang']; ?>" class="btn btn-default fancybox-button">Zoom</a>
                        <a href="#<?php echo $datahits['id_barang']; ?>product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                      </div>
                    </div>
                    <h3><a href="index.php?page=detail-new&id=<?php echo $datahits['id_barang']; ?>"><?php echo $datahits['nama_barang']; ?></a></h3>
                    <div class="pi-price"><?php echo "Rp ".number_format($datahits['harga'],0,".","."); ?></div>
                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                    <div class="sticker sticker-new"></div>
                  </div>
                </div>
                  <?php  }
                  ?>
              </div>
            </div>
          <!-- END SALE PRODUCT -->
        </div>
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
                        <div class="sticker sticker-new"></div>
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
                        <a href="index.php?page=detail-new&id=<?php echo $datapop['id_barang']; ?>" class="btn btn-default">More details</a>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <!-- END fast view of a product -->
      <?php }
    ?>
        <div class="container-fluid">
               <div class="row margin-bottom-40">
                  <div class="col-xs-12">
                    <center>
                    <nav>
                    <ul class="pagination pagination-lg">
                      <li><a href="index.php?page=katalog">Lihat Selengkapnya</a></li>
                    </ul>
                  </nav>
                  </center>
                </div>
             </div>
          </div>
      </div>
    </div>