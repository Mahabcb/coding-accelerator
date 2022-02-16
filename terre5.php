<?php


if(is_numeric($argv[1])) {
    if($argv[1]%2 == 1) {
        echo "Ce nombre est impair";
    }
    else {
        echo "Ce nombre est pair";
    }
}else {
    echo "Tu ne me la mettras pas à l'envers";
}