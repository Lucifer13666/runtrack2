<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des caractères</title>
</head>
<body>
    <?php
    // Création de la variable de type string
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

    // Parcourir la chaîne et afficher un caractère sur deux
    for ($i = 0; $i < strlen($str); $i += 2) {
        echo $str[$i];
    }
    ?>
</body>
</html>
