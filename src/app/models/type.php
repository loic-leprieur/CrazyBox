<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 11/02/2016
 * Time: 10:24
 */

namespace app\models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class prestation qui représente le modèle de la table prestation de la base de données
 * @package app\models
 */
class type extends Model {

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
