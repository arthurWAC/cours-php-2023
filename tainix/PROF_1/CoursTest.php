<?php

require 'Test.php';
require 'Eleve.php';
require 'Cours.php';

// TEST
$cours = new Cours(4);
Test::control('Test moyenne initiale', $cours->getMoyenne(), 12);

// TEST
$cours = new Cours(4);
$cours->actions('TTTT');
Test::control('Ils travaillent tous', $cours->getMoyenne(), 13);

// TEST
$cours = new Cours(4);
$cours->actions('DDDD');
Test::control('Ils dorment tous', $cours->getMoyenne(), 10);

// TEST
$cours = new Cours(4);
$cours->actions('DDTT');
Test::control('Moyenne précise', $cours->getMoyenne(), 11.5);

// TEST
$cours = new Cours(0);
Test::control('Test moyenne sans élève', $cours->getMoyenne(), 0);