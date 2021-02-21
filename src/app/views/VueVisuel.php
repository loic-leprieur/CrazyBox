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

class VueVisuel extends VueAbstraite
{

    public function __construct($params){
        parent::__construct($params);
    }

    public function render(){
        $numpoch = $this->params[0]->id;
        $nomdest = $this->params[0]->nom;

        $vue = new VueCatalogue();
        $prestations = $vue->genererImage($numpoch);
		$i = $vue->numberOfPrestations-1;
        $html = <<<END
    	<br><br><br>
        <div class="row">
    		<div class="col s12">
    		    <h2 class="center-align pink-text text-darken-3">
    				Bienvenue, voici votre pochette !
    			</h2>
    			<br>
    			
    			        $prestations
    			    <br><br>

    			    <div id="montCagnotte" class="row" style="display: none;">
    			        <h3 class="orange-text text-darken-4 center-align">Surprenez et rendez quelqu'un heureux !</h3>
    			        <br>
    			        <form class="col s12" method="POST" action="cagnotte/montant">
    			            <div class="row">
                                <div class="input-field col s6 offset-s3">
                                    <i class="material-icons prefix">Don</i>
                                    <input id="icon_prefix3" name="don" type="text" class="validate">
                                    <label for="icon_prefix3">Don</label>
                                </div>
                            </div>
    			        </form>
    			    </div>
    			</div>
    		</div>
    	</div>

    	<br><br><br>

END;

        return $html;

    }

}