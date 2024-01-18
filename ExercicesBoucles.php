<!--
  Nom : Bieri
  Prenom : Nicolas
  date : 18.01.2024
  classe : i.fa-p1a
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Boucles</title>
</head>
<body>
    <!-- boucle pour compter jusqu'a 50-->
    <h1>Exercice 1: Compteur Numérique</h1>
    <?php
for ($i = 1; $i <= 50; $i++) {
    echo $i;
    echo "<br>";
}
?>
<!-- fait tout les multiples de 1 a 10 pour chaque incrémentation -->
 <h1>Exercice 2: Table de Multiplication</h1>
    <?php
    for ($i = 1; $i < 10; $i++) {
        echo $i;
        echo "<br>";
        echo $i * 1 ," | ";
        echo $i * 2," | ";
        echo $i * 3," | ";
        echo $i * 4," | ";
        echo $i * 5," | ";
        echo $i * 6," | ";
        echo $i * 7," | ";
        echo $i * 8," | ";
        echo $i * 9," | ";
        echo $i * 10," | ";
        echo "<br>";
    }
?>
<!-- met toutes les incrémentation au carré-->
 <h1>Exercice 3: Carré nombre</h1>
    <?php
    for ($i = 1; $i < 6; $i++) {
        echo $i, " = ";
        echo $i * $i; 
        echo "<br>";
    }
?>
<!-- boucle en for qui va de 1 a 10 puis une boucle en while qui va de 5 a 15-->
 <h1>Exercice 4</h1>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
            echo "<br>";
        }
        echo "<br>";
        $i = 5;
while ($i <= 15) {
    echo $i;
    echo "<br>";
    $i++;
}
?>
</body>
</html>