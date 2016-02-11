<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 10/02/16
 * Time: 21:58
 */

namespace app\views;
use app\views\VueAccueil;
use app\views\VueGenerale;

abstract class VueAbstraite{
    private $model;
    private $params;

    public function __construct($p){
        $this->params = $p;
    }
}