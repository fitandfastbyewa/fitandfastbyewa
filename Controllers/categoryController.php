<?php

class CategoryController extends Controller
{
  public function index($category)
  {
    require_once(ROOT . 'Models/Category.php');
    $categoryModel = new Category();
    $recipes = $categoryModel->getRecipesByCategory($category);
    $d = [
      'category' => $recipes['category'],
      'recipes' => $recipes['recipes']
    ];
    $d['breadcrumbs'] = [
      [
        'title' => $recipes['category'],
        'active' => true
      ]
    ];

    $this->set($d);
    $this->render("recipes");
  }
}
