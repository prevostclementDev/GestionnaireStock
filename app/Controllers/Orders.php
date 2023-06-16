<?php

namespace App\Controllers;

class Orders extends BaseController
{
    public function index():string {
        $data = [
            'head_title' => 'Toutes les commandes',
            'page_title' => 'Les commandes',
            'id_action' => 'addorder-opener',
            'svg_path' => 'order.svg'
        ];
        return view('orders/list',$data);
    }

    public function show($id): string {
        $data = [
            'head_title' => 'La commande n°'.$id,
        ];
        return view('orders/single',$data);
    }

}