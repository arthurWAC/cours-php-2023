<?php

require 'Ennemy.php';
require 'Vegeta2.php';

$ennemis = [236, 589, 701, 1276];
$force_vegeta = 173;

$vegeta = new Vegeta2($force_vegeta);

foreach ($ennemis as $ennemiPuissance) {

    $ennemi = new Ennemy($ennemiPuissance);
    $vegeta->fight($ennemi);
}

echo $vegeta->puissance;