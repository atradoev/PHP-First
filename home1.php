<?php
$var=$_GET["number"];
function isPrime($x)
{	if($x == 1) return false;
	$i=2;
	while($i<$x)
	{
		if($x % $i == 0) return false;
		$i++;
	}
	return true;
}
	function prime($numb)
	{
		if(is_numeric($numb))
			{
			if ($numb < 0 or $numb > 19999 )	
			{
				echo "<font color='red'>The parameter is not within the range [0,19999] !</font>";
				return;
			}
			if(isPrime($numb))
				echo 'The number ' . $numb . ' is prime !';
			else echo "<font color='blue'>The number " . $numb . " is NOT prime !</font>";
			}
		else echo "<font color='red'>The parameter is not a number !</font>";
	}
	
	prime($var);
?>

	