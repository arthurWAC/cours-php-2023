<?php

class Explorer
{
    /**
     * @var Planet[] $planets;
     */
    public array $planets;

    public PlanetScorer $planetScorer;

    // Pas de constructeur

    public function setPlanets(array $planetsInformations): void
    {
        // 1. Initialiser la propriété planets à un tableau vide
        $this->planets = [];

        // 2. Remplir la propriété planets avec des instances de Planet
        foreach ($planetsInformations as $planetInformations) {
            $this->planets[] = new Planet($planetInformations);
        }
    }

    public function setScores(string $scoresInformations): void
    {
        // On va initialiser la propriété planetScorer avec une instance de PlanetScorer
        $this->planetScorer = new PlanetScorer($scoresInformations);
    }

    public function searchBestPlanet(): int
    {
        $notes = [];

        foreach ($this->planets as $planet) {
            $notes[] = $this->planetScorer->getNote($planet);
        }

        return max($notes);
    }
}

// $planetes = ['UXE637:mers 77:montagnes 26:lacs 12:plaines 40', 

// 'DSO293:champs 74:volcans 96:canyons 78:plaines 65:lacs 12:montagnes 56', 

// 'PJF505:deserts 62:marais 42:plaines 74', 'EGJ077:marais 58:plaines 92:lacs 87:montagnes 38:champs 75:volcans 11', 'CKF841:canyons 94:forets 24:lacs 71', 'RLN263:grottes 88:mers 32:marais 23:forets 95:lacs 31', 'PSI571:deserts 36:volcans 53', 'OCP535:forets 75:mers 79:montagnes 29', 'VTO755:jungles 70:volcans 43:mers 92'];
// $scores = 'canyons 5:lacs 3:marais 9:forets 9';
// $result = 1155;

// $explorer = new Explorer; // Pas de constructeur, donc pas obligé de mettre ()
// $explorer->setPlanets($planetes);
// $explorer->setScores($scores);

// Test::control('Planètes bien assignées',
//     $explorer->planets[0]->code,
//     'UXE637'
// );

// Test::control('Planètes bien assignées',
//     $explorer->planets[0]->fields[0]->name,
//     'mers'
// );

// Test::control('Scores bien assignés', 
//     $explorer->planetScorer->getScoreByField('canyons'),
//     5
// );

// Test::control('Résultat de la recherche',
//     $explorer->searchBestPlanet(),
//     $result
// );