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

$app->run();