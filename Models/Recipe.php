<?php
class Recipe extends Model
{
    public function getAll()
    {
        $sql = "SELECT * FROM recipe WHERE active = true";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}
