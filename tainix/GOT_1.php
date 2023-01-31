<?php
// Valeur de départ
$armee = 8673;

// Attendu : '2_200_3673'
$daenerys = new Armee($armee);
$daenerys->calculs();

echo $daenerys->getReponse();

echo '<br />';

$daenerys = new Armee(9876);
$daenerys->calculs();

echo $daenerys->getReponse();

class Armee
{
    /**
     * Propriétés ???
     */
    public int $troupesRestantes;

    public int $nbDragons;
    public int $nbImmacules;
    public int $nbDothrakis;

    public function __construct(int $troupesRestantes)
    {
        $this->troupesRestantes = $troupesRestantes;
    }

    /**
     * Méthodes ???
     */
    public function calculs(): void
    {
        $this->calculDragons();
        $this->calculImmacules();
        $this->calculDothrakis();
    }

    public function calculDragons(): void
    {
        $this->nbDragons = $this->calculNbTroupes(
            ratioTroupes: 3,
            forceTroupes: 1000,
            maxTroupes: 3
        );

        $this->retireTroupes($this->nbDragons, 1000);
    }

    public function calculImmacules(): void
    {
        $this->nbImmacules = $this->calculNbTroupes(
            ratioTroupes: 2,
            forceTroupes: 15,
            maxTroupes: 200
        );

        $this->retireTroupes($this->nbImmacules, 15);
    }

    public function calculDothrakis(): void
    {
        $this->nbDothrakis = $this->calculNbTroupes(
            ratioTroupes: 1,
            forceTroupes: 1,
            maxTroupes: 5000
        );

        $this->retireTroupes($this->nbDothrakis, 1);
    }

    private function retireTroupes(int $nbTroupes, int $forceTroupes): void
    {
        $this->troupesRestantes -= $nbTroupes * $forceTroupes;
    }

    private function calculNbTroupes(int $ratioTroupes, int $forceTroupes, int $maxTroupes): int
    {
        $portionDesTroupes = round($this->troupesRestantes / $ratioTroupes);

        return min([
            floor($portionDesTroupes / $forceTroupes), // Arrondi inférieur
            $maxTroupes
        ]);
    }

    public function getReponse(): string
    {
        return $this->nbDragons . '_' . $this->nbImmacules . '_' . $this->nbDothrakis;
    }
}