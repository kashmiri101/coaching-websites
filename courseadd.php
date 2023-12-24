

    

<?php

include "header1.php";
include('connection.php');





if(isset($_POST['submit'])){
	 $tmpdata=$_FILES['image']['tmp_name'];
     $data=$_FILES['image']['name'];
	 $folder=move_uploaded_file($tmpdata,$data);
	$title=$_POST['title'];
    $descriptions=$_POST['description'];
    $teacher=$_POST['teacher'];
    $btntext=$_POST['btntext'];
    $query="INSERT INTO `cca`(`image`, `title`, `description`, `teacher name`, `button`) VALUES ('$data','$title',' $descriptions',' $teacher','$btntext')";
    mysqli_query($check,$query);
    

}           
	

?>



    <div class="main">

    <div class="container">
        
        <form method="post" enctype="multipart/form-data">
            <div class="heading">
                <h2>Add Course</h2>
            </div>
            <div class="input_item">
                <input type="file" placeholder="image" name="image" required class="form-control">
              
            </div>
                 <br>
            <div class="input_item">
                <input type="text" placeholder="title" id="username" name="title" class="form-control">
             
            </div>
<br>
            <div class="input_item">
                <input type="text" placeholder="description" id="password" name="description" required class="form-control">
               
            </div>

            <div class="input_item">
                <input type="text" placeholder="techer name" id="password" name="teacher" required class="form-control">
               
            </div>

            <div class="input_item">
                <input type="text" placeholder="button text" id="password" name="btntext" required class="form-control">
               
            </div>
<br>
            <div class="btn">
                <input type="submit" value="adduser" name="submit" class="btn btn-info">
            </div>

        </form>
        </div>
    </div>


