<?php
/**
 * Created by PhpStorm.
 * User: froogy444
 * Date: 11/02/16
 * Time: 11:17
 */

namespace app\views;


use app\models\Prestation;
use app\views\VueAbstraite;
use app\views\VueCatalogue;

class VuePochette extends VueAbstraite
{

    public function __construct(){
        parent::__construct();
    }

    public function render(){


        echo '      <br><br>
                    <div class="row">
                        <form class="col s12" method="POST" action="index.php">
                            <div class="row">
                                <div class="input-field col s6 offset-s3">
                                    <i class="material-icons prefix">Nom du destinataire</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Nom du destinataire</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6 offset-s3">
                                    <i class="material-icons prefix">Message</i>
                                    <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix2">Message</label>
                                </div>
                            </div>';


        $catalogue = new VueCatalogue(Prestation::all()->toArray());
        echo $catalogue->render();

        echo '    <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                  <label for="filled-in-box">Pochette secrète</label>

                  <div class="file-field input-field">
                    <div class="btn">
                        <button name="validerPochette" value="valPoch">Valider</button>
                    </div>
                  </div>';

    }







}