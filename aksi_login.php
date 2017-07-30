<?php
  session_start();
  include 'lib/config.php';
  if (empty($msg)) {
        $msg = "";
    }

    if (isset($_POST['login'])) {
          $name = $_POST["email"];
          $pass = $_POST["pass"];
          $query = mysqli_query($connect, "SELECT * FROM member WHERE email='$name' AND password='$pass'");
          $count = mysqli_num_rows($query);
          if ($count == 1) {
            $data = mysqli_fetch_array($query);
            $_SESSION['member'] = $data['nama_member'];
            $_SESSION['id_member']= $data['id_member'];
            header('location:index.php');
            }else {
                    header('location:index.php?page=login&user=wrong');
            }
        }
?>