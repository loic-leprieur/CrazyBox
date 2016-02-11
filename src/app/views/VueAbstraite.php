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

/**
 * Class VueAbstraite qui donne la structure
 * des vues gérant le html
 * @package app\views
 */
abstract class VueAbstraite{
    private $params;

    public function __construct($p){
        $this->params = $p;
    }
}