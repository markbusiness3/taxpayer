
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="registrationsubmit.php">
	<h3>Taxpayer registration Form</h3>
<div>
	<label>Firstname</label>
	<input type="text" name="firstname" required>
</div>
<div>
	<label>Middlename</label>
	<input type="text" name="middlename" required>
</div>
<div>
	<label>Surname</label>
	<input type="text" name="surname" required>
</div>
<div>	
    <label>Gender</label>
	<select name="gender">
		<option>SELECT</option>
		<option>Male</option>
		<option>Female</option>
	</select>
</div>
	<label>TIN</label>
	<input type="number" name="tin" required></br>
	<label>Password</label>
	<input type="password" name="password" required>
	<button type="submit">REGISTER</button>
</form>
</body>
</html>
