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