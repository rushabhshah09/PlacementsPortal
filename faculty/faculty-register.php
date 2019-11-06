<?php
    require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body >
    <div class="login-box1">
        <img src="photo.jpg" alt="Avatar" class="avatar">
    <img src="avatar.png" class="avatar">
        <h1><u>Faculty Register</u></h1>
            <form action="faculty-register.php" method="post">
                    
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Enter Username"><br><br>
                         <p>Create Password</p>
                         <input type="password" name="password" placeholder="Enter Password"><br><br>
                         <p>Confirm Password</p>
                         <input type="password" name="cpassword" placeholder="Confirm Password"><br><br>
                         <p>Faculty Name</p>
                        <input type="text" name="fname" placeholder="Enter Name"><br><br>
                         <p>Email</p>
                         <input type="text" name="email" value="" id="txtemail" placeholder="Enter email" value=""><br><br>
                         <p>College name :</p>
                         <input type="text" name="cname" placeholder="Enter your College name"><br><br> 
                        <p>Gender :
                            <input type="radio" name="gender" value="Male">
                            <label for="">Male</label>

                            <input type="radio" name="gender" value="Female">
                            <label for="">Female</label>                        
                            <br><br></p>
                        <input type="submit" value="submit" id="sub" name="submit">
                   <p align="right">
                       <a href="http://localhost/project/faculty/faculty-login.php"> <input type="button" id="blogin_btn" value="Back to login" name=""></a>
                   </p>
    
              
            </form>
         <?php
            if (isset($_POST['submit'])) {
               // echo '<script type="text/javascript"> alert("submit button clicked")</script>';
                $username=$_POST['username'];
                $password=$_POST['password'];
                $cpassword=$_POST['cpassword'];
                $fname=$_POST['fname'];
                $email=$_POST['email'];
                $cname=$_POST['cname'];
                $gender=$_POST['gender'];
                
                if ($password==$cpassword) {
                    $query = "select * from faculty where username='$username'";
                    $query_run = mysqli_query($con,$query);

                    if (mysqli_num_rows($query_run)>0) 
                    {

                        echo '<script type="text/javascript"> alert("User already exist...Try another username")</script>';

                    }
                    else
                    {
                        $query="insert into faculty values('$username','$password','$fname','$email','$cname','$gender')";
                        $query_run= mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script type="text/javascript"> alert("Faculty Registered successfully")</script>';                            
                        }
                        else
                        {
                            echo '<script type="text/javascript"> alert("Error!")</script>';
                        }
                    }
                    
                }

            else
            {
                echo '<script type="text/javascript"> alert("password do not match")</script>';
            }

                
            }
            

            ?>
        
        </div>
    
    </body>
</html>