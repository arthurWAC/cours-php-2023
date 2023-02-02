<?php

class Cours
{
    /**
     * @var Eleve[] $eleves
     */
    private array $eleves = [];

    public function __construct(
        private int $nbEleves
    )
    {
        for ($i = 0; $i < $this->nbEleves; $i++) {
            $this->eleves[$i] = new Eleve;
        }
    }
    
    public function actions(string $actions): void
    {
        // V1
        for ($i = 0; $i < $this->nbEleves; $i++) {
            $this->eleves[$i]->action($actions[$i]);
        }
        
        // V2
        // foreach (str_split($actions) as $i => $action) {
        //     $this->eleves[$i]->action($action);
        // }
    }

    public function getMoyenne(): float
    {
        $sommeDesNotes = 0;

        if ($this->nbEleves === 0) {
            return 0;
        }

        foreach ($this->eleves as $eleve) {
            $sommeDesNotes += $eleve->note;
        }

        return $sommeDesNotes / $this->nbEleves;
    }
}