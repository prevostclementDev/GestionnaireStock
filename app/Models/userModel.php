<?php

namespace App\Models;

use \CodeIgniter\Model;

class userModel extends  Model {

    protected $table = 'sstck_users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = array(
      'email',
      'first_name',
      'type',
      'password',
      'id_entreprise',
      'created_at',
      'last_name',
      'last_connection'
    );

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = '';

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data) {

        if(!isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);

        return $data;

    }

}