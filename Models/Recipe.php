<?php
class Recipe extends Model
{
    public function getAll()
    {
        $sql = "SELECT * FROM recipe WHERE active = true";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();

        $recipes = $req->fetchAll();
        foreach($recipes as &$recipe) {
          $createDate = date('Y/m/d', strtotime($recipe['createdate']));
          $recipe['imageUrl'] = $createDate . '/' . $recipe['url'] . '/' . $recipe['url'] . '.jpg';
          $recipe['url'] = 'recipe/' . $recipe['url'];
        }

        return $recipes;
    }

    public function get($title) {
      $sql = "SELECT * FROM recipe WHERE url = '" . $title . "'";
      $req = Database::getBdd()->prepare($sql);
      $req->execute();

      $recipe = $req->fetch();
      $createDate = date('Y/m/d', strtotime($recipe['createdate']));
      $recipe['imageUrl'] = $createDate . '/' . $recipe['url'] . '/' . $recipe['url'] . '.jpg';

      require(ROOT . 'Models/Ingredients.php');
      $ingredients = new Ingredients();
      $recipe['ingredients'] = $ingredients->get($recipe['id']);
      $recipe['slider'] = $this->getImagesSlider($recipe);

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
}
