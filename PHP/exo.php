<?php

$semaine = 1;
$coutTotal = 150;
$recette = 31;
$gain = 0;

while ($recette <= $cout) {
    $gain = $recette - ($recette * 20 / 100);
    $recette = $recette + $gain;
    $semaine = $semaine + 1;
    echo "gain ".$gain." recette ". $recette." semaine ".$semaine."\n";
};

echo "Il faut $semaine semaines pour rentabiliser le film";


//     ($semaine = $semaine + 1) = $semaine++
//     ($recette = $recette + $gain) = $recette += $gain
