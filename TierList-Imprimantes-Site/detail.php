<!-- 
Auteur : Luca Paul
Date : 06.12.2022
Lieu : ETML 
Description : Page pour la page d'accueil du site imprimante.
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Accueil - Imprimante</title>
</head>

<body>
    <header>

        <div class="Container-header">
            <ul class="header">
                <li><a class="nav-btn" href="index.php">
                        <h1>Accueil</h1>
                    </a></li>
                <li><a class="nav-btn" href="addImpriantes.php">
                        <h1>Ajouter une imprimante</h1>
                    </a></li>
                <li><a class="nav-btn" href="Impriantes.php" style="text-decoration: underline">
                        <h1>Liste des imprimantes</h1>
                    </a></li>
            </ul>
        </div>
    </header>
    <main>
        <h1 class="h1Accueil">Details des imprimantes</h1>
    </main>
    <footer class="Container-footer">
        <hr>
        <p class="copyright">Copyright © - Luca, Sanjaey, Natasha et Théo </p>
    </footer>
</body>

</html>

<?php
include("Database.php");
$db = new Database();
$imprimantes = $db->getAllImprimantes();
foreach($imprimantes as $imprimant){
    if($_GET["idImprimante"] == $imprimant["idImprimante"]){
        echo "<div class='listeImprimante'>";
        echo $imprimant["impFabriquant"] . ": ";
        echo $imprimant["impModele"] . "<br>";
        echo "Technologie d'impression: " . $imprimant["impTechImpression"] . "<br>";
        echo "Vistesse d'impression: " . $imprimant["impVitesseImpression"] . "<br>";
        echo "Capaciter du bac à papier: " . $imprimant["impCapaciteBacPapier"] . "<br>";
        echo "Poid de l'imprimante: " . $imprimant["impPoids"] . "<br>";
        echo "Resolution de l'imprimante: " . $imprimant["impResolution"] . "<br>";
        echo "Largeur de l'imprimante: " . $imprimant["impLargeur"] . "<br>";
        echo "Longeur de l'imprimante: " . $imprimant["impLongeur"] . "<br>";
        echo "Hauteur de l'imprimante: " . $imprimant["impHauter"] . "<br>";
        echo "Prix de l'imprimante: " . $imprimant["impPrix"] . "<br></div>";
    }
}
?>