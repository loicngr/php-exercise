<?php
    if (!empty($_GET)) {
        if (isset($_GET['batiment']) && isset($_GET['salle'])) {
            echo $_GET['batiment']." ".$_GET['salle'];
        }
    }