<?php
$mysqli_hostname = "localhost";
$mysqli_user = "root";
$mysqli_password = "";
$mysqli_database = "shoopingcart";
$prefix = "";
$bd = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password) or die("Could not connect database");
mysqli_select_db($mysqli_database, $bd) or die("Could not select database");
?>