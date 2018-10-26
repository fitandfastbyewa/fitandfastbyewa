<?php
class ingredientsController extends Controller
{
    public function index($recipesIds)
    {
        require(ROOT . 'Models/Recipe.php');

        $recipe = new Recipe();

        $recipesIds = explode('_', $recipesIds);

        $ingredients = [];
        foreach($recipesIds as $index => $recipeId) {
          if($index == 0) {
            $d['ingredients']['sniadanie'] = $recipe->getIngredients($recipeId);
          } elseif($index == 1) {
            $d['ingredients']['obiad'] = $recipe->getIngredients($recipeId);
          } elseif($index == 2) {
            $d['ingredients']['kolacja'] = $recipe->getIngredients($recipeId);
          }
        }
        
        $this->set($d);
        $this->render("index");
    }
}
