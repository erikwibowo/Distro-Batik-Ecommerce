<!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="index.php"><img src="assets/frontend/layout/img/logos/logo-shop-red.png" alt="Distro Batik Pekalongan"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <?php require 'layout/cart.php'; ?>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
			      <?php
              $page = @$_GET['page'];
              if (!isset($page)) { ?>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="index.php?page=katalog">Katalog</a></li>
                <li><a href="index.php?page=pemesanan">Pemesanan</a></li>
                <li><a href="index.php?page=blog">Blog</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                    <?php echo $akun; ?>
                  </a>
                    
                  <ul class="dropdown-menu">
                    <li><span class="fa fa-lock"></span><a href="<?php echo $url; ?>"><?php echo $login; ?></a></li>
                    <li><span class="fa fa-power-off"></span><a href="logout.php">Keluar</a></li>
                  </ul>
                </li>
              <?php }elseif ($page == 'katalog') { ?>
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="index.php?page=katalog">Katalog</a></li>
                <li><a href="index.php?page=pemesanan">Pemesanan</a></li>
                <li><a href="index.php?page=blog">Blog</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                    <?php echo $akun; ?>
                  </a>
                    
                  <ul class="dropdown-menu">
                    <li><span class="fa fa-lock"></span><a href="<?php echo $url; ?>"><?php echo $login; ?></a></li>
                    <li><span class="fa fa-power-off"></span><a href="logout.php">Keluar</a></li>
                  </ul>
                </li>
              <?php }elseif ($page == 'pemesanan') { ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=katalog">Katalog</a></li>
                <li class="active"><a href="index.php?page=pemesanan">Pemesanan</a></li>
                <li><a href="index.php?page=blog">Blog</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                    <?php echo $akun; ?>
                  </a>
                    
                  <ul class="dropdown-menu">
                    <li><span class="fa fa-lock"></span><a href="<?php echo $url; ?>"><?php echo $login; ?></a></li>
                    <li><span class="fa fa-power-off"></span><a href="logout.php">Keluar</a></li>
                  </ul>
                </li>
              <?php }elseif ($page == 'blog') { ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=katalog">Katalog</a></li>
                <li><a href="index.php?page=pemesanan">Pemesanan</a></li>
                <li class="active"><a href="index.php?page=blog">Blog</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                    <?php echo $akun; ?>
                  </a>
                    
                  <ul class="dropdown-menu">
                    <li><span class="fa fa-lock"></span><a href="<?php echo $url; ?>"><?php echo $login; ?></a></li>
                    <li><span class="fa fa-power-off"></span><a href="logout.php">Keluar</a></li>
                  </ul>
                </li>
              <?php }elseif ($page == 'read') { ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=katalog">Katalog</a></li>
                <li><a href="index.php?page=pemesanan">Pemesanan</a></li>
                <li class="active"><a href="index.php?page=blog">Blog</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                    <?php echo $akun; ?>
                  </a>
                    
                  <ul class="dropdown-menu">
                    <li><span class="fa fa-lock"></span><a href="<?php echo $url; ?>"><?php echo $login; ?></a></li>
                    <li><span class="fa fa-power-off"></span><a href="logout.php">Keluar</a></li>
                  </ul>
                </li>
              <?php }elseif ($page == 'login') { ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=katalog">Katalog</a></li>
                <li><a href="index.php?page=pemesanan">Pemesanan</a></li>
                <li><a href="index.php?page=blog">Blog</a></li>
                <li class="dropdown active">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                    <?php echo $akun; ?>
                  </a>
                    
                  <ul class="dropdown-menu">
                    <li><span class="fa fa-lock"></span><a href="<?php echo $url; ?>"><?php echo $login; ?></a></li>
                    <li><span class="fa fa-power-off"></span><a href="logout.php">Keluar</a></li>
                  </ul>
                </li>
              <?php }elseif ($page == 'member') { ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=katalog">Katalog</a></li>
                <li><a href="index.php?page=pemesanan">Pemesanan</a></li>
                <li><a href="index.php?page=blog">Blog</a></li>
                <li class="dropdown active">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                    <?php echo $akun; ?>
                  </a>
                    
                  <ul class="dropdown-menu">
                    <li><span class="fa fa-lock"></span><a href="<?php echo $url; ?>"><?php echo $login; ?></a></li>
                    <li><span class="fa fa-power-off"></span><a href="logout.php">Keluar</a></li>
                  </ul>
                </li>
              <?php }elseif ($page == 'register') { ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=katalog">Katalog</a></li>
                <li><a href="index.php?page=pemesanan">Pemesanan</a></li>
                <li><a href="index.php?page=blog">Blog</a></li>
                <li class="dropdown active">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                    <?php echo $akun; ?>
                  </a>
                    
                  <ul class="dropdown-menu">
                    <li><span class="fa fa-lock"></span><a href="<?php echo $url; ?>"><?php echo $login; ?></a></li>
                    <li><span class="fa fa-power-off"></span><a href="logout.php">Keluar</a></li>
                  </ul>
                </li>
              <?php }else { ?>
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="index.php?page=katalog">Katalog</a></li>
                <li><a href="index.php?page=pemesanan">Pemesanan</a></li>
                <li><a href="index.php?page=blog">Blog</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                    <?php echo $akun; ?>
                  </a>
                    
                  <ul class="dropdown-menu">
                    <li><span class="fa fa-lock"></span><a href="<?php echo $url; ?>"><?php echo $login; ?></a></li>
                    <li><span class="fa fa-power-off"></span><a href="logout.php">Keluar</a></li>
                  </ul>
                </li>
              <?php }
            ?>

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Cari</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->