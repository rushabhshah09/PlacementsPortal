<?php
    require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body >
    <div class="login-box1">
        <img src="photo.jpg" alt="Avatar" class="avatar">
    <img src="avatar.png" class="avatar">
        <h1>Student Register</h1>
            <form action="student-register.php" method="post">
                    
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Enter Username" required/><br><br>
                         <p>Create Password</p>
                         <input type="password" name="password" placeholder="Enter Password" required/><br><br>
                         <p>Confirm Password</p>
                         <input type="password" name="cpassword" placeholder="Confirm Password" required/><br><br>
                         <p>First Name&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Last Name<br>
                        <input type="text" name="fname" placeholder="Enter First Name"  required/> &ensp;&ensp;&ensp;&ensp;
                         <input type="text" name="lname" placeholder="Enter Last Name"  required/ ><br><br>
                     </p>
                    
                        <p>Email &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        Age<br>    
                         <input type="text" name="email" value="" id="txtemail" placeholder="Enter email" value="" required/  >&ensp;&ensp;&ensp;&ensp;&ensp;
                        <input type="text" name="age" value="" id="txtage" placeholder="Enter Age" value=""   required/>

                        </p>
                        <div class="radios">
                            <h4>Gender : &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Contact No :</h4>


                            <input type="radio" name="gender" value="Male">
                            <label for="">Male</label>

                            <input type="radio" name="gender" value="Female">
                            <label for="">Female</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            <input type="text" name="phone" value="" id="txtphone" placeholder="Enter Number" value="" required/  >
                        </div><br>
                        <p>Address</p>
                        <input type="text1" name="address" placeholder="Enter Address"   required/><br>
                        <h3><u>Academic details</u> :</h3>
                         <p>SSC&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;HSC<br>
                         <input type="text2" name="ssc" placeholder="Enter SSC %"  required/ >&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <input type="text2" name="hsc" placeholder="Enter HSC %"  required/ ><br><br>
                        <p>Engg. Aggregate</p>
                         <input type="text" name="engg" placeholder="Enter Aggregate marks" required/   ><br><br>
                        
                        

                        <input type="submit" value="submit" id="sub" name="submit">
                         <p align="right">
                       <a href="http://localhost/project/student/student-login.php"> <input type="button" id="blogin_btn" value="Back to login" name=""></a>
                   </p>
             
            </form>
            <?php
            if (isset($_POST['submit'])) {
               
                $username=$_POST['username'];
                $password=$_POST['password'];
                $cpassword=$_POST['cpassword'];
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $age=$_POST['age'];
                $gender=$_POST['gender'];
                $phone=$_POST['phone'];
                $address=$_POST['address'];
                $ssc=$_POST['ssc'];
                $hsc=$_POST['hsc'];
                $engg=$_POST['engg'];
                
                if ($password==$cpassword) {
                    $query = "select * from student where username='$username'";
                    $query_run = mysqli_query($con,$query);

                    if (mysqli_num_rows($query_run)>0) 
                    {

                        echo '<script type="text/javascript"> alert("Username already exist...Try another username")</script>';

                    }
                    else
                    {
                     
                        $query="insert into student values('$username','$password','$fname','$lname','$email','$age','$gender','$phone','$address','$ssc','$hsc','$engg')";
                        $query_run= mysqli_query($con,$query);
                       // $query_run1= mysqli_query($con,$query1);

                        if($query_run)
                        {
                            echo '<script type="text/javascript"> alert("Student Registered successfully..Go back to login page")</script>';                            
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