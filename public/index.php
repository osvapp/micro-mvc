<?php
require('../vendor/autoload.php');

use \App\System\App;
use \App\System\Router\Router;
use \App\System\Settings;

session_start();

$app    = new App();
$router = new Router($_GET);


$router->get('/', function() {
    $controller = new \App\Controllers\PostsController();
    $controller->all();
});

$router->post('/posts/:id/', function($id) {
    App::secured();
    $controller = new \App\Controllers\PostsController();
    $controller->single($id);
})->with('id', '[0-9]+');

$router->get('/signin/', function() {
    $controller = new \App\Controllers\UsersController();
    $controller->login();
});

$router->post('/signin/', function() {
    $controller = new \App\Controllers\UsersController();
    $controller->login();
});

$router->get('/signout/', function() {
    $controller = new \App\Controllers\UsersController();
    $controller->logout();
});

$router->error(function() {
    App::error();
});

$router->run();
