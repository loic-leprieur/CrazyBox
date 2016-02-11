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

abstract class ControllerAbstrait{
    private $racine;

    public function __construct($m = null){
        $this->racine = $_SERVER['SCRIPT_NAME'];
    }
}