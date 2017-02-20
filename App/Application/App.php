<?php
namespace App\Application;

use \App\Models\Database;
use \App\Application\Settings;

class App {
    private static $database;
    private static $twig;

    public static function getDb() {
        if(self::$database === null) {
            self::$database = new Database(
                Settings::getProtected('db_database'),
                Settings::getProtected('db_username'),
                Settings::getProtected('db_password'),
                Settings::getProtected('db_hostname')
            );
        }

        return self::$database;
    }

    public static function getTwig() {
        if(self::$twig === null) {
            $loader = new \Twig_Loader_Filesystem(Settings::getProtected('twig_dir'));

            self::$twig = new \Twig_Environment($loader, [
                'cache' => false
            ]);

            $function = new \Twig_Function('path', function ($el) {
                return $el;
            });

            self::$twig->addFunction($function);
        }

        return self::$twig;
    }
}
