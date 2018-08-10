<?php

class Ingredients extends Model
{
  public function get($recipeId)
  {
    $sql = "SELECT * FROM ingredients WHERE recipe_id = " . $recipeId;
    $req = Database::getBdd()->prepare($sql);
    $req->execute();

    return $req->fetchAll();
  }
}
