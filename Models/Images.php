<?php

class Images extends Model
{
  public function get($recipeId)
  {
    $sql = "SELECT * FROM images WHERE recipe_id = " . $recipeId;
    $req = Database::getBdd()->prepare($sql);
    $req->execute();

    return $req->fetchAll();
  }
}
