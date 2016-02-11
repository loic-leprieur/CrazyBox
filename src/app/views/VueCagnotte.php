<?php

namespace app\views;


use app\models\Cagnotte;
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
		$privee = Pochette::find($numpoch)->privee;
		$pochette = Pochette::find($numpoch);

		$cagnotte = Cagnotte::find($numpoch);



        $vue = new VueCatalogue();
		if($privee == 'non'){

			$prestations = $vue->genererPrestationsCagnotte($numpoch);

		}else{


			$prestations = <<<END
					<br><br>
			<h5 class="red-text center-align">Les prestions associées ont été cachées par le créateur de la pochette</h5>
			<table class="container responsive-table highlight bordered">
					<thead class="center-align red-text">
					  <tr>
						  <th class="center-align"></th>
						  <th class="center-align"></th>
					  </tr>
					</thead>

					<tbody>
END;


		}

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

    			    <br>

    			    <div id="prestCagnotte" class="row">
    			        $prestations
    			    </div>

    			    <br><br>

    			    <div id="montCagnotte" class="row">
    			        <h3 class="orange-text text-darken-4 center-align">Surprenez et rendez quelqu'un heureux !</h3>
    			        <br>
    			        	 <h5 class="orange-text text-darken-4 center-align">Montant total de la pochette : $pochette->montant €.   Montant actuel de la cagnotte : $cagnotte->montantActuel €. </h3>
    			        <br>
    			        <form class="col s12" method="POST" action="$cagnotte->id_url">
    			            <div class="row">
                                <div class="input-field col s6 offset-s3">
                                    <i class="material-icons prefix">Don</i>
                                    <input id="icon_prefix3" name="don" type="text" class="validate">
                                    <label for="icon_prefix3">Don</label>
                                </div>
							</div>
    			        	<div class="row">
                                <div class="input-field">
                        			<button class="btn-large waves-effect waves-light orange" type="submit" name="valider">Valider
                            			<i class="material-icons right">send</i>
                        			</button>
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