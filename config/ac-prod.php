<?php
require("./connexion.php");
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
  <link rel="stylesheet" href="../assets/css/style.css">
 <script src="https://cdn.tailwindcss.com"></script>
  <title>Product action</title>
</head>
<body class=" birthstone-regular ">
  <div class=" alex-brush-regular  bg-gray-500 text-center text-white">  <p class=" ">Triple A Services</p> </div>
   <header class=" h-[70px] pl-[50px] pt-[10px] bg-gray-300 flex justify-between">
    <div><p class="text-white cedarville-cursive-regular ">Watch am</p></div>
    <div class="">
       <ul class=" flex gap-[50px] text-xl text-white">
      <li>
        <a href="" class="hover:text-yellow-300">Ajouter un produit?</a>
 <a href="../index.php"class="hover:text-gray-400">Acceuil</a></li>
      <li><a href="../pprod.php" class="hover:text-gray-400">Nos Produits</a></li>
      <li> <a href="../ac_conn.php" class="hover:text-gray-400">My account</a></li>
      <li> <a href="../contact.php" class="hover:text-gray-400">Contact us</a></li>
      </ul>
    </div>
  </header>


   <div id="menu" class="">
<svg class=" rounded-[20px] w-[40px] h-[40px] text-gray-800  hover:underline hover:bg-gray-400 dark:text-white" aria-hidden="true" 
 xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
</svg>
</div>
<div  id="submenu" class="rounded-[20px] bg-gray-500 h-[900px]  w-[280px] fixed ">
 <div><p class="pt-[40px] text-center text-3xl text-bold">Hi, Dear Admin </p></div>  
<ul class="p-[20px] absolute">

    <li class="flex  p-[30px]  rounded-[10px] hover:bg-gray-400 w-[200px] ">
           <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="m7.14284 11 4.99996-6 5 6m-9.99996 0h-3v8H20.1428v-8h-3m-9.99996 0H3.14285l3-4h4.33735l-3.33736 4Zm9.99996 0h4l-3-4h-4.3374l3.3374 4Zm-3 2c0 1.1046-.8954 2-2 2-1.1045 0-2-.8954-2-2s.8955-2 2-2c1.1046 0 2 .8954 2 2Z"/>
</svg>
<a href="./ac_admin.php">Dashboard</a></li>
    <li class="p-[30px]  flex rounded-[10px] hover:bg-gray-400 w-[200px] ">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
</svg>
<a href="./us_dash.php">Users</a></li>
    <li class="p-[30px] flex rounded-[10px] hover:bg-gray-400 w-[200px] ">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z" clip-rule="evenodd"/>
</svg>
<a href="./categ.php">Categories</a></li>
    <li class="p-[30px] flex rounded-[10px] hover:bg-gray-400 w-[200px] ">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path d="M5 3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm14 18a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4ZM5 11a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H5Zm14 2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4Z"/>
</svg>
<a href="./pprod.php">Products</a></li>
    <li class="p-[30px] flex rounded-[10px] hover:bg-gray-400 w-[200px] ">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857ZM18 14a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0-2h-2v-2Z" clip-rule="evenodd"/>
</svg>
<a href="">Orders</a></li>
  </ul>
</div>

<div>
  <h1 class="text-black  text-center text-5xl ">WELCOME, DEAR ADMINISTRATOR IN<br>THE ADDING PRODUCTS PAGE</h1></div>


      <section class="border-2 border-black mt-[70px] w-[460px] ml-[35%] birthstone-regular">
    <i style="" class="ml-[100px] textt-green-400 mt-[40px]">
        <?php
        if(isset($msg)){
          echo $msg;
        }
        ?>
      </i>
    
      <div class="">
      <h2 class="text-2xl text-center birthstone-regular ">Adding Products</h2>
      <form action="./add.php" method="post" enctype="multipart/form-data">
      <input type="text" name="desc" id="" class=" border-b-2 border-black ml-[50px] pt-[40px] pb-[10px] w-[280px] text-lg birthstone-regular " placeholder="Description">
      <input type="number" name="qte" id="" class="ml-[50px] border-b-2 border-black pb-[10px] w-[370px] text-xl pt-[30px]" placeholder="Quantite">
      <select id="cars" name="categ" placeholder="categories" class="ml-[50px] border-b-2 border-black pb-[10px] w-[370px] text-xl pt-[30px]">
  <option >categories</option>
  <option value=">Montres Bracelets de luxe pour hommes">Montres Bracelets de luxe pour hommes</option>
  <option value="Montres Bracelets de luxe  pour Femmes">Montres Bracelets de luxe  pour Femmes</option>
  <option value="Montres Bracelets de luxe  pour Couples">Montres Bracelets de luxe  pour Couples</option>
  <option value="Montres Bracelets de luxe  personnalisees">Montres Bracelets de luxe  personnalisees</option>
</select>
      <input type="number" name="prix" id=""  class="border-b-2 border-black pb-[10px] ml-[50px] w-[280px] text-lg pt-[30px] birthstone-regular" placeholder="prix en $"> 
      <input type="file" name="file" id=""  class="ml-[50px] border-b-2 border-black pb-[10px] w-[370px] text-xl pt-[30px]" placeholder="image">
      <input type="submit" name="valid" value=" Add product" class="bg-blue-900 mt-[30px] ml-[50px] pt-[15px] pb-[15px] pr-[143px] pl-[143px] text-white text-lg"> 
      </form>  
      <i style=" color:red " class="ml-[80px] mt-[40px]">
        <?php
        if(isset($sms)){
          echo $sms;
        }
        ?>
      </i>
     

    </div>

  </section>




<script src="./assets/js/add.js"></script>
</body>
</html>