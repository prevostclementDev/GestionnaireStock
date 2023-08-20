<?php

namespace App\Models;

use CodeIgniter\Model;

class productModel extends Model {

    protected $table = 'sstck_products';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = array(
        'singular_name',
        'billing_price',
        'selling_price',
        'id_entreprise',
        'unite',
        'plurial_name',
    );

    protected $useTimestamps = false;

}