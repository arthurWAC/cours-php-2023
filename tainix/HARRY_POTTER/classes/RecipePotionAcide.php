<?php

class RecipePotionAcide extends RecipePotion
{
    public function __construct()
    {
        $this->addIngredient(Ingredient::QUEUE_DE_LEZARD, 3);
        $this->addIngredient(Ingredient::OREILLE_DE_SOURIS, 2);
        $this->addIngredient(Ingredient::PETALE_DE_ROSE, 1);
    }

    public function getDamages(): int
    {
        return 2;
    }
}