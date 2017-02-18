<?php
namespace App\System;
use App\Models\Database;

class App {
    private static $database;

    public static function getDb() {
        if(self::$database === null) {
            self::$database = new Database('blog');
        }

        return self::$database
    }
}
