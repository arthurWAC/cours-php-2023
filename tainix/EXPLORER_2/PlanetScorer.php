<?php

class PlanetScorer
{
    /**
     * @var Score[] $scores
     */
    private array $scores;

    public function __construct(string $informations)
    {
        $scoresInformations = explode(':', $informations);

        foreach ($scoresInformations as $scoreInformations) {
            $data = explode(' ', $scoreInformations);
            $this->scores[] = new Score($data[0], $data[1]);
        }
    }

    public function getScoreByField(string $fieldName): int
    {
        foreach ($this->scores as $score) {
            if ($fieldName === $score->fieldName) {
                return $score->score;
            }
        }

        return 0;
    }
}

$scores = 'plaines 1:forets 2:deserts 10';
$planetScorer = new PlanetScorer($scores);
Test::control('Un field qui existe', $planetScorer->getScoreByField('forets'), 2);
Test::control('Un field qui n\'existe pas', $planetScorer->getScoreByField('mountains'), 0);