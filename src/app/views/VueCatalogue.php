<?php
namespace app\views;

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
		<br><br>
<h3 class="orange-text text-darken-4 center-align col s12">Prestations</h3>
<table class="container responsive-table highlight bordered">
        <div class="center-align">
		 <input type="checkbox" checked id="c_Attention" />
		<label for="c_Attention" class="red-texte" >Attention</label><br>
		
		<input type="checkbox" checked id="c_Activite" />
		<label for="c_Activite" class="red-texte" >Activités</label><br>
		
		<input type="checkbox" checked id="c_Restauration" />
		<label for="c_Restauration" class="red-texte" >Restauration</label><br>
		
		<input type="checkbox" checked id="c_Hebergement" />
		<label for="c_Hebergement" class="red-texte" >Hébergement</label><br>
			
		</div>
		<tbody>
END;

		foreach($this->params as $val) {
			$id = $val['id'];
			$nom = $val['nom'];
			$img = $val['img'];
			$prix = $val['prix'];
			$html .= <<<END
          <tr class="ligneCatalogue">
          	<td class="center-align"><h4>$nom</h4></td>
          	<td class="center-align"><img src="$this->racine/images/$img" height="150px" alt="$nom"></td>
          	<td class="center-align"><h4>$prix €</h4></td>
          	<td class="center-align">
          		<p>
          			<input class="red-text" type="checkbox" id="$id" name="$id"/>
          			<label for="$id"></label>
          		</p>
          	</td>
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