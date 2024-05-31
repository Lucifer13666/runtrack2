<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre d'arguments GET</title>
</head>
<body>
    <h1>Formulaire GET</h1>
    <form method="GET" action="">
        <label for="champ1">Champ 1 :</label>
        <input type="text" id="champ1" name="champ1"><br><br>
        
        <label for="champ2">Champ 2 :</label>
        <input type="text" id="champ2" name="champ2"><br><br>
        
        <label for="champ3">Champ 3 :</label>
        <input type="text" id="champ3" name="champ3"><br><br>
        
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {
        // Compter le nombre d'arguments GET sans utiliser de fonction système
        $nombre_arguments = 0;
        foreach ($_GET as $key => $value) {
            $nombre_arguments++;
        }

        // Afficher le nombre d'arguments GET
        echo "<h2>Nombre d'arguments GET : $nombre_arguments</h2>";
    }
    ?>
</body>
</html>
