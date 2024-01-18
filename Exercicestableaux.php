<!--
nom : Bieri
prenom : Nicolas
classe : i.fa-p1a
date: 18.01.2024
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">

    <title>Exercices tableaux</title> <!--Titre de l'onglet-->
    <!--j'ai mis des couleur dans un tableau-->
    <h1>Exercice 1: Création de Tableau Indexé</h1>
    <?php
    $tableau = ["Bleu", "Blanc", "Rouge"];
    foreach ($tableau as $element) {
        echo $element;
        echo "<br>";
    }
    ?>
    <h1>Exercice 2: Tableau Multidimensionnel</h1>
    <!---->
    <?php
    $tableau = array(
        "BMW" => array("BMW", "50 chevaux", "120cm2"),
        "Peugeot" => array("Peugeot", "120 chevaux", "300cm2"),
    );
    $tableau["BMW"][2] = "100cm2";
    foreach ($tableau as $BMW => $element) {
        echo "Marque: $BMW,<br> Caractéristique: $element";
        echo "<br>";
    }
    foreach ($tableau as $element) {
        echo $element;
        echo "<br>";
    }
    ?>
</head>

<body>
</body>

</html>