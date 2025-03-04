<?php
session_start();
require("./config/connexion.php");

if(!isset($_SESSION["panier"])){

  $_SESSION["panier"] = [];
}

if(isset ($_GET["smspanier"])){
  $id = $_GET['smspanier'];

try{
  $stmt = $conn->prepare("SELECT * FROM produits WHERE id = :id");
  $stmt -> bindparam(":id", $id);
  $stmt -> execute();


}

catch(PDOException $e){
  echo "erreur de selection" . $e -> getMessage();
}


foreach($stmt->fetchALL() as $k=>$v){ 
  if(isset($_SESSION["panier"]["id"])){
   $_SESSION["panier"]["$id"]["qte"] +=1;
    }else{
      $qte = 1; 
        $_SESSION["panier"]["$id"] = [
            "image" => $v["images"],
            "desc" => $v["descriptions"],
          "qte" => $qte,
           "prix" => $v["prix"],


        ];

    }
var_dump($_SESSION["panier"]);
}

}