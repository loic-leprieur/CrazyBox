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
    }

    public function render($content = null){
        $html = <<<END

END;
        echo $html;
    }
}