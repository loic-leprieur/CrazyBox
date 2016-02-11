<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class prestation qui représente le modèle de la table prestation de la base de données
 * @package app\models
 */
class TypeModel extends Model {

    /**
     * Table type de la base de données
     * @var string Nom de la table type
     */
    protected $table = 'type';

    /**
     * Clé primaire dans la table type
     * @var string Clé primaire de la table type
     */
    protected $primaryKey = 'id';

    public $timestamps = false;
}
