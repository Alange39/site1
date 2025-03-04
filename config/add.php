<?php
require("connexion.php");


try{
$qte = $_POST["quantites"];
$prix = $_POST["prix"];
$descrip = $_POST["desc"];
$categ = $_POST["categ"];
$img = $_FILES["file"];

//insertion
$stmt = $conn->prepare("INSERT INTO produits(categories, prix, descrip,) VALUES(:noms, :prix, :descrip)");
$stmt->bindparam(":noms", $noms);
$stmt->bindparam(":prix", $prix);
$stmt->bindparam(":descrip", $descrip);
$stmt->execute();

$sms = "le produit a ete insere";
header("location: ./ad_com.php?sms=$sms");
}


catch(PDOException $e){
  echo"erreur d'insertion". $e->getMessage();
}



?>