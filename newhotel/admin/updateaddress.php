<?php
	include('connect.php');
	$address = $_POST['address'];
	mysqli_query("UPDATE address SET address='$address'");
	header("location: message.php");
?>