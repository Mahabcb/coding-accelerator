<?php

$alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

$prompt = readline("Ecrire une lettre: ");

if(in_array($prompt, $alphabet)) {
    $key = array_keys($alphabet, $prompt)[0];

$alphabet2 = array_slice($alphabet, $key);

foreach($alphabet2 as $lettre) {
    echo $lettre;
}
echo "\n";
}else {
    echo "Erreur: il faut taper une lettre de l'alphabet \n";
}



