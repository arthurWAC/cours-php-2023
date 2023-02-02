<?php

// LIRE L'ENONCE TRANQUILLEMENT

class Eleve
{
    // Constantes
    public const ECOUTE = 'E';
    public const TRAVAILLE = 'T';
    public const PARLE = 'P';
    public const DORT = 'D';

    public const MIN_NOTE = 0;
    public const MAX_NOTE = 20;
    public const MIN_MAX_NOTE = 10;

    // Constructeur + Propriétés
    public function __construct(
        public int $note = 12,
        public int $noteMaximale = self::MAX_NOTE
    ) {}

    // Méthodes
    public function action(string $action)
    {
        switch ($action) {
            case self::ECOUTE:
                $this->ecoute();
            break;

            case self::TRAVAILLE:
                $this->travaille();
            break;

            case self::PARLE:
                $this->parle();
            break;

            case self::DORT:
                $this->dort();
            break;
        }
    }


    public function ecoute(): void
    {
        $this->note++;
        $this->controleNoteMaximale();
    }

    public function travaille(): void
    {
        $this->note++;
        $this->controleNoteMaximale();
    }

    private function controleNoteMaximale(): void
    {
        if ($this->note > $this->noteMaximale) {
            $this->note = $this->noteMaximale;
        }
    }

    public function parle(): void
    {
        $this->note--;
        $this->controleNoteMinimale();

        $this->noteMaximale--;
        $this->controleMinNoteMaximale();
    }

    public function dort(): void
    {
        $this->note -= 2;
        $this->controleNoteMinimale();

        $this->noteMaximale -= 2;
        $this->controleMinNoteMaximale();
    }

    private function controleNoteMinimale(): void
    {
        if ($this->note < self::MIN_NOTE) {
            $this->note = self::MIN_NOTE;
        }
    }

    private function controleMinNoteMaximale(): void
    {
        if ($this->noteMaximale < self::MIN_MAX_NOTE) {
            $this->noteMaximale = self::MIN_MAX_NOTE;
        }
    }
}