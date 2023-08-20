<?php

namespace App\Models;

use CodeIgniter\Model;

class entrepriseModel extends Model {

    protected $table = 'sstck_entreprises_spaces';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = array(
        'name',
        'country',
        'description',
    );

}