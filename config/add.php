<?php
require("connexion.php");


try{
$qte = $_POST["qte"];
$prix = $_POST["prix"];
$descrip = $_POST["desc"];
$categ = $_POST["categ"];
$img = $_FILES["img"]["name"];

//insertion
$stmt = $conn->prepare("INSERT INTO produits(categories, prix, descrip, images) VALUES(:noms, :prix, :descrip, :files)");
$stmt->bindparam(":categories", $noms);
$stmt->bindparam(":prix", $prix);
$stmt->bindparam(":descrip", $descrip);
$stmt->bindparam(":files", $img);
$stmt->execute();

$sms = "le produit a ete insere";
header("location: ./ad_com.php?sms=$sms");
}


catch(PDOException $e){
  echo"erreur d'insertion". $e->getMessage();
}



?>