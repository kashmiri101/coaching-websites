<?php
 include "header1.php";
  include "connection.php";
  $e= $_GET['id'];
  $f="SELECT * FROM `contact_data` WHERE id='$e'";
  $g=mysqli_query($check,$f);
  $h=mysqli_fetch_assoc($g);

?>
<form method="POST">
     <select name="update">
       <option value="pending">Pending</option>
       <option value="Contacted">Contacted</option>
    </select>
    <input type="submit" name="button" value="status update">
</form>



<?php
if (isset($_POST['button'])) {
    $status=$_POST['update'];
    $upd="UPDATE `contact_data` SET `status` = '$status' WHERE  id= '$e'";
    mysqli_query($check,$upd);

    header("location:contactshow.php");
    die();


}



?>