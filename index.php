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
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Cedarville+Cursive&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Alex+Brush&family=Cedarville+Cursive&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/sty_prod.css">
  <link rel="stylesheet" href="assets/css/style.css">
 <script src="https://cdn.tailwindcss.com"></script>
  <title>Page d'accueil</title>
 </head>
 <body class="birthstone-regular max-md:w-[350px]">

  <header>
   <div class="bg-gray-500"><p class="alex-brush-regular text-center text-white ">Triple A Services</p></div>


  <section class="text-white text-xl bg-gray-200 max-md:pr-[100px] flex justify-between ">
    <section>
      <div> <p class="cedarville-cursive-regular ml-[50px] pt-[5px] max-md:text-[22px] max-md:ml-[10px] text-black">Watch am</p></div>
 </section>
    <div>
      <ul class="flex gap-[30px] max-md:pl-[20px]  pt-[10px] pr-[20px] max-md:block max-md:text-[18px]">

       <li><a href="./index.php" class="hover:underline hover:text-gray-400">Accueil</a></li> 
         <li><a href="./produits.php" class="hover:underline hover:text-gray-400">Nos produits</a></li> 
         <li><a href="./ac_conn.php" class="hover:underline hover:text-gray-400">My account</a></li> 
         <li><a href="./contact.php" class="hover:underline hover:text-gray-400">Contact Us</a></li> 
         <li><a href="./deconnexion.php" class="hover:underline hover:text-gray-400">Deconnexion</a></li> 
               <svg class="w-9 h-9 text-gray-800 dark:text-white mt-[5px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
