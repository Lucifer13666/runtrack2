<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Afficher les arguments GET</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
        echo "<h2>Arguments GET et leurs valeurs</h2>";
        echo "<table>";
        echo "<thead>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        echo "</thead>";
        echo "<tbody>";
        
        // Parcourir et afficher les arguments GET et leurs valeurs
        foreach ($_GET as $key => $value) {
            echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
        }

        echo "</tbody>";
        echo "</table>";
    }
    ?>
</body>
</html>
