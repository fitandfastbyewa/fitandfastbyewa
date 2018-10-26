<?php
class SimilarRecipe extends Model
{
    public function get($recipeId)
    {
        $sql = "SELECT * FROM similar_recipe sr
        INNER JOIN recipe r ON sr.similar_recipe_id = r.id
        WHERE recipe_id = " . $recipeId;

        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        $similarRecipes = $req->fetchAll();

        foreach($similarRecipes as &$similarRecipe) {
          require_once(ROOT . 'Models/Category.php');
          $category = new Category();
          $similarRecipe['categories'] = $category->get($similarRecipe['similar_recipe_id']);
          $createDate = date('Y/m/d', strtotime($similarRecipe['createdate']));
          $similarRecipe['imageUrl'] = $createDate . '/' . $similarRecipe['url'] . '/' . $similarRecipe['url'] . '.JPG';
        }

        return $similarRecipes;
    }
}
