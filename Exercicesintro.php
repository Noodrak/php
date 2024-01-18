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
    <title>Serie 1</title>
</head>
<body>
  <!-- deux variable contienent le nom et le prenom et les affiche ensuite a l'aide d'un echo -->
  <h1>Exercice 1</h1>
  <form action="" method="post">
  <label for="nom">Nom</label>
  <input type="text" id="nom" name="nom"><br><br>
  <label for="prenom">Prenom</label>
  <input type="text" id="prenom" name="prenom"><br><br>
   <input type="submit" formmethod="post">
   </form>
    <?php
    echo "Bonjour $_POST[nom] $_POST[prenom] !" ;
    ?>

  <!-- deux variable condienent deux nombre et les additione en suite et affiche le résultat -->
<h1>Exercice 2</h1>
<form action="" method="post">
  <label for="nbr1">Numéro 1</label>
  <input type="text" id="nbr1" name="nbr1"><br><br>
  <label for="nbr2">Numéro 2</label>
  <input type="text" id="nbr2" name="nbr2"><br><br>
   <input type="submit" formmethod="post">
   </form>
<?php
$x = $_POST["nbr1"];
$y = $_POST["nbr2"];
echo "$_POST[nbr1] +  $_POST[nbr2]";
echo "<br>";
echo $x + $y; 
?>
  <!--deux variable condienent deux nombre et font toutes les formule possible -->
<h1>Exercice 3</h1>
<form action="" method="post">
  <label for="nbr3">Numéro 1</label>
  <input type="text" id="nbr3" name="nbr3"><br><br>
  <label for="nbr4">Numéro 2</label>
  <input type="text" id="nbr4" name="nbr4"><br><br>
   <input type="submit" formmethod="post">
   </form>
<?php
$x = $_POST["nbr3"];
$y = $_POST["nbr4"];
echo $x + $y; //addition de x et y//
echo "<br>";
echo $x - $y; //soustraction de x par y//
echo "<br>";
echo $x * $y; //multiplie x et y //
echo "<br>";
echo $x / $y;// divise x par y//
?>
<!-- une variable qui contient un nbr de degré que l'on veut convertitre en fahrenheit -->
<h1>Exercice 4</h1>
<?php
$c = 4;
echo "Celcuis : ";
echo $c;
echo "<br>";
echo "Fahrenheit : ";
echo ($c * 1.8) + 32; //formule pour avoir la variable "c" transformer en fahrenheit//
?>

<!-- Affiche le prix sans tva la tva et le prix + la tva-->
<h1>Exercice 5</h1>
<?php
$c = 4;
echo "Sans tva : ";
echo $c;
echo "<br>";
echo "Tva : ";
$tva = $c /100 * 7.7;
echo $tva;
echo "<br>";
echo "Avec tva : ";
echo $c + $tva;
?>
</body>
</html>

