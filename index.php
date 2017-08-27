<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'src/config/db.php';

// Customer Routes
require 'src/routes/customers.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    
    $name = $request->getAttribute('name');
    
    $response->getBody()->write("Hello, $name" . "<br>");

    // $dbhost = getenv('DB_HOST');
    
    // $response->getBody()->write("Hostname: $dbhost");

    return $response;
});

$app->run();