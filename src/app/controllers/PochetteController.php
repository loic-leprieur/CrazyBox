<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 11/02/16
 * Time: 12:16
 */

namespace app\controllers;
use app\controllers\AbstraitController;

class PochetteController extends AbstraitController{
    public function __construct($m)
    {
        parent::__construct($m);
    }

    /**
     * fonction appleant la vue de la page
     * pochette
     */
    public function render()
    {
        //affichage du header
        $vueBase = new VueGenerale();
        $vueBase->header();

        // affichage body
        $vue = new VuePochette();
        $vue->render();

        // affichage du footer
        $vueBase->footer();
    }
}