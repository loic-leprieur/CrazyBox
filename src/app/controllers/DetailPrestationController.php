<?php

namespace app\controllers;


use app\models\Prestation;
use app\views\VueDetailPrestation;

class DetailPrestationController extends AbstraitController
{

    private $id;
    /**
     * Constructeur vide d'un controleur de catalogue.
     */
    public function __construct($id) {
        $this->id = $id;
    }


    public function traiter() {

        $prestation = Prestation::find($this->id);
        $vue = new VueDetailPrestation($prestation->toArray());
        $vue->renderBody();

    }

}