<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Remplacement de caractères</title>
</head>
<body>
    <?php
    // Création de la variable de type string
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";

    // Longueur de la chaîne
    $length = strlen($str);

    // Nouvelle chaîne résultante
    $newStr = '';

    // Parcourir la chaîne en remplaçant chaque caractère
    for ($i = 0; $i < $length; $i++) {
        // Récupérer l'indice du caractère suivant (en bouclant sur la chaîne)
        $nextIndex = ($i + 1) % $length;
        // Remplacer le caractère actuel par le caractère suivant
        $newStr .= $str[$nextIndex];
    }

    // Affichage de la nouvelle chaîne
    echo $newStr;
    ?>
</body>
</html>
