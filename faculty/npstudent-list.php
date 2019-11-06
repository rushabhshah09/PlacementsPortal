
<!DOCTYPE html>
<html>
<head>
	<title>Apply </title>
	<link rel="stylesheet" type="text/css" href="tablestyle.css">   

</head>
<body>
	
<ul>
   <li><a href="http://localhost/project/faculty/facultyinside.php">Home</a></li>
  <li><a href="http://localhost/project/faculty/view-fprofile.php">Profile</a></li>
  <li><a href="http://localhost/project/faculty/pstudent-list.php">Placed Student-list</a></li>
  <li><a href="http://localhost/project/faculty/company-info.php">Company-List</a></li>
 
</ul>
<?php
include("connection.php");
$ar="Non-Placed";
$query = "select cn,sn from test where response='$ar' ";
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
		
		</thead>

		<tr>
			<th > Company-Name</th>
			<th> Student-Name</th>
			
			
					</tr>


<?php
while ( $result=mysqli_fetch_assoc($query_run)) {
echo 		"<tr>
			<td align='center'>".$result['cn'] ."      </td>
			<td align='center'>".$result['sn'] ."      </td>
			
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
