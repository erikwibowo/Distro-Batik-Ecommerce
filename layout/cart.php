<!-- BEGIN CART -->
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="javascript:void(0);" class="top-cart-info-count"><?php echo count($_SESSION['shopping_cart']) ?> item(s)</a>
          </div>
          <i class="fa fa-shopping-cart"></i>
                        
          <div class="top-cart-content-wrapper">
            <div class="top-cart-content">
              <ul class="scroller" style="height: 200px;">
                <li>
                  <!-- Begin cart item -->
                  <table class="table table-responsive">
                      <?php
                      
                      if (!empty($_SESSION['shopping_cart'])) {
                        foreach ($_SESSION['shopping_cart'] as $keys => $values) { ?>
                    <tr>
                          <td><a href="index.php?page=detail&id=<?php echo $values['id_barang']; ?>""><img src="img/produk/<?php echo $values['foto_barang']; ?>" alt="Rolex Classic Watch" width="37" height="34"></a></td>
                          <td><a href="index.php?page=detail&id=<?php echo $values['id_barang']; ?>"><?php echo $values['nama_barang']; ?></a></td>
                          <td><?php echo "Rp ".number_format($values['harga_barang'],0,".","."); ?></td>
                          <td><a href="index.php?page=katalog&action=delete&id=<?php echo $values['id_barang'];?>" class="del-goods">&nbsp;</a></td>
                    </tr>
                          <!-- End cart item -->
                       <?php 
                        $total = $total + $values['harga_barang'];
                        } ?>
                    <tr>
                      <td colspan="2" align="right">Harga Total</td>
                      <td><?php echo "Rp ".number_format($total,0,".","."); ?></td>
                    </tr>
                    <?php  } else {
                      echo "<br><br><br><br><br><center><h4>Keranjang Belanja Kosong!</h4></center>";
                    }
                    ?>
                  </table>
                  
                </li>
              </ul>
              <div class="text-right">
                <a href="index.php?page=cart" class="btn btn-default">View Cart</a>
                <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
              </div>
            </div>
          </div>            
        </div>
        <!--END CART -->