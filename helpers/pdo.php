<?php
//1-creation des variables
$serveur ="localhost";
$dbname ="escci_app_student";
$login ="root";
$password ="";

try {
    $pdo = new PDO("mysql:host=$serveur;dbname=$dbname", $login, $password, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        //recuperer datas sous forme de tableaux associatifs
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        //Voir les erreurs
        PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING
    ));
   // echo "TOTO a réussi à se connecter!!!!";
} catch (PDOException $e) {
    echo 'Erreur de connection : ' .$e->getMessage();
}
