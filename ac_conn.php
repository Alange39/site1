<?php
require('config/connexion.php');

$servername = "localhost";
$username = "root";
$dbname = "shop";
try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username);

   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo"";
}
catch(PDOException $e){
    echo"Connection failed".$e->getMessage();
  }
 if(isset($_POST["valid"])){
  if(!empty($_POST["email"]) && !empty($_POST["password"])  && !empty($_POST["nom"])){
  }  else{
      $sms="Veuillez remplir tous les champs";
    }}





  if(isset($_POST["valid"])){
  if(!empty($_POST["email"]) && !empty($_POST["password"])  && !empty($_POST["nom"]) && !empty($_POST["phone"])){


    try{

      $email = $_POST["email"];
      $pw = $_POST["password"];
      $phone= $_POST["phone"];
      $nom = $_POST["nom"];
    

      $stmt=$conn->prepare("SELECT* FROM utilisateurs");
      $stmt->execute();
    
      foreach ($stmt->fetchALL() as $k => $v) {
        if($v["email"]== $_POST["email"]  || $v["phones"] == $_POST["phone"]  || $v["noms"]== $_POST["nom"] ){
          header("location: ./cart.php");
         
        } else{
            $msg = "Desole, ce compte n'existe pas";
          }  }  }
    catch (PDOException $e){
      echo"error". $e->getMessage();
      
    }}
  }

  
  
  if(isset($_POST["valid"])){
  if(!empty($_POST["email"]) && !empty($_POST["password"])  && !empty($_POST["nom"]) && !empty($_POST["phone"])){
    $pw = "Kobby123";
    $password = $_POST["password"];

    if($pw == $_POST["password"]){
      header("location: ./ac_admin.php");
    }


   }
  }



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
 <link rel="stylesheet" href="./assets/css/style1.css">
 <link rel="stylesheet" href="./assets/css/style.css">
 <script src="https://cdn.tailwindcss.com"></script>
  <title>Commandes</title>
</head>
<body class="birthstone-regular">

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



  <section class="border-2 border-black mt-[70px] w-[460px] max-md:w-[345px] ml-[35%] max-md:ml-[10px] birthstone-regular">
    <div class="">
      <h2 class="text-3xl text-center birthstone-regular ">Connexion</h2>
      <form action="" method="post">
      <input type="text" name="nom" id="" class=" border-b-2 border-black ml-[50px] max-md:ml-[30px] pt-[40px] pb-[10px] w-[310px] max-md:w-[250px] text-lg birthstone-regular " placeholder="name"><ion-icon name="mail-outline"></ion-icon>
      <input type="email" name="email" id="" class="ml-[50px] max-md:ml-[30px]  border-b-2 border-black pb-[10px] w-[310px] max-md:w-[250px] text-xl pt-[30px]" placeholder="Email">
      <input type="number" name="phone" id=""  class="border-b-2 border-black pb-[10px] ml-[50px] max-md:ml-[30px]  w-[310px] max-md:w-[250px] text-lg pt-[30px] birthstone-regular" placeholder="telephone"> 
      <input type="password" name="password" id=""  class=" ml-[50px] max-md:ml-[30px]  border-b-2 border-black pb-[10px] w-[310px] max-md:w-[250px] text-xl pt-[30px]" placeholder="Password">
      <a href=""  class="hover:underline text-center block pt-[20px]">Mot de passe oublie?</a>
      <input type="submit" name="valid" value="Connexion" class="bg-blue-900 mt-[30px] ml-[50px]  max-md:ml-[45px]  max-md:pl-[50px]  max-md:pr-[50px] pt-[15px] pb-[15px] pr-[143px] max-md:pr-[130px] pl-[143px] max-md:pl-[130px] max-md:w-[250px] text-white text-lg"> 
      </form>
      <i style=" color:red " class="ml-[80px] mt-[40px]">
        <?php
        if(isset($sms)){
          echo $sms;
        }
        ?>
      </i>
     
      <i style=" color:red " class="ml-[80px] mt-[40px]">
        <?php
         if(isset($msg)){
          echo $msg;
        }
        ?>
      </i>
      <p class="text-center pt-[8px] pb-[12px]">Vous n'avez pas de compte? <a href="./ac_inscri.php" class="hover:underline hover:text-gray-400"><b>S'inscrire</b></a></p>

    </div>

  </section>


</body>
</html>