</svg>


      </ul>
    </div> 
  </section>
 
  </header>

  <!-- premiere section -->
   <section class="alex-brush-regular h-[200px] bg-gray-300 text-white">
    <div class="text-6xl text-center max-md:text-[30px] pt-[50px] max-md:pr-[50px] max-md:pt-[50px]"><p>Une montre imposante mais elegante, <br> Faites votre choix</p></div>

   </section>

   <!-- Seconde section -->
    <section class="max-md:block bg-white flex border-y-4 border-yellow-200">
      <img src="./assets/images/New.jpg" alt="" class="w-[1000px] max-md:w-[300px]">
      <img src="./assets/images/Mc.jpg" alt="" class="pt-[72px] w-[500px]  h-[550px] max-md:pb-[20px] max-md:pl-[10px] max-md:w-[300px] max-md:h-[300px]">

    </section>

    <!-- Troisieme section -->
     <section class="bg-gray-200 max-md:block max-md:h-[800px] max-md:pl-[10px]  max-md:flex-wrap max-md:text-[13px] 
     gap-[60px] text-xl pt-[80px] flex pl-[50px] h-[550px] ">
      <div class="flex-wrap w-[600px] max-md:w-[240px] max-md:pl-[20px]  max-md:text-[20px] max-md:text-white max-md:h-[78px] max-md:flex-wrap">
        <p class="text-yellow-500 text-center pt-[30px] ">ABOUT US.</p>
        <p class="pt-[20px] max-md:text-black  ">Les entreprises <span>Watch am</span> sont une revolution Camerounaise, qui propose a ses clients
      d'acheter des montres de luxe, directement en ligne via ce site de commerce. Tandis que les autres 
       marques d'horlogers ne jurent que par les points de vente,avec un site vitrine en renfort, 
        la marque du grand groupe "Watches" se distingue en adoptant un nouveau levier de vente qui a 
      largement fait ses preuves: Le commerce en ligne. </p>
      </div>

      <div>
        <img src="./assets/images/img3.jpg" alt="" class='w-[750px] max-md:w-[708px]  max-md:h-[550px] mix-blend-multiply '>
      </div>

     </section>

     <!-- Quatrieme section -->
     <p class="alex-brush-regular text-gray-400 underline max-md:pl-[50px] text-center pt-[60px] pl-[50px] text-4xl max-md:w-[248px] max-md:flex-wrap">Une gamme variee pour des choix varies</p>
      <section class=" max-md:px-[20px] max-md:bg-orange-800 max-md:w-[310px]  pl-[50px] pt-[30px] max-md:block  flex gap-[50px] max-md:border-0 border-b-2 border-gray-400">
        <div class=" max-md:border-b-2 max-md:border-yellow-300 max-md:px-[50px]">
          <img src="./assets/images/mlh.jpg" alt="" class="w-[4000px]   mix-blend-multiply max-md:w-[800px]">
          <div class="max-md:border-b-2 max-md:border-yellow-300 max-md:border-hidden max-md:opacity-50 mb-[20px] max-md:px-[20px]"></div>
        </div>
        <div class="pt-[170px] text-xl max-md:text-[20px] max-md:w-[270px] max-md:pt-[30px] ">
          <p>Generalement, la plupart des grands noms du secteur tel que <span class="font-bold">Bucherer a Paris</span>, ou encore <span class="font-bold">Horel a Bordeau</span>
        beneficient d'un site de commerce sur lequel on trouve de belles montres. Mais aujourd'hui, nous vous presentons
      des boutiques qui offrent un large choix de montres, a des prix tres interessants. Nos services qui reposent sur des exigences 
    strictes, donnent tout pour vous presenter des montres de qualite aussi physiquement elegantes que fiables a 100%, concus par nos horlogers 
  Suisses et de partout dans le monde, ayant des annees d'experiences et de pratiques. Ceux-ci adaptent des models, ainsi que la qualite aux tendances du moment.</p>
        </div>
      </section>
      <section class="">
        
        <div class="border-b-2 border-gray-400 w-[1000px] pt-[30px] ml-[200px]  max-md:hidden opacity-75"></div>
          <div class="border-b-2 border-gray-400 w-[400px] pt-[30px] ml-[500px] max-md:hidden opacity-50"></div>
      </section>

      <!-- Cinquieme section -->
       <p class="alex-brush-regular text-center underline text-4xl pt-[40px] ">Nos Oeuvres</p>

       <section class="text-[19px] flex gap-[50px] flex-wrap items-center pl-[50px] mt-[70px] mb-0 pb-[50px]  border-x-4 border-yellow-200">
        
          <div class="w-[300px]  max-md:text-[20px] max-md:w-[197px]">
            <div><img src="./assets/images/box.jpg" alt=""></div>
            <div class="w-[180px] flex-wrap max-md:text-[20px] max-md:w-[160px]">
              <span class="bg-black text-white text-[17px] opacity-100 rounded-full py-[4px] px-[10px]">1/6</span>
              <p class="flex-wrap">Montre automatique en acier lumineux pour Hommes</p>
              <p class="font-bold">174,510FCFA / piece</p>
              <p class="font-bold">1 piece (MOQ)</p>
              <button class="bg-black text-white rounded-[17px] mt-[10px] px-[32px] py-[10px] hover:border-4 hover:border-gray-300"><a href="./contact.php" class="hover:text-yellow-200">
                Contact us</a></button>
            </div>
          </div>


          <div class="w-[300px]  max-md:text-[20px] max-md:w-[197px]">
            <div><img src="./assets/images/box2.jpg" alt=""></div>
            <div class="w-[180px] flex-wrap ">
              <span class="bg-black text-white text-[17px] opacity-100 rounded-full py-[4px] px-[10px]">1/6</span>
              <p class="flex-wrap">Montre automatique en acier lumineux pour Hommes</p>
              <p class="font-bold">174,510FCFA / piece</p>
              <p class="font-bold">1 piece (MOQ)</p>
              <button class="bg-gray-400 text-white rounded-[17px] mt-[10px] px-[32px] py-[10px] hover:border-4 hover:border-gray-300"><a href="./contact.php" class="hover:text-yellow-200">
                Contactez us</a></button>
            </div>
          </div>


          <div class="w-[300px]  max-md:text-[20px] max-md:w-[197px]">
            <div><img src="./assets/images/box3.jpg" alt=""></div>
            <div class="w-[180px] flex-wrap">
              <span class="bg-black text-white text-[17px] opacity-100 rounded-full py-[4px] px-[10px]">1/6</span>
              <p class="flex-wrap">Montre de luxe etanche en acier pour hommes</p>
              <p class="font-bold">220,0FCFA-276,06CFA / piece</p>
              <p class="font-bold">2 pieceS (MOQ)</p>
              <button class="bg-black text-white rounded-[17px] mt-[10px] px-[32px] py-[10px] hover:border-4 hover:border-gray-300"><a href="./contact.php" class="hover:text-yellow-200">
                Contactez us</a></button>
            </div>
          </div>


          <div class="w-[300px]  max-md:text-[20px] max-md:w-[197px]">
            <div><img src="./assets/images/box1.jpg" alt=""></div>
            <div class="w-[180px] flex-wrap">
              <span class="bg-black text-white text-[17px] opacity-100 rounded-full py-[4px] px-[10px]">1/6</span>
              <p class="flex-wrap">Montre de luxe etanche, montre chronographe</p>
              <p class="font-bold">520,0FCFA / piece</p>
              <p class="font-bold">10 pieces (MOQ)</p>
              <button class="bg-gray-400 text-white rounded-[17px] mt-[10px] px-[32px] py-[10px] hover:border-4 hover:border-gray-300"><a href="./contact.php" class="hover:text-yellow-200">
                Contact us</a></button>
            </div>
          </div>


          <div class="w-[300px]  ml-[100px] max-md:ml-0 max-md:text-[20px] max-md:w-[197px]">
            <div><img src="./assets/images/box4.jpg" alt=""></div>
            <div class="w-[180px] flex-wrap">
              <span class="bg-black text-white text-[17px] opacity-100 rounded-full py-[4px] px-[10px]">1/6</span>
              <p class="flex-wrap">Montre automatique luxieuse pour Hommes au Design cool </p>
              <p class="font-bold">340,510 - 500,0FCFA / piece</p>
              <p class="font-bold">2 pieces (MOQ)</p>
              <button class="bg-black text-white rounded-[17px] mt-[10px] px-[32px] py-[10px] hover:border-4 hover:border-gray-300"><a href="./contact.php" class="hover:text-yellow-200">
                Contact us</a></button>
            </div>
          </div>


          <div class="w-[300px]  max-md:text-[20px] max-md:w-[197px]">
            <div><img src="./assets/images/téléchargement (2).jpeg" alt=""></div>
            <div class="w-[180px] flex-wrap">
              <span class="bg-black text-white text-[17px] opacity-100 rounded-full py-[4px] px-[10px]">1/6</span>
              <p class="flex-wrap">Montre automatique luxieuse pour Hommes</p>
              <p class="font-bold">174,510FCFA / piece</p>
              <p class="font-bold">1 piece (MOQ)</p>
              <button class="bg-gray-400 text-white rounded-[17px] mt-[10px] px-[32px] py-[10px] hover:border-4 hover:border-gray-300"><a href="./contact.php" class="hover:text-yellow-200">
                Contact us</a></button>
            </div>
          </div>



          <div class="w-[300px]  max-md:text-[20px] max-md:w-[210px]">
            <div><img src="./assets/images/orient_1.webp" alt=""></div>
            <div class="w-[180px] flex-wrap">
              <span class="bg-black text-white text-[17px] opacity-100 rounded-full py-[4px] px-[10px]">1/6</span>
              <p class="flex-wrap">Montre automatique en acier lumineux pour Hommes</p>
              <p class="font-bold">174,510FCFA / piece</p>
              <p class="font-bold">3 pieces (MOQ)</p>
              <button class="bg-black text-white rounded-[17px] mt-[10px] px-[32px] py-[10px] hover:border-4 hover:border-gray-300"><a href="./contact.php" class="hover:text-yellow-200">
                Contact us</a></button>
            </div>
          </div>
       </section>


        <div >
         
        </div>

         
       
       <footer class="birthstone-regular pb-[30px] mt-[0px]  max-md:block max-md:flex-wrap border-x-4 border-yellow-200 border-b-2  bg-gray-200 pl-[50px] text-xl">
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
<section class="max-md:hidden">
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


 </body>
 </html>
