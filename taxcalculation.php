
<?php

$taxableIncome=0;
$grossIncome=0;
$grossIncome=$_POST['grossIncome'];
$payableTax=$_POST['payable'];
$taxableIncome= (($grossIncome-1000)*0.1);
$remainingTax=$taxableIncome-$payableTax;
echo "Your TaxableIncome  of $grossIncome is ".$taxableIncome."Tsh"."<br>"."You have paid ".$payableTax."Tsh"."<br>"."Not paid ".$remainingTax."Tsh";
?>
<br>
<!DOCTYPE html>
<html>
<head></head>
<body>
	<form method="post" action="login.php">
<button type="submit">LogOut</button>
    </form>
</body>
</html>