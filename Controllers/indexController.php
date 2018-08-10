<?php
class indexController extends Controller
{
    public function index()
    {
        require(ROOT . 'Models/Recipe.php');

        $recipe = new Recipe();

        $d['recipes'] = $recipe->getAll();
        $this->set($d);
        $this->render("index");
    }
}
