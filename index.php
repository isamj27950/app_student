<?php 
//titre de la page
$title ="Liste De Nos Etudiants";

session_start();

//1-demande à model de lui donner ts les étudiants
require_once('models/model.php');


//query for get all students
$students =getALL('students','fName');

//2-je fais une capture de ts les html
ob_start();
include('views/studentPage/home-student.php');

//3-stop la capture et je stocks ce que j'ai capturé dans $content
$content = ob_get_clean();
require('views/layout.php')
?>




 