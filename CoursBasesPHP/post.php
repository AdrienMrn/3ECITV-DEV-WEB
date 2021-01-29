<!DOCTYPE html>
<html>
<head>
	<title>Poster des données</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="test_data">
		<button type="submit">Envoyer</button>
	</form>
</body>
</html>

<?php

// Récupération des params POST
// isset(VAR) permet de tester l'existance de la variable
if (isset($_POST['test_data'])) {
	echo 'Soumission du form : ' . $_POST['test_data']; // Param écrit par l'utilisateur
} else {
	echo 'Aucune soumission faite';
}
