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

Test::control('Challenge OK', $levi->score, 313);