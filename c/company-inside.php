<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Company</title>
	<link rel="stylesheet" type="text/css" href="tstyle.css">
</head>
<body>
<ul>
  <li><a href="http://localhost/project/c/company-inside.php">Home</a></li>
  <li><a href="http://localhost/project/c/view-cprofile.php">Profile</a></li>
  <li><a href="http://localhost/project/c/student-list.php">Student-list</a></li>
 
</ul>
<form class="logout" action="company-inside.php" method="post" >

	
	<li align="right">
	<input type="submit" name="logout" value="Logout"> </li><br>
</form>
</li>

<?php
if (isset($_POST['logout'])) {

session_destroy();
header('location:company-login.php');
}
?>	

</body>
</html>