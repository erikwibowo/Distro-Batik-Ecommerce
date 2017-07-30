<?php

	include "../lib/config.php";

	$id = $_GET['id'];

	if (isset($id)) {
		$querydel = mysqli_query($connect, "SELECT * FROM barang WHERE id_barang = '$id'");
		$data = mysqli_fetch_array($querydel);
		unlink("../img/produk/$data[foto_barang]");
		$query = mysqli_query($connect, "DELETE FROM barang where id_barang = '$id'");

		if ($query) {
			header("location:product.php");
		}
	}
	
?>