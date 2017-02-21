<?php
namespace App\System;

class Settings {
    private static $config = null;

    function __construct() {
        $this::load();
    }

    private static function load() {
        self::$config = parse_ini_file(dirname(__DIR__) . '/config.ini');
        if(!self::$config) throw new Exception("Config file could not be loaded!");
    }

    public static function get($key) {
        if(!isset(self::$config)) self::load();

        if(isset(self::$config[$key]))
            return self::$config[$key];

        return NULL;
    }
}
