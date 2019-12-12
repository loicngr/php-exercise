<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo 4</title>
</head>
<body>
    <?php
        if (!empty($_COOKIE)) {
            if (isset($_COOKIE['Login']) && isset($_COOKIE['Password'])) {
                echo $_COOKIE['Login']." ".$_COOKIE['Password'];
            }
        }
    ?>
</body>
</html>