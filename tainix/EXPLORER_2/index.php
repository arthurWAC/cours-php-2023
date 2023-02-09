<?php

require 'Test.php';
require 'Score.php';
require 'PlanetScorer.php';
require 'Field.php';
require 'Planet.php';
require 'Explorer.php';

$planetes = ['DUD002:deserts 73:forets 14:marais 74:lacs 43', 'WSZ959:forets 28:canyons 54:marais 45:grottes 99', 'WXX265:lacs 61:grottes 37:forets 18:mers 32:volcans 83', 'NLR079:deserts 11:jungles 11', 'NFO756:forets 98:canyons 32', 'SKG682:montagnes 38:grottes 57:forets 20:jungles 23:canyons 16', 'EDH265:grottes 71:marais 16', 'YCG665:plaines 36:grottes 56:canyons 54', 'HKG020:marais 27:jungles 44', 'FBI600:volcans 55:marais 86:lacs 54:grottes 79:deserts 37', 'HVF045:plaines 41:canyons 52:deserts 27:montagnes 20:forets 41', 'CRB075:champs 100:volcans 53:montagnes 48:lacs 95:plaines 21:mers 41', 'DLL345:grottes 29:volcans 35:mers 12:deserts 47:champs 24:montagnes 90', 'PIT543:mers 54:lacs 70:forets 94', 'ERN342:champs 54:volcans 72', 'XBX505:jungles 23:lacs 82:forets 74:mers 79', 'RTO776:montagnes 49:champs 96:lacs 34:mers 49:jungles 98:deserts 58', 'KXB106:plaines 54:deserts 54:canyons 16:champs 22:grottes 34', 'TWH672:mers 97:deserts 39:lacs 93:canyons 32:forets 25', 'MSQ357:montagnes 18:jungles 46:grottes 69:marais 58', 'EMD705:montagnes 50:champs 26:marais 79:jungles 86:volcans 10:forets 72'];
$scores = 'volcans 7:champs 6:lacs 9';

$explorer = new Explorer; // Pas de constructeur, donc pas obligé de mettre ()
$explorer->setPlanets($planetes);
$explorer->setScores($scores);

echo $explorer->searchBestPlanet();