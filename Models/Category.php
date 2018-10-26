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
      $result['imageUrl'] = $createDate . '/' . $result['url'] . '/' . $result['url'] . '.JPG';
    }

    return [
      'recipes' => $results,
      'category' => $results[0]['category_name']
    ];
  }

  public function getRecipeByCategory($category, $recipes = [])
  {
    $sql = "SELECT r.*, c.name as category_name FROM recipe r
    INNER JOIN recipe_category rc ON r.id = rc.recipe_id
    INNER JOIN category c ON rc.category_id = c.id
    WHERE c.normalize_name = '$category' ";

    if(!empty($recipes)) {
      $sql .= "AND r.id NOT IN (" . implode(',', $recipes) . ")";
    }
    $sql .= "ORDER BY RAND() LIMIT 1 ";


    $req = Database::getBdd()->prepare($sql);
    $req->execute();

    $result = $req->fetch();

    $createDate = date('Y/m/d', strtotime($result['createdate']));
    $result['imageUrl'] = $createDate . '/' . $result['url'] . '/' . $result['url'] . '.JPG';

    return $result;
  }

  public function getRecomendedRecipes() {
    $brekfast = $this->getRecipeByCategory('sniadanie');
    $dinner = $this->getRecipeByCategory('obiad', [$brekfast['id']]);
    $supper = $this->getRecipeByCategory('kolacja', [$brekfast['id'], $dinner['id']]);
    return [
      'sniadanie' => $brekfast,
      'obiad' => $dinner,
      'kolacja' => $supper,
    ];
  }
}
