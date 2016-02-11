<?php

namespace app\views;


class VueCagnotteAtteinte extends VueAbstraite
{

    public function __construct($params){
        parent::__construct($params);


    }

    public function render(){

        $host = $_SERVER['HTTP_HOST'];
        $url = $this->params['id_url'];

        $html = <<<END
    	<br><br><br>
    	<div class="row">
    		<div class="col s12">
    			<h5 class="center-align pink-text text-darken-3">
    				La cagnotte de votre pochette surprise a été atteinte.<br>
    				Vous pouvez désormais l'offre en partageant ce lien :
    			</h5>
    			<br>
    			<h4 class="center-align">
    				<a href="$this->racine/index.php/cagnotte/$url" class="orange-text text-darken-4 card-panel lighten-2">$host$this->racine/index.php/cagnotte/$url</a>
    			</h4>
    		</div>
    	</div>

    	<br><br><br>
END;

        return $html;

    }

}