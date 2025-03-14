<?php
 session_start();
require("config/connexion.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Cedarville+Cursive&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Alex+Brush&family=Cedarville+Cursive&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="assets/css/sty_ad.css">
  <title>User dashboard</title>
</head>
<div class=" alex-brush-regular  bg-gray-500 text-center text-white">  <p class=" ">Triple A Services</p> </div>
<body class="cart bg-[url('assets/images/box3.jpg')] birthstone-regular ">

<header>
</header>


<button class="bg-blue-400 text-white rounded-[10px] mt-[30px] ml-[20px] pl-[30px]  pt-[17px]  pb-[17px] pr-[30px] hover:text-yellow-400"><a href="index.php" class="">Accueil</a></button>

<div class="text-white text-6xl pt-[30px] text-center"><p>Hi Dear user,</p>
<p>Bienvenue dans votre panier!</p></div> 

<div class=" overflow-x-auto shadow-md sm:rounded-lg mt-[100px] w-screen w-[950px] items-center ml-[320px] max-md:ml-[0px]">
    <table class="w-full text-sm text-left max-md:text-[10px]  rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead class="text-xl text-gray-700 max-md:text-[10px] max-md:w-[0px] uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-16 py-3 ">
                    <span class="sr-only">Images</span>
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Descriptions
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Quantites
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Prix
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

         
          <?php
              $qte = 0;
              $qtes=0;
              if(isset($_SESSION['panier'])){
               foreach(@$_SESSION['panier'] as $k => $v) {
                 $qtes += $v["qte"];
                $qte += $v["qte"]*$v['prix'];
                
              ?>



            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600 text-xl">
                <td class="p-4">
                   <img src="./assets/images/<?php echo $v["image"]?>">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    <?php echo $v["desc"]?>
                </td>
                <td class="px-6 py-4">
                <span class="sr-only">Quantity button</span>
               <?php echo $v["qte"]?>
        
                <span class="sr-only">Quantity button</span>
                          
                    </div>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                      <?php echo $v["prix"]?>
                </td>
                <td class="px-6 py-4">
                    <a href="./del_pan.php?sms=<?= $k?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>

            
            <?php
                }}
                
                ?> 
           
           <tr class="px-6 py-4 bg-white font-semibold text-gray-900 dark:text-white">
             <th >Total : $<?=$qte?></th>
             <td>
              <?=$qtes?>
             </td>
             <td></td>
             <td></td>
             <td></td>
           </tr>


        </tbody>
    </table>
</div>
</body>
</html>