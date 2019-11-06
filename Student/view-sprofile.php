<?php
session_start();
    include("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>MY PROFILE</title>
	<link rel="stylesheet" type="text/css" href="tablestyle.css">
	      
	    <style type="text/css">
	    	.wrapper{
	    		width: 500px;
				margin: 0 auto;
				background-color: blue;
				color: white;
	    	}
	    	h2
	    	{
	    		font-size: 30px;
	    		font-variant: small-caps;
	    	}
	    </style>

</head>
<body style="background-color: #004528">

</div>
<li><a href="http://localhost/project/student/studentinside.php">HOME</a></li>
	</div>
<div class="ctable" >
	<div id="ctable">
		<center><font color="red"><h2><u>My Profile</h2></u></font></center><br>

		
			<?php
			$q=mysqli_query($conn,"select * from student where username='_SESSION[username]'; ");

			?>
				




	
		<?php
		$query = "select * from student where username ='$_SESSION[username]' ";
$query_run = mysqli_query($conn,$query);
$total=mysqli_num_rows($query_run);

//echo $total;
if ($total !=0) {
	?>
	<table>


<?php
while ( $result=mysqli_fetch_assoc($query_run)) {
echo 		"<tr>
			<td><b>USERNAME :</b></td>
			<td>".$result['username'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>FIRST-NAME :</b></td>
			<td>".$result['fname'] ."<br></td>
			
		</tr>";

echo 		"<tr>
			<td><b>LAST-NAME :</b></td>
			<td>".$result['lname'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>EMAIL :</b></td>
			<td>".$result['email'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>AGE :</b></td>
			<td>".$result['age'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>GENDER :</b></td>
			<td>".$result['gender'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>PHONE NO :</b></td>
			<td>".$result['phone'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>ADDRESS :</b></td>
			<td>".$result['address'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>SSC :</b></td>
			<td>".$result['ssc'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>HSC :</b></td>
			<td>".$result['hsc'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>ENGG :</b></td>
			<td>".$result['engg'] ."<br></td>
			
		</tr>";

	# code...
}
	# code...
}



	
		?>
		</div>
	</div>
</body>
</html>