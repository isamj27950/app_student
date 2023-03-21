<?php 
$title ="Information sur l'étudiant";
session_start();
$styleLabel = "font-bold uppercase";
$style ="pb-3 text-xl";

//1demande model de me donner 1 seul etdudiant
require_once('models/model.php');

$student = get('students');
//capture
ob_start();
include('views/studentPage/show-student.php');
//3-stop la capture et stock tous ce que j'ai capture ds $content
$content = ob_get_clean();
require('views/layout.php');
