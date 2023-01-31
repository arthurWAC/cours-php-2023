<?php

define('TYPE_EAU', 'Eau');
define('TYPE_FEU', 'Feu');
define('TYPE_HERBE', 'Herbe');
define('TYPE_AIR', 'Air');
define('TYPE_POISON', 'Poison');
define('TYPE_GLACE', 'Glace');
define('TYPE_PSYCHIQUE', 'Psychique');
define('TYPE_INSECTE', 'Insecte');

define('TYPES_RARES', 'Rares');

$pokemons = ['Feu:30', 'Feu:12', 'Eau:36', 'Herbe:50', 'Insecte:59', 'Psychique:25', 'Herbe:14', 'Feu:28', 'Herbe:24', 'Psychique:65', 'Herbe:18', 'Eau:39', 'Poison:31', 'Eau:49', 'Glace:50', 'Eau:36', 'Feu:39', 'Herbe:24', 'Insecte:55', 'Poison:39', 'Feu:11', 'Insecte:83', 'Eau:21', 'Herbe:40', 'Eau:27', 'Feu:24', 'Poison:31', 'Feu:22', 'Eau:38', 'Feu:50', 'Feu:48', 'Eau:47', 'Insecte:96', 'Glace:50', 'Eau:25'];

$herbes = array_sum(
    array_slice(
        filtreLesPokemons($pokemons, TYPE_HERBE)
        , 0, 3)
);

$feux = filtreLesPokemons($pokemons, TYPE_FEU);
$eaux = filtreLesPokemons($pokemons, TYPE_EAU);
$rares = filtreLesPokemons($pokemons, TYPES_RARES);

$top1 = $herbes[0] + $feux[0] + $eaux[0] + $rares[0];
$top2 = $herbes[1] + $feux[1] + $eaux[1] + $rares[1];
$top3 = $herbes[2] + $feux[2] + $eaux[2] + $rares[2];

echo $top1 + $top2 + $top3;

function filtreLesPokemons(array $pokemons, string $type): array
{
    // 1. Définir quel(s) type(s) on garde
    if ($type === TYPES_RARES) {
        $authorisedTypes = [TYPE_AIR, TYPE_POISON, TYPE_GLACE, TYPE_PSYCHIQUE, TYPE_INSECTE];
    } else {
        $authorisedTypes = [$type];
    }

    // 2. Initialiser notre retour
    $forces = [];

    // 3. Boucler sur $pokemons
    foreach ($pokemons as $pokemon) {
        // Multi attribution
        [$pokemonType, $pokemonForce] = explode(':', $pokemon);

        // Conserver que ce qui nous intéresse, avec in_array
        if (! in_array($pokemonType, $authorisedTypes)) {
            continue;
        }

        $forces[] = $pokemonForce;
    }

    // Tri dans l'ordre décroissant
    rsort($forces);
        
    // 4. Return 
    return $forces;
}