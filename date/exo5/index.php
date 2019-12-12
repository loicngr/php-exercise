<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo 5</title>

    <style>
        body {
            background: teal;
            color: white;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <?php
        date_default_timezone_set('Europe/Paris');

        $datetime1 = new DateTime('2016-05-16');
        $datenow = date("Y-m-d");
        $datetime2 = new DateTime($datenow);
        $interval = $datetime1->diff($datetime2);
        echo $interval->format('%R%a days');
    ?>
</body>
</html>