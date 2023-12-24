

    

<?php
include "header1.php";
include('connection.php');


$id=$_GET['id'];
$sel="SELECT * FROM `cca` where id='$id'";
$c=mysqli_query($check,$sel);
$d=mysqli_fetch_assoc($c);









if(isset($_POST['submit'])){
	 $tmpdata=$_FILES['image']['tmp_name'];
     $data=$_FILES['image']['name'];
	 $folder=move_uploaded_file($tmpdata,$data);
	$title=$_POST['title'];
    $descriptions=$_POST['description'];
    $teacher=$_POST['teacher'];
    $btntext=$_POST['btntext'];
    $query="UPDATE `cca` SET `image`='$data',`title`='$title',`description`='$descriptions',`teacher name`='$teacher',`button`='$btntext' WHERE id='$id'";
    mysqli_query($check,$query);
    

}           
	

?>



    <div class="main">

    <div class="container">
        
        <form method="post" enctype="multipart/form-data">
            <div class="heading">
                <h2>UPDATE COURSE</h2>
            </div>
            <div class="input_item">
                <input type="file" placeholder="image" name="image" required class="form-control" value=<?php echo  $d['image']?>>
              
            </div>
                 <br>
            <div class="input_item">
                <input type="text" placeholder="title"  name="title"  value=<?php echo  $d['title']?>>
             
            </div>

            <div class="input_item">
               
                <textarea  name="description" value="hello" id="" cols="30" rows="10"><?php echo $d['description']  ?></textarea>
               
            </div>

            <div class="input_item">
                <input type="text"   name="teacher"  value=<?php echo  $d['teacher name'];?>>
               
            </div>

            <div class="input_item">
                <input type="text" value=<?php echo  $d['button']; ?>  name="btntext" required class="form-control">
               
            </div>
            <div class="btn">
                <input type="submit" value="adduser" name="submit" class="btn btn-info">
            </div>

        </form>
        </div>
    </div>


