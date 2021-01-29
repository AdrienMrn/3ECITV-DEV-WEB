<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="POST">
		<label for="lastname">Nom</label>
		<input type="text" name="lastname" required> <br>
		<label for="firstname">Prénom</label>
		<input type="text" name="firstname" required> <br>
		<label for="email">Email</label>
		<input type="email" name="email" required> <br>
		<label for="num">Numéro</label>
		<input type="text" name="num" required> <br>
		<label for="address">Adresse</label>
		<input type="text" name="address" required> <br>
		<label for="age">Age</label>
		<input type="text" name="age" required> <br>

		<button type="submit">Soumettre</button>
	</form>
</body>
</html>

<?php 
	if (
		isset($_POST['lastname']) && $_POST['lastname'] != '' &&
		isset($_POST['firstname']) && $_POST['firstname'] != '' &&
		isset($_POST['email']) && $_POST['email'] != '' &&
		isset($_POST['num']) && $_POST['num'] != '' &&
		isset($_POST['address']) && $_POST['address'] != '' &&
		isset($_POST['age']) && $_POST['age'] != '' 
	) {
		if ($_POST['age'] >= 18) {
			$m = 'majeur';
		} else {
			$m = 'mineur';
		}

		echo 'Je m’appelle ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ', mon numéro est le ' . $_POST['num'] . ',  mon mail est ' . $_POST['email'] . ' et mon adresse est ' . $_POST['address'] . ' et je suis ' . $m;
	}
?>

