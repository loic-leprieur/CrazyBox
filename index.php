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

$app->post('/pochette/creee', function(){
	$controller = new app\controllers\PochetteController();
	$controller->validation();
});

$app->get('/cagnotte/:id', function($id){
	$controller = new app\controllers\CagnotteController($id);
	$controller->traiter();
});

$app->get('/test/:id', function($id){
	$controller = new app\controllers\VisuelController($id);
	$controller->traiter();
});

$app->post('/cagnotte/:id/montant', function($id){
	$controller = new app\controllers\CagnotteController($id);
	$controller->finaliserCagnotte();
});

$app->get('/detail/:id', function($id) {
	$controller = new app\controllers\DetailPrestationController($id);
	$controller->traiter();
});

$app->run();