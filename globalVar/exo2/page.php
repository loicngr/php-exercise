<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo 2</title>
</head>
<body>
    <a href="index.php">Retour sur l'index</a>
    <ul>Variables SESSION :
        <li>Nom : <?= $_SESSION['nom'] ?></li>
        <li>Prénom : <?= $_SESSION['prenom'] ?></li>
        <li>Age : <?= $_SESSION['age'] ?></li>
    </ul>
</body>
</html>