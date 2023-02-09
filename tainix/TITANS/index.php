<?php

require('loader.php');

$titans = ['6;7;387', '4;5;180', '20;7;1270'];
$habitations = ['26;41', '18;41'];
$gaz = 996;

$levi = new Levi(
    $gaz,
    new Hood($habitations),
    new Tribe($titans)
);

$levi->attack();

Test::control('Challenge OK 1', $levi->score, 313);

$titans = ['4;7;255', '25;6;1357', '21;10;1897'];
$habitations = ['8;28', '19;45'];
$gaz = 846;

$levi = new Levi(
    $gaz,
    new Hood($habitations),
    new Tribe($titans)
);

$levi->attack();

Test::control('Challenge OK 2', $levi->score, 120);