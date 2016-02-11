<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 11/02/16
 * Time: 12:14
 */

namespace app\controllers;
use app\controllers\AbstraitController;
use app\views\VueAccueil;

class AccueilController extends AbstraitController{

    public function __construct($m = null){
        parent::__construct($m);
    }

    /**
     * fonction appelant la vue de la
     * page d'accueil
     */
    public function traiter(){
        //affichage du header
        $vue = new VueAccueil();

        // affichage du body
        $vue->renderBody();

    }
}