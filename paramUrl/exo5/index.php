<?php
    if (!empty($_GET)) {
        if (isset($_GET['semaine'])) {
            echo $_GET['semaine'];
        }
    }