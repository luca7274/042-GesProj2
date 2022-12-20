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
        <h1 class="h1Accueil">Liste des imprimantes</h1>
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
    echo "<form method='post' action='detail.php?idImprimante=". $imprimant["idImprimante"] ."'>";
    echo $imprimant["impFabriquant"] . ": ";
    echo $imprimant["impModele"] . "<br>";
    echo "<input type='submit' value='detail'></form><br>";
    echo "<form method='post' action='suprimer.php?idImprimante=". $imprimant["idImprimante"] ."'>";
    echo "<input type='submit' value='suprimer'></form><br><br><br>";

    }
?>