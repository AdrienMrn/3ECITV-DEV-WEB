<?php


// Déclaration et initialisation du compteur
$i = 0;

// Boucle générant la table de multiplication du 9
while($i<=10)
{
    // Affichage de la nouvelle ligne
    echo '9 x ' . $i . ' = ' . (9*$i) . '<br/>';
    // Incrémentation du compteur
    $i++;
}

$interupter = true;
while($interupter) {
	echo $i . '<br/>';
	$i++;

	if ($i === 100) {
		$interupter = false;
	}
}