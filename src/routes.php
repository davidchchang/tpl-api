<?php
// Routes

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/branches', function(Request $request, Response $response, $args) {
    $this->logger->info("Slim-Skeleton '/branches' route");

    $file_contents = file_get_contents('../public/branches.json');
    $data = json_decode($file_contents, true);

    return $response
        ->withJson($data)
        ->withHeader('Access-Control-Allow-Origin', '*');
});

$app->get('/demo', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/demo' route");

    // Render index view
    return $this->renderer->render($response, 'demo.phtml', $args);
});


$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
