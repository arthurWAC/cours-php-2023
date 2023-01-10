<?php
// On va raconter une histoire...
$histoire = ''; // On fait un seul echo à la fin (déjà écrit)
$nomDuHeros = 'Thor'; // A choisir
$distanceParcourue = 0;

// 1. Racontez comment s'appelle le héros, en complétant la variable $histoire, utilisez un peu d'html : hX, p, b, etc.
$histoire .= '<h1>Début de l\'aventure</h1>';
$histoire .= '<h4>Le héros s\'appelle' . $nomDuHeros . '</h4>';

// $histoire .= '<h1>...</h1>' .
//              //'<h2>...</h2>' .
//              '<p>....</p>' .
//              '<p>....</p>';


// On va définir quelques valeurs aléatoirement
$force = rand(1, 10);
$agilite = rand(1, 10);
$piecesDOr = rand(50, 100);

// $force = 7;
// $agilite = 5;
// $piecesDOr = 60;

$NbJourDeLaSemaine = rand(1, 7);
$joursDeLaSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

$range = range(1, 7);

echo '<pre>';
print_r($range);
print_r($joursDeLaSemaine);
echo '</pre>';

//
// Exercices autour du if
// (Complétez l'histoire à chaque fois qu'il se passe quelque chose)
//

// 2.
// Si la force est supérieure à 8, alors je gagne 1 point d'agilité.
$histoire .= '<p>2. Ma force est de ' . $force . '.</p>';
if ($force > 8) {
    $agilite++;
    $histoire .= '<p>Je gagne 1pt d\'agilité.</p>';
}

// 3.
// Si ma force est inférieure à 6, je passe par le chemin de gauche, qui fait 500m, sinon je passe par le chemin de droite, qui fait 850m.
// Dans le chemin de droite, je trouve 4 pièces d'or
$histoire .= '<p>3. Ma force est de ' . $force . '.</p>';
if ($force < 6) {
    // Chemin de gauche
    $distanceParcourue += 500;
    $histoire .= '<p>Je passe par le chemin de gauche.</p>';
} else {
    // Chemin de droite
    $distanceParcourue += 850;
    $piecesDOr += 4;
    $histoire .= '<p>Je passe par le chemin de droite, j\'ai trouvé de l\'or !</p>';
}

// 4.
// Je parcours 150m
// Si j'ai plus de 80 pièces d'or, j'en dépense 30 pour m'offrir 2 points d'agilité
// Si j'en ai moins de 80 et + de 60, j'en dépense 15 pour m'offrir 1 point d'agilité
// Si j'en ai moins de 60, j'en dépense 5 pour m'offrir 1 point de force
$histoire .= '<p>4. J\'ai ' . $piecesDOr . ' pièces.</p>';
$distanceParcourue += 150;

if ($piecesDOr > 80) {
    $piecesDOr -= 30;
    $agilite += 2;

    $histoire .= '<p>Cas 1 : PO-30, A+2</p>';
} elseif ($piecesDOr > 60) {
    $piecesDOr -= 15;
    $agilite++;

    $histoire .= '<p>Cas 2 : PO-15, A+1</p>';
} else {
    $piecesDOr -= 5;
    $force++;

    $histoire .= '<p>Cas 3 : PO-5, F+1</p>';
}

// 5. 
// Je parcours 300m
$distanceParcourue += 300;
$histoire .= "<p>5. Force : $force et Agilité : $agilite";
// Si ma force et mon agilité sont supérieures à 6, je gagne 10 pièce d'or
// Si ma force ou mon agilité est inférieure à 3, je perds 10 pièces d'or
// (stockez les conditions dans des variables)
$conditionsPourGagnerDesPiecesDOr = ($force > 6 && $agilite > 6);
$conditionsPourPerdreDesPiecesDOr = ($force < 3 || $agilite < 3);

if ($conditionsPourGagnerDesPiecesDOr) {
    $piecesDOr += 10;

    $histoire .= '<p>Cas 1 : F et A haut. PO+10</p>';
}

if ($conditionsPourPerdreDesPiecesDOr) {
    $piecesDOr -= 10;

    $histoire .= '<p>Cas 2 : F ou A bas. PO-10</p>';
}

