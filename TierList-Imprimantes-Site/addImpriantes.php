<!-- 
Auteur : Théo Dormond
Date : 25.11.2022
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
    <title>Ajouter Une Imprimante - Imprimante</title>
</head>

<body>
    <header>

        <div class="Container-header">
            <ul class="header">
                <li><a class="nav-btn" href="index.php">
                        <h1>Accueil</h1>
                    </a></li>
                <li><a class="nav-btn" href="addImpriantes.php" style="text-decoration: underline">
                        <h1>Ajouter une imprimante</h1>
                    </a></li>
                <li><a class="nav-btn" href="Impriantes.php">
                        <h1>Liste des imprimantes</h1>
                    </a></li>
            </ul>
        </div>
    </header>
    <main>
        <!-- <h1 class="h1Accueil">Ajouter une imprimante</h1> -->
        <div class="Printer">
            <form action="">
                <div id="FormPrinter">
                    <label for="printerMaker">Fabricant de l'imprimante : </label>
                    <input type="text" id="printerName" name="printerName">
                    <label for="printerModel">Modèle de l'imprimante : </label>
                    <input type="text" id="printerModel" name="printerModel">
                    <label for="printerTechnologie">Technologie de l'imprimante : </label>
                    <input type="text" id="printerTechnologie" name="printerTechnologie">
                    <label for="printerSpeed">Vitesse d'impression : </label>
                    <input type="number" id="printerSpeed" name="printerSpeed">
                    <label for="printerBac">Taille bac à papier : </label>
                    <input type="number" id="printerBac" name="printerBac">
                    <label for="printerWeight">Poids de l'imprimante : </label>
                    <input type="text" id="printerWeight" name="printerWeight">
                    <label for="printerResolution">Resolution de l'impriante : </label>
                    <input type="text" id="printerResolution" name="printerResolution">
                    <label for="printerWidth">Larguer de l'impriante : </label>
                    <input type="text" id="printerWidth" name="printerWidth">
                    <label for="printerLength">Longueur de l'imprimante : </label>
                    <input type="text" id="printerLength" name="printerLength">
                    <label for="printerHeigth">Hauteur de l'imprimante : </label>
                    <input type="text" id="printerHeigth" name="printerHeigth">
                    <label for="printerPrice">Prix de l'impriante : </label>
                    <input type="text" id="printerPrice" name="printerPrice">
                    <input type="submit" value="Ajouter" name="submit">

                </div>
            </form>
        </div>
    </main>
    <footer>
        <hr>
        <p class="copyright">Copyright © - Luca, Sanjaey, Natasha et Théo</p>
    </footer>
</body>

</html>