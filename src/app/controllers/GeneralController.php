<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 11/02/16
 * Time: 11:31
 */

namespace app\controllers;
use app\controllers\ControllerAbstrait;

/**
 * Class GeneralController appelant la vue correspondant
 * au chemin rentré dans l'URL
 * @package app\controllers
 */
class GeneralController extends ControllerAbstrait{
    public function __construct(){
        parent::__construct();
    }

    /**
     * fonction appelant la vue de la
     * page d'accueil
     */
    public function accueil()
    {
        $vue = new VueAccueil();
        $vue->nonConnecte();
    }

    /**
     * fonction appleant la vue de la page
     * pochette
     */
    public function pochette()
    {
        $vue = new VuePochette();
        $vue->render();
    }
}