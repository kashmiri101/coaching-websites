
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php

include "header1.php";
include "connection.php";




$sel="SELECT * FROM `cca`";
$c=mysqli_query($check,$sel);
$d=mysqli_fetch_assoc($c);

?>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">image</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">teacher name</th>
      <th scope="col">btn text</th>
      <th scope="col" colspan="2">Action</th>
      
    </tr>
  </thead>
  
  <?php
    while($d=mysqli_fetch_assoc($c)){
?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $d['id'] ?></th>
      <td><img src="<?php echo $d['image'] ?>" alt="" style="width:100px;height:100px;"></td>
      <td><?php echo $d['title'] ?></td>
      
      <td><?php echo $d['description'] ?></td>
      <td><?php echo $d['teacher name'] ?></td>
      <td><?php echo $d['button'] ?></td>
      <td><a href="coursedelete.php?id=<?php echo $d['id'] ?>">Delete</a></td>
      <td><a href="courseupdate.php?id=<?php echo $d['id'] ?>">Update</a></td>
    </tr>

    <?php
    }
    ?>
    
</table>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>