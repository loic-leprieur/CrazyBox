<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 11/02/16
 * Time: 11:31
 */

namespace app\controllers;
use app\controllers\ControllerAbstrait;

class GeneralController extends ControllerAbstrait{
    public function __construct(){
        parent::__construct();
    }

    public function accueil()
    {
        $vue = new VueAccueil();
        $vue->nonConnecte();
    }

    public function pochette()
    {
        $vue = new VuePochette();
        $vue->render();
    }
}