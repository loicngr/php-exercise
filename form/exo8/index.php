<?php
    if (!empty($_POST)) {
        if ($_FILES['fileToUpload']['size'] != 0 && $_FILES['fileToUpload']['error'] == 0 && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['civilite'])) {
            if ($_FILES['fileToUpload']['type'] == 'application/pdf') {
                echo $_FILES['fileToUpload']['name'];
            }
        }
    } else {
?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>exo 8</title>
        </head>
        <body>
            <form enctype="multipart/form-data" action="" method="post">
                <select name="civilite">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <input type="text" name="nom" placeholder="nom">
                <input type="text" name="prenom" placeholder="prenom">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <button type="submit">Envoyer</button>
            </form>
        </body>
        </html>
    <?php
    }
?>