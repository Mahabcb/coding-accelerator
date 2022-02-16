<?php

function nombrePremier($nombre) {
        if($nombre%2 == 0) {
            echo "Ce nombre n'est pas premier";
        } else {
            echo "Ce nombre est premier";
        }
}

nombrePremier($argv[1]);