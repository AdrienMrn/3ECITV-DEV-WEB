<?php 

if (isset($_GET['id'])) {
	include('connectDb.php');

	// SELECT des_champs FROM une_table WHERE
	$reponse = $db->query('SELECT * FROM user WHERE id=' . $_GET['id']);
	$user = $reponse->fetch();

	if (count($user)) {
		//var_dump($user);
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Update User</title>
	</head>
	<body>
		<form method="POST">
			<label for="lastname">Nom</label>
			<input type="text" name="lastname" value="<?php echo (isset($user['lastname'])) ? $user['lastname'] : '' ?>"> <br>

			<label for="firstname">Prénom</label>
			<input type="text" name="firstname" value="<?php echo (isset($user['firstname'])) ? $user['firstname'] : '' ?>"> <br>

			<label for="email">Email</label>
			<input type="email" name="email" value="<?php echo (isset($user['email'])) ? $user['email'] : '' ?>"> <br>

			<button type="submit">Enregistrer</button>
		</form>
	</body>
	</html>

<?php
		$reponse->closeCursor(); 
	}

	if (
		isset($_POST['lastname']) && $_POST['lastname'] != '' &&
		isset($_POST['firstname']) && $_POST['firstname'] != '' &&
		isset($_POST['email']) && $_POST['email'] != ''
	) {
		include('connectDb.php');

		$req = $db->prepare('UPDATE user SET lastname=:lastname, firstname=:firstname, email=:email WHERE id=:id');

		$req->execute([
		   'lastname' => $_POST['lastname'],
		   'firstname' => $_POST['firstname'],
		   'email' => $_POST['email'],
		   'id' => $_GET['id']
		]);

		echo 'Utilisateurs modifié';
	}
}
