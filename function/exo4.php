<?php
    function maFonction($nbr1, $nbr2) {
        if ($nbr1 > $nbr2) {
            return "Le premier nombre est plus grand";
        } else if ($nbr1 < $nbr2) {
            return "Le premier nombre est plus petit";
        } else if ($nbr1 == $nbr2) {
            return "Les deux nombres sont identiques";
        }
    }
    echo maFonction(3, 2);