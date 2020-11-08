<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Elasticsearch\ClientBuilder;

require __DIR__ . '/../vendor/autoload.php';

// Create App
$app = AppFactory::create();

/**
 * Events UI
 */
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Events UI");
    return $response;
});

/**
 * Events API - GET All
 */
$app->get('/api/events', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Events API - GET");
    return $response;
});

/**
 * Events API - GET by ID
 */
$app->get('/api/events/{id}', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Events API - GET by ID");
    return $response;
});

/**
 * Load seed data
 */
$app->get('/load_data', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Load seed data");
    return $response;
});

// Run the app
$app->run();