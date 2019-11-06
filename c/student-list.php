<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Apply </title>
	<link rel="stylesheet" type="text/css" href="tablestyle.css">   

</head>
<body>
	
<ul>
  <li><a href="http://localhost/project/c/company-inside.php">Home</a></li>
 
</ul>
<?php
include("connection.php");
$query = "select cname,susername,sname from student_apply ";
$query_run = mysqli_query($conn,$query);
$total=mysqli_num_rows($query_run);


if ($total !=0) {
?>
<?php
		$un=$_SESSION['username'];
		
		$query="select * from company where username='$un' ";
		$q=mysqli_query($conn,$query);
		$total1=mysqli_num_rows($q);
		
		$result1=mysqli_fetch_assoc($q);

?>
	<div class="ctable">

	
	<div class="mytable">
		<form action="student-list.php" method="post">
	<table style="border: 5px double black;" border="1">
		<thead align="center">
		</thead>

		<tr>
			<th > Student-Name</th>
			<th> Student-username</th>
			<th> Company-name</th>
			<th> Student Details</th>
		</tr>


<?php
while ( $result=mysqli_fetch_assoc($query_run)) {
if($result['cname']==$result1['cname']){
echo 		"<tr>
			<td align='center'>".$result['sname'] ."    </td>
			<td align='center'>".$result['susername'] ."      </td>
			<td align='center'>".$result['cname'] ."      </td>
			<td align='center'><a href='http://localhost/project/c/student-info.php?un=$result[susername]&cn=$result[cname] '> Details </a></td>
		</tr>";
	}# code...
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
	<center>
	<form action="student-list.php" method="post">
	<p> Student-Username</p>
                        <input type="text" name="username" placeholder="   Enter Student Username  " required/><br><br>
                        Placement Request <br><br>
                            <input type="submit" name="arequest" value="Accept">
                            	&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                           <input  type="submit" name="rrequest" value="Reject">
    </form> 
    </center>            
	<?php
	
	if (isset($_POST['arequest'])) {
	$un=$_SESSION['username'];
	$query="select * from company where username='$un' ";
	$q=mysqli_query($conn,$query);
	$result1=mysqli_fetch_assoc($q);
	$cn=$result1['cname'];
	
	$sn=$_POST['username'];
	$ar="Placed";
    $nr="Non-Placed";
    $query1="select * from test where sn='$sn' and cn='$cn'";
    $query_run=mysqli_query($conn,$query1);
    
    if(mysqli_num_rows($query_run)>0){
    echo '<script type="text/javascript"> alert("Result Already sent")</script>';
}
else
{
	 $query2="insert into test values('$cn','$sn','$ar')";
                        $query_run2= mysqli_query($conn,$query2);
                        if($query_run2){
                      
                          echo '<script type="text/javascript"> alert("Response Sent successfully")</script>'; 
                    }
                    else
                    {  
                    	echo '<script type="text/javascript"> alert("Error!")</script>';
                    }
}
	}
if (isset($_POST['rrequest'])) {
	$un=$_SESSION['username'];
	$query="select * from company where username='$un' ";
	$q=mysqli_query($conn,$query);
	$result1=mysqli_fetch_assoc($q);
	$cn=$result1['cname'];
	
	$sn=$_POST['username'];
	$ar="Placed";
    $nr="Non-Placed";
    $query1="select * from test where sn='$sn' and cn='$cn'";
    $query_run=mysqli_query($conn,$query1);
    
    if(mysqli_num_rows($query_run)>0){
    echo '<script type="text/javascript"> alert("Result Already sent")</script>';
}
else
{
	 $query2="insert into test values('$cn','$sn','$nr')";
                        $query_run2= mysqli_query($conn,$query2);
                        if($query_run2){
                      
                          echo '<script type="text/javascript"> alert("Response Sent successfully")</script>'; 
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
