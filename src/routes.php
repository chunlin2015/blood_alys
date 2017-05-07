<?php
// Routes

$app->get('/{name}', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $templateList = glob(__DIR__.'/../templates/*.phtml');
    $resp = null;

    foreach($templateList as $value) {
        $pathList = pathinfo($value);
        if ($pathList['filename'] === $args['name']) {
            // Render index view
            $resp = $this->renderer->render($response, $pathList['basename'], $args);
            break;
        }
    }

    return $resp;
});

$app->get('/', function($req, $resp, $args) {
     return $this->renderer->render($resp, 'index.phtml', $args);
});

$app->post('/curd', function($req, $resp, $args) {
     
});


