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



    public function validation(){

        /*

              1 : VERIFIER LES INFORMATIONS (FILTER + nb article)

              2 : INSERER DANS LA BASE DE DONNEES

              3 : GENERER l'URL

              4 : GENERER LA PAGE DE REPONSE


        */

        $nom = filter_var($_POST['nomdest'],FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['messagedest'],FILTER_SANITIZE_STRING);

        var_dump($_POST);

        echo $nom;
        echo $message;




    }
}