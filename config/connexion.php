<?php
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
?>