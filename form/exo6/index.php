<?php
    if (!empty($_POST)) {
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['civilite'])) {
            echo $_POST['nom']." ".$_POST['prenom']." ".$_POST['civilite'];
        }
    } else {
    ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>exo 6</title>
        </head>
        <body>
            <form action="" method="post">
                <select name="civilite">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <input type="text" name="nom" placeholder="nom">
                <input type="text" name="prenom" placeholder="prenom">
                <button type="submit">Envoyer</button>
            </form>
        </body>
        </html>
    <?php 
    }
?>