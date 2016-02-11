<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 11/02/16
 * Time: 12:14
 */

namespace app\controllers;
use app\controllers\ControllerAbstrait;

class AccueilController extends ControllerAbstrait{
    public function __construct($m){
        parent::__construct($m);
    }

    /**
     * fonction appelant la vue de la
     * page d'accueil
     */
    public function render(){
        //affichage du header
        $vueBase = new VueGenerale();
        $vueBase->header();

        // affichage du body
        $vue = new VueAccueil();
        $vue->nonConnecte();

        // affichage du footer
        $vueBase->footer();
    }
}