<?php
namespace app\controllers;

use app\models\Prestation;
use app\models\Type;
use app\views as Vue;

/**
 * Classe qui permet de gérer les parties post en lien avec le catalogue.
 */
class CatalogueController extends ControllerAbstrait {

	/**
	 * Constructeur vide d'un controleur de catalogue.
	 */
	public function __construct() {}

	/**
	 * Methode affichant la liste des types de prestations possibles
	 */
	public function afficherMenu() {
		$catalogue = Type::all()->toArray();
		$vue = new Vue\VueCatalogue($catalogue);
		$vue->render(1);
	}
	
	/**
	 * Methode affichant la liste des prestations de type choisi.
	 * 
	 * @param String $type
	 * 		Le type des prestations que l'utilisateur veut consulter.
	 */
	public function afficherPrestations($type) {
			$prest = Prestation::where('type', '=', $type)
								->get()
								->toArray();
			$vue = new Vue\VueCatalogue($prest);
			$vue->render(2);
	}
	
}