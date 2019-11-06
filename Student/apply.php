<?php 
session_start();
require 'dbconfig/config.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Apply	</title>
	<link rel="stylesheet" type="text/css" href="applystyle.css">
</head>
<body style="background-color: #7f8c8d">
	<div >
	<ul>
  <li><a href="http://localhost/project/student/studentinside.php">Home</a></li>
  <li><a href="http://localhost/project/student/view-sprofile.php">Profile</a></li>
  <li><a href="companyinside.html">Companies</a></li>
 
</ul>
</div>

	<div id="main-wrapper" >
	<center><h2>Apply</h2></center>

<form action="apply.php" method="post" class="myform" >
<label><b>Name : <b></label>	
<input type="text" name="sname" class="inputvalues" placeholder="Type your Name"required/>
<p><label><b>Company Name : <b></label>	
<input type="text" name="cname" class="inputvalues" placeholder="Type Company Name" required="/"></p>
 <center><p><b>FOR COMPANY CRITERIA VISIT BELOW LINK<b></p><center>
<a href="http://localhost/project/student/company-info.php">Company-Criteria</a><br><br>

<input type="submit" name="Apply" id="Apply_btn" value="Apply">
</form>

<?php
	if (isset($_POST['Apply'])) {
              
                $susername=$_SESSION['username'];
                $cname=$_POST['cname'];
                $fname=$_POST['sname'];
                 
               
                    $query = "select * from student_apply where susername='$susername' and cname='$cname'";
                    $query_run = mysqli_query($con,$query);

                    if (mysqli_num_rows($query_run)>0) 
                    {

                        echo '<script type="text/javascript"> alert("already Applied...Try another Company")</script>';

                    }
                    else
                    {
                      //  $query1="insert into user values('$username','$password')";
                        $query="insert into student_apply values('$cname','$susername','$fname')";
                        $query_run= mysqli_query($con,$query);
                       // $query_run1= mysqli_query($con,$query1);

                        if($query_run)
                        {
                         echo '<script type="text/javascript"> alert("Applied for successfully")</script>';                            
                        }
               
                        else
                        {
                            echo '<script type="text/javascript"> alert("Error!")</script>';
                        }

					}
}                 
?>
</div>

</body>
</html>