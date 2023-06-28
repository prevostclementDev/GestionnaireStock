<?php

namespace App\Controllers;

use App\Models\storageModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\Exceptions\PageNotFoundException;

class Storages extends BaseController {

    private array $default_data_list = array(
        'head_title' => 'Tous les lieux de stockage',
        'page_title' => 'Lieux de stockages',
        'id_action' => 'addstorage-opener',
        'svg_path' => 'storage.svg',
        'storages_list' => [],
    );
    private storageModel $base_request;

    public function __construct() {
        helper('form');
        $storageModel = model(storageModel::class);
        $this->base_request = $storageModel->where('id_entreprise',session()->get('id_entreprise'));
    }

    public function index(): string {
        $data = $this->default_data_list;
        $data['storages_list'] = $this->base_request->findAll();

        return view('storages/list',$data);
    }

    public function show(Int $id): string {
        $data = [
            'head_title' => 'Lieu de stockage :'.$id,
        ];

        $storageModel = model(storageModel::class);
        $storage = $this->base_request->find($id);

        if($storage === null){
            throw new PageNotFoundException();
        }

        $data['storage'] = $storage;

        return view('storages/single',$data);
    }

    public function add(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        if(!$this->request->is('post')) {
            throw new \Exception('Cette action est impossible');
        }

        $data = $this->default_data_list;

        $validation = \Config\Services::validation();
        $dataAddStorage = $this->request->getPost([
           'name',
           'adresse',
           'country'
        ]);

        if(!$validation->run($dataAddStorage,'add_storages')) {
            $data['storages_list'] = $this->base_request->findAll();
            return view('storages/list',$data);
        }

        $dataAddStorage['id_entreprise'] = session()->get('id_entreprise');
        $storageModel = model(storageModel::class);

        try {
            $newStorageId = $storageModel->insert($dataAddStorage);
        } catch (DatabaseException) {
            throw new DatabaseException('Database error');
        }

        return redirect()->to('storage/'.$newStorageId);

    }

    public function update(Int $id): string {

        if(!$this->request->is('post')) {
            throw new \Exception('Invalid Request');
        }

        $storageModel = model(storageModel::class);
        $data['storage'] = $this->base_request->find($id);

        if($data['storage'] === null) {
            throw new PageNotFoundException();
        }

        $validation = \Config\Services::validation();
        $dataUpdateStorage = $this->request->getPost([
            'name',
            'adresse',
            'country'
        ]);

        if(!$validation->run($dataUpdateStorage,'add_storages')) {
            $data = [
                'head_title' => 'Lieu de stockage : '.$id,
            ];
            return view('storages/single',$data);
        }

        foreach ($dataUpdateStorage as $item => $value) {
            $data['storage'][$item] = $value;
        }

        $storageModel->save($data['storage']);

        return view('storages/single',$data);

    }

    public function delete(Int $id): \CodeIgniter\HTTP\RedirectResponse {

        $storageModel = model(storageModel::class);
        $storage = $this->base_request->find($id);

        if($storage === null){
            throw new PageNotFoundException();
        }

        if($storageModel->delete($storage)) {
            return redirect()->to(base_url('storages'));
        }

        throw new DatabaseException();

    }

}