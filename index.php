<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 10/02/16
 * Time: 21:32
 */

include 'vendor/autoload.php';

// démarrer une session
// etablir la connexion avec la BD

$app = new \Slim\Slim();

\conf\ConnectionFactory::setConfig('src/conf/db.config.ini');

$db = \conf\ConnectionFactory::makeConnection();

$app->get('/', function(){
	$controller = new app\controllers\AccueilController();
	$controller->traiter();
});

$app->get('/pochette', function(){
	$controller = new app\controllers\PochetteController();
	$controller->traiter();
});

/*
 * TEST
 */
use app\models\Prestation;
use app\views\VueCatalogue;

$app->get('/test', function(){
	$params = Prestation::all()->toArray();
	$controller = new VueCatalogue($params);
	echo $controller->render();
});

/*
 * FIN TEST
 */

$app->run();