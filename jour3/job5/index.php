<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compter les consonnes et les voyelles</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Création de la variable de type string
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

    // Initialiser le dictionnaire pour les consonnes et voyelles
    $dic = [
        "consonnes" => 0,
        "voyelles" => 0
    ];

    // Définir les voyelles
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
    
    // Définir les consonnes (en excluant les caractères spéciaux et les voyelles)
    $consonnes = [
        'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z',
        'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'
    ];

    // Parcourir la chaîne et compter les occurrences de consonnes et voyelles
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $voyelles)) {
            $dic["voyelles"]++;
        } elseif (in_array($str[$i], $consonnes)) {
            $dic["consonnes"]++;
        }
    }
    ?>

    <!-- Affichage des résultats dans un tableau HTML -->
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelles"]; ?></td>
                <td><?php echo $dic["consonnes"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
