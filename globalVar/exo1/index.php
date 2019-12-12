<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo 1</title>

    <style>
        body {
            background: teal;
            color: aliceblue;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <main>
        <ul>
            <li>User Agent : <?= $_SERVER['HTTP_USER_AGENT'] ?></li>
            <li>IP : <?= gethostbyname($_SERVER['SERVER_NAME']) ?></li>
            <li>Nom du serveur : <?= $_SERVER['SERVER_NAME'] ?></li>
        </ul>
    </main>
    
</body>
</html>