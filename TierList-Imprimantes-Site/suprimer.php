<?php
include("database.php");
$db = new Database();
$addrecette = $db->deleteOneImprimante($_GET["idImprimante"]);
header("Location: ./impriantes.php");
die();
?>