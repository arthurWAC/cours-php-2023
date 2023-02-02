<?php

require 'Test.php';
require 'Eleve.php';

// TEST
$eleve = new Eleve;
Test::control('Début du cours, note de 12', $eleve->note, 12);

// TEST
$eleve = new Eleve;
$eleve->ecoute();
Test::control('il écoute, il gagne 1 point', $eleve->note, 13);

// TEST
$eleve = new Eleve(20);
$eleve->ecoute();
Test::control('il écoute, il gagne 1 point, mais il a déjà 20', $eleve->note, 20);

// TEST
$eleve = new Eleve;
$eleve->travaille();
Test::control('il travaille, il gagne 1 point', $eleve->note, 13);

// TEST
$eleve = new Eleve(20);
$eleve->travaille();
Test::control('il travaille, il gagne 1 point, mais il a déjà 20', $eleve->note, 20);

// TEST
$eleve = new Eleve;
$eleve->parle();
Test::control('il parle, il perd 1 point', $eleve->note, 11);

// TEST
$eleve = new Eleve;
$eleve->dort();
Test::control('il dort, il perd 2 points', $eleve->note, 10);


// TEST
$eleve = new Eleve(0);
$eleve->parle();
Test::control('il parle, il perd 1 point, mais il est déjà à 0', $eleve->note, 0);

// TEST
$eleve = new Eleve(0);
$eleve->dort();
Test::control('il dort, il perd 2 points, mais il est déjà à 0', $eleve->note, 0);

// TEST
$eleve = new Eleve;
$eleve->parle();
Test::control('il parle, il perd 1 point sur sa note maximale', $eleve->noteMaximale, 19);

// TEST
$eleve = new Eleve;
$eleve->dort();
Test::control('il dort, il perd 2 points sur sa note maximale', $eleve->noteMaximale, 18);


$eleve = new Eleve;
// Il parle 11 fois
$eleve->parle();
$eleve->parle();
$eleve->parle();
$eleve->parle();
$eleve->parle();
$eleve->parle();
$eleve->parle();
$eleve->parle();
$eleve->parle();
$eleve->parle();
$eleve->parle();
Test::control('il parle, il perd 11 points sur sa note maximale mais est bloqué à 10', $eleve->noteMaximale, 10);

// TEST
$eleve = new Eleve;
// Il dort 6 fois
$eleve->dort();
$eleve->dort();
$eleve->dort();
$eleve->dort();
$eleve->dort();
$eleve->dort();
Test::control('il dort, il perd 12 points sur sa note maximale mais est bloqué à 10', $eleve->noteMaximale, 10);

// TEST
// Un petit parcours
$eleve = new Eleve(16);
$eleve->dort(); // 14, Nmax à 18
$eleve->travaille();
$eleve->travaille();
$eleve->travaille();
$eleve->travaille();
$eleve->travaille(); // 14 + 5 => 19, bloqué à 18
Test::control('Parcours', $eleve->note, 18);


// TEST
$eleve = new Eleve;
$eleve->action(Eleve::ECOUTE);
Test::control('il écoute, il gagne 1 point', $eleve->note, 13);

// TEST
$eleve = new Eleve;
$eleve->action(Eleve::TRAVAILLE);
Test::control('il travaille, il gagne 1 point', $eleve->note, 13);

// TEST
$eleve = new Eleve;
$eleve->action(Eleve::PARLE);
Test::control('il parle, il perd 1 point', $eleve->note, 11);

// TEST
$eleve = new Eleve;
$eleve->action(Eleve::DORT);
Test::control('il dort, il perd 2 points', $eleve->note, 10);