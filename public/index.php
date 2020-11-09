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

    // TODO - Validate input
    // TODO - Return 404 if event not found

    // Get event by ID
    $esClient = ClientBuilder::create()->build();
    $params = [
        'index' => 'events',
        'id'    => $args['id']
    ];
    $esResponse = $esClient->get($params);

    // Format and return results
    $payload['ID'] = $esResponse['_id'];
    $payload = array_merge($payload, $esResponse['_source']);

    $response->getBody()->write(json_encode($payload));
    return $response
        ->withHeader('Content-Type', 'application/json');

});

/**
 * Load / Update seed data
 */
$app->get('/load_data', function (Request $request, Response $response, $args) {

    $response->getBody()->write("<b>Loading seed data...</b><br><br>");

    // Read json file
    $strJsonFileContents = file_get_contents("../data/events.json");
    $events = json_decode($strJsonFileContents, true);

    // Index events
    $esClient = ClientBuilder::create()->build();
    $idCounter = 1;
    foreach ($events as $event) {
        $params = [
            'index' => 'events',
            'id'    => $idCounter,
            'body'  => $event
        ];

        // Add item to index
        $esResponse = $esClient->index($params);
        $response->getBody()->write($esResponse['result'] . " event " . $idCounter . '<br>');
        $idCounter++;
    }

    $response->getBody()->write("<br><b>Load Complete</b><br><br>");

    return $response;
});

// Run the app
$app->run();