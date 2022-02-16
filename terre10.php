<?php

if(intval($argv[1])) {
    if($argv[1] > 0) {
        echo sqrt($argv[1]);
    }
}else {
    echo "Erreur";
}