<?php

	include "../lib/config.php";

	if ($_SESSION['level'] == 'admin') {
    	header('location:account2.php');
  	}

	$id = $_GET['id'];

	if (isset($id)) {
		$query = mysqli_query($connect, "DELETE FROM admin where id_admin = '$id'");

		if ($query) {
			header("location:account.php");
		}
	}

	

?>