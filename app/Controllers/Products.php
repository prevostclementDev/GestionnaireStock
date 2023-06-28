<?php

namespace App\Controllers;

use App\Models\entrepriseModel;
use App\Models\productModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class products extends BaseController
{

    private array $default_data_list = [
        'head_title' => 'Tous les produits',
        'page_title' => 'Les produits',
        'id_action' => 'addproduct-opener',
        'svg_path' => 'product.svg'
    ];
    private productModel $base_request;

    public function __construct(){
        helper('form');
        $productModel = model(productModel::class);
        $this->base_request = $productModel->where('id_entreprise',session()->get('id_entreprise'));
    }

    public function index(): string {
        $data = $this->default_data_list;
        $data['products_list'] = $this->base_request->findAll();
        return view('products/list',$data);
    }

    public function show(Int $id): string {
        $data = [
            'head_title' => 'Single produits',
        ];

        $productModel = model(productModel::class);
        $data['product'] = $this->base_request->find($id);

        if($data['product'] === null) {
            throw new PageNotFoundException();
        }

        return view('products/single',$data);
    }

    public function add(): string|\CodeIgniter\HTTP\RedirectResponse {

        if(!$this->request->is('post')) {
            throw new \Exception('Invalid request');
        }

        $validation = \Config\Services::validation();
        $productModel = model(productModel::class);

        $dataEntrepriseAdd = $this->request->getPost([
            'singular_name',
            'billing_price',
            'selling_price',
            'unite',
            'plurial_name',
        ]);

        $data = $this->default_data_list;

        if(!$validation->run($dataEntrepriseAdd,'add_product')) {
            return view('products/list',$data);
        }

        $dataEntrepriseAdd['id_entreprise'] = session()->get('id_entreprise');

        $productInsertId = $productModel->insert($dataEntrepriseAdd);

        return redirect()->to(base_url('product/'.$productInsertId));

    }

}