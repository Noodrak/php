<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie 1</title>
</head>
<body>
  <h1>Exercice 1</h1>
<?php
$nom = "Bieri";
$prenom = "Nicolas";
echo "Bonjour $prenom $nom !"
?>
<h1>Exercice 2</h1>
<?php
$x = 3;
$y = 4;
echo $x + $y;
?>
<h1>Exercice 3</h1>
<?php
$x = 3;
$y = 4;
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
?>
<h1>Exercice 4</h1>
<?php
$c = 4;
echo "Celcuis : ";
echo $c;
echo "<br>";
echo "Fahrenheit : ";
echo ($c * 1.8) + 32;
?>
<h1>Exercice 5</h1>
<?php
$c = 4;
echo "Sans tva : ";
echo $c;
echo "<br>";
echo "Tva : ";
echo $c /100 * 7.7;
echo "<br>";
echo "Avec tva : ";
echo $c + $c /100 * 7.7;
?>
</body>
</html>

