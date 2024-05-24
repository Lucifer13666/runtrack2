<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Chaîne à l'envers</title>
</head>
<body>
    <?php
    // Création de la variable de type string
    $str = "Les choses que l'on possède finissent par nous posséder.";

    // Parcourir la chaîne à l'envers et l'afficher
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        echo $str[$i];
    }
    ?>
</body>
</html>
