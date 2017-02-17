<?php

require('../vendor/autoload.php');
$router = new \App\Config\Router\Router($_GET);

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../App/Views');
$twig   = new Twig_Environment($loader, [
    'cache' => false
]);

$router->get('/', function() {
    echo 'Home';
});

$router->get('/posts/:id/edit', function($id) {
    echo "Edit article $id";
})->with('id', '[0-9]+');

$router->error(function() {
    echo 'Nothing';
});

$router->run();
