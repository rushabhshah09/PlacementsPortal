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
<li><a href="http://localhost/project/faculty/facultyinside.php">HOME</a></li>
	</div>
<div class="ctable">
				<div class="mytable" align="center" >

<center><font color="red"><h2>My Profile</h2></font></center><br>
			

	
		<?php
		
		$username1=$_SESSION['username'];
$query = "select * from faculty where username ='$username1' ";
$query_run = mysqli_query($conn,$query);
$total=mysqli_num_rows($query_run);

//echo $total;
if ($total !=0) {
	?>
	<table>
<div style="text-align: center;" class="wrapper">


<?php
while ( $result=mysqli_fetch_assoc($query_run)) {
echo 		"<tr>
			<td><b>USERNAME :</b></td>
			<td>".$result['username'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>FACULTY-NAME :</b></td>
			<td>".$result['faculty-name'] ."<br></td>
			
		</tr>";


echo 		"<tr>
			<td><b>EMAIL :</b></td>
			<td>".$result['email'] ."<br></td>
			
		</tr>";

echo 		"<tr>
			<td><b>ADDRESS :</b></td>
			<td>".$result['College-name'] ."<br></td>
			
		</tr>";
echo 		"<tr>
			<td><b>SSC :</b></td>
			<td>".$result['gender'] ."<br></td>
			
		</tr>";


	
}
	
}



	
		?>
		</div>
			</div>
</div>
</body>
</html>