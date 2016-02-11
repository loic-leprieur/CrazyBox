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

$app->get('/', function(){
	$controller = new app\controllers\GeneralController();
	$controller->accueil();
});

$app->get('/pochette', function(){
	$controller = new app\controllers\GeneralController();
	$controller->pochette();
});

$app->get('/catalogue', function(){
	$controller = new app\controllers\CatalogueController();
	$controller->afficherMenu();
});

$app->get('/catalogue/attention', function(){
	$controller = new app\controllers\CatalogueController();
	$controller->afficherPrestations('Attention');
});

$app->get('/catalogue/activite', function(){
	$controller = new app\controllers\CatalogueController();
	$controller->afficherPrestations('Activité');
});

$app->get('/catalogue/restauration', function(){
	$controller = new app\controllers\CatalogueController();
	$controller->afficherPrestations('Restauration');
});

$app->get('/catalogue/hebergement', function(){
	$controller = new app\controllers\CatalogueController();
	$controller->afficherPrestations('Hébergement');
});

$app->run();