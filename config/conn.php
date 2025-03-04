<?php
$sub=$_POST["valid"];
$pw=$_POST["password"];
$email=$_POST["email"];
$nom=$_POST["nom"];


if(isset($sub)){
  if(!empty($sub && $pw && $email && $nom)){
    $sms="Veuillez remplir tous les champs";
  
    
  }

}
?>