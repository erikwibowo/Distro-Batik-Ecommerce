<?php
  session_start();
  include 'lib/config.php';

  $total = 0;

  if (empty($_SESSION['member'])) {
    $akun = "AKUN";
    $url = "index.php?page=login";
    $login = "Login";
  } else {
    $akun = $_SESSION['member'];
    $url = "index.php?page=member";
    $login = "Profil";
  }

  if (empty($msg)) {
    $msg = "";
  }

  if (isset($_POST['kirim'])) {
  $msgi = $_POST["msg"];
  $email = $_POST["email"];
  date_default_timezone_set('Asia/Jakarta');
  $date = date("Y-m-d");
  $time = date("H:i:s");
      $querymsg = mysqli_query($connect, "INSERT INTO inbox values ('','$email','$date','$time','$msgi')");

      if ($querymsg) {
        $msg = "<p class='alert alert-success'>Pesan/masukan anda telah dikirim</p>";
        header("location:index.php#subfoot")
      ?>
      <script type="text/javascript">
        setTimeout("location.href='index.php#subfoot'", 3000);
      </script>
      <?php
      }else {
        $msg = "<p class='alert alert-danger'>Pesan/masukan gagal dikirim!</p>";
        header("location=index.php#subfoot");
      }
    }
  $web = mysqli_query($connect, "SELECT * FROM website");
  $dweb = mysqli_fetch_array($web);
?>

    <?php require 'layout/head.php'; ?>
    <?php include 'content.php'; ?>
    <?php include 'layout/prefooter.php'; ?>
    <?php require 'layout/footer.php'; ?>
