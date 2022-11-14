<?php include "connection.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="welcome.php">
	<h3>Welcome To Tax Portal</h3>
	 <?php  if(isset($_GET['error'])==true){
        echo '<font color="red">you have entered incorrect username or password</font>';
    }
	 ?>
    <div>
	<input type="number" name="tin" placeholder="TIN">
	<div><input type="password" name="pass" placeholder="Password">
	<button type="submit" name="attempt">Login</button>
	 </div>
	
	 </form>

	 <dv>
	 	<br>
	    Are you a new User<a href="registration.php">-Register</a>
	    <dv>
   


</body>
</html>




