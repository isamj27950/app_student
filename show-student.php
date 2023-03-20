<?php 
$title ="Information sur l'étudiant";
$style ="pb-3 text-xl";

include('partials/_header.php');


//debug_array($_GET);
    //1- recuper le bon id du student
if(!empty($_GET['id']) && isset($_GET['id']) && is_numeric($_GET['id'])){
    //on nettoie l'id
    $id = cleanInput($_GET['id']);
    echo $id;
    //faire la requette
    $sql = "SELECT * FROM students where id= :id";
    // prépare la requette
    $query = $pdo->prepare($sql);
    //associe la valeur à un parametre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    //execute ma requette
    $query->execute();
    //on stocke student dans une variable
    $student = $query->fetch();
   // debug_array($student);

    //pas d'etudiant alors on est  rediriject vers la liste
    if(!$student) {
        $_SESSION["error"] ="Cet étudiant n'existe pas!";
        header('Location: index.php');
    }

}else{
$_SESSION["error"] = "ID invalide";
//echo "l'id n'est pas valide!!!";
    //redirection quand l'id est invalide

    header('Location: index.php');
}
?>
<h1 class="text-center text-3xl uppercase font-black py-4 mb-8 text-sky-300"><?= $title ?></h1>
<?php
//include('partials/studentPage/_table-studentPage.php')
?>


                                <div class="">
                                    <div class="avatar">
                                        <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2 ">
									        <img src="<?= $student['url_img'] ?>" alt="fiche étudiant">
                                        </div>
                                    </div>
									   
								  
									<div class="text-center">
                                        <p class="text-4xl font-bold"><?= $student['fName']?></p> 
                                        <p class="text--4xl font-bold"><?= $student['lName']?><p>     
                                        <p class=""><?= $student['email']?></p>
                                        <p class=""><?= $student['age']?> ans</p> 
                                        <p class=""><?= $student['formation']?><p>
                                        <div class="mt-10">
                                            <a class="btn btn-info ">modifier</a>
                                            <a  href="delete.php?id=<?=$student['id']?>"class="btn btn-active btn-error">supprimer</a>
                                        </div>   


            
                                    </div>
									
								</div>
							</div>

<?php 
include('partials/_footer.php');
?>  