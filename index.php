<?php

require('vendor/autoload.php');
$router = new \App\Config\Router\Router($_GET);


$router->get('/', function() {
    echo "Bienvenue sur ma homepage !";
});

$router->get('/posts/:id/edit', function($id) {
    echo "Editer l'article $id";
})->with('id', '[0-9]+');

$router->error(function() {
    echo "rien";
});

$router->run();
