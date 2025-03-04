<?php
session_start();
require("./config/connexion.php");

if (isset($_GET["sms"])) {
$id = $_GET['sms'];

unset($_SESSION['panier'][$id]);
}

?>