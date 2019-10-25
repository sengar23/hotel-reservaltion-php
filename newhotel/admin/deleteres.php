<?php

// This is a sample code in case you wish to check the username from a mysqli db table
include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 mysqli_query("delete from reservation where confirmation='$id'");
 $sql = "delete from rooinventory where confirmation='$id'";
 mysqli_query( $sql);
}

?>