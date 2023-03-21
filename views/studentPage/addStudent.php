<?php
include_once('helpers/functions.php');
// validation du formulaire
// 1-creation de mes variables
$error = [];
$errMsgRequire = "<span class='text-red-500'>Ce champs est obligatoire</>";
$success = false;

// 2-Je vérifie si le formualire est soumis
if (!empty($_POST['submitted'])) {
    debug_array($_POST);
   // 3- protege contre faille xss
  ///////////////////////////////
  $fName = trim(htmlspecialchars($_POST['fName']));
  $lName = trim(htmlspecialchars($_POST['lName']));
  $email = trim(htmlspecialchars($_POST['email']));
  $age = trim(htmlspecialchars($_POST['age']));
  $formation = trim(htmlspecialchars($_POST['formation']));

  //validate des champs
  //debug_array($_POST);
    if(empty($fName)){
        $error['fName'] = $errMsgRequire;
    }elseif (strlen($fName) < 4 || strlen($fName) > 40) {
        $error['fName'] = "<span class='text-red-500'>Le Prénom doit contenir 4 à 40 caractéres</span>";
    }

     // nom
     if(empty($lName)){
        $error['fName'] = $errMsgRequire;
    }elseif (strlen($lName) < 4 || strlen($lName) > 40) {
        $error['fName'] = "<span class='text-red-500'>Le Prénom doit contenir 4 à 40 caractéres</span>";
    }
    
    if(empty($email)){
        //verifi le bon format email
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "<span class='text-red-500'>Votre email est invalide </span>";
    }
    }

  
    // age
  // verifie que user a bien rempli le champs
  if (!empty($age)) {
    // verifie que l'age est un nombre entier
    if (!is_numeric($age)) {
      $error['age'] = "<span class='text-red-500'>Merci de rentrer un age correct</span>";
      // verifie qu'il est majeur
    } elseif ($age < 18) {
      $error['age'] = "<span class='text-red-500'>Tu es mineur</span>";
    
     } else {
        $error['age'] = $errMsgRequire;
        }
    }
   // formation
  if (!empty($formation)) {
    $error['formation'] = $errMsgRequire;
    }elseif(strlen($formation) <4 || strlen($formation) >40){
      $error['formation'] = "<span class='text-red-500'>3 caractères minimum</span>";
      
    }
}


?>

<div class="text-center">
    <form method="POST" >
            <!--  firstname -->
            <div class="form-control  ">
                <label class="label" for="fName">
                    <span class="label-text font-black">Votre Prénom</span>
                </label>
                <label class="input-group">
                    <span>Prénom</span>
                <input type="text" placeholder="Type here" class="input input-bordered " name="prenom" id ="prenom" />
                <p><?php errorMsg('fName')?></p>
            </div>
              <!-- lastname -->
            <div class="form-control">
                <label class="label" for="lName">
                    <span class="label-text font-black"> Votre Nom</span>
                </label>
                 <label class="input-group">
                    <span>Nom</span>
                <input type="text" placeholder="Type here" class="input input-bordered " name="nom" id ="nom" />
                <p><?php errorMsg('lName')?></p>
            </div>
                <!-- email-->
               <div class="form-control">
                <label class="label"- for="email">
                    <span class="label-text font-black">Votre Email</span>
                </label>
                <label class="input-group">
                    <span>Email</span>
                <input type="text" placeholder="exemple@gmail.com" class="input input-bordered "  />
                </label>
                <p><?php errorMsg('email')?></p>
            </div> 

            <!--  age -->
            <div class="form-control  ">
                <label class="label" for="age">
                    <span class="label-text font-black">Votre Age</span>
                </label>
                <label class="input-group">
                    <span>Age</span>
                <input type="number" placeholder="" class="input input-bordered " name="age" id ="age" />
                <p><?php errorMsg('age')?></p>
            </div>
            <!--  formation -->
            <?php
            $formationOptions =[
                ["name" => "Dev React", "checked"=>"checked"],
                ["name" => "Dev Front"],
                ["name" => "Dev Back"],
                ["name" => "Dev Symfony"],
                ["name" => "Commerce international"],
            ]
            ?>
            <div class="form-control ">
                    <label class="label">
                        <span class="label-text font-black">Choisir ta formation</span>
                    </label>
                    <label class="input-group">
                        <span>Formation</span>
                        <select class="select select-bordered" name="formation">
                            <option disabled selected>Choisis une formation</option>
                             <?php foreach ($formationOptions as $item): ?>
                                <option value="dev react"><?= $item['name']?></option>
                             <?php endforeach ?>
                        </select>
                    </label>
                    <p><?php errorMsg('formation')?></p>
                </div>
            <!-- btn submit -->

            <input type="submit" class="btn btn-active btn-secondary mt-5 font-black" name="submitted"
                value="envoyer"   >

    </form>
</div>