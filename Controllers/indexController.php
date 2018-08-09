<?php
class indexController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Recipe.php');

        $recipe = new Recipe();

        $d['recipe'] = $recipe->getAll();
        $this->set($d);
        $this->render("index");
    }
}
