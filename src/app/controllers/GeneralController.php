<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 10/02/16
 * Time: 21:58
 */

namespace app\controllers;
use app\views\VueAccueil;
use app\views\VueGenerale;

class GeneralController{
    public function __construct(){
    }

    public function accueil(){
        $vue = new VueAccueil();
        $vue->nonConnecte();
    }

    public function pochette(){
        $vue = new VueGenerale();
        $vue->render();
    }
}