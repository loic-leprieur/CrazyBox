<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 10/02/16
 * Time: 21:58
 */

namespace controller;
use views\VueAccueil;

class GeneralController{
    public function __construct(){
    }

    public function accueil(){
        $vue = new VueAccueil();
        $vue->nonConnecte();
    }
}