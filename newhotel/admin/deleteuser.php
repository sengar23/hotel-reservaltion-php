<?php

// This is a sample code in case you wish to check the username from a mysqli db table
include('../db.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from user where user_id='$id'";
 mysqli_query( $sql);
}

?>