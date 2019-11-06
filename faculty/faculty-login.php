<?php
session_start();

    require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body >
        <a href="home.html"><button class=button type="button"><span>Home</span></button> </a>
    <div class="login-box">
        <img src="photo.jpg" alt="Avatar" class="avatar">
    <img src="avatar.png" class="avatar">
        <h1>Faculty Login</h1>
            <form class="myform" action="faculty-login.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input name="login" type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>
            <a href="http://localhost/project/faculty/faculty-register.php">
        <p align="right">
            <input type="signup" name="submit" value="  Sign up">
        </p>
    </a>
     <?php
    if (isset($_POST['login'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $query="select * from faculty where username='$username' AND password='$password'";
        $query_run = mysqli_query($con,$query);
        if (mysqli_num_rows($query_run)>0) 
        {
            $_SESSION['username']=$username;
            header('location:facultyinside.php');
        }
        else
        {
            echo '<script type="text/javascript"> alert("Invalid Credentials..")</script>';
        }
        # code...
    }
    ?>
        
        </div>
    
    </body>
</html>