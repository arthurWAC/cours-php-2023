<?php
declare(strict_types=1);

// Intègre ici tout le contenu de ce fichier 
require('heros_fonctions.php');

$force = rand(10, 20);
$agilite = rand(10, 20);
$defense = rand(10, 20);
$magie = rand(1, 5);

$pointsDeVie = 100;

$ennemis = [
    ['nom' => 'Ork 1', 'puissance' => rand(20, 100)],
    ['nom' => 'Ork 2', 'puissance' => rand(20, 100)],
    ['nom' => 'Ork 3', 'puissance' => rand(20, 100)],
    ['nom' => 'Ork 4', 'puissance' => rand(20, 100)],
];

// 1.
// Créer une fonction puissance pour calculer la puissance du héros selon la formule 
// Puissance = force * 2 + agilite + (defense / 2) (arrondi à l'entier)

// Affronter chaque ennemi en comparant la puissance du héros avec celle de l'ennemi
// Celui qui a le + de puissance gagne (si égalité, je gagne)

// Si je gagne, je gagne 1pt de force
// Si je perds, je perds 1pt d'agitilité et 10 pts de vie

// Ecrire le déroulé des combats
foreach ($ennemis as $ennemi) {

    // Pour chaque ennemi, je recalcul ma puissance
    $maPuissance = puissance($force, $agilite, $defense);

    if ($maPuissance >= $ennemi['puissance']) {
        // Je gagne
        $force++;

        echo '<p>J\'ai battu ' . $ennemi['nom'] . ' '. $maPuissance .' >= '. $ennemi['puissance'] .' </p>';
    } else {
        // Je perds
        $agilite--;
        $pointsDeVie -= 10;

        echo '<p>J\'ai perdu contre ' . $ennemi['nom'] . ' '. $maPuissance .' < '. $ennemi['puissance'] .' </p>';
    }
}




// 2. Créer une fonction qui génère un ennemi aléatoirement, c'est à dire qui retourne un tableau avec un nom et une puissance. Cette fonction prendra en paramètre un niveau. La puissance de l'ennemi sera alors comprise entre 10 * $niveau et 20 * niveau. 
// Chaque ennemi s'appelera "Ork " suivi de 6 caractères majuscules aléatoires
// Regarder du côté de str_shuffle et substr



// 3. Faire un "while" pour affronter les ennemis jusqu'à la mort !
// Combien d'ennemi est il possible d'affronter ?
// Tous les 20 ennemis, augmenter le niveau des ennemis créés (on commence à 1)
// (Pas de nouvelle fonction à créer)

// On va construire une sécurité pour pouvoir coder le while sans risque
// Un bloqueur, une sécurité indépendante de la logique de mon programme
$bloqueur = 0;

// Je reprends la logique de mon programme
$compteurEnnemisCombattus = 0;
$niveauEnnemi = 1;

while ($pointsDeVie > 0) {

    // Je combats un nouvel ennemi

    // 1. Créer ce nouvel ennemi
    $ennemi = creerUnEnnemi($niveauEnnemi);

    // 2. Je recalcule ma puissance
    $maPuissance = puissance($force, $agilite, $defense);

    // 3. Je compare les puissances
    
    // 3.1 Je gagne
    if ($maPuissance >= $ennemi['puissance']) {
        // 3.1.1 Mes caractéristiques évoluent
        $force++;

        echo '<p>J\'ai battu ' . $ennemi['nom'] . ' '. $maPuissance .' >= '. $ennemi['puissance'] .' </p>';

    // 3.2 Je perds
    } else {
        // 3.2.1 Mes caractéristiques évoluent
        $agilite--;
        $pointsDeVie -= 10;

        echo '<p>J\'ai perdu contre ' . $ennemi['nom'] . ' '. $maPuissance .' < '. $ennemi['puissance'] .' </p>';
    }

    // 4. J'incrémente le compteur d'ennmis combattus
    $compteurEnnemisCombattus++;
        // 4.1 Tous les 5 ennemis, j'augmente le niveau de 1
        if ($compteurEnnemisCombattus % 5 === 0) {
            $niveauEnnemi++;
        }


    // Bloqueur ------------
    $bloqueur++; // A chaque itération, j'incrémente de 1
    if ($bloqueur > 100) {
        break; // Au bout de 1000 itérations, par sécurité, je casse ma boucle while
    }
    // ----------------------
}

echo '<p>J\'ai combattu ' . $compteurEnnemisCombattus . ' ennemis.</p>';





// Variante pour le while
// while(true)
// Attention, il n'y a plus de condition d'arrêt, donc le bloqueur devient obligatoire en phase de DEV

$bloqueur = 0;

while (true) {

    // ...toute la logique du while précédent...

    // Condition d'arrêt
    if ($pointsDeVie <= 0) {
        break;
    }

    // Bloqueur par sécurité
    $bloqueur++;
    if ($bloqueur > 1000) {
        break;
    }
}

