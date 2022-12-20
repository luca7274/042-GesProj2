<?php
include("database.php");
$db = new Database();
$imprimante = $db->addOneimprimante($_GET["printerName"], $_GET["printerModel"], $_GET["printerTechnologie"], $_GET["printerSpeed"], $_GET["printerBac"], $_GET["printerWeight"], $_GET["printerResolution"], $_GET["printerWidth"], $_GET["printerLength"], $_GET["printerHeigth"], $_GET["printerPrice"]);
header("Location:Impriantes.php");
?>