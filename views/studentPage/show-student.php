   <div class="min-h-sreen bg-base-200">
                                    <div class="avatar flex-col lg:flex-row">
                                        <div class="w-24 rounded-xl ">
									        <img src="<?= $student['url_img'] ?>" alt="fiche étudiant" class=max-w-sm rounded-lg shadow-2xl>
                                        </div>
                                    </div>
									   
								  
									<div class="text-center">
                                        <p class="text-4xl font-bold"><?= $student['fName']?></p> 
                                        <p class="text-4xl font-bold"><?= $student['lName']?><p>     
                                        <p class="">Email: <?= $student['email']?></p>
                                        <p class="">Age: <?= $student['age']?> ans</p> 
                                        <p class="">Formation: <?= $student['formation']?><p>
                                        <div class="mt-10">
                                            <a class="btn btn-info ">modifier</a>
                                            <a  href="delete.php?id=<?=$student['id']?>"class="btn btn-active btn-error">supprimer</a>
                                        </div>   


            
                                    </div>
									
								</div>