<?php
include "connect.php";


$id=$_GET['id'];

$query="DELETE FROM `user` WHERE id='$id'";
mysqli_query($con,$query);

header("location:userlist.php");
die();



?>