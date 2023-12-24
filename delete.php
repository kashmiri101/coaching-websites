<?php

include "connection.php";
$r= $_GET['id'];
$del="DELETE FROM `form` WHERE id='$r'";

mysqli_query($check,$del);

header("location:show.php");
die();
?>