   
 <div class="card  text-center flex-shrink-0 w-full max-w-sm bg-base-200 shadow-xl">
    <figure><img src="<?=$student['url_img'] ?>"alt= "movie" /></figure>
    <div class="card-body">
        <p class="text-5xl font-bold "><?= $student['fName'] ,$student['lName']?></p>
        <p class="">Email: <?= $student['email']?></p>
        <p class="">Age: <?= $student['age']?> ans</p> 
        <p class="">Formation: <?= $student['formation']?><p>
            <div class="mt-10 text-center">
             <a class="btn btn-info ">modifier</a>
             <a  href="delete.php?id=<?=$student['id']?>"class="btn btn-active btn-error">supprimer</a>
            </div>

  </div>
</div>                               