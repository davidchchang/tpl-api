<?php
// Routes

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/branches', function(Request $request, Response $response, $args) {
    $this->logger->info("Slim-Skeleton '/branches' route");

    $data = array();
    $response->withJson($data);
    
    return $response;
});

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
