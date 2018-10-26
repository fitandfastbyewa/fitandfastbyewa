<?php
class Recipe extends Model
{
    protected $forKids = 0;

    public function __construct($forKids = 0) {
      $this->forKids = $forKids;
    }

    public function getAll($page)
    {
        $sqlCount = "SELECT count(id) AS ilosc FROM recipe WHERE active = true AND for_kids = $this->forKids";
        $req = Database::getBdd()->prepare($sqlCount);
        $req->execute();
        $count = $req->fetchColumn();

        $offset = ($page - 1)  * 12;

        $sql = "SELECT * FROM recipe WHERE active = true AND for_kids = $this->forKids ORDER BY createdate DESC LIMIT 12 OFFSET " . $offset;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();

        $recipes = $req->fetchAll();
        foreach($recipes as &$recipe) {
          $createDate = date('Y/m/d', strtotime($recipe['createdate']));
          $recipe['imageUrl'] = $createDate . '/' . $recipe['url'] . '/' . $recipe['url'] . '.JPG';
          $recipe['url'] = 'recipe/' . $recipe['url'];
        }

        return ['data'=> $recipes, 'total' => $count];
    }

    public function get($title) {
      $sql = "SELECT * FROM recipe WHERE url = '" . $title . "'";
      $req = Database::getBdd()->prepare($sql);
      $req->execute();

      $recipe = $req->fetch();
      $createDate = date('Y/m/d', strtotime($recipe['createdate']));
      $recipe['imageUrl'] = $createDate . '/' . $recipe['url'] . '/' . $recipe['url'] . '.JPG';
      $recipe['createdate'] = date('Y-m-d', strtotime($recipe['createdate']));

      require(ROOT . 'Models/Ingredients.php');
      $ingredients = new Ingredients();
      $recipe['ingredients'] = $ingredients->get($recipe['id']);
      $recipe['slider'] = $this->getImagesSlider($recipe);

      require(ROOT . 'Models/Category.php');
      $category = new Category();
      $recipe['categories'] = $category->get($recipe['id']);

      require(ROOT . 'Models/SimilarRecipe.php');
      $similarRecipe = new SimilarRecipe();
      $recipe['similar_recipe'] = $similarRecipe->get($recipe['id']);

      return $recipe;
    }

    private function getImagesSlider($recipe)
    {
      $slider = [];
      $createDate = date('Y/m/d', strtotime($recipe['createdate']));
      $filePath ='public/images/przepisy/' . $createDate . '/' . $recipe['url'] . '/slider';

      require(ROOT . 'Models/Images.php');
      $imagesModel = new Images();
      $images = $imagesModel->get($recipe['id']);

      foreach($images as &$image) {
        $image['url'] =  '/' . $filePath . '/' . $image['name'];
      }

      $images[] = [
          'url' => '/public/images/przepisy/' . $recipe['imageUrl'],
          'description' => 'Gotowe danie - ' . $recipe['title']
      ];

      return $images;
    }

    public function getIngredients($recipeId)
    {
      $return = [];
      $sql = "SELECT * FROM ingredients WHERE recipe_id = $recipeId";

      $req = Database::getBdd()->prepare($sql);
      $req->execute();

      $return['ingredients'] = $req->fetchAll();

      $sql = "SELECT title, url FROM recipe WHERE id = $recipeId";
      $req = Database::getBdd()->prepare($sql);
      $req->execute();

      $recipe = $req->fetch();
      $return['recipe_title'] = $recipe['title'];
      $return['recipe_url'] = $recipe['url'];

      return $return;
    }
}
