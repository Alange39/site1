     <?php
require('config/connexion.php')
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
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Alex+Brush&family=Cedarville+Cursive&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
 <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets\css\style.css">
  <title>Main page</title>
 </head>
 <body class="bg-gray-300 birthstone-regular w-screen w-[19px]">
<div class=" alex-brush-regular  bg-gray-500 text-center text-white ">  <p class=" ">Triple A Services</p> </div>

    <header  id="head" class="text-xl max-md:text-lg w-[2000px]  flex max-md:flex-col justify-between ">
    <nav  id="nav" class="bg-gray-200 hover:text-gray-400 w-screen pr-4  flex justify-between ">
    <p class=" cedarville-cursive-regular   pt-[20px] pl-[50px] ">Watch am</p>
     <ul class=" text-white flex gap-[30px] max-md:flex-wrap text-black">
      <li class="pt-[20px] "> <a href="index.php"class="pt-[30px]">Acceuil</a></li>
      <li class="pt-[20px] "> <a href="produits.php"class="pt-[30px]">Nos produits</a></li>
      <li class="pt-[20px]"> <a href="./ac_conn.php" class="">My account</a></li>
      <li class="pt-[20px]"> <a href="./contact.php" class="pr-[20px]">Contact us</a></li>
      <li class="pt-[20px]"> <a href="./deconnexion.php" class="pr-[20px]">Deconnexion</a></li>
      <svg class=" max-lg:invisible w-8 h-8 text-gray-800 dark:text-white mt-[20px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
   
</svg>
      </ul>
    </nav>
 </header>

<div class="w-screen "><a href="./cart.php?sms=<?= $sms = "."?>" class="bg-red-600 text-white rounded-full absolute text-center top-[37px] right-[10px] w-[21px]">4</a></div>

    <p id="title" class="alex-brush-regular text-[50px] text-center  text-white  w-screen">Une montre imposante mais elegante, <br>Faites votre choix</p>
  </div>
  <section  class="w-screen flex mt-[60px] max-md:block max-md:pb-[50px] bg-white border-y-4 border-yellow-200 h-[690px] items-center w-screen">
    <div>
      <img src="assets/images/New.jpg" alt="Message altenatif" class="mix-blend-multiply w-[1000px] ">
    </div>
    <div  >
    <img src="assets/images/Mc.jpg" alt="message alternatif " class="  mix-blend-multiply h-[480px] max-lg:h-[440px]">
    </div>
  </section >
  <div id="sect1"></div>

  <section id="sect2" class= "flex ml-[50px]  max-md:block max-md:m-[5px] birthstone-regular gap-[40px] mt-[90px]">
    <div class=" max-md:m-[20px]  mt-[50px]"><p class="ml-[130px] text-yellow-400 text-xl">ABOUT US.</p>
      <p class="text-xl mt-[30px]">Le site <a href="">Watch am</a> est une revolution Camerounaise, qui propose a ses clients <br>
      d'acheter des montres directement en ligne. Tandis que la plupart des marques <br> d'horlogeres ne jurent que par les points de vente,
       avec un site vitrine en  <br>renfort,la marque du grand groupe Watchs se distingue en adoptant un nouveau <br> levier de vente, qui a largement fait ses preuves 
       : le commerce en ligne. </p>
    </div>

    <div>
      <img src="assets/images/img3.jpg" alt="image alternative" class="mix-blend-multiply w-[750px] opacity-[90px]">
    </div>
  </section>
  
  
  <section class="bg-white w-screen   ">
    <div><p class="alex-brush-regular text-gray-400 w-[2000px] text-center text-4xl pt-[50px]"> <u>Une gamme variee pour des choix varies</u></p></div>
    <div class="flex gap-[30px] max-md:block  max-md:border-x-2 border-gray-200 border-b-2">
      <img src="assets/images/mlh.jpg" alt="" class=" max-md:w-screen max-md:gap-[5px] max-md:m-0 max-md:border-white mix-blend-multiply ml-[30px]">
      <p class="text-xl mt-[140px] birthstone-regular ml-[40px]">Generalement, la plupart des grands noms du secteur tels que <b>Bucherer a paris,</b>ou encore <b>Horel a Bordeau</b>beneficient d'un site
      de commerce sur lequel on trouve de belles montres. Mais aujourd'hui, nous vous presentons des boutiques qui offres un large choix de montres, a des prix tres interessants
      Nos services qui reposent sur des exigences strictes,donnent tout pour vous presenter des montres de qualites aussi physiquement 
        elegante que fiables a 100%, concus par nos horlogers Suisses et de partout dans le monde, ayant des annees d'experiences et de pratiques.
        Ceux ci adaptent les models, ainsi que la qualite aux tendances du moment 
      </p>
    </div>
