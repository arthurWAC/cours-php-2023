<?php

$depart = 4259;
$chemin = ['++++', '++++', '+++', '+++', '+++', '+++', '-', '-'];

// Alternative : utiliser une autre variable que $depart
// $resultat = $depart;
// $arrivee = $depart;

foreach ($chemin as $part) {
    $depart += convert($part);
}

echo '<p>A la fin, le code est : ' . $depart . '</p>'; 

function convert(string $code): int
{
    // Le nombre de signe indique quelle puissance de 10 il faut prendre en compte, sous la forme 10^(nombre de signe – 1)
    $nombreDeSignes = strlen($code);

    $value = pow(10, $nombreDeSignes - 1);

    // Le signe « + » ou « – » indique s’il faut ajouter ou soustraire une valeur.
    $signe = $code[0]; // Le premier caractère de $code

    if ($signe === '+') {
        return $value;
    } else {
        return -$value;
    }
}

echo convert('+'); // 1
echo convert('--'); // -10
echo convert('+++'); // 100

$chaine = 'abcd';
echo $chaine[1]; // b