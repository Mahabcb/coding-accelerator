<?php


if(!intval($argv[1]) || !intval($argv[2]) ) {
    if($argv[2] <= 0) {
        echo "erreur";
    }
}else {
    echo pow(intval($argv[1]), intval($argv[2]));
}