if (!$conditionsPourGagnerDesPiecesDOr && !$conditionsPourPerdreDesPiecesDOr) {
    $histoire .= '<p>Il ne se passe rien</p>';
}

// 6.
// Indiquez dans l'histoire quel jour nous sommes
$jour = $joursDeLaSemaine[$NbJourDeLaSemaine - 1];
$histoire .= '<p>Nous sommes un ' . $jour . ', c\'est le jour '. $NbJourDeLaSemaine .'  de la semaine.</p>';

// Variante : 
// $indexJour = $NbJourDeLaSemaine - 1;
// $jour = $joursDeLaSemaine[$indexJour];
// $histoire .= '<p>Nous sommes un ' . $jour . ', c\'est le jour '. ($NbJourDeLaSemaine + 1) .'  de la semaine.</p>';


// 7.
// Si je suis en début de semaine (lundi, mardi, mercredi) je me rends à ma destination par un chemin de 740m, et je gagne 1 point de force
// Si je suis en fin de semaine (les autres jours), je me rends à ma destination par un chemin de 1345m, et je perds 1 point d'agilité
// if ($NbJourDeLaSemaine <= 3) {
//     $distanceParcourue += 740;
//     $force += 1;
// } else {
//     $distanceParcourue += 1345;
//     $agilite--;
// }

// switch ($jour) {

//     // Groupe de vérifications
//     case 'Lundi':
//     case 'Mardi':
//     case 'Mercredi':
//         // Bloc d'instructions
//         $distanceParcourue += 740;
//         $force += 1;
//         // -------------------
//         break;

//     case 'Jeudi':
//     case 'Vendredi':
//     case 'Samedi':
//     case 'Dimanche':
//         // Bloc d'instructions
//         $distanceParcourue += 1345;
//         $agilite--;
//         // -------------------
//         break;
// }

// Variante
switch ($jour) {

    // Groupe de vérifications
    case 'Lundi':
    case 'Mardi':
    case 'Mercredi':
        // Bloc d'instructions
        $distanceParcourue += 740;
        $force += 1;
        $histoire .= '<p>Début de semaine.</p>';
        // -------------------
        break;

    default:
        // Bloc d'instructions
        $distanceParcourue += 1345;
        $agilite--;
        $histoire .= '<p>Fin de semaine.</p>';
        // -------------------
        break;
}

// 8. A l'aide d'un "if elseif elseif..." déterminer la tranche de 20, dans laquelle se trouve le nombre de pièces d'or (0-20; 21-40; 41-60; jusque 100)
// Gérez le cas où il y aurait plus de 100 pièces également
if ($piecesDOr <= 20) {
    $histoire .= '<p>Je suis dans la tranche 0-20</p>';
} elseif ($piecesDOr <= 40) {
    $histoire .= '<p>Je suis dans la tranche 21-40</p>';
} elseif ($piecesDOr <= 60) {
    $histoire .= '<p>Je suis dans la tranche 41-60</p>';
} elseif ($piecesDOr <= 80) {
    $histoire .= '<p>Je suis dans la tranche 61-80</p>';
}  elseif ($piecesDOr <= 100) {
    $histoire .= '<p>Je suis dans la tranche 81-100</p>';
} else {
    $histoire .= '<p>Je suis dans la tranche 101+</p>';
}

// Variante avec un "switch true"

switch (true) {

    case $piecesDOr <= 20:
        $histoire .= '<p>Je suis dans la tranche 0-20</p>';
        break;

    case $piecesDOr <= 40:
        $histoire .= '<p>Je suis dans la tranche 21-40</p>';
        break;

    // ...

    case $piecesDOr <= 100:
        $histoire .= '<p>Je suis dans la tranche 81-100</p>';
        break;

    default:
        $histoire .= '<p>Je suis dans la tranche 101+</p>';
        break;
}

// Depuis PHP 8, "match"
$distanceSelonJour = match($jour) {
    'Lundi', 'Mardi', 'Mercredi' => 740,
    default => 1345
};

$histoire .= '<p>Le ' . $jour . ' je parcours ' . $distanceSelonJour . '</p>';









$histoire .= '<p>J\'ai parcouru ' . $distanceParcourue . 'm</p>';

echo $histoire;