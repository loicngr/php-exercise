<?php
    session_start();
    $_SESSION["nom"] = "NOGIER";
    $_SESSION["prenom"] = "Loic";
    $_SESSION["age"] = 22;
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
    <a href="page.php">Nouvelle page</a>
</body>
</html>