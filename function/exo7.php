<?php
    function maFonction($age, $genre) {
        if ($genre == "Homme") {
            if ($age >= 18) {
                return "Vous êtes un homme et vous êtes majeur";
            } else {
                return "Vous êtes un homme et vous êtes mineur";
            }
        } else if ($genre == "Femme") {
            if ($age >= 18) {
                return "Vous êtes une femme et vous êtes majeur";
            } else {
                return "Vous êtes une femme et vous êtes mineur";
            }
        }
    }
    echo maFonction(17, "Homme");