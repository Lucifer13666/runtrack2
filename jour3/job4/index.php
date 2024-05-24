<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compter les caractères</title>
</head>
<body>
    <?php
    // Création de la variable de type string
    $str = "Dans l'espace, personne ne vous entend crier";

    // Initialiser le compteur de caractères
    $nombre_de_caracteres = 0;

    // Parcourir la chaîne et compter les caractères
    for ($i = 0; $i < strlen($str); $i++) {
        $nombre_de_caracteres++;
    }

    // Afficher le nombre de caractères
    echo "Le nombre de caractères dans la chaîne est : " . $nombre_de_caracteres;
    ?>
</body>
</html>
