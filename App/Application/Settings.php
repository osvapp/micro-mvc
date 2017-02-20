<?php
namespace App\Application;

class Settings {
    static private $protected = [];
    static private $public    = [];

    public static function getProtected($key) {
        return isset(self::$protected[$key]) ? self::$protected[$key] : false;
    }

    public static function getPublic($key) {
        return isset(self::$public[$key]) ? self::$public[$key] : false;
    }

    public static function setProtected($key, $value) {
        self::$protected[$key] = $value;
    }

    public static function setPublic($key, $value) {
        self::$public[$key] = $value;
    }
}

Settings::setProtected('db_hostname', 'localhost');
Settings::setProtected('db_username', 'root');
Settings::setProtected('db_password', 'root');
Settings::setProtected('db_database', 'blog');

Settings::setProtected('twig_dir', __DIR__ . '/../Views');
