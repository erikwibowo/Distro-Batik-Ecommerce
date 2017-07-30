<!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-2 col-sm-4">
            <ul class="list-group margin-bottom-25 sidebar-menu">
            	<li class="list-group-item clearfix"><a href="index.php?page=katalog"><h4><i class="fa fa-angle-right"></i> Semua</h4></a></li>
            	<li class="list-group-item dropdown clearfix">
                    <a href="shop-product-list.html"><h4><i class="fa fa-angle-right"></i> Kategori  </h4></a>
                    <ul class="dropdown-menu">
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM kategori");
                    while ($data = mysqli_fetch_array($query)) { ?>
                        <li><a href="<?php echo $data['alamat']; ?>"><i class="fa fa-angle-right"></i> <?php echo $data['nama_kategori']; ?></a></li>
                    <?php	}
            				?>
                    </ul>
                </li>
            	<li class="list-group-item dropdown clearfix">
                    <a href="shop-product-list.html"><h4><i class="fa fa-angle-right"></i> Jenis  </h4></a>
                    <ul class="dropdown-menu">
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM jenis");
                    while ($data = mysqli_fetch_array($query)) { ?>
                        <li><a href="<?php echo $data['alamat']; ?>"><i class="fa fa-angle-right"></i> <?php echo $data['nama_jenis']; ?></a></li>
                    <?php	}
            				?>
                    </ul>
                </li>
            </ul>
          </div>
          <!-- END SIDEBAR -->