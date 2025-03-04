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
<body class="">
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
      
      </ul>

    </nav>
 </header>
  
   
  <section class="border-2 border-black mt-[36px] mb-[50px] w-[460px] ml-[35%] birthstone-regular ">
    <div class="">
      <h2 class="text-3xl text-center birthstone-regular ">S'inscrire</h2>
      <form action="" method="post">
      <input type="text" name="nom" id="" class="  border-b-2 border-black ml-[50px] pt-[40px] pb-[10px] w-[300px] text-lg birthstone-regular" placeholder="Username">
      <input type="email" name="email" id="" class="border-b-2 border-black ml-[50px] pb-[10px] w-[300px] text-lg pt-[30px] birthstone-regular" placeholder="Email">
      <input type="password" name="pw" id=""  class="border-b-2 border-black pb-[10px] ml-[50px] w-[300px] text-lg pt-[30px] birthstone-regular" placeholder="Password">
     <input type="number" name="phone" id=""  class="border-b-2 border-black pb-[10px] ml-[50px] w-[300px] text-lg pt-[30px] birthstone-regular" placeholder="telephone"> 
     <input type="text" name="address" id="" class="border-b-2 border-black pb-[10px] ml-[50px] w-[300px] text-lg pt-[30px] birthstone-regular" placeholder="Addresse">
     <div class="flex pl-[80px]">
      <input type="checkbox" name="check" id="" class="bg-gray-400 mt-[30px]">
       <p class="text-center pt-[30px] ml-[10px]">J'accepte les termes et conditions</p>
       </div>
          

      </div> 
      <input type="submit" name="valid" value="S'inscrire" class=" mt-[30px] ml-[50px] pt-[15px] pb-[15px] pr-[133px] pl-[133px] text-lg hover:text-gray-400 bg-gray-400">
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