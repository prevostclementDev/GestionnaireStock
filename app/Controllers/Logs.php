<?php

namespace App\Controllers;

class Logs extends BaseController {

    public function index() : string {
        $data = [
            'head_title' => 'Toutes les logs',
            'page_title' => 'Les logs',
            'svg_path' => 'logs.svg'
        ];
        return view('logs/index',$data);
    }

}