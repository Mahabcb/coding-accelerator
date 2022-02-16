<?php

$phrase = explode(' ', $argv[1]);


$inverse = array_reverse($phrase);


foreach($inverse as $mot) {
    $mot_inverse = strrev($mot);
    echo $mot_inverse . ' ';
}