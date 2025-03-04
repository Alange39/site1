<?php  
require("./config/connexion.php");


$stmt=$conn->prepare("SELECT*FROM categories");
$stmt->execute();



$stm=$conn->prepare("SELECT*FROM produits");
$stm->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
foreach($stmt->fetchALL() as $k=>$v){  
   echo$v['noms'] ;
   foreach ($stm as $ke => $n) {
    if ($n['categories']==$v['noms']) {
      echo $n['quantites'];
    }
   }
}
  ?>
</body>
</html>