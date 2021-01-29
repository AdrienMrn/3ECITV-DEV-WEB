<?php

$fruits = ['banane', 'clémentine', 'orange', 'kiwi', 'pomme'];

foreach ($fruits as $fruit) {
	echo $fruit . '<br>';
}


echo '<br>';

$users = [
	456 => [
		'lastname' => 'Bernouille',
		'firstname' => 'Margaux',
		'age' => 15
	],
	789 => [
		'lastname' => 'Beats',
		'firstname' => 'Amandine',
		'age' => 19
	]
];


foreach ($users as $id => $user) {
	echo $id . ' : ' . $user['lastname'] . ' ' . $user['firstname'] . '<br>';
}

