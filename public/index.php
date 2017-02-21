<?php
require('../vendor/autoload.php');

use \App\System\App;
use \App\System\Router\Router;
use \App\System\Settings;

$router = new Router($_GET);

$router->get('/', function() {
    $controller = new \App\Controllers\PostsController();
    $controller->index();
});

$router->get('/posts/:id/edit', function($id) {
    echo "Edit article $id";
})->with('id', '[0-9]+');

$router->error(function() {
    echo 'Nothing';
});

$router->run();
