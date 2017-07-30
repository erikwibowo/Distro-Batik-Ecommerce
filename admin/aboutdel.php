<?php

	include "../lib/config.php";

	$id = $_GET['id'];

	if (isset($id)) {
		$querydel = mysqli_query($connect, "SELECT * FROM about WHERE id_artikel = '$id'");
		$data = mysqli_fetch_array($querydel);
		unlink("../img/artikel/$data[foto_artikel]");
		$query = mysqli_query($connect, "DELETE FROM about where id_artikel = '$id'");

		if ($query) {
			header("location:about.php");
		}
	}

	

?>