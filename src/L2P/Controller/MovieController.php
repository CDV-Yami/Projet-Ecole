<?php

namespace L2P\Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;

class MovieController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return 'Interstellar, 10 Years a Slave, Gladiator';
        });

        return $controllers;
    }
}