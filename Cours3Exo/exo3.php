<?php 

echo "Technique 1 : <br>";
$number = 1; 
while($number <= 100) {
	if ($number % 2) {
		echo $number . '-';
	}

	$number++;
}

echo "<br>";
echo "Technique 2 (if ternaire) : <br>";
// Le Ternaire est une autre ecriture du if
// CONDITION ? SI VRAI : SI NON
$number = 1; 
while($number <= 100) {
	if ($number % 2) {
		echo $number . ($number !== 99 ? '-' : '');
	} 	
	
	$number++;
}

echo "<br>";
echo "Technique 3 (sans %) : <br>";

$number = 1; 
while($number <= 100) {
	echo $number . '-';

	$number = $number + 2;
}