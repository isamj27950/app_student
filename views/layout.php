<?php 
//demarage de la session
session_start();

//require_once('helpers/pdo.php');
include ("helpers/data.php");
include_once('helpers/functions.php');

?>
<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
    <!-- daisyui -->  
		<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.3/dist/full.css" rel="stylesheet" type="text/css" />
    <!-- taillwinds -->
     <script src="https://cdn.tailwindcss.com"></script>

   
    <title>Happy School | <?$title?></title>
</head>
<body >
    <!--header  -->
 <header class="bg-fuchsia-600 text-sky-300 text-3xl font-black pl-24 pt-4 h-24 max-w-full   ">
    <nav class="flex justify-between px-6 py-4 ">
       
        <div class="text-3xl text-sky-200 font-black uppercase bg-sky-400 rounded-full   ">
				<a href="index.php" class="logo px-4">Happy School</a>
		
        </div>

    <?php
    foreach($navItems as $item) {?>
        <a href="<?= $item['url'] ?>"><?= $item["name"] ?></a>
    <?php } ?>
    </nav>
 </header>
 <main class="px-24 py-20 flex flex-col min-h-screen"> 
    <!-- <?php titleH1($title)?> -->
    <?=$content ?>
    
 <!-- footer -->
</main>
<footer class ="bg-fuchsia-600 p-14 text-sky-500   max-w-full  ">
    <p class ="text-center text-2xl font-black">Welcome to Happy School</p>
    
<div class="footer_icon_container pt-8 text-3xl text-center uppercase  ">
				<a href="https://www.facebook.com/" target="_blank">
					<i class="fa-brands fa-facebook pl-1.5 pr-1.5 text-sky-300 "></i>
				</a>
				<a href="https://www.instagram.com/" target="_blank">
					<i class="fa-brands fa-instagram pl-1.5 pr-1.5 text-sky-300"></i>
				</a>
				<a href="https://www.youtube.com/" target="_blank">
					<i class="fa-brands fa-youtube pl-1.5 pr-1.5 text-sky-300"></i>
				</a>
			</div>
</footer>
    
</body>
</html>