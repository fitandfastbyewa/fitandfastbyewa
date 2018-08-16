<?php

class Category extends Model
{
  public function get($recipeId)
  {
    $sql = "SELECT c.* FROM category c
    INNER JOIN recipe_category rc ON rc.category_id = c.id
    WHERE rc.recipe_id = " . $recipeId;

    $req = Database::getBdd()->prepare($sql);
    $req->execute();

    return $req->fetchAll();
  }

  public function getAll()
  {
    $sql = "SELECT COUNT(*) AS ilosc, name, normalize_name FROM category  c
    INNER JOIN recipe_category rc ON c.id = rc.category_id
    GROUP BY name, normalize_name";
    $req = Database::getBdd()->prepare($sql);
    $req->execute();

    return $req->fetchAll();
  }

  public function getRecipesByCategory($category)
  {
    $sql = "SELECT r.*, c.name as category_name FROM recipe r
    INNER JOIN recipe_category rc ON r.id = rc.recipe_id
    INNER JOIN category c ON rc.category_id = c.id
    WHERE c.normalize_name = '$category'";

    $req = Database::getBdd()->prepare($sql);
    $req->execute();

    $results = $req->fetchAll();

    foreach($results as &$result) {
      $createDate = date('Y/m/d', strtotime($result['createdate']));
      $result['imageUrl'] = $createDate . '/' . $result['url'] . '/' . $result['url'] . '.jpg';
    }

    return [
      'recipes' => $results,
      'category' => $results[0]['category_name']
    ];
  }
}
