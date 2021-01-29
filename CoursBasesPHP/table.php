<?php 

// Tableau associatif simple
$user1 = [
	'lastname' => 'Bernouille',
	'firstname' => 'Margaux',
	'age' => 15
];

// Tableau multidirectionel (tableau de tableaux)
$users = [
	1 => $user1,
	2 => [
		'lastname' => 'Beats',
		'firstname' => 'Amandine',
		'age' => 19
	]
];

echo $users[2]['firstname'];