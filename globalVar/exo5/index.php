<?php
    if (!empty($_POST)) {
        if (isset($_POST['login']) && isset($_POST['password'])) {
            setcookie('Login', $_POST['login']);
            setcookie('Password', $_POST['password']);
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo 5</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Cookie Login" required>
        <input type="password" name="password" placeholder="Cookie Password" required>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>