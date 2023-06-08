<?php

namespace App\Controllers;

use CodeIgniter\View\Parser;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'head_title' => 'page d\'accueil',
            'page_title' => 'Connexion à votre espace entreprise',
        ];

        return view('login/register',$data);
    }
}
