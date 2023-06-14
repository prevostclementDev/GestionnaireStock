<?php

namespace App\Controllers;

class products extends BaseController
{
    public function index(): string {
        $data = [
            'head_title' => 'Tous les produits',
            'page_title' => 'Les produits',
            'id_action' => 'addproduct-opener',
            'svg_path' => 'product.svg'
        ];
        return view('products/list',$data);
    }

    public function show(): string {
        $data = [
            'head_title' => 'Single produits',
        ];
        return view('products/single',$data);
    }

}