<?php

namespace App\Models;

use \CodeIgniter\Model;

class storageModel extends Model {

    protected $table = 'sstck_storages';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = array(
        'name',
        'adresse',
        'id_entreprise',
        'country',
    );

    protected $useTimestamps = false;

}