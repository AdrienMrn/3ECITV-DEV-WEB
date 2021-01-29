<!DOCTYPE html>
<html>
<head>
	<title>Exo2</title>
</head>
<body>
	<form method="POST">
		<input type="number" name="a" value="<?php if (isset($_POST['a'])) { echo $_POST['a']; } ?>" placeholder="Chiffre a">
		
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="/" selected>/</option>
			<option value="*">*</option>
		</select>

		<input type="number" name="b" value="<?php if (isset($_POST['b'])) { echo $_POST['b']; } ?>" placeholder="Chiffre b">

		<?php
			if (
				isset($_POST['a']) && $_POST['a'] != '' &&
				isset($_POST['b']) && $_POST['b'] != '' &&
				isset($_POST['operator']) && $_POST['operator'] != ''
			) {
				if ($_POST['operator'] === '+') {
					echo '= ' . ($_POST['a'] + $_POST['b']);
				} elseif ($_POST['operator'] === '-') {
					echo '= ' . ($_POST['a'] - $_POST['b']);
				} elseif ($_POST['operator'] === '/') {
					echo '= ' . ($_POST['a'] / $_POST['b']);
				} elseif ($_POST['operator'] === '*') {
					echo '= ' . ($_POST['a'] * $_POST['b']);
				}
			}
		?>

		<br>

		<button type="submit">Calculer</button>
	</form>
</body>
</html>