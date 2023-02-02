<?php

require 'Test.php';
require 'Eleve.php';
require 'Cours.php';

$actions = ['ETETTETP', 'EETTTTEE', 'PTETTTEE', 'PDPDTTEE', 'EETTETTE', 'DETETEET', 'ETEETTDE', 'ETEPPTTE', 'TTTPPETT', 'EDTETETT', 'ETEETETP', 'TPEEEDTT', 'ETTEEPDE', 'TTETPEET', 'TTETTTTT', 'TTETETET', 'TTPETTEE', 'PEETTTTT'];
$nbEleves = strlen($actions[0]); // ??

$cours = new Cours($nbEleves);

// Je fais toutes mes actions
foreach ($actions as $actionsDesEleves) {
    $cours->actions($actionsDesEleves);
}

// J'affiche ma moyenne arrondie
echo round($cours->getMoyenne(), 1);