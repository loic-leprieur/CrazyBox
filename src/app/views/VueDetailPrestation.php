<?php
/**
 * Created by PhpStorm.
 * User: Bertrand
 * Date: 11/02/2016
 * Time: 21:48
 */

namespace app\views;


class VueDetailPrestation extends VueAbstraite
{

    public function __construct(array $params = null) {
        parent::__construct($params);
    }

    public function render() {

        $nomPres = $this->params['nom'];
        $desPres = $this->params['descr'];
        $imgPres = $this->params['img'];

        $html = <<<END
    	<br><br><br>
        <div class="row">
    		<div class="col s12">
    		    <h2 class="center-align pink-text text-darken-3">
    				Détail de la prestation <br>"$nomPres"
    			</h2>
    		</div>
    	</div>

        <table class="container responsive-table highlight bordered">
            <thead class="center-align red-text">
              <tr>
                  <th class="center-align"></th>
                  <th class="center-align"></th>
              </tr>
            </thead>

            <tbody>
              <tr class="ligneCatalogue" style="height: 50px;">
                <td class="center-align"><img src="$this->racine/images/$imgPres" height="200px" alt="$nomPres"></td>
                <td class="center-align"><h5>$desPres</h5></td>
              </tr>
            </tbody>
        </table>
        <br>
        <h4 class="pink-text text-darken-3 center-align">Vous pouvez retourner à la page précédente en cliquant <a href="$this->racine/index.php/pochette" class="orange-text text-darken-4">ICI</a>.</h4>

        <br><br><br>
END;

        return $html;
    }

}