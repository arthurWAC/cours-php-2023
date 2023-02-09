<?php

require 'loader.php';

$queue_lezard = 11;
$oreille_souris = 13;
$petale_rose = 15;
$nuage_tenebreux = 13;
$poussiere_fee = 7;
$eau_jouvence = 10;
$bave_crapaud = 16;

$harry = new Wizard(
     $queue_lezard,
    $oreille_souris,
    $petale_rose,
    $nuage_tenebreux,
    $poussiere_fee,
    $eau_jouvence,
    $bave_crapaud
);

echo $harry->calculAllDamages();