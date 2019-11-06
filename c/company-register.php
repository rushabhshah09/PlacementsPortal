<?php
    require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Company Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body >
    <div class="login-box1">
        <img src="photo.jpg" alt="Avatar" class="avatar">
    <img src="avatar.png" class="avatar">
        <h1>Company Register</h1>
            <form action="company-register.php" method="post">
                    
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Enter Username"><br><br>
                         <p>Create password</p>
                         <input type="password" name="password" placeholder="Enter Password"><br><br>
                         <p>Confirm Password</p>
                         <input type="password" name="cpassword" placeholder="Confirm Password"><br><br>
                         <p>Company Name</p>
                        <input type="text" name="cname" placeholder="Enter Company Name"><br><br>
                     
                    
                        <p>Email</p>
                         <input type="text" name="email" value="" id="txtemail" placeholder="Enter email" value="">
                        
                       <br><br>
                        <p>Address</p>
                        <input type="text1" name="address" placeholder="Enter Address"><br>
                        <h3><u>Company Criteria</u> :</h3>
                         <p>SSC&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;HSC<br>
                         <input type="text2" name="ssc" placeholder="Enter SSC Criteria">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <input type="text2" name="hsc" placeholder="Enter HSC Criteria"><br><br>
                        <p>Engg. Aggregate</p>
                         <input type="text" name="engg" placeholder="Enter Aggregate marks Criteria"><br><br>
                        <input type="submit" value="submit" id="sub" name="submit"><br><br>
                        <p align="right">
                       <a href="http://localhost/project/c/company-login.php"> <input type="button" id="blogin_btn" value="Back to login" name=""></a>
                   </p>

              
            </form>
         <?php
            if (isset($_POST['submit'])) {
               // echo '<script type="text/javascript"> alert("submit button clicked")</script>';
                $username=$_POST['username'];
                $password=$_POST['password'];
                $cpassword=$_POST['cpassword'];
                $cname=$_POST['cname'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $ssc=$_POST['ssc'];
                $hsc=$_POST['hsc'];
                $engg=$_POST['engg'];
                
                if ($password==$cpassword) {
                    $query = "select * from company where username='$username'";
                    $query_run = mysqli_query($con,$query);

                    if (mysqli_num_rows($query_run)>0) 
                    {

                        echo '<script type="text/javascript"> alert("User already exist...Try another username")</script>';

                    }
                    else
                    {
                        $query="insert into company values('$username','$password','$cname','$email','$address','$ssc','$hsc','$engg')";
                        $query_run= mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script type="text/javascript"> alert("Company Registered successfully")</script>';

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