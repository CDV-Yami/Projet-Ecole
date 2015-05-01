<?php

namespace L2P\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Build PDO connection to the mysql database.  
 */
class DatabaseProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['database'] = $app->share(function () use ($app) {
            try {
                $connection = new \PDO(
                    $app['database.dsn'],
                    $app['database.user'],
                    $app['database.password'],
                    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
                );
            } catch(\PDOException $e) {  
                throw $e;
            }
            
            return $connection;
        });
    }
    public function boot(Application $app)
    {
    }   
}