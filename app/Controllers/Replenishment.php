<?php

namespace App\Controllers;

class Replenishment extends BaseController
{

    public function index(): string {
        $data = [
            'head_title' => 'Tous les réapprovisionnement',
            'page_title' => 'Les Réapprovisionnement',
            'id_action' => 'addreplenishment-opener',
            'svg_path' => 'replenishment.svg'
        ];
        return view('replenishment/list',$data);
    }

    public function show($id): string {
        $data = [
            'head_title' => 'un seul réapprovisionnement : '.$id,
        ];
        return view('replenishment/single',$data);
    }

}