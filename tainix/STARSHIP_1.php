<?php

$ships = [81, 280, 63, 27, 31, 4434, 21, 7850, 92, 2743, 318, 7056];

$puissanceTotale = 0;

foreach ($ships as $shipResistance) {
    $puissanceTotale += puissance($shipResistance);
}

echo '<p>Puissance totale : ' . $puissanceTotale . '</p>';

function puissance(int $resistance): int
{
    // On utilisera des "early return" => Google "PHP early return"

    // Si le vaisseau a une résistance inférieure à 100, alors la puissance doit être égale à la résistance divisée par 10, arrondie à l’entier supérieur.
    if ($resistance < 100) {
        return ceil($resistance / 10);
    }

    // Si le vaisseau a une résistance inférieure à 1.000, alors la puissance doit être égale à 3 fois la résistance divisée par 100, arrondie à l’entier supérieur. Une puissance fixe de 25 s’ajoute également.
    if ($resistance < 1000) {
        return 25 + 3 * ceil($resistance / 100);
    }

    // Si le vaisseau a une résistance inférieure à 10.000, alors la puissance doit être égale à 5 fois la résistance divisée par 1.000, arrondie à l’entier supérieur. Une puissance fixe de 80 s’ajoute également.
    if ($resistance < 10000) {
        return 80 + 5 * ceil($resistance / 1000);
    }
}

// round => arrondi classique, +proche
// ceil (plafond) => arrondi à l'entier supérieur
// floor (sol) => arrondi à l'entier inférieur