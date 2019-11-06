<?php
require 'dbconfig/config.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Info</title>
	<link rel="stylesheet" type="text/css" href="tablestyle.css"> 
</head>
<body>
	<div class="ctable">
		<div class="mytable" align="center" >
	<?php

$un=$_GET['un'];
$cn=$_GET['cn'];

$query="select * from student where username='$un'";
$query_run=mysqli_query($con,$query);
$total=mysqli_num_rows($query_run);

while ( $result=mysqli_fetch_assoc($query_run)) {

echo 		"<tr>
			<td><b>FIRST-NAME :</b></td>
			<td>".$result['fname'] ."<br></td>
			
		</tr><br>";

echo 		"<tr>
			<td><b>LAST-NAME :</b></td>
			<td>".$result['lname'] ."<br></td>
			
		</tr><br>";
echo 		"<tr>
			<td><b>EMAIL :</b></td>
			<td>".$result['email'] ."<br></td>
			
		</tr><br>";

echo 		"<tr>
			<td><b>GENDER :</b></td>
			<td>".$result['gender'] ."<br></td>
			
		</tr><br>";
echo 		"<tr>
			<td><b>PHONE NO :</b></td>
			<td>".$result['phone'] ."<br></td>
			
		</tr><br>";
echo 		"<tr>
			<td><b>ADDRESS :</b></td>
			<td>".$result['address'] ."<br></td>
			
		</tr><br>";
echo 		"<tr>
			<td><b>SSC :</b></td>
			<td>".$result['ssc'] ."<br></td>
			
		</tr><br>";
echo 		"<tr>
			<td><b>HSC :</b></td>
			<td>".$result['hsc'] ."<br></td>
			
		</tr><br>";
echo 		"<tr>
			<td><b>ENGG :</b></td>
			<td>".$result['engg'] ."<br></td>
			
		</tr><br>";

	# code...
}

?>
</div>
<form action="http://localhost/project/c/student-info.php" method="post" class="myform" >
<?php
$un=$_GET['un'];
$cn=$_GET['cn'];

?>
	<p align="right"><a href="http://localhost/project/c/student-list.php">
	<input type="button" name="logout" value="Back"> </a></p>
</body>
</html>