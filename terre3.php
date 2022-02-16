<?php

$phrase = readline("Ecrire une phrase: ");

$array = explode(" ", $phrase);


foreach($array as $mot) {
    echo $mot . "\n";
}
