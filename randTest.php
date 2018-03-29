<?php

function random($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
for($i=0;$i<=30;$i++){
	
	$ra = rand(1,60);
	
$s=(int)$ra;



echo $s;
echo '-';
	
	
}

if(isset($_GET['q']))

	$number = (int)$_GET['q'];
	
	echo $number;

?>