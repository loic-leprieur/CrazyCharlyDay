<?php
/**
 * Created by PhpStorm.
 * User: Bertrand
 * Date: 11/02/2016
 * Time: 18:12
 */

namespace app\controllers;


use app\models\Cagnotte;
use app\views\VueCagnotte;

class CagnotteController
{

    private $id;
    /**
     * Constructeur vide d'un controleur de catalogue.
     */
    public function __construct($id) {
        $this->id = $id;
    }


    public function traiter() {

        $vue = new VueCagnotte(Cagnotte::where("id_url","=",$this->id)->get()->toArray());
        $vue->renderBody();

    }

}