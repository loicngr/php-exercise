<?php
    if (!empty($_GET)) {
        if (isset($_GET['age'])) {
            echo $_GET['age'];
        } else {
            echo "Paramètre age introuvable.";
        }
    } else {
        echo "Aucun paramètre.";
    }