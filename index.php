<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Un formulaire</h1>
            <form action="" method="post">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom"><br><br>
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" name="prenom"><br><br>

                <input type="submit" formmethod="post">
              </form>

    </form>
    <?php
    echo "$_POST[nom]" 
    ?>
</body>
</html>