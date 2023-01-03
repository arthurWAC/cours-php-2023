<?php
$monAge = rand(5, 25);
define('AGE_LIMITE_POUR_PASSER_LE_PERMIS', 18);

echo '<p>J\'ai ' . $monAge . ' ans</p>';
echo '<p>On peut passer le permis à partir de ' . AGE_LIMITE_POUR_PASSER_LE_PERMIS . ' ans</p>';

// Version avec une concaténation dans le if
if ($monAge >= AGE_LIMITE_POUR_PASSER_LE_PERMIS) {
    echo '<p>Je peux aller m\'inscrire à l\'auto-école</p>';
} else {

    // Ecrire combien d'années je dois encore attendre
    $anneesAAttendre = AGE_LIMITE_POUR_PASSER_LE_PERMIS - $monAge;

    $phrase = '<p>J\'attends encore ' . $anneesAAttendre . ' année';

    // Gérer le cas particulier du "1 an à attendre" ??
    if ($anneesAAttendre !== 1) {
        $phrase .= 's';
    }

    $phrase .= '...</p>';
    echo $phrase;
}

// Version avec le ternaire
if ($monAge >= AGE_LIMITE_POUR_PASSER_LE_PERMIS) {
    echo '<p>Je peux aller m\'inscrire à l\'auto-école</p>';
} else {

    // Ecrire combien d'années je dois encore attendre
    $anneesAAttendre = AGE_LIMITE_POUR_PASSER_LE_PERMIS - $monAge;

    // "Ternaire" => "if condensé"
    $mot = ($anneesAAttendre === 1) ? 'an' : 'années';
    $phrase = '<p>J\'attends encore ' . $anneesAAttendre . ' ' . $mot . '...</p>';

    echo $phrase;
}

// La structure : 
// Mot clé "if"
// La condition, comparaison, booléen se trouve entre ()
// Plusieurs opérateurs de comparaison : 
    // > plus grand que, >= plus grand ou égal
    // < plus petit que, <= plus petit ou égal
    // == égal (à éviter)
    // === strictement égal (à favoriser)
    // !== strictement inégal
// Un premier bloc d'instructions, délimité par { }
// Si nécessaire le mot clé "else"
// Un second bloc d'instructions, délimité par { }