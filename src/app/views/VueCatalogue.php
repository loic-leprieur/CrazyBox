<?php
namespace app\vue;

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
	 */
	public function render() {
		return $this->genererListePrestations();
	}
	
	/**
	 * Methode generant l affichage de la liste des produits du catalogue.
	 *
	 * @return string : le code html correspondant a l affichage des produits.
	 */
	public function genererListePrestations() {
		$html = <<<END
<h1 class="red-text center-align">Prestations :</h1>
<table class="container highlight">
        <thead class="center-align red-text">
          <tr>
              <th class="center-align"><h4>Nom</h4></th>
              <th class="center-align"><h4>Image</h4></th>
              <th class="center-align"><h4>Prix</h4></th>
			  <th class="center-align"><h4></h4></th>
          </tr>
        </thead>
		<tbody>
END;
		
		foreach($this->params as $val) {
			$id = $val['id'];
			$nom = $val['nom'];
			$img = $val['image'];
			$prix = $val['prix'];

			$html .= <<<END
          <tr>            
              <td class="center-align">$nom</td>
              <td class="center-align"><img src="$racine/images/$img" height="150px" alt="$nom"></td>
              <td class="center-align">$prix €</td>
            
              <td class="center-align"><input class="center-align" type="checkbox" id="$id"></td>		
          </tr>
END;
		}
		
		$html .= <<<END
		</tbody>
</table>
END;
		
		return $html;
	}
	
}