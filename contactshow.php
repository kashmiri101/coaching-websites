
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php

include "header1.php";
include "connection.php";
// session_start();
// if (!isset($_SESSION['xyz'])) {
//     header("location:login.php");
//     die();
// }

$sel="SELECT * FROM `contact_data`";
$c=mysqli_query($check,$sel);
$d=mysqli_fetch_assoc($c);

?>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">fname</th>
      <th scope="col">lname</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">department</th>
      <th scope="col">course</th>
      <th scope="col">message</th>
      <th scope="col">status</th>
      <th scope="col" colspan="2
      ">Actions</th>
      
    </tr>
  </thead>
  
  <?php
    while($d=mysqli_fetch_assoc($c)){
?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $d['id'] ?></th>
      <td><?php echo $d['fname'] ?></td>
      <td><?php echo $d['lname'] ?></td>
      <td><?php echo $d['email'] ?></td>
      <td><?php echo $d['phone'] ?></td>
      <td><?php echo $d['department'] ?></td>
      <td><?php echo $d['course'] ?></td>
      <td><?php echo $d['message'] ?></td>
      <td><?php echo $d['status' ] ?></td>
      <td><a href="contactupdate.php?id=<?php echo $d['id'] ?>">Update</a></td>
      <td><a href="contactdelete.php?id=<?php echo $d['id'] ?>">Delete</a></td>
    </tr>

    <?php
    }
    ?>
    
</table>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>