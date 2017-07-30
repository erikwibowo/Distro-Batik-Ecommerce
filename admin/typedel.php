<?php

	include "../lib/config.php";

	$id = $_GET['id'];

	if (isset($id)) {
		$query = mysqli_query($connect, "DELETE FROM jenis where id_jenis = '$id'");

		if ($query) {
			header("location:categories.php");
		}
	}

	

?>