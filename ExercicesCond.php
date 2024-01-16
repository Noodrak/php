<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 1: Comparaison de Nombres</h1>
<?php
 $a = 2;
 $b = 1;
 if ($a > $b)
 {
    echo "$a est plus grand que $b";
 }
 else if ($a == $b)
 {
    echo "$a est égale à $b";
 }
 else if ($a < $b)
 {
    echo "$a est plus petit que $b";
 }
?>
<h1>Exercice 2: Jour de la Semaine</h1>
<?php
 $jourdelasemaine = 2;
 if ($jourdelasemaine == 1)
 {
    echo "on est lundi !";
 }
 else if ($jourdelasemaine == 2)
 {
    echo "on est mardi";
 } 
 else if ($jourdelasemaine == 3)
 {
    echo "on est mercredi";
 } 
 else if ($jourdelasemaine == 4)
 {
    echo "on est jeudi";
 } 
 else if ($jourdelasemaine == 5)
 {
    echo "on est vendredi";
 } 
 else if ($jourdelasemaine == 6)
 {
    echo "on est samedi";
 } 
 else if ($jourdelasemaine == 7)
 {
    echo "on est dimanche";
 } 
?>
<h1>Exercice 3: Réduction sur Achat</h1>
<?php
 $a = 120;
 if ($a > 100)
 {
   echo "Le prix finale est de ";
   echo $a - $a/100*10;
   echo " car vous avez le droit a 10% de réduction";
 }
 else 
 {
    echo "Le prix finale est de ";
    echo $a; 
    echo " car vous avez le droit a 0% de réduction";
 }
?>
<h1>Exercice 4: Catégorisation d'Âge</h1>
<?php
 $age = 10;
if ($age <13 and $age > 0)
{
   echo "Vous etes un enfant";
}
else if ($age >13 and $age <20 )
{
   echo "Vous etes un adolescent";
}
else if ($age <20 and $age <100)
{
   echo "Vous etes un adulte";
}
?>
</body>
</html>