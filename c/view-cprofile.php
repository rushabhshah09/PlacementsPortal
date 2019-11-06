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
<li><a href="http://localhost/project/c/company-inside.php">HOME</a></li>
	</div>
<div class="ctable">
				<div class="mytable" align="center" >

<center><font color="red"><h2>My Profile</h2></font></center><br>
			

	
		<?php
		echo $_SESSION['username'];
		$username1=$_SESSION['username'];
$query = "select * from company where username ='$username1' ";
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
			<td><b>COMPANY-NAME :</b></td>
			<td>".$result['cname'] ."<br></td>
			
		</tr>";


echo 		"<tr>
			<td><b>EMAIL :</b></td>
			<td>".$result['email'] ."<br></td>
			
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

	
}
	
}



	
		?>
		</div>
			</div>
</div>
</body>
</html>