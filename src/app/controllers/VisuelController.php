<?php
/**
 * Created by PhpStorm.
 * User: Bertrand
 * Date: 11/02/2016
 * Time: 18:12
 */

namespace app\controllers;


use app\models\Cagnotte;
use app\models\Pochette;
use app\views\VueCagnotte;
use app\views\VueVisuel;

class VisuelController
{

    private $id;
    /**
     * Constructeur vide d'un controleur de catalogue.
     */
    public function __construct($id) {
        $this->id = $id;
    }


    public function traiter() {


        $cagnotte = Cagnotte::where("id_url","=",$this->id)->get()->toArray();
        $pochette = Pochette::find($cagnotte->idPochette);


        $vue = new VueVisuel($pochette);
        $vue->renderBody();
    }

}