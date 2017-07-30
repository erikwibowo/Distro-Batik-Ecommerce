
      	<?php
      		include 'header.php';
      		$page = @$_GET['page'];
      		$id = @$_GET['id'];
      		error_reporting(0);
      		if (!isset($page)) {
      			include 'slider.php';
      			include 'home.php';
      		}
      		elseif ($page == 'katalog') {
      			include 'katalog.php';
      		}
      		elseif ($page == 'pemesanan') {
      			include 'pemesanan.php';
      		}
      		elseif ($page == 'blog') {
      			include 'blog.php';
      		}
      		elseif ($page == 'read') {
      			include 'aboutart.php';
      		}
      		elseif ($page == 'member') {
      			include 'member.php';
      		}
                  elseif ($page == 'login') {
                        include 'login.php';
                  }
                  elseif ($page == 'register') {
                        include 'register.php';
                  }
                  elseif ($page == 'pria') {
                        include 'layout/kategori/pria.php';
                  }
                  elseif ($page == 'wanita') {
                        include 'layout/kategori/wanita.php';
                  }
                  elseif ($page == 'couple') {
                        include 'layout/kategori/couple.php';
                  }
                  elseif ($page == 'tulis') {
                        include 'layout/jenis/tulis.php';
                  }
                  elseif ($page == 'cap') {
                        include 'layout/jenis/cap.php';
                  }
                  elseif ($page == 'sablon') {
                        include 'layout/jenis/sablon.php';
                  }
                  elseif ($page == 'detail') {
                        include 'detail.php';
                  }
                  elseif ($page == 'detail-diskon') {
                        include 'detaildisc.php';
                  }
                  elseif ($page == 'detail-new') {
                        include 'detailnew.php';
                  }
                  elseif ($page == 'cart') {
                        include 'cart.php';
                  }
      	?>