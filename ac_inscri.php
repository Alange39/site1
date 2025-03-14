<?php  
require("config/connexion.php");


if(isset($_POST["valid"])){
if(!empty($_POST["email"]) && !empty($_POST["pw"]) && !empty($_POST["nom"]) && !empty($_POST["phone"]) && !empty($_POST["address"])  && !empty($_POST["check"])){
}
else{
   $sms="Veuillez remplir tous les champs";
 
}
if(!empty($_POST["email"]) && !empty($_POST["pw"]) && !empty($_POST["nom"]) && !empty($_POST["phone"]) && !empty($_POST["address"])  && !empty($_POST["check"])){

  try{
    $sub = $_POST["valid"];
    $email=$_POST["email"];
    $pw=sha1($_POST["pw"]);
    $nom=$_POST["nom"];
    $tel=$_POST["phone"];
    $Ad=$_POST["address"];
  
 
  $stmt=$conn->prepare("INSERT INTO utilisateurs(noms, email, passwords, phones, Address) 
  VALUES(:noms, :email, :pw, :tel, :Ad)");
 
  $stmt->bindparam(":noms", $nom);
  $stmt->bindparam(":email", $email);
  $stmt->bindparam(":pw", $pw);
  $stmt->bindparam(":tel", $tel);
  $stmt->bindparam(":Ad", $Ad);
  $stmt->execute();

  $msg="Vous avez ete inscrit";
}catch(PDOException $e){
echo"Une erreur est survenue".$e->getMessage();
}}
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
 <link rel="stylesheet" href="assets\css\style.css">
 <script src="https://cdn.tailwindcss.com"></script>
  <title>Commandes</title>
</head>
<body class=" birthstone-regular">
  
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
  
   
  <section class="border-2 border-black mt-[36px] mb-[50px] w-[460px] max-md:w-[345px] ml-[35%] max-md:ml-[10px] birthstone-regular ">
    <div class="">
      <h2 class="text-3xl text-center birthstone-regular ">S'inscrire</h2>
      <form action="" method="post">
      <input type="text" name="nom" id="" class="  border-b-2 border-black ml-[50px]  max-md:ml-[30px] pt-[40px] pb-[10px] w-[300px] max-md:w-[250px] text-lg birthstone-regular" placeholder="Username">
      <input type="email" name="email" id="" class="border-b-2 border-black ml-[50px]  max-md:ml-[30px] pb-[10px] w-[300px] max-md:w-[250px] text-lg pt-[30px] birthstone-regular" placeholder="Email">
      <input type="password" name="pw" id=""  class="border-b-2 border-black pb-[10px]  max-md:ml-[30px] ml-[50px] w-[300px] max-md:w-[250px] text-lg pt-[30px] birthstone-regular" placeholder="Password">
     <input type="number" name="phone" id=""  class="border-b-2 border-black pb-[10px]  max-md:ml-[30px] ml-[50px] w-[300px] max-md:w-[250px] text-lg pt-[30px] birthstone-regular" placeholder="telephone"> 
     <input type="text" name="address" id="" class="border-b-2 border-black pb-[10px] ml-[50px]  max-md:ml-[30px] w-[300px] max-md:w-[250px] text-lg pt-[30px] birthstone-regular" placeholder="Addresse">
     <div class="flex pl-[80px]">
      <input type="checkbox" name="check" id="" class="bg-gray-400 mt-[30px]">
       <p class="text-center pt-[30px] ml-[10px]">J'accepte les termes et conditions</p>
       </div>
          

      </div> 
      <input type="submit" name="valid" value="S'inscrire" class=" mt-[30px] ml-[50px] max-md:ml-[80px] pt-[15px] max-md:pl-[50px] pb-[15px] pr-[133px] max-md:pr-[50px] pl-[133px] text-lg hover:text-gray-400 bg-gray-400">
       </form>
      <i class="text-red-600 ml-[80px]">
         <?php
      if(isset($sms)){
        echo $sms;
      }
      ?>
       </i>
      <p class="text-center pt-[7px]">Vous avez deja un compte? <a href="./ac_conn.php"><b>Connexion</b></a></p>

      <i class="text-green-700 ml-[80px]">
        <?php
        if(isset($msg)){
            echo $msg;
           }

        ?>
      </i>

    </div>
 
  </section>
 
</body>
</html>