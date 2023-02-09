<?php

require('loader.php');

/**
 * Titan
 */
$titan = new Titan(
    size: 17,
    speed: 9,
    hp: 1300
);
$titan->decreaseHP(1000);
Test::control('Titan, decreaseHP', $titan->hp, 300);

Test::control('Titan is Alive', $titan->isAlive(), true);

$titan->decreaseHP(300);
Test::control('Titan is Dead', $titan->isAlive(), false);


/**
 * Tribe
 */
$titansInformations = ['17;9;1384', '9;8;651', '6;7;381'];
$tribe = new Tribe($titansInformations);

Test::control('Constructeur size', $tribe->titans[0]->size, 17);
Test::control('Constructeur speed', $tribe->titans[1]->speed, 8);
Test::control('Constructeur hp', $tribe->titans[2]->hp, 381);

$titansInformations = ['17;9;1384', '9;8;651', '6;7;381'];
$tribe = new Tribe($titansInformations);
Test::control('Le + grand', $tribe->getTallest()->size, 17);

$titansInformations = ['5;9;1384', '9;8;651', '11;7;381'];
$tribe = new Tribe($titansInformations);
Test::control('Le + grand', $tribe->getTallest()->size, 11);

// Le premier Titan est mort, il ne peut pas être le + grand
$titansInformations = ['17;9;0', '9;8;651', '6;7;381'];
$tribe = new Tribe($titansInformations);
Test::control('Le + grand', $tribe->getTallest()->size, 9);


$titansInformations = ['17;9;0'];
$tribe = new Tribe($titansInformations);
Test::control('Aucun Titan vivant', $tribe->getTallest(), null);

/**
 * Hood
 */
$habitationsInformations = ['30;40', '18;41', '25;42'];
$hood = new Hood($habitationsInformations);
Test::control('Constructeur height', $hood->habitations[0]->height, 18);
Test::control('Constructeur height', $hood->habitations[1]->height, 25);
Test::control('Constructeur height', $hood->habitations[2]->height, 30);

$titan = new Titan(16, 1, 1);
Test::control('Sous les trois habitations', $hood->getClosest($titan)->height, 18);

$titan = new Titan(18, 1, 1);
Test::control('Même hauteur que la + basse', $hood->getClosest($titan)->height, 25);

$titan = new Titan(24, 1, 1);
Test::control('Sous deux habitations', $hood->getClosest($titan)->height, 25);

$titan = new Titan(30, 1, 1);
Test::control('Même hauteur que l\'habitation la + haute', $hood->getClosest($titan)->height, 30);

$titan = new Titan(35, 1, 1);
Test::control('Au dessus de l\'habitation la + haute', $hood->getClosest($titan)->height, 30);

/**
 * Calculateur
 */
Test::control('distance entre 2 habitations Bas => Haut',
    Calculateur::gazConsumedToMove(12, 18),
    6
);


Test::control('distance entre 2 habitations Haut => Bas',
    Calculateur::gazConsumedToMove(18, 12),
    6
);

// Habitation au dessus du Titan : 15 > 10
$habitation = new Habitation(15, 10);
$titan = new Titan(10,10,100);

Test::control('Puissance au dessus du Titan',
    Calculateur::powerOfAttack($titan, $habitation), 60);

Test::control('Gaz au dessus du Titan',
    Calculateur::gazConsumedToAttackTitan($titan, $habitation), 15);

// Habitation en dessous du Titan 15 < 20
$habitation = new Habitation(15, 10);
$titan = new Titan(20,10,100);

Test::control('Puissance en dessous du Titan',
    Calculateur::powerOfAttack($titan, $habitation), 35);
    
Test::control('Gaz en dessous du Titan',
    Calculateur::gazConsumedToAttackTitan($titan, $habitation), 5);

/**
 * Levi
 */
$habitationsInformations = ['30;40', '18;41', '25;42'];
$hood = new Hood($habitationsInformations);

$titansInformations = ['17;9;1384', '9;8;651', '6;7;381'];
$tribe = new Tribe($titansInformations);

$levi = new Levi(100, $hood, $tribe);
Test::control('Gaz consommé au début', $levi->gaz, 82);

$levi = new Levi(15, $hood, $tribe);
Test::control('Pas assez de gaz pour monter', $levi->gaz, 15);