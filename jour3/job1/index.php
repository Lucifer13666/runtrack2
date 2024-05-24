<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification de la parité</title>
</head>
<body>
    <?php
    // Création du tableau contenant les nombres
    $nombres = [200, 204, 173, 98, 171, 404, 459];

    // Parcours du tableau
    foreach ($nombres as $nombre) {
        // Vérification si le nombre est pair ou impair
        if ($nombre % 2 == 0) {
            echo "$nombre est paire<br />";
        } else {
            echo "$nombre est impaire<br />";
        }
    }
    ?>
</body>
</html>
