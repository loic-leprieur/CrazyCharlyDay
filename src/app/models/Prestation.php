<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PrestationModel qui représente le modèle de la table "prestation" de la base de données
 * @package app\models
 */
class Prestation extends Model {

    /**
     * Table prestation de la base de données
     * @var string Nom de la table prestation
     */
    protected $table = 'prestation';

    /**
     * Clé primaire dans la table prestation
     * @var string Clé primaire de la table prestation
     */
    protected $primaryKey = 'id';

    public $timestamps = false;
}
