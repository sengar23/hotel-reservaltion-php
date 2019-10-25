<?php
	include('connect.php');
	$address = $_POST['address'];
	mysqli_query("UPDATE about SET about='$address'");
	header("location: aboutus.php");
?>