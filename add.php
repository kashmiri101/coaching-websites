

    

<?php
include 'connection.php';


include "header1.php";


if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if(mysqli_num_rows(mysqli_query($check,"select * from user where username='$username'"))>0){
	   ?>
<script>alert("username is already exist");</script>

<?php 
	}else{
		$password=password_hash($password,PASSWORD_DEFAULT);
		mysqli_query($check,"insert into user(name,username,password) values('$name','$username','$password')");?>
		<script>alert("Thankh You");</script>
        <?php 
	}
	
}
?>



    <div class="main">

    <div class="container">
        
        <form method="post">
            <div class="heading">
                <h2>Add User</h2>
            </div>
            <div class="input_item">
                <input type="text" placeholder="Name" name="name" required class="form-control">
              
            </div>
                 <br>
            <div class="input_item">
                <input type="text" placeholder="username" id="username" name="username" class="form-control">
             
            </div>
<br>
            <div class="input_item">
                <input type="password" placeholder="password" id="password" name="password" required class="form-control">
               
            </div>
<br>
            <div class="btn">
                <input type="submit" value="adduser" name="submit" class="btn btn-info">
            </div>

        </form>
        </div>
    </div>

    <script>

        var eye = document.querySelector("#eye");
        var pass = document.querySelector("#password");
        var flag = true;

        eye.addEventListener("click",function(){

            if (flag == true) {
                
                pass.type="text";
                flag=false;
                eye.classList="fa-solid fa-eye"
            }else{
                
                pass.type="password";
                eye.classList="fa-solid fa-eye-slash"
                flag=true;
            }

        });

    </script>

