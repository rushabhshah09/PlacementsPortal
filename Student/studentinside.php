<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="tstyle.css">
</head>
<Body>
	
<ul>
  <li><a href="http://localhost/project/student/studentinside.php">Home</a></li>
  <li><a href="http://localhost/project/student/view-sprofile.php">Profile</a></li>
  <li><a href="companyinside.html">Companies</a></li>
  <li><a href="http://localhost/project/student/apply.php">Apply for Company </a></li>
 
</ul>
<form class="logout" action="studentinside.php" method="post" >

	
	<li align="right">
	<input type="submit" name="logout" value="Logout"> </li><br>
</form>
</li>

<?php
if (isset($_POST['logout'])) {

session_destroy();
header('location:student-login.php');
}
?>	
<div class=top>
	 <img src="logo.png" >
	<p>It gives us immense pleasure to see our students scaling new heights in their career, the advent of which is through Campus recruitment. Students enter Sinhgad Engineering Institutes with a dream of a successful career.<br>We Help Career Grow.
	</p>
</div>	
<body>
<li><b>
How it Proceeds...
</li>

	<li><b>01. 

JOB POSTING:
Job posted By Departmental TPO and Central TPO.
</b></li>
<li><b>
02. 

SELECTION FOR PLACEMENT:Student have to fill complete profile and apporved from TPO.</b>
</li>
<li><b>
03. 


RECRUITER DESK:Recruiter will see all the unplaced student and selecting from his/her login.
</b>
</li>
<li>
	<b>
04. 
STUDENT DESK:Student can update own profile,view latest news and upcoming job details.
</b>
</li>
<li>
<b>
05. 
TPO DESK:TPO can view student profile he/she will approve student profile from TPO login and they will create new job.
</b></li>
<li>
	<b>
06. 
EMAIL STRATEGY:All update are comes on your register email id.</b></li>
	

</body>
</html>