<?php
$servername="localhost";
$username="root";
$password="";
$dbname="samplelogindb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "connection done";
}
else
{
	die("connection failed ");
}
?>