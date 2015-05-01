<?php

if (!is_readable(__DIR__.'/config.php')) {
    throw new \Exception('You must have a config.php file in app folder, see app/config.php.dist');
}

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/config.php';

$app = new Silex\Application();

$app->register(new \L2P\Provider\DatabaseProvider(), $config['database']);

return $app;