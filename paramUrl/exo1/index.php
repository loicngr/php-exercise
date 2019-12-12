<?php
    if (!empty($_GET)) {
        if (isset($_GET['nom']) && isset($_GET['prenom'])) {
            echo $_GET['nom']." ".$_GET['prenom'];
        }
    }