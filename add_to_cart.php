<?php
if (isset($_POST['addtocart'])) {
        if (isset($_SESSION['shopping_cart'])) {
          $item_array_id = array_column($_SESSION['shopping_cart'], '$_GET["id"]');
          if (!in_array($_GET['id'], $item_array_id)) {
            $count = count($_SESSION['shopping_cart']);
            $item_array = array(
              'id_barang'       => $_GET['id'],
              'foto_barang'     => $_POST['foto_barang'],
              'nama_barang'     => $_POST['nama_barang'],
              'ukuran_barang'   => $_POST['ukuran_barang'],
              'jenis_barang'    => $_POST['jenis_barang'],
              'kategori_barang' => $_POST['kategori_barang'],
              'harga_diskon'    => $_POST['harga_diskon'],
              'harga_barang'    => $_POST['harga_barang']
              );
              $_SESSION['shopping_cart'][$count] = $item_array;
              header("location:index.php");
          }
          else {
            echo '<script>alert("Produk sudah dimasukkan ke keranjang belanja, silahkan cek keranjang belanja anda!")</script>';
          }
        }
        else {
          $item_array = array(
            'id_barang'       => $_GET['id'],
            'foto_barang'     => $_POST['foto_barang'],
            'nama_barang'     => $_POST['nama_barang'],
            'ukuran_barang'   => $_POST['ukuran_barang'],
            'jenis_barang'    => $_POST['jenis_barang'],
            'kategori_barang' => $_POST['kategori_barang'],
            'harga_diskon'    => $_POST['harga_diskon'],
            'harga_barang'     => $_POST['harga_barang']
            );
          $_SESSION['shopping_cart'][0] = $item_array;
        }
        echo '<script>window.location:index.php?page=katalog</script>';
      }

      if (isset($_GET['action'])) {
        if ($_GET['action'] == 'delete') {
          foreach ($_SESSION['shopping_cart'] as $keys => $values) {
            if ($values['id_barang'] == $_GET['id']) {
              unset($_SESSION['shopping_cart'][$keys]);
            }
          }
        }
        echo '<script>window.location:index.php?page=katalog</script>';
      }

      ?>