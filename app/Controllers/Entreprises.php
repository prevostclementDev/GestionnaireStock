<?php

namespace App\Controllers;

use App\Models\entrepriseModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Entreprises extends BaseController {

    public function __construct() {
        helper('form');
    }

    public function index():string {
        $data = [
            'head_title' => 'Mon entreprise'
        ];

        $entrepriseModel = model(entrepriseModel::class);
        $data['entreprise'] = $entrepriseModel->find(session()->get('id_entreprise'));

        if($data['entreprise'] === null) {
            throw new PageNotFoundException();
        }

        return view('entreprises/index',$data);
    }

    public function update(): string{

        $data = [
            'head_title' => 'Mon entreprise'
        ];

        if(!$this->request->is('post')) {
            throw new \Exception('Invalid request');
        }

        $entrepriseModel = model(entrepriseModel::class);
        $data['entreprise'] = $entrepriseModel->find(session()->get('id_entreprise'));

        if($data['entreprise'] === null){
            throw new PageNotFoundException();
        }

        $validation = \Config\Services::validation();
        $dataEntrepriseUpdate = $this->request->getPost([
            'name',
            'country',
        ]);

        if(!$validation->run($dataEntrepriseUpdate,'update_entreprise')) {
            return view('entreprises/index',$data);
        }

        foreach ($dataEntrepriseUpdate as $item => $value) {
            $data['entreprise'][$item] = $value;
        }

        $entrepriseModel->save($data['entreprise']);
        return view('entreprises/index',$data);

    }

}