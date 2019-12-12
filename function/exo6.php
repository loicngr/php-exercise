<?php
    function maFonction($nom, $prenom, $age) {
        return "Bonjour {$nom} {$prenom},tu as {$age} ans.";
    }
    echo maFonction("noger", "loic", 22);