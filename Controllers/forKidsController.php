<?php
class forKidsController extends Controller
{
    public function index($page = 1)
    {
      require(ROOT . 'Models/Recipe.php');

      $recipe = new Recipe(1);
      $recipes = $recipe->getAll($page);
      $d['recipes'] = $recipes['data'];

      $d['pages'] = ceil($recipes['total'] / 12);
      $d['current_page'] = $page;

      $this->set($d);
        $this->render("forKids");
    }
}
