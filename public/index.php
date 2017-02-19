<?php

require('../vendor/autoload.php');
$router = new \App\System\Router\Router($_GET);

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../App/Views');
$twig   = new Twig_Environment($loader, [
    'cache' => false
]);
$function = new Twig_Function('path', function ($el) {
    return "bebe" . $el;
});
$twig->addFunction($function);

$router->get('/', function() {
    global $twig;
    echo $twig->render('pages/index.twig', []);
});

$router->get('/posts/:id/edit', function($id) {
    echo "Edit article $id";
})->with('id', '[0-9]+');

$router->error(function() {
    echo 'Nothing';
});

$router->run();
