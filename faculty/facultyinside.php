<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Faculty</title>
	<link rel="stylesheet" type="text/css" href="fstyle.css">
</head>
<body>
<ul>
  <li><a href="http://localhost/project/faculty/facultyinside.php">Home</a></li>
  <li><a href="http://localhost/project/faculty/view-fprofile.php">Profile</a></li>
  <li><a href="http://localhost/project/faculty/pstudent-list.php">Placed Student-list</a></li>
  <li><a href="http://localhost/project/faculty/npstudent-list.php">Non-Placed Student-list</a></li>
  <li><a href="http://localhost/project/faculty/company-info.php">Company-List</a></li>
 
</ul>
<form class="logout" action="facultyinside.php" method="post" >

	
	<li align="right">
	<input type="submit" name="logout" value="Logout"> </li><br>

</form>
</li>

<?php

if (isset($_POST['logout'])) {

session_destroy();
header('location:faculty-login.php');
}
?>	
</body>
</html>