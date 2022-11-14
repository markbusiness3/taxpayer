<?php

include "connection.php";
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$surname=$_POST['surname'];
$gender=$_POST['gender'];
$tin=$_POST['tin'];
$password=$_POST['password'];

//inset data into table
$sql="insert into registration(Firstname,Middlename,Surname,Gender,TIN,Password) VALUES('$firstname', '$middlename', '$surname','$gender','$tin','$password')";
if (mysqli_query($connection,$sql)) 
{
	//echo "recorded succssefully";
	//header('Location:registration.php');
	header('Location:login.php');

}
else{
	echo "Error";
}

?>