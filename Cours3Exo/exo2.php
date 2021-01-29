<?php

$users = [
	1 => [
		'lastname' => 'lastname1',
		'firstname' => 'firstname'
	],
	2 => [
		'lastname' => 'lastname2',
		'firstname' => 'firstnam2'
	],
	3 => [
		'lastname' => 'lastname3',
		'firstname' => 'firstnam3'
	],
	4 => [
		'lastname' => 'lastname4',
		'firstname' => 'firstnam4'
	],
	5 => [
		'lastname' => 'lastname5',
		'firstname' => 'firstnam5'
	]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Exo 2</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prénom</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $id => $user) : ?>
			<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $user['lastname'] ?></td>
				<td><?php echo $user['firstname'] ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>