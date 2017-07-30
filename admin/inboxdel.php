<?php

	include "../lib/config.php";

	$id = $_GET['id'];

	if (isset($id)) {
		$query = mysqli_query($connect, "DELETE FROM inbox where id_inbox = '$id'");

		if ($query) {
			header("location:inbox.php");
		}
	}

	

?>