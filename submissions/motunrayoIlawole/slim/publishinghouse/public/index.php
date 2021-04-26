<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . '/../bootstrap/app.php';

$app->get('/', function(Request $request, Response $response) {
    $response->getBody()->write('Stark Publishing House');
    return $response;
});

$app->run();