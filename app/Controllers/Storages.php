<?php

namespace App\Controllers;

class Storages extends BaseController
{
    public function index(): string {
        $data = [
            'head_title' => 'Tous les lieux de stockage',
            'page_title' => 'Lieux de stockages',
            'id_action' => 'addstorage-opener',
            'svg_path' => 'storage.svg'
        ];
        return view('storages/list',$data);
    }
    public function show(Int $id): string {
        $data = [
            'head_title' => 'Lieu de stockage :'.$id,
        ];
        return view('storages/single',$data);
    }
}