<?php

$sac = 852;
$objets = [49, 88, 18, 23, 30, 15, 89, 29, 87, 77, 19, 57, 22, 20, 63, 14, 26, 86, 68, 74, 28, 69, 46, 45, 48, 84];

/**
 *
 * Regarder du côté des méthodes sort, rsort, etc.
 * Attention, elles fonctionnent par "référence"
 * Utiliser un "break"
 */

// Son sac est vide au départ.
$remplissageDuSac = 0;

// Il va d’abord essayer de mettre les 10 objets les + gros, de manière décroissante.
rsort($objets); // Et non $objets = rsort($objets);

$nbObjetsMisDansLeSac = 0;
$maxGrosObjetsMisDansLeSac = 10;

// $les10PlusGrosObjets = array_slice($objets, 0, 10);

foreach ($objets as $objet) {

    // Essayer de remplir le sac, donc vérifier s'il y a de la place
    if ( ($remplissageDuSac + $objet) <= $sac) {
        // Il y a de la place, je remplis le sac
        $remplissageDuSac += $objet;
    }

    $nbObjetsMisDansLeSac++;
    if ($nbObjetsMisDansLeSac >= $maxGrosObjetsMisDansLeSac) {
        break;
    }
}

// Puis il va essayer de mettre les 10 objets les + petits, de manière croissante.
sort($objets);

$nbObjetsMisDansLeSac = 0;
$maxPetitsObjetsMisDansLeSac = 10;

// Pour éviter les compteurs ci-dessus : 
// $les10PlusGrosObjets = array_slice($objets, 0, 10);

foreach ($objets as $objet) {

    // Essayer de remplir le sac, donc vérifier s'il y a de la place
    if ( ($remplissageDuSac + $objet) <= $sac) {
        // Il y a de la place, je remplis le sac
        $remplissageDuSac += $objet;
    }

    $nbObjetsMisDansLeSac++;
    if ($nbObjetsMisDansLeSac >= $maxPetitsObjetsMisDansLeSac) {
        break;
    }
}

// Attention à ne pas dépasser la place disponible dans le sac ! Si tu as un objet qui « occupe » 75 et qu’il ne reste plus que 50 dans le sac, alors l’objet ne peut pas être déposé dans le sac.

// Tu dois retourner la place occupée dans le sac à dos par cette méthode de remplissage.
echo '<p>Remplissage : ' . $remplissageDuSac . '</p>';
