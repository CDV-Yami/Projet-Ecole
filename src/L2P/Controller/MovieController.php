<?php

namespace L2P\Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;
use \PDO;

class MovieController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function (Application $app) {
            $cnx = $app['database'];

		    $sql = 'SELECT * FROM video';
		    $req = $cnx->prepare($sql);
		    $req->execute();
		    while($movie= $req->fetch())
		    {
		    var_dump($movie);
		      
		    }
           
        });

        return $controllers;
    }
}