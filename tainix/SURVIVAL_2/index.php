<?php

require 'Survivor.php';

$thirst = 19;
$hunger = 19;
$shape = 100;
$island = ['AFAEFEWFRTA', 'FFZTYFRAFA', 'T_REEW', 'FWEWATRYF', 'RZZWFF', 'ZEZZ_FYRWZR', 'TYEYAAZAEWYWFT'];

$joe = new Survivor($thirst, $hunger, $shape);
$joe->adventure($island);
echo $joe->getResult();