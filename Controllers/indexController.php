<?php
class indexController extends Controller
{
    public function index($page = 1)
    {
        require(ROOT . 'Models/Recipe.php');

        $recipe = new Recipe();
        $recipes = $recipe->getAll($page);
        $d['recipes'] = $recipes['data'];

        $d['pages'] = ceil($recipes['total'] / 12);
        $d['current_page'] = $page;

        $this->set($d);
        $this->render("index");
    }
}
