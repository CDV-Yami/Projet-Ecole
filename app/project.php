<?php

$app = require_once __DIR__.'/bootstrap.php';

/**
 * GET Homepage
 */
$app->get('/', function () use ($app){
    return 'Hello World';
});

$app->mount('/movies', new \L2P\Controller\MovieController());

/**
 * Error handler
 */
$app->error(function (\Exception $e, $code) {
    return new \Symfony\Component\HttpFoundation\Response($e->getMessage(), $code);
});


return $app;
+