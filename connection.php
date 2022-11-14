<?php
$servername="localhost";
$username="root";
$password="";
$db="Taxpayer";

//set connection
$connection=mysqli_connect("$servername","$username","","$db");

//check connection
if(!$connection)
{
	die("connection failed".mysqli_connect_error());
}
else
{
	//echo "connection successfully";
}
?>