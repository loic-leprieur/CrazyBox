<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 11/02/16
 * Time: 11:31
 */

namespace app\controllers;


class GeneralController extends Controller
{
    public function __construct($m)
    {
        parent::__construct($m);
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