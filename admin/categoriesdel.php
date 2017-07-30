<?php

	include "../lib/config.php";

	$id = $_GET['id'];

	if (isset($id)) {
		$query = mysqli_query($connect, "DELETE FROM kategori where id_kategori = '$id'");

		if ($query) {
			header("location:categories.php");
		}
	}

	

?>