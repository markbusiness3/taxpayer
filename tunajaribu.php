
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<label>Enter grossincome</label>
	<input type="number" name="grossIncome">
	<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if ($_POST) 
	// code...
{
	$taxableIncome=0;
	$totalIncomeTax=0;

$grossIncome=$_POST['grossIncome'];

$grossIncome=filter_input(INPUT_POST, 'grossIncome',FILTER_VALIDATE_FLOAT);


//Valdate grossIncome
if($grossIncome===false)
{
	echo $error_message='inverstimate must invalid number.';
}
else if($grossIncome <10000)
{
	echo $error_message='Inverstment must at least or greater than $10,000';
}
//set error  message to empty string if no invalid entries
/*else
{
	$error_message ='';
}*/
/*if error exisist go the form page
if ($error_message !='') 
{
	include(form.php);
	exit();
}*/
//calculation
//calculate taxable income, which is gross income minus 10,000
$taxableIncome=$grossIncome-10000;

//use condition
if ($taxableIncome<=9225)
{
	$totalIncomeTax=($taxableIncome*10)/100;
}

else if ($taxableIncome>=9226 && $taxableIncome<=37450)
{
	$totalIncomeTax=((($taxableIncome-9225)*15)/100)+922.50;
} 

	else if ($taxableIncome >=37451 && $taxableIncome<= 90750) 
	{
		$totalIncomeTax=((($taxableIncome-37450)*25)/100)+5156.25;
	}

else{
	//$toxableIncome >=90751
	$totalIncomeTax=((($taxableIncome-90750)*28)/100)+18481.25;
}
//calculate effective TxRate and store
$effectiveTaxRate=$totalIncomeTax/$grossIncome;
$effectiveTaxRate *=100;
$effectiveTaxRate= round($effectiveTaxRate, 1);

//apply formating
$grossIncome_f=number_format($grossIncome);
$taxableIncome_f =number_format($taxableIncome);
$totalIncomeTax_f =number_format($totalIncomeTax, 2);

echo "As a single taxpayer with a gross annul income of $".$grossIncome_f. ", your taxable income is $".$taxableIncome_f."."."<br>";
echo "Your total income tax is $".$totalIncomeTax_f."(".$effectiveTaxRate."% effective Tax Rate).";
}


?>

