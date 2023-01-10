<?php
// Les boucles servent à répéter des instructions

// La boucle for
    // Une valeur de départ
    // Une condition de continuité
    // Une méthode d'incrémentation

    // Tout ça est géré par un compteur
    // Souvent on appelera ce compteur $i

// 10 opérations
for ($i = 1; $i <= 10; $i++) {
    echo '<p>' . $i . '</p>';
}

echo '<hr />';

// 9 opérations
for ($i = 1; $i < 10; $i++) {
    echo '<p>' . $i . '</p>';
}

echo '<hr />';

//  10 opérations
for ($i = 0; $i < 10; $i++) {
    echo '<p>' . $i . '</p>';
}

echo '<hr />';

//  11 opérations
for ($i = 0; $i <= 10; $i++) {
    echo '<p>' . $i . '</p>';
}

// Dans 90% des for, on aura quelque chose comme ci-dessus
// Mais on peut avoir d'autres déclarations du for : 


// On peut descendre
for ($i = 1000; $i > 0; $i--) {

}

// On peut avancer de 2 en 2
for ($i = 0; $i <= 1000; $i += 2) {

}

// On peut travailler avec des valeurs négatives
for ($i = -10; $i <= 10; $i++) {

}

// Notion de bloc d'instructions
for ($i = 1; $i <= 10; $i++) {
    // Début de mon bloc : Je fais "tout ce que je veux"

    $var = 'truc';

    if ($i == 2) {
    }

    switch ($var) {

    }

    // Un autre for
    // Mais plus avec $i
    for ($j = 1; $j <= 10; $j++) {

    }

    // Fin de mon bloc

    // Le truc à éviter : écrire/modifier $i dans la boucle
    // $i++;
    // On peut le "lire" : affichage, intégration dans un calcul, test


    // On peut aussi utiliser "break"
    // Peu utilisé dans un for
    break;

}



// La boucle foreach ("pour chaque")
// Boucle pour parcourir les éléments d'un tableau


$tableau = [1, 2, 3, 4, 5];
echo '<pre>';
print_r($tableau);
echo '</pre>';

foreach ($tableau as $nombre) {
    echo '<p>' . $nombre . '</p>';
}

// après le "as" on donnera un nom intelligible

// Auto complétion de VS Code: 
// Foreach "avec clé"
// foreach ($variable as $key => $value) {
//     # code...
// }

// On écrira
foreach ($tableau as $key => $nombre) {
    echo '<p>La valeur ' . $nombre . ' est indexée à ' . $key . '</p>';
}