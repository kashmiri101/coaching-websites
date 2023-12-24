<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">

</head>

<body>


    <div class="main">

    <div class="container">
        
        <form method="post">
            <div class="heading">
                <h2>Log In</h2>
            </div>
            <div class="input_item">
                <input type="text" placeholder="Name" name="username" required >
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input_item">
                <input type="password" placeholder="Password" id="password" name="password" required>
                <i class="fa-solid fa-eye-slash" id="eye"></i>
            </div>

            <div class="btn">
                <input type="submit" value="Log In" name="submit">
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
</body>
</html>

<!-- ________________________PHP START_____________________-->
<?php
include "connection.php";
session_start();


if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($check,$_POST['username']);
	$password=mysqli_real_escape_string($check,$_POST['password']);
	
	$res=mysqli_query($check,"select * from user where username='$username'");
	
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$verify=password_verify($password,$row['password']);
		if($verify==1){
			
			$_SESSION['UNAME']=$row['username'];
			header('location:courseshow.php');
			die();
		}else{
			?>
               <script>alert("password is wrong");</script>
            <?php 
		}

	}else{
        ?>
		<script>alert("username is wrong");</script>

        <?php 
	}
	
}
?>

