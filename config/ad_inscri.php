<?php
require("connexion.php");

if(isset($_POST["valid"])){

   try{
    $sub = $_POST["valid"];
    $email=$_POST["email"];
    $pw=$_POST["pw"];
    $nom=$_POST["nom"];
 
  $stmt=$conn->prepare("INSERT INTO utilisateurs(name, email, password) 
  VALUES(:nom, :email, :pw)");

  $stmt->bindparam(":nom, $nom");
  $stmt->bindparam(":email, $email");
  $stmt->bindparam(":password, $pw");
  $stmt->execute();

  $msg="Vous avez ete inscrit";
}catch(PDOException $e){
echo"Une erreur est survenue".$e->getMessage();
}
}
