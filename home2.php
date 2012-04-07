<?php
$arr = range(20,1000,37);

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
function find_3_prime($ar)
{
	$i=0;
	foreach ($ar as $number) 
	{
		if(isPrime($number) and $i==3)  echo "The 3rd prime is " . $number;
		else $i++;
	}
}
find_3_prime($arr);
echo "\n";


function check_exists($a)
{
	if(in_array("146",$a)) 
		echo "The number 146 exists in the array \n";
	else 
		echo "The number 146 does not exist in the array \n";
	if(in_array(284,$a))
		echo "The number 284 exists in the array\n";
	else 
		echo "The number 284 does not exist in the array\n";
	if(in_array(871,$a)) 
		echo "The number 871 exists in the array\n";
	else 
		echo "The number 871 does not exist in the array\n";
}

check_exists($arr);
?>