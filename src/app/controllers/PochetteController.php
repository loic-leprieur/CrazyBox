<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 11/02/16
 * Time: 12:16
 */

namespace app\controllers;
use app\controllers\AbstraitController;
use app\models\Cagnotte;
use app\models\Pochette;
use app\models\Prestation;
use app\views\VueAccueil;
use app\views\VuePochette;
use conf\ConnectionFactory;
use Illuminate\Support\Facades\DB;
use app\views\VuePochetteCreee;
use app\views\VueCatalogue;
use Illuminate\Support\Traits\CapsuleManagerTrait;

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
		$cata = new VueCatalogue(Prestation::orderBy('prix', 'ASC')->get()->toArray());
		
		$cata = $cata->render();
        $vue = new VuePochette($cata);
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

        $objSelc = array();

        $nbMaxPres = Prestation::hydrateRaw("SELECT MAX(id) FROM prestation")[0]['MAX(id)'];
        $somme = 0;


         //boucle qui permet de recuperer les prestations selectionnees

        for($i = 1; $i <= $nbMaxPres ; $i++){

            if(isset($_POST["$i"])){

                $objSelc[] = $i;
                $somme += Prestation::find($i)->prix;

            }

        }

        //test si trois prestations au moins ont ete selectionnees

        if(sizeof($objSelc) < 3){


            echo "Pas bon !!!!!";
            exit;
            //header("location:/pochette");

        }

        //recuperation de la coche secrete




        //creation de la pochette

        $pochette = new Pochette();
        $pochette->nom = $nom;
        $pochette->message = $message;
        $pochette->montant = $somme;
        $pochette->id_url = '';
        $pochette->privee = isset($_POST['pochSecrete']);
        $pochette->save();


        //creation de la cagnote

        $cagnotte = new Cagnotte();
        $cagnotte->idPochette = $pochette->id;
        $cagnotte->montantActuel = 0;
        $cagnotte->atteinte = 'n';
        $cagnotte->id_url = uniqid();
        $cagnotte->save();


        // insertion dans la table contient


        $pdo = ConnectionFactory::makeConnectionPDO();

        $idPoch = filter_var($pochette->id, FILTER_SANITIZE_NUMBER_INT);

        for($i = 0 ; $i < sizeof($objSelc); $i++){

            $idPrest = filter_var($objSelc[$i], FILTER_SANITIZE_NUMBER_INT);
            $pdo->exec("INSERT INTO `contient`(`idPochette`, `idPrestation`) VALUES ($idPoch, $idPrest)");

        }
		
        $vue = new VuePochetteCreee($cagnotte->toArray());
        $vue->renderBody();

    }
}