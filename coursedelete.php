<?php

include "connection.php";
$r= $_GET['id'];
$del="DELETE FROM `cca` WHERE id='$r'";

mysqli_query($check,$del);

header("location:courseshow.php");
die();
?>