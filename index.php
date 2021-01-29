<?php 

include('connectDb.php');

// SELECT des_champs FROM une_table
$reponse = $db->query('SELECT * FROM user');
//var_dump($reponse->fetchAll());

while($data = $reponse->fetch())
{
	echo $data['firstname'] . ' ' . $data['lastname'] . ' ' . $data['email'];

	echo '<a href="update.php?id=' . $data['id'] . '">Modifier</a>';

	echo '<br>';
}

$reponse->closeCursor(); 