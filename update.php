<?php
  include "connection.php";
  $e= $_GET["id"];
  $f="SELECT * FROM `form` WHERE id='$e'";
  $g=mysqli_query($check,$f);
  $h=mysqli_fetch_assoc($g);

?>
<form method="POST">
  <input type="email" name="email" value=<?php echo $h['email']?>> <br>
  <input type="text" name="username" value=<?php echo $h['username']?>> <br>
  <input type="text" name="password" value=<?php echo $h['password']?>> <br>
</form>



<?php
if (isset($_POST['button'])) {
    $ema=$_POST['email'];
    $use=$_POST['username'];
    $pas=$_POST['password'];

    $upd="UPDATE `form` SET `email` = '$ema', `username` = '$use', `password` = '$pas' WHERE `form`.`id` = '$e'";
    mysqli_query($check,$upd);

    header("location:show.php");
    die();


}



?>