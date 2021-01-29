<!DOCTYPE html>
<html>
<head>
	<title>New User</title>
</head>
<body>
	<form method="POST">
		<label for="lastname">Nom</label>
		<input type="text" name="lastname"> <br>

		<label for="firstname">Prénom</label>
		<input type="text" name="firstname"> <br>

		<label for="email">Email</label>
		<input type="email" name="email"> <br>

		<button type="submit">Enregistrer</button>
	</form>
</body>
</html>

<?php

if (
	isset($_POST['lastname']) && $_POST['lastname'] != '' &&
	isset($_POST['firstname']) && $_POST['firstname'] != '' &&
	isset($_POST['email']) && $_POST['email'] != ''
) {
	include('connectDb.php');

	$req = $db->prepare('INSERT INTO user(lastname, firstname, email) VALUES(:lastname, :firstname, :email)');

	$req->execute([
	   'lastname' => $_POST['lastname'],
	   'firstname' => $_POST['firstname'],
	   'email' => $_POST['email']
	]);
	
	$req->closeCursor(); 
	
	echo 'L\'utilisateur a bien été enregistré !';
}

