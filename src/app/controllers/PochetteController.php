<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 11/02/16
 * Time: 12:16
 */

namespace app\controllers;
use app\controllers\AbstraitController;
use app\views\VueAccueil;
use app\views\VuePochette;

class PochetteController extends AbstraitController{
    public function __construct($m = null)
    {
        parent::__construct($m);
    }

    /**
     * fonction appleant la vue de la page
     * pochette
     */
    public function traiter(){
        //affichage du header
        $vue = new VuePochette();
        $vue->renderBody();
    }
}