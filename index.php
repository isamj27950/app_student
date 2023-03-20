<?php 



$title ="Liste De Nos Etudiants";
require_once('helpers/pdo.php');
include('partials/_header.php');


// 1 selectionne tous dans ma db
$sql ="SELECT * FROM students ORDER BY lNAME";
//2-Prépare ma requette
$query =$pdo->prepare($sql);
//3-Executela requette
$query->execute();
//4-je stock le resultat dans une variable
$students =$query->fetchALL();
//debug_array($students);

?>
<div>
    
<h1 class="text-center text-3xl uppercase font-black py-4 mb-8 text-sky-300"><?= $title ?></h1>
<?php

//je verifie que $_session a bien un message
//s'il ya message j'affiche l'alerte sinon j'affiche rien
if(!empty($_SESSION['error'])){ ?>
    <div class="alert alert-error shadow-lg">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>Error! <?=$_SESSION['error']; ?></span>
  </div>
</div>

<?php
}elseif(!empty($_SESSION["success"])){ ?>
<div class="alert alert-success shadow-lg">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span><?= $_SESSION['success']; ?></span>
  </div>
</div>
<?php }

//reinitialise la valeur de la session a vide

$_SESSION['error'] = "";
//session_destroy();
include('partials/studentPage/_table-studentPage.php');
?>



 
</div>   
 <?php 
include('partials/_footer.php');
?>  