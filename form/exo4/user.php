<?php
    if (!empty($_POST)) {
        if (isset($_POST['nom']) && isset($_POST['prenom'])) {
            echo $_POST['nom']." ".$_POST['prenom'];
        }
    }