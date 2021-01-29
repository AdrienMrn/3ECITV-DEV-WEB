<?php 

$dbUser = 'root';
$dbPwd = '';
$dbName = 'cours_3ecitv';

try {
    $db = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser, $dbPwd);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// SELECT des_champs FROM une_table
$reponse = $db->query('SELECT * FROM user');
//var_dump($reponse->fetchAll());

while($data = $reponse->fetch())
{
    echo $data['firstname'] . ' ' . $data['lastname'] . ' ' . $data['email'] . '<br>';
}

$reponse->closeCursor(); 