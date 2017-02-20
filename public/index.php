<?php
require('../vendor/autoload.php');

use \App\Application\App;
use \App\Application\Router\Router;

$router = new Router($_GET);

$router->get('/', function() {
    $data = App::getDb()->query('SELECT * FROM posts');
    echo App::getTwig()->render('pages/index.twig', [
        'posts' => $data
    ]);
});

$router->get('/posts/:id/edit', function($id) {
    echo "Edit article $id";
})->with('id', '[0-9]+');

$router->error(function() {
    echo 'Nothing';
});

$router->run();
