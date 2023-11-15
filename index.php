<?php

require 'vendor/autoload.php';

use Buki\Router\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$router = new Router;

$router->get('/', function (Request $request, Response $response) {
    ob_start();

    require_once 'welcome.php';

    return ob_get_clean();
});

$router->get('/meet', function (Request $request, Response $response) {
    ob_start();

    $id = 'umrohin-meet-example';
    $name = $request->get('display_name');

    extract([
        'name' => $name,
        'id' => $id
    ]);

    require_once 'meet.php';

    return ob_get_clean();
});

$router->run();