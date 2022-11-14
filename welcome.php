<?php
/*
session_start();
include "connection.php";
$_SESSION['attempt'];
if(isset($_POST['tin'])){
$_SESSION['attempt']=$_SESSION['attempt']+1;
echo if($_SESSION['attempt']>3;

}
*/

include "connection.php";
if (isset($_POST['tin'])) 
 {
	$tin=$_POST['tin'];
	$password=$_POST['pass'];
 	$sql="select *from Registration where TIN='".$tin."' AND Password='".$password."'";
 	$result=mysqli_query($connection,$sql);
 	if($row=mysqli_fetch_assoc($result))
 	{
		
		echo strtoupper("welcome".' ' .$row['Firstname'].' '.$row['Middlename'].' '.$row['Surname'].' ')."<br>";
		//header('Location:welcome.php');
		
 	}
	else
 	{    
		header("location:login.php?error=1");
	}

	
}
 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="taxcalculation.php">
	<p>Tax payer</p>
	<div>
	   <label>Enter your Gross Income</label>
	   <input type="number" name="grossIncome">
	  
    </div>
    <div>
	<label>Enter payable Tax</label>
	<input type="number" name="payable">
	 <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>
