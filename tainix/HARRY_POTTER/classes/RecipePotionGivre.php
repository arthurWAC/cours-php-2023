<?php

class RecipePotionGivre extends RecipePotion
{
    public function __construct()
    {
        $this->addIngredient(Ingredient::EAU_DE_JOUVENCE, 3);
        $this->addIngredient(Ingredient::BAVE_DE_CRAPAUD, 1);
    }

    public function getDamages(): int
    {
        return 1;
    }
}