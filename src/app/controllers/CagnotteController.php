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
use app\views\VueCagnotteAtteinte;

class CagnotteController extends AbstraitController
{

    private $id;
    /**
     * Constructeur vide d'un controleur de catalogue.
     */
    public function __construct($id) {
        $this->id = $id;
    }


    public function traiter() {

        $vue = new VueCagnotte(Cagnotte::where("id_url","=",$this->id)->get()->toArray());
        $vue->renderBody();

    }

    public function finaliserCagnotte(){



        var_dump($_POST);
        $cagnotte = Cagnotte::where("id_url","=",$this->id)->get()[0];
        $pochette = Pochette::find($cagnotte->idPochette);


        $cagnotte->montantActuel += filter_var($_POST['don'], FILTER_SANITIZE_NUMBER_INT);
        $cagnotte->save();

        if($cagnotte->montantActuel >= $pochette->montant){


            $pochette->id_url = uniqid();
            $pochette->save();


            $vue = new VueCagnotteAtteinte($pochette->toArray());
            $vue->renderBody();


        }else{




        }






    }

}