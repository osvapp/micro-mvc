<?php
namespace App\System;

use \App\System\Settings;

class App {
    private static $database;
    private static $twig;

    public static function getDb() {
        if(self::$database === null) {
            self::$database = new Database(
                Settings::get('db_name'),
                Settings::get('db_username'),
                Settings::get('db_password'),
                Settings::get('db_host')
            );
        }

        return self::$database;
    }

    public static function getTwig() {
        if(self::$twig === null) {
            $loader = new \Twig_Loader_Filesystem(dirname(__DIR__) . '/views');

            self::$twig = new \Twig_Environment($loader, [
                'cache' => Settings::get('twig_cache')
            ]);

            $function = new \Twig_Function('path', function ($el) {
                return $el;
            });

            self::$twig->addFunction($function);
        }

        return self::$twig;
    }
}
