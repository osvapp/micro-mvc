<?php
namespace App\System;

use \App\System\Settings;

class App {

    private static $database;
    private static $twig;

    public static function getDb() {
        if(self::$database === null) {
            self::$database = new Database(
                Settings::getConfig()['database']['name'],
                Settings::getConfig()['database']['username'],
                Settings::getConfig()['database']['password'],
                Settings::getConfig()['database']['host']
            );
        }

        return self::$database;
    }

    public static function getTwig() {
        if(self::$twig === null) {
            $loader = new \Twig_Loader_Filesystem(dirname(__DIR__) . '/views');

            self::$twig = new \Twig_Environment($loader, [
                'cache' => Settings::getConfig()['twig']['cache']
            ]);

            $asset = new \Twig_Function('asset', function ($path) {
                return Settings::getConfig()['url'] . 'assets/' . $path;
            });

            $excerpt = new \Twig_Function('excerpt', function ($content) {
                return substr($content, 0, 300) . '...';
            });

            $url = new \Twig_Function('url', function ($id, $slug, $post_type) {
                if($post_type == 'post') return Settings::getConfig()['url'] . 'posts/' . $id . '-' . $slug;
            });

            self::$twig->addFunction($asset);
            self::$twig->addFunction($excerpt);
            self::$twig->addFunction($url);
        }

        return self::$twig;
    }

}
