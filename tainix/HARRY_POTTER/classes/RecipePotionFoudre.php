<?php

class RecipePotionFoudre extends RecipePotion
{
    public function __construct()
    {
        $this->addIngredient(Ingredient::NUAGE_TENEBREUX, 2);
        $this->addIngredient(Ingredient::POUSSIERE_DE_FEE, 1);
    }
    
    public function getDamages(): int
    {
        return 3;
    }
}