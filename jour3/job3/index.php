<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des voyelles</title>
</head>
<body>
    <?php
    // Création de la variable de type string
    $str = "I'm sorry Dave I'm afraid I can't do that.";

    // Définir les voyelles
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    // Parcourir la chaîne et afficher uniquement les voyelles
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $voyelles)) {
            echo $str[$i];
        }
    }
    ?>
</body>
</html>
