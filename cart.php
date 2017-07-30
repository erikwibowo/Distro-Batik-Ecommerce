 
    <div class="main">
      <div class="container" style="width: 100%;">
      <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
     <center><h2>Keranjang Belanja anda</h2></center>
      <div class="row col-md-10 col-md-offset-1">
        <div class="box-body table-responsive">
              <table id="example2" class="table table-hover table-stripped table-responsive">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Foto produk</td>
                  <th>Nama produk</th>
                  <th>Ukuran</th>
                  <th>Jenis</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                </tr>
              </thead>
                <tbody>
                  <?php
                      $no = 1;
                      $total = 0;
                      if (!empty($_SESSION['shopping_cart'])) {
                        foreach ($_SESSION['shopping_cart'] as $keys => $values) { ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><a href="index.php?page=detail&id=<?php echo $values['id_barang']; ?>""><img src="img/produk/<?php echo $values['foto_barang']; ?>" alt="<?php echo $values['nama_barang']; ?>" width="37" height="34"></a></td>
                            <td><a href="index.php?page=detail&id=<?php echo $values['id_barang']; ?>"><?php echo $values['nama_barang']; ?></a></td>
                            <td><?php echo $values['ukuran_barang']; ?></td>
                            <td><?php echo $values['jenis_barang']; ?></td>
                            <td><?php echo $values['kategori_barang']; ?></td>
                            <td align="right"><?php echo "Rp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".number_format($values['harga_barang'],0,".","."); ?></td>
                            <td><a href="index.php?page=katalog&action=delete&id=<?php echo $values['id_barang'];?>" class="del-goods">&nbsp;</a></td>
                          </tr>
                          <!-- End cart item -->
                       <?php 
                        $id_transaksi ++;
                        $total = $total + $values['harga_barang'];
                        }
                      }
                    ?>
                    <tr>
                      <td colspan="6" align="right">Harga Total</td>
                      <td align="right"><?php echo "Rp &nbsp;&nbsp;&nbsp;".number_format($total,0,".","."); ?></td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->