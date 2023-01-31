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

$pokemons = ['Glace:77', 'Herbe:42', 'Herbe:20', 'Feu:40', 'Eau:10', 'Eau:39', 'Feu:45', 'Poison:44', 'Poison:99', 'Feu:17', 'Herbe:24', 'Poison:47'];

$sommeDesPlusForts = 
    lePokemonLePlusFort($pokemons, TYPE_EAU) +
    lePokemonLePlusFort($pokemons, TYPE_FEU) +
    lePokemonLePlusFort($pokemons, TYPE_HERBE) +
    lePokemonLePlusFort($pokemons, TYPES_RARES);

echo $sommeDesPlusForts;

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
        
    // 4. Return 
    return $forces;
}

function lePokemonLePlusFort(array $pokemons, string $type)
{
    // En 1 seule ligne
    return max(filtreLesPokemons($pokemons, $type));
}