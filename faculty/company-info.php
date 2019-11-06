
<!DOCTYPE html>
<html>
<head>
	<title>Company-List</title>
	<link rel="stylesheet" type="text/css" href="tablestyle.css">   

</head>
<body>
	
<ul>
  <li><a href="http://localhost/project/faculty/facultyinside.php">Home</a></li>
  <li><a href="http://localhost/project/faculty/view-fprofile.php">Profile</a></li>
  <li><a href="http://localhost/project/faculty/pstudent-list.php">Placed Student-list</a></li>
  <li><a href="http://localhost/project/faculty/npstudent-list.php">Non-Placed Student-list</a></li>
  
 
</ul>
<?php
include("connection.php");
$query = "select cname,email,address,ssc,hsc,engg from company ";
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
			<th colspan="3" >Company</th>
			<th width="300px" colspan="3">Company-Criteria</th>
		</tr>
		</thead>

		<tr>
			<th > Name</th>
			<th> Address</th>
			<th> Email</th>
			<th> SSC</th>
			<th> HSC</th>
			<th> Engg</th>
			
					</tr>


<?php
while ( $result=mysqli_fetch_assoc($query_run)) {
echo 		"<tr>
			<td align='center'>".$result['cname'] ."      </td>
			<td align='center'>".$result['address'] ."      </td>
			<td align='center'>".$result['email'] ."      </td>
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
