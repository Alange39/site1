<?php
session_start();
require("./config/connexion.php");
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
  <link rel="stylesheet" href="assets/css/sty_prod.css">
  <link rel="stylesheet" href="assets/css/style.css">
 <script src="https://cdn.tailwindcss.com"></script>
  <title>Product presentation</title>
</head>
<body>
  
<div class=" alex-brush-regular  bg-gray-500 text-center text-white">  <p class=" ">Triple A Services</p> </div>

<body class="birthstone-regular">
   <header class=" h-[70px] max-md:h-[170px] pl-[50px] flex  pt-[10px] bg-gray-300  justify-between">
    <div> <p class="cedarville-cursive-regular pt-[5px]">Watch am</p></div>
    <div class="">
       <ul class=" flex gap-[50px] text-white text-xl flex max-md:block">
      <li>
 <a href="./index.php"class="hover:text-gray-400  ">Acceuil</a></li>
      <li><a href="./pprod.php" class="hover:text-gray-400">Nos Produits</a></li>
      <li> <a href="./ac_conn.php" class="hover:text-gray-400">My account</a></li>
      <li> <a href="./contact.php" class="hover:text-gray-400">Contact us</a></li>

       <svg class="w-9 h-9 text-gray-800 dark:text-white mt-[5px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
</svg>
      </ul>
    </div>
    
  </header>
<div><span class="bg-red-600 text-white rounded-full absolute text-center top-[34px] right-[47px] w-[21px]">4</span></div>

  <div>
    <p id="titre" class=" text-[50px] max-md:text-xl text-center  text-gray-400 justify-center pt-[60px]">
       Venez decouvrir un large et choix de produits divers</p>
  </div>
 <p class="text-center text-orange-900 text-2xl  underline pt-[40px] pb-[40px] hover:text-gray-400">
  Montres Bracelets de luxe pour hommes
 </p>

<!-- premiere montre -->
<section class=" flex gap-[10px] max-md:flex-wrap w-screen pl-[20px]">
   <div class="" >
  <div  class="text-center text-lg">
  <div class="">
        <img src="./assets/images/tel3.jpeg" alt="" class=" hover:w-[350px] hover:h-[300px] max-md:h-[260px] h-[295px] max-md:w-[240px]  w-[280px] ">
    </div>
    <div>
       <p class="text-lg  "> Montre Homme Quartz Cadran Gris <br> & Bracelet Acier| Aquarius <br> <span class=" font-semibold">99,99$</span></p>
    </div>
     <div>
    <button class="text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] rounded-[15px] hover:border-4 hover:border-blue-200  pb-[15px] pl-[40px] pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
  </div>
  </div>

  <!-- Deuxieme montre -->
  <div  class="text-center text-lg">

     <div class="">
        <img src="./assets/images/tel2.jpg" alt="image alternative" class="hover:w-[370px] hover:h-[290px] ">
    </div>
    <div>
       <p> Montre Homme Acier Cadran bleu <br> & Bracelet Cuir Bleu| President <br> <span class=" font-semibold">149,99$</span></p>
    </div>
     <div>
   <button class="text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] rounded-[15px] hover:border-4 hover:border-blue-200  pb-[15px] pl-[40px] pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
  </div>
 </div>
<!-- Troisieme montre -->
<div  class="text-center text-lg">
  <div class="">
        <img src="./assets/images/tel4.jpg" alt="image alternative" class="hover:w-[370px] hover:h-[290px]">
    </div>
    <div>
       <p> Montre Homme Acier Cadran Blanc <br> & Bracelet Cuir Brun| President <br> <span class=" font-semibold">149,99$</span></p>
    </div>
     <div>
    <button class="text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] rounded-[15px] hover:border-4 hover:border-blue-200  pb-[15px] pl-[40px] pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
</div>

<div class="text-center text-lg">
  <div  class="">
        <img src="./assets/images/tel6.jpg" alt="image alternative" class="h-[295px]" class="hover:w-[470px] hover:h-[390px]">
    </div>
    <div>
       <p> Montre Chronos Sport Acier Cadran Gris <br> & Lunette Bleue| D500 <br> <span class=" font-semibold">149,99$</span></p>
    </div>
     <div>
    <button class="text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] rounded-[15px] hover:border-4 hover:border-blue-200  pb-[15px] pl-[40px] pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
</div>

