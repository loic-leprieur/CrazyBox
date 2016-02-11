<?php
/**
 * Created by PhpStorm.
 * User: Loic
 * Date: 18/01/2016
 * Time: 22:44
 */

namespace app\views;


class VueAccueil extends VueAbstraite{

    public function __construct(){
		parent::__construct();
    }

    public function render($content = null){
        $html = <<<END
		
	 <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center orange-text">Crazy Box</h1>
        <div class="row center">
          <h4 class="header col s12 pink-text">Concevez, financez, offrez votre Crazy Box à vos proches</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light light-text">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
	 
	</div>
	
	
	</div></br>
		</br>	</br>	</br>	</br>
			</br>
				</br>	</br>
					</br>
						</br>
							</br>	</br>	</br>	</br>	</br>
								</br>	</br>	</br>	</br>
									<div class="parallax"><img src="$this->racine/images/banniereBallon.png" alt="Unsplashed background img 1" ></div>
END;
        echo $html;
    }
}