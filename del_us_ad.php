<?php

require("./config/connexion.php");

if (isset($_GET["sms"])) {
try{
$id = $_GET["sms"];
$stmt = $conn->prepare("DELETE FROM utilisateurs WHERE id= :id");
$stmt->bindparam(":id", $id);
$stmt->execute();

echo"l'element selectionne a ete supprime";

}catch(PDOException $e){
  echo"une erreur est survenue".$e->getMessage();

}

}

?>