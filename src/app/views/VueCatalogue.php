<?php
namespace app\vue;
use app\models as Modele;

/**
 * Classe qui permet de générer le code HTML relatif au catalogue.
 */
class VueCatalogue extends VueAbstraite {

	/**
	 * 
	 * 
	 * @param array $params
	 */
	public function __construct(array $params = null) {
		parent::__construct($params);
	}

	/**
	 * Methode definissant l'affichage a realiser en lien avec le catalogue
	 * @param int $selecteur
	 * 				le parametre definissant l affichage a realiser.
	 */
	public function render($selecteur) {
		switch ($selecteur) {
			case 1: // menu
				$content = $this->genererCatalogue();
				break;
			case 2: // prestations
				$content = $this->genererListeProduits();
				break;
			default:
				break;
		}
		$html = VueGenerale::genererHeader();
		$html .= VueGenerale::genererBody();
		$html .= $content;
		$html .= VueGenerale::genererFooter();

		echo $html;
	}
	
	/**
	 * Methode generant l affichage du menu principal du catalogue.
	 * 
	 * @return string : le code html correspondant a l affichage du menu principal.
	 */
	public function genererMenu() {
		$html = <<<END
<h1 class="indigo-text center-align">Catalogue</h1>
<h3 class="indigo-text center-align">Choisissez le type de la prestation que vous souhaitez ajouter :</h3>
<a class="row" href="/www/henriot3u/limaga/index.php/achat"><button class="waves-effect waves-light btn-large s12 indigo"><i>Acheter un E-Billet</i></button></a>
<a class="row" href="/www/henriot3u/limaga/index.php/achatAbo"><button class="waves-effect waves-light btn-large s12 indigo"><i>Prendre un Abonnement</i></button></a>
<a class="row" href="/www/henriot3u/limaga/index.php/acheter_produits"><button class="waves-effect waves-light btn-large s12 indigo"><i>Acheter des produits</i></button></a>
END;

		return $html;
	}
	
	/**
	 * Methode generant l affichage de la liste des produits du catalogue.
	 *
	 * @return string : le code html correspondant a l affichage des produits.
	 */
	public function genererListeProduits() {
		$html = <<<END
<h1 class="indigo-text center-align">Produits dérivés</h1>
END;
		
		$html .= <<<END
		<form name="ajouter_au_panier" method="POST" action="ajoutPanier">
<table class="container highlight">
        <thead class="center-align indigo-text">
          <tr>
              <th class="center-align"><h4>ID</h4></th>
              <th class="center-align"><h4>Nom</h4></th>
              <th class="center-align"><h4>Description</h4></th>
              <th class="center-align"><h4>Image</h4></th>
              <th class="center-align"><h4>Prix</h4></th>				
              <th class="center-align"><h4>Quantité</h4></th>
			  <th class="center-align"><h4></h4></th>
          </tr>
        </thead>
		<tbody>
END;
		
		foreach($this->aAfficher as $val) {
			$id = $val['noArticle'];
			$nom = $val['nom'];
			$desc = $val['description'];
			$img = $val['idImage'] . ".png";
			$prix = $val['prix'];

			$html .= <<<END
          <tr>
            
              <td class="center-align grey-text">$id</td>
              <td class="center-align">$nom</td>
              <td class="center-align">$desc</td>
END;
		
			if ($img != 0) {
				$html .= <<<END
				<td class="center-align"><img src="/www/henriot3u/limaga/web/images/articles/$img" height="150px" alt="$nom"></td>
END;
			}
			else {
				$html .= <<<END
				<td class="center-align indigo-text">Aucun aperçu n'est disponible.</td>
END;
			}
				
			$html .= <<<END
              <td class="center-align">$prix €</td>
            
              <td class="center-align"><input class="center-align" type="number" name="$id" min="1" value="1"></td>
             
              <td><button class="waves-effect waves-light btn s12 indigo" type="submit" name="bouton" value="$id">Ajouter</button></td>
			
          </tr>
END;
		}
		
		$html .= <<<END
		</tbody>
</table>
</form>
END;
		
		return $html;
	}
	
}