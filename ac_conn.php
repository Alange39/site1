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
 
 <div class=" alex-brush-regular  bg-gray-500 text-center text-white">  <p class=" ">Triple A Services</p> </div>

    <header class=" text-xl flex justify-between h-[70px] ">
    <nav class="   bg-gray-200 flex gap-[700px] w-[1700px]">
    <p class=" cedarville-cursive-regular pt-[20px] pl-[50px] ">Watch am</p>
    <nav class=" hover:text-gray-400">
     <ul class=" text-white flex gap-[30px] text-black">
      <li class="pt-[20px]"> <a href="index.php"class="pt-[30px]">Acceuil</a></li>
      <li class="pt-[20px]"><a href="./pprod.php" class="">Nos Produits</a></li>
      <li class="pt-[20px]"> <a href="./ac_conn.php" class="">My account</a></li>
      <li class="pt-[20px]"> <a href="./contact.php" class="pr-[20px]">Contact us</a></li>
         </nav>
 </header>


  <section class="border-2 border-black mt-[70px] w-[460px] ml-[35%] birthstone-regular">
    <div class="">
      <h2 class="text-3xl text-center birthstone-regular ">Connexion</h2>
      <form action="" method="post">
      <input type="text" name="nom" id="" class=" border-b-2 border-black ml-[50px] pt-[40px] pb-[10px] w-[310px] text-lg birthstone-regular " placeholder="name"><ion-icon name="mail-outline"></ion-icon>
      <input type="email" name="email" id="" class="ml-[50px] border-b-2 border-black pb-[10px] w-[310px] text-xl pt-[30px]" placeholder="Email">
      <input type="number" name="phone" id=""  class="border-b-2 border-black pb-[10px] ml-[50px] w-[310px] text-lg pt-[30px] birthstone-regular" placeholder="telephone"> 
      <input type="password" name="password" id=""  class=" ml-[50px] border-b-2 border-black pb-[10px] w-[310px] text-xl pt-[30px]" placeholder="Password">
      <a href=""  class="hover:underline text-center block pt-[20px]">Mot de passe oublie?</a>
      <input type="submit" name="valid" value="Connexion" class="bg-blue-900 mt-[30px] ml-[50px] pt-[15px] pb-[15px] pr-[143px] pl-[143px] text-white text-lg"> 
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