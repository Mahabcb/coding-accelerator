<?php

if($argv[1] >= $argv[2] && $argv[2] != 0) {
    $resultat = $argv[1] / $argv[2];
    echo $resultat;
}else {
    echo "erreur \n";
}
