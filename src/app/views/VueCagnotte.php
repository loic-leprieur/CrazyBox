<?php
/**
 * Created by PhpStorm.
 * User: Bertrand
 * Date: 11/02/2016
 * Time: 18:11
 */

namespace app\views;


use app\models\Pochette;
use app\models\Prestation;

class VueCagnotte extends VueAbstraite
{

    public function __construct($params){
        parent::__construct($params);
    }

    public function render(){

        $numpoch = $this->params[0]['idPochette'];
        $nomdest = Pochette::find($numpoch)['nom'];

        $vue = new VueCatalogue();
        $prestations = $vue->genererPrestationsCagnotte($numpoch);

        $html = <<<END
    	<br><br><br>
        <div class="row">
    		<div class="col s12">
    		    <h2 class="center-align pink-text text-darken-3">
    				Bienvenue !
    			</h2>
    			<br>
    			<div class="card-panel lighten-2 center-align">
    			    <h5 class="orange-text text-darken-4">Vous souhaitez participer à cette cagnotte pour $nomdest ?</h5>
                    <br><br>
    			    <h5 class="center-align">
    				    <a id="boutonCagnotte" href="#" class="white-text card-panel lighten-2 orange">Cliquez ici</a>
    			    </h5>

    			    <br>

    			    <div id="prestCagnotte" class="row" style="display: none;">
    			        $prestations
    			    </div>

    			    <br><br>

    			    <div id="montCagnotte" class="row" style="display: none;">
    			        <h3 class="orange-text text-darken-4 center-align">Surprenez et rendez quelqu'un heureux !</h3>
    			        <br>
    			        <form class="col s12" method="POST" action="cagnotte/montant">
    			            <div class="row">
                                <div class="input-field col s6 offset-s3">
                                    <i class="material-icons prefix">Message</i>
                                    <textarea id="icon_prefix2" name="messagedest" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix2">Message</label>
                                </div>
                            </div>
    			        </form>
    			    </div>
    			</div>
    		</div>
    	</div>

    	<br><br><br>

    	<script type="text/javascript" src="$this->racine/js/cagnotte.js">
END;

        return $html;

    }

}