<?php

namespace App\Controllers;

class Entreprises extends BaseController {

    public function index():string {
        $data = [
            'head_title' => 'Mon entreprise'
        ];
        return view('entreprises/index',$data);
    }

}