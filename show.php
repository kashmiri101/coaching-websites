
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php
include "connection.php";
session_start();
if (!isset($_SESSION['xyz'])) {
    header("location:login.php");
    die();
}

$sel="SELECT * FROM `form`";
$c=mysqli_query($check,$sel);
$d=mysqli_fetch_assoc($c);

?>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
      <th><a href="logout.php">LOGOUT</a></th>
    </tr>
  </thead>
  
  <?php
    while($d=mysqli_fetch_assoc($c)){
?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $d['id'] ?></th>
      <td><?php echo $d['email'] ?></td>
      <td><?php echo $d['username'] ?></td>
      <td><?php echo $d['password'] ?></td>
      <td><a href="update.php?id=<?php echo $d['id'] ?>">Update</a></td>
      <td><a href="delete.php?id=<?php echo $d['id'] ?>">Delete</a></td>
    </tr>

    <?php
    }
    ?>
    
</table>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>