<div  class="text-center text-lg">
<div>
        <img src="./assets/images/tel1.jpeg" alt="image alternative" class="h-[295px]" class="hover:w-[370px] hover:h-[290px]">
    </div>
    <div>
       <p> Montre Homme Quartz Luxe <br> Cadran Bleu Bracelet Acier| Aquarius <br> <span class=" font-semibold">99,99$</span></p>
    </div>
     <div>
  <button class="text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] pb-[15px] rounded-[15px] hover:border-4 hover:border-blue-200  pl-[40px] pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
</div>
   
</section>


<section class="max-md:flex-wrap flex gap-[20px] max-md:items-center pl-[20px]">
  <div  class="text-center text-lg">
  <div class="hover:w-[370px]">
        <img src="./assets/images/tel5.jpg" alt="" class="h-[295px] w-[280px]" class="hover:w-[370px] hover:h-[290px]">
    </div>
    <div>
       <p> Montre Homme Quartz Cadran Bleu <br> & Bracelet Acier| Aquarius <br> <span class=" font-semibold">99,99$</span></p>
    </div>
    <div>
    <button class="text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] rounded-[15px] hover:border-4 hover:border-blue-200  pb-[15px] pl-[40px] pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
  </div>

  <div  class="text-center text-lg">

     <div>
        <img src="./assets/images/tel7.jpg" alt="image alternative" class="hover:w-[370px] hover:h-[290px]">
    </div>
    <div>
       <p> Montre Homme Acier Cadran Noir <br> & Bracelet Cuir Noir| President <br> <span class=" font-semibold">149,99$</span></p>
    </div>
     <div>
     <button class="text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] rounded-[15px] hover:border-4 hover:border-blue-200  pb-[15px] pl-[40px] pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
  </div>
  

<div  class="text-center text-lg">
  <div>
        <img src="./assets/images/tel8.jpg" alt="image alternative" class="hover:w-[370px] hover:h-[290px]">
    </div>
    <div>
       <p> Montre Homme Acier Cadran Vert <br> & Bracelet Acier| Aquarius <br> <span class=" font-semibold">149,99$</span></p>
    </div>
     <div>
     <button class="text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] pb-[15px] rounded-[15px] hover:border-4 hover:border-blue-200  pl-[40px] pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
</div>

<div class="text-center text-lg">
  <div  class="">
        <img src="./assets/images/tel9.jpg" alt="image alternative"class=" w-[350px] h-[270px] hover:w-[370px] hover:h-[290px] "  >
    </div>
    <div>
       <p> Montre Homme de luxe en Acier Inoxidable<br> Avec Cadran Bleu| D500 <br> <span class=" font-semibold">48,90$</span></p>
    </div>
     <div>
    <button class="text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] pb-[15px] pl-[40px] rounded-[15px] hover:border-4 hover:border-blue-200  pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
</div>

<div  class="text-center text-lg hover:w-[370px]">
<div>
        <img src="./assets/images/tel10.jpg" alt="image alternative" class="hover:w-[370px] hover:h-[290px]">
    </div>
    <div>
       <p> Montre Homme Mecanisme Apparent de Luxe <br> en Acier Inoxidable| D500 <br> <span class=" font-semibold">54,90$</span></p>
    </div>
     <div>
    <button class="text-white bg-blue-900 text-center pt-[15px] rounded-[15px] hover:border-4 hover:border-blue-200  hover:text-yellow-400 mt-[17px] pb-[15px] pl-[40px] pr-[40px]">
                  <a href="./cart.php">Ajouter au panier</a></button>
    </div>
</div>
   
</section>





<section  class="pt-[30px] flex pl-[20px] w-screen mt-[50px] gap-[20px] flex-wrap">
<?php
     try{
                  $hom = 'Montres Bracelets de luxe pour hommes';
                $stmt=$conn->prepare("SELECT*FROM produits WHERE categories = :cat");
                 $stmt->bindparam(":cat", $hom);
                $stmt->execute();

                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as $k => $v) {
                
            
                  ?>

                  <div  class=" text-lg">
                  <div class="hover:w-[370px]">
                    <p>
                      <?php echo $v["categories"]?>
                    </p>
                  <img src="./assets/images/<?php echo $v["images"]?>" alt="image alternative" class="h-[295px]">
                  </div>
                  <div class="text-center w-[250px]">
                  <p class="inline-block"> <?php echo $v["descriptions"] ?><br> <span class=" font-semibold"><?php echo $v["prix"]?>$</span></p>
                  </div>
                  <div>
                  <button class="rounded-[15px] hover:border-4 hover:border-blue-200 text-white bg-blue-900 text-center pt-[15px] hover:text-yellow-400 mt-[17px] pb-[15px] pl-[40px] pr-[40px]">
                  <a href="./add_cart.php?smspanier=<?= $v["id"]?>">Ajouter au panier</a></button>
                  
                
                  </div>
                </div>


    <?php
            }}
            catch(PDOException $e){
                echo"erreur d'insertion". $e->getMessage();

            }
            ?>

</div>

</section>

<section class="w-screen">
   <div><p class="pt-[110px] pb-[30px] text-center text-blue-900 underline text-4xl">Nos partenaires</p></div>
   <div class="w-screen">
      <img src="./assets/images/Watch-Shop.jpg" alt="" class="w-screen ">
      <img src="./assets/images/Bijourama.jpg" alt="" class=" pt-[70px] w-screen">
      <div class="flex max-md:block pt-[70px] w-screen">
         <img src="./assets/images/Chic-Time.jpg" alt="" class="w-[764px]">
         <img src="./assets/images/piaget.jpg" alt="" class="w-[750px] ">

      </div>
   </div>
</section>
  

      
       <footer class="birthstone-regular pb-[30px] mt-[0px] max-md:w-[360px] max-md:block max-md:flex-wrap border-x-4
        border-yellow-200 border-b-2  bg-gray-200 pl-[50px] text-xl">
      <p class="cedarville-cursive-regular text-white text-center pt-[30px] ">Watch am</p>
    <div class="flex gap-[170px] pt-[40px] max-md:flex-wrap">
      <div  class=" max-md:hidden  max-md:text-[17px] ">
        <b>Menu</b>
        <p>Outils <br> Formation <br>Contact et parrainage <br>Conseiller <br>Newsletter</p>
        <p>Qui sommes nous? <br>Mentions legales <br>Conditions generales d'utilisation</p>
      </div>
      <div>
        <b>Guides</b> <br>
      <a href="" class="hover:text-orange-500" >Investir en bourse</a><br>
      <a href="" class="hover:text-orange-500" >Comparatif d'assurances vie</a><br>
      <a href="" class="hover:text-orange-500" >Ouvrir PEA(comparatif)</a><br>
      <a href="" class="hover:text-orange-500" >Comparatif PER</a><br>
      <a href="" class="hover:text-orange-500" >Defiscalisation</a><br>
      <a href="" class="hover:text-orange-500" >Preparer sa retraite</a><br>
      <a href="" class="hover:text-orange-500" >Gestionnaire de patrimoine</a><br>
      <a href="" class="hover:text-orange-500" >Comparatif banques en ligne</a></div>
      
      <div>
        <b>Evenements</b><br>
        <a href="" class="hover:text-orange-500" >Anniversaire</a><br>
        <a href="" class="hover:text-orange-500" >Fiancailles</a><br>
        <a href="" class="hover:text-orange-500" >Mariage</a><br>
        <a href="" class="hover:text-orange-500" >Bapteme</a><br>
        <a href="" class="hover:text-orange-500" >Communion</a><br>
        <a href="" class="hover:text-orange-500" >Fete des peres</a><br>
        <a href="" class="hover:text-orange-500" >Fete des meres</a><br>
        <a href="" class="hover:text-orange-500" >Saint valentin</a>

      </div>
      <div>
        <b>HORLOGERIES</b><br> 
        <a href="" class="hover:text-orange-500" >Nos boutiques</a><br>
        <a href="" class="hover:text-orange-500" >Nous contacter</a><br>
        <a href="" class="hover:text-orange-500" >CGV</a><br>
        <a href="" class="hover:text-orange-500" >Mentions speciales</a><br>
        <a href="" class="hover:text-orange-500" >Confidentialite</a>
      </div>
    </div>
  </footer>
<section class="flex bg-white justify-between max-md:flex-wrap  max-md:m-0" >
  <section class="bg-white flex pl-[200px]  max-md:pl-[20px] gap-[90px] pt-[5px] max-md:block max-md:flex-wrap ">

    <div class=" w-[400px]"> Copyright&copy2025 -All rights reserved </div>
    <div><p class="alex-brush-regular w-[150px]">Triple A Services</p>

   </section>  
<section class="max-md:hidden ">
      <div class= " text-black flex gap-[20px] ml-[500px] bg-white">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
</svg>

<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
</svg>

<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z" clip-rule="evenodd"/>
</svg>

  

<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
  <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
</svg>

      </div>
    </div>
   </section>

    </section>


  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
 <script src="./assets/js/add.js"></script>
</body>
</html>