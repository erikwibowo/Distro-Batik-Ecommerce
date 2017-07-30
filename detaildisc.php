<?php
  $id = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM barang a, kategori b, jenis c WHERE a.id_jenis = c.id_jenis and a.id_kategori = b.id_kategori and id_barang = '$id' ");
  $data = mysqli_fetch_array($query);
?>
    <div class="main">
      <div class="container" style="width: 100%;">
      <!-- BEGIN CONTENT -->
          <div class="col-md-10 col-md-offset-1 col-sm-7">
            <div class="product-page">
              <div class="row margin-bootom-40">
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image">
                    <img src="img/produk/<?php echo $data['foto_barang']; ?>" alt="<?php echo $data['nama_barang']; ?>" class="img-responsive" data-BigImgsrc="img/produk/<?php echo $data['foto_barang']; ?>">
                    <div class="sticker sticker-sale"></div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <h1><?php echo $data['nama_barang']; ?></h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><?php echo "Rp ".number_format($data['harga'],0,".","."); ?></strong>&nbsp;<strike><em><?php echo "Rp ".number_format($data['harga_diskon'],0,".","."); ?></em></strike>
                    </div>
                  </div>
                  <div class="description">
                    <p>Ukuran</p>
                    <h3><?php echo $data['ukuran']; ?></h3>
                  </div>
                  <div class="description">
                    <p>Jenis Batik</p>
                    <h3><?php echo $data['nama_jenis']; ?></h3>
                  </div>
                  <div class="description">
                    <p>Kategori Batik</p>
                    <h3><?php echo $data['nama_kategori']; ?></h3>
                  </div>
                  <div class="description">
                    <h4>Deskripsi Barang</h4>
                    <p><?php echo $data['deskripsi']; ?></p>
                  </div>
                  <div class="product-page-options">
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <a href="index.php?page=katalog" class="btn btn-warning">Pilih Produk yang lain</a>
                  </div>
              </div>
            </div>
              <div class="row">
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
                      <h3><a href="index.php?page=detail&id=<?php echo $datahits['id_barang']; ?>"><?php echo $datahits['nama_barang']; ?></a>&nbsp;<strike><?php echo "Rp ".number_format($datahits['harga'],0,".","."); ?></strike></h3>
                      <div class="pi-price"><?php echo "Rp ".number_format($datahits['harga_diskon'],0,".","."); ?></div>
                      <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                      <div class="sticker sticker-sale"></div>
                    </div>
                  </div>
                    <?php  }
                    ?>
                </div>
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
                        <a href="shop-item.html" class="btn btn-default">More details</a>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <!-- END fast view of a product -->
      <?php }
    ?>
          </div>
          <!-- END CONTENT -->
      </div>
    </div>
    