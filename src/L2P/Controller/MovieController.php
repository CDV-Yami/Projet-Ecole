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

			try {
			$cnx =new PDO ('mysql:host=localhost; dbname=mydb', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			}
			catch(PDOException $e)
			{
			  echo $e->getMessage();
			}


		    $tabMovie= array();
		    $sql = 'SELECT * FROM video';
		    $req = $cnx->prepare($sql);
		    $req->execute();
		    while($movie= $req->fetch())
		    {
		    	$tabMovie[]=$movie;
		      
		    }
            return json_encode($tabMovie);
        });

        $controllers->get('/{id}', function (Application $app,$id) {

			try {
			$cnx =new PDO ('mysql:host=localhost; dbname=mydb', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			}
			catch(PDOException $e)
			{
			  echo $e->getMessage();
			}
			
		    $tabMovie= array();
		    $sql = 'SELECT * FROM video WHERE id=:id';
		    $req = $cnx->prepare($sql);
		    $req->execute(array('id'=>$id));
		    while($movie= $req->fetch())
		    {
		    	$tabMovie[]=$movie;
		      
		    }
            return json_encode($tabMovie);
        });

        return $controllers;
    }
}