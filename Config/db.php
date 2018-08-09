<?php

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {

        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=b69cefb56b98;port=3306;dbname=fitandfastbyewa", 'ewa', 'ew1986');
        }
        return self::$bdd;
    }
}
?>
