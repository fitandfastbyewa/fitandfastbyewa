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
      $recipe['url'] = 'recipe/' . $recipe['url'];

      return $recipe;
    }
}
