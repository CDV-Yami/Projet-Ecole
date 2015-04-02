<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/config.php';

$app = new Silex\Application();

$app->register(new \L2P\Provider\DatabaseProvider(), $config['database']);

return $app;