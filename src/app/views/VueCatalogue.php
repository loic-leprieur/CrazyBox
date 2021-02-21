<?php
namespace app\views;
use app\models\Prestation;

/**
 * Classe qui permet de générer le code HTML relatif au catalogue.
 */
class VueCatalogue extends VueAbstraite {

	public $numberOfPrestations;

	/**
	 * 
	 * 
	 * @param array $params
	 */
	public function __construct(array $params = null) {
		parent::__construct($params);
		$numberOfPrestations = 0;
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

<h3 class="orange-text text-darken-4 center-align col s12">Prestations</h3>

<br><br>

<table class="container responsive-table highlight bordered" style="margin-top: 50px;">
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
          	<td onmouseover="this.style.background='#ffecb3'" onmouseout="this.style.background='transparent'" class="center-align"><a href="detail/$id" class="black-text"><h5>$nom</h5></a></td>
          	<td class="center-align"><img src="$this->racine/images/$img" height="150px" alt="$nom"></td>
          	<td class="center-align"><h5>$prix €</h5></td>
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

	public function genererPrestationsCagnotte($numPoch) {

		$tabPrestations = Prestation::hydrateRaw("SELECT DISTINCT id,nom,img,prix FROM prestation INNER JOIN contient ON prestation.id = contient.idPrestation WHERE idPochette = $numPoch")->toArray();

		$html = <<<END
		<br><br>
<h3 class="orange-text text-darken-4 center-align">Prestations associées</h3>
<table class="container responsive-table highlight bordered">
        <thead class="center-align red-text">
          <tr>
              <th class="center-align"></th>
              <th class="center-align"></th>
          </tr>
        </thead>
		<tbody>
END;

		foreach($tabPrestations as $val) {
			$id = $val['id'];
			$nom = $val['nom'];
			$img = $val['img'];
			$prix = $val['prix'];

			$html .= <<<END
          <tr style="height: 50px;">
          	<td class="center-align"><h6>$nom</h6></td>
          	<td class="center-align"><h6>$prix €</h6></td>
          </tr>
END;
		}

		$html .= <<<END
		</tbody>
</table>
END;

		return $html;

	}
	
	public function genererImage($numPoch) {

		$tabPrestations = Prestation::hydrateRaw("SELECT DISTINCT nom,descr,img FROM prestation INNER JOIN contient ON prestation.id = contient.idPrestation WHERE idPochette = $numPoch")->toArray();

		$html = <<<END
		<br><br>
<table class="container responsive-table highlight bordered" id="tabVisu">
        <thead class="center-align red-text">
          <tr>
              <th class="center-align"></th>
              <th class="center-align"></th>
			  <th class="center-align"></th>
          </tr>
        </thead>
		<tbody>
END;

		$id = 1;
		foreach($tabPrestations as $val) {
			$nom = $val['nom'];
			$descr = $val['descr'];
			$img = $val['img'];
			$hide = "none";
			if($id==1) $hide = "table-row";
			$html .= <<<END
          <tr style="height: 50px; display:$hide;" id="$id">
          	<td class="center-align"><h6>$nom</h6></td>
			<td class="center-align"><img src="$this->racine/images/$img" height="150px" alt="$nom"></td>
			<td class="center-align"><h6>$descr</h6></td>
          </tr>
END;
$id++;
		}
		$this->numberOfPrestations = $id;

		$html.= <<<END
		</tbody>
</table>
END;

		return $html;

	}

}