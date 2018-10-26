<?php

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {

        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=mysql_1;port=3306;dbname=fitandfastbyewa", 'ewa', 'ew1986');
            self::$bdd->query ('SET NAMES utf8');
            self::$bdd->query ('SET CHARACTER_SET utf8_unicode_ci');

        }
        return self::$bdd;
    }
}
?>
