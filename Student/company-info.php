
<!DOCTYPE html>
<html>
<head>
	<title>Apply </title>
	<link rel="stylesheet" type="text/css" href="tablestyle.css">   

</head>
<body>
	
<ul>
  <li><a href="http://localhost/project/student/studentinside.php">Home</a></li>
  <li><a href="http://localhost/project/student/view-sprofile.php">Profile</a></li>
  <li><a href="companyinside.html">Companies</a></li>
  <li><a href="http://localhost/project/student/apply.php">Apply for Company</a></li>
 
</ul>
<?php
include("connection.php");
$query = "select cname,address,ssc,hsc,engg from company ";
$query_run = mysqli_query($conn,$query);
$total=mysqli_num_rows($query_run);

//echo $total;
if ($total !=0) {
	?>
	<div class="ctable">

	
	<div class="mytable">
		<form action="company-info.php" method="post">
	<table style="border: 5px double black;" border="1">
		<thead align="center">
		<tr>
			<th colspan="2" >Company</th>
			<th width="300px" colspan="3">Company-Criteria</th>
		</tr>
		</thead>

		<tr>
			<th > Name</th>
			<th> Address</th>
			<th> SSC</th>
			<th> HSC</th>
			<th> Engg</th>
			
					</tr>


<?php
while ( $result=mysqli_fetch_assoc($query_run)) {
echo 		"<tr>
			<td align='center'>".$result['cname'] ."      </td>
			<td align='center'>".$result['address'] ."      </td>
			<td align='center'>".$result['ssc'] ."      </td>
			<td align='center'>".$result['hsc'] ."      </td>
			<td align='center'>".$result['engg']."      </td>
			
		</tr>";
	# code...
}
	# code...
}
else
{
	echo "No record found";
}

?>
	</table>
	</div> 
	
        
</div>
</body>
</html>
