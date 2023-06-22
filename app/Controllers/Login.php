<?php

namespace App\Controllers;

class Login extends BaseController {

    public function index(){
        $data = [
            'head_title' => 'Connexion | SynchroStock',
            'page_title' => 'Connexion à votre espace entreprise'
        ];
        return view('login/connection',$data);
    }

    public function register(){
        $data = [
            'head_title' => 'Inscription | SynchroStock',
            'page_title' => 'Création de votre espace entreprise'
        ];
        return view('login/register',$data);
    }

}