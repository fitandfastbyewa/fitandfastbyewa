<?php
class RecipeController extends Controller
{
  public function index($title)
  {
    require(ROOT . 'Models/Recipe.php');

    $recipe = new Recipe();

    $recipeData = $recipe->get($title);
    $d['recipe'] = $recipeData;
    $d['breadcrumbs'] = [
      [
        'title' => $recipeData['title'],
        'active' => true
      ]
    ];
    $this->set($d);
    $this->render("recipe");
  }
}
