<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string {
        $data = [
            'head_title' => 'Tous les utilisateurs',
            'page_title' => 'Les utilisateurs',
            'id_action' => 'adduser-opener',
            'svg_path' => 'user.svg'
        ];
        return view('users/list',$data);
    }
}