<!--     
    <div class="mt-[40px] border-t-2 border-gray-100  ml-[400px] w-[700px]">
    </div> -->
    <div class="bg-white ">
      <p class="text-5xl alex-brush-regular text-gray-400 text-center mt-[30px]"><u>Nos Produits</u></p>
      </div>
    </div>
  </section>


  <section class="bg-white flex w-screen max-md:flex-wrap pt-[50px] gap-[100px] justify-center border-x-4 border-yellow-200">
    
    <div class="border-black "><img src="assets/images/box.jpg" alt="">
    <button class="bg-black text-white rounded-full w-[40px] opacity-70">1/6</button>
    <p class="">Montre automatique en acier <br>lumineux pour hommes</p>
    <p><b>174,510 CFA-176,246 CFA </b>/ piece</p>
    <p><b>1 piece</b>(MOQ)</p>
    <div class="flex max-lg:flex-wrap">
        <button class="bg-gray-500 text-white mt-[30px] hover:border-4 hover:border-gray-300 w-[200px] rounded-[15px] pt-[10px] pb-[10px] pl-[5px] pr-[5px]">Contactez maintenant</button>
    
      </div>
      </div>

      
      <div>
        <img src="assets/images/box2.jpg" alt="">
    <button class="bg-black text-white rounded-full w-[40px] opacity-70">1/6</button>
    <p>Montre de luxe etanche en acier <br> pour hommes</p>
    <p><b>220,0 CFA-276,06 CFA </b>/ piece</p>
    <p><b>2 pieces</b>(MOQ)</p>
    <div class="flex">
        <button class=" bg-black text-white mt-[30px] hover:border-4 hover:border-gray-300 rounded-[15px] w-[200px] pt-[10px] pb-[10px] pl-[7px] pr-[7px]">Contactez maintenant</button>
     
      </div>

      </div>
          <div>
        <img src="assets/images/box3.jpg" alt="">
    <button class="bg-black text-white rounded-full w-[40px] opacity-70">1/6</button>
    <p>Montre personnalisee de haute<br> qualite Am 100Smart Montre</p>
    <p><b>420,0 CFA-706,06 CFA </b>/ piece</p>
    <p><b>1 piece</b>(MOQ)</p>
    <div class="flex">
        <button class=" bg-gray-500 text-white mt-[30px] hover:border-4 rounded-[15px] hover:border-gray-300 w-[200px]  pt-[10px] pb-[10px] pl-[7px] pr-[7px]">Contactez maintenant</button>
   
      </div>
      </div>

          <div>
        <img src="assets/images/box1.jpg" alt="">
    <button class="bg-black text-white rounded-full w-[40px] opacity-70">1/6</button>
    <p>Montre de luxe etanche <br>montre chronographe</p>
    <p><b>100,0 CFA </b>/ piece</p>
    <p><b>10 piece</b>(MOQ)</p>
    <div class="flex">
        <button class="rounded-[15px] hover:border-4 hover:border-gray-300 w-[200px] bg-black text-white mt-[30px]  pt-[10px] pb-[10px] pl-[7px] pr-[7px]">Contactez maintenant</button>
     
      </div>
      </div>
       </section>


      <section class="bg-white w-screen max-md:flex-wrap max-md:items-center flex pt-[80px]  justify-center gap-[100px] pb-[30px] border-x-4 border-yellow-200">
      <div>
      <div>
        <img src="assets/images/box4.jpg" alt="">
    <button class="bg-black text-white rounded-full w-[40px] opacity-70">1/6</button>
    <p>Montre automatique luxueux <br>pour hommes au Design cool</p>
    <p><b>340,40 CFA-500,0 </b>/ piece</p>
    <p><b>2 pieces</b>(MOQ)</p>
    </div>
    <div class="flex">
        <button class="rounded-[15px] hover:border-4 hover:border-gray-300 w-[200px] bg-gray-500 text-white mt-[30px]  pt-[10px] pb-[10px] pl-[7px] pr-[7px]">Contactez maintenant</button>
    
      </div>
      </div>

        <div>
          <div>
        <img src="assets/images/img1.jpg" alt="" class="h-[270px]">
    <button class="bg-black text-white rounded-full w-[40px] opacity-70">1/6</button>
    <p>Montre automatique luxueux <br>pour hommes au Design cool</p>
    <p><b>340,40 CFA-500,0 </b>/ piece</p>
    <p><b>2 pieces</b>(MOQ)</p>
    </div>
    <div>
        <button class=" rounded-[15px] bg-black text-white mt-[30px] hover:border-4 hover:border-gray-300 w-[200px]  pt-[10px] pb-[10px] pl-[7px] pr-[7px]">Contactez maintenant</button>
      
      </div>
      </div>
 

        <div>
           <div>
        <img src="assets/images/acier1.jpg" alt="">
    <button class="bg-black text-white rounded-full w-[40px] opacity-70">1/6</button>
    <p>Montre automatique luxueux <br>pour hommes au Design cool</p>
    <p><b>340,40 CFA-500,0 </b>/ piece</p>
    <p><b>2 pieces</b>(MOQ)</p>
    </div>
    <div class="flex">
        <button class="bg-gray-500 text-white hover:border-4 hover:border-gray-300 w-[200px] mt-[30px]  pt-[10px] pb-[10px] pl-[7px] pr-[7px] rounded-[15px]">Contactez maintenant</button>
     
      </div>
      </div>
 
 
  </section>


  <footer class="birthstone-regular pb-[30px]  border-x-4 border-yellow-200 border-b-2 bg-gray-200 pl-[50px] text-xl w-screen">
      <p class="cedarville-cursive-regular text-white text-center pt-[30px] ">Watch am</p>
    <div class="flex gap-[170px] pt-[40px] max-md:flex-wrap">
      <div >
        <b>Menu</b>
        <p>Outils <br> Formation <br>Contact et parrainage <br>Conseiller <br>Newsletter</p>
        <p>Qui sommes nous? <br>Mentions legales <br>Conditions generales d'utilisation</p>
      </div>
      <div>
        <b>Guides</b> <br>
      <a href="" >Investir en bourse</a><br>
      <a href="">Comparatif d'assurances vie</a><br>
      <a href="">Ouvrir PEA(comparatif)</a><br>
      <a href="">Comparatif PER</a><br>
      <a href="">Defiscalisation</a><br>
      <a href="">Preparer sa retraite</a><br>
      <a href="">Gestionnaire de patrimoine</a><br>
      <a href="">Comparatif banques en ligne</a></div>
      
      <div>
        <b>Evenements</b><br>
        <a href="">Anniversaire</a><br>
        <a href="">Fiancailles</a><br>
        <a href="">Mariage</a><br>
        <a href="">Bapteme</a><br>
        <a href="">Communion</a><br>
        <a href="">Fete des peres</a><br>
        <a href="">Fete des meres</a><br>
        <a href="">Saint valentin</a>

      </div>
      <div>
        <b>HORLOGERIES</b><br>
        <a href="">Nos boutiques</a><br>
        <a href="">Nous contacter</a><br>
        <a href="">CGV</a><br>
        <a href="">Mentions speciales</a><br>
        <a href="">Confidentialite</a>
      </div>
    </div>
  </footer>

<section class="flex bg-white justify-between w-screen max-md:flex-col items-center">
 

    <div class=" w-[300px]"> Copyright&copy2025 -All rights reserved </div>
    <div><p class="alex-brush-regular w-[150px]">Triple A Services</p>


<section>
      <div class= " text-black flex gap-[20px] ml-[500px] bg-white items-center">
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
    <script>
      function divise() {
      const sect1 = document.getElementById('sect1') ;
      const sect2 = document.getElementById('sect2') ;
      sect2.style.position= "relative"
      const res = sect1.getBoundingClientRect() ;
      sect2.style.top=`${res.buttom}px`

      console.log(`x:${res.top}`)
      
      }
      divise()
      window.addEventListerner('load',divise) ;
      window.addEventListerner('scroll',divise) ;
      window.addEventListerner('resize',divise) ;

    </script>
 </body>
 </html>