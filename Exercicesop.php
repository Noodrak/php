<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1: Comparaison de Deux Nombres</h1>
<?php
$x = 2;
$y = 4;
echo "Comparaison entre $x et $y <br>";
if ($x < $y)
{
    echo "$y est plus grand que $x <br>";
}
else if ( $x > $y )
{
    echo "$x est plus grand que $y <br>";
}
else if ( $x == $y )
{
    echo "$x est égale à $y <br>";
}
?>
    <h1>Exercices 2: Opérations Booléennes</h1>
    <?php
    $manger = false;
    switch ($favcolor) {
      case true:
        echo "Tu as manger";
        break;
      case false:
        echo "Tu n'as pas manger";
        break;
      default:
        echo "je ne sais pas";
    }
?>
    <h1>Exercices 3 : Calculatrice Simple</h1>
    <?php
$a = 1;
$b = 2;
$signe = "+";
if ($signe = "+")
{
    echo $a + $b;
}
else if ($signe = "-")
{
    echo $a - $b;
}
else if ($signe = "*")
{
    echo $a * $b;
}
else if ($signe = "/")
{
    echo $a / $b;
}
?>

</body>
</html>
