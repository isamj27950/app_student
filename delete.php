
<?php
//on demarre la session
session_start();
//connexion avec PDO
require_once("helpers/pdo.php");
require_once("helpers/functions.php");

if(!empty($_GET['id']) && isset($_GET['id']) && is_numeric($_GET['id'])){
    //on nettoie l'id
    $id = cleanInput($_GET['id']);
    echo $id;
    //faire la requette
    $sql = "DELETE FROM students where id= :id";
    // prépare la requette
    $query = $pdo->prepare($sql);
    //associe la valeur à un parametre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    //execute ma requette
    $query->execute();
    $_SESSION["succes"] ="Etudiant supprimé avec succés!!";
    //redirect
    header('location: index.php');

    

}else{
$_SESSION["error"] = "ID invalide";
//echo "l'id n'est pas valide!!!";
    //redirection quand l'id est invalide

    header('Location: index.php');
}