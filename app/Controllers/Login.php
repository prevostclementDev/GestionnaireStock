<?php

namespace App\Controllers;

use App\Models\entrepriseModel;
use App\Models\userModel;

class Login extends BaseController {

    public function index() : \CodeIgniter\HTTP\RedirectResponse|string
    {

        helper('form');

        $data = [
            'head_title' => 'Connexion | SynchroStock',
            'page_title' => 'Connexion à votre espace entreprise'
        ];

        if(!$this->request->is('post')) {
            return view('login/connection',$data);
        }

        $validation = \Config\Services::validation();
        $loginData = $this->request->getPost(array(
            'email',
            'password',
        ));

        if(!$validation->run($loginData,'login')) {
            return view('login/connection',$data);
        }

        $userModel = model(userModel::class);
        $potential_user = $userModel
            ->where('email',$loginData['email'])
            ->select('password,id_entreprise,id')
            ->find();

        if(isset($potential_user[0]['password']) && password_verify($loginData['password'],$potential_user[0]['password'])) {
            $session = session();
            $session->set('email',$loginData['email']);
            $session->set('logged_in',true);
            $session->set('id_entreprise',$potential_user[0]['id_entreprise']);
            $session->set('id',$potential_user[0]['id']);
            return redirect()->to(base_url());
        }

        $data['error'] = 'Invalid password, or account not exist';

        return view('login/connection',$data);

    }

    public function register() : \CodeIgniter\HTTP\RedirectResponse|string
    {

        helper('form');

        $data = [
            'head_title' => 'Inscription | SynchroStock',
            'page_title' => 'Création de votre espace entreprise'
        ];

        if(!$this->request->is('post')) {
            return view('login/register',$data);
        }

        $validation = \Config\Services::validation();
        $RegisterData = $this->request->getPost(array(
            'name',
            'country',
            'email',
            'first_name',
            'last_name',
            'password',
        ));

        if(!$validation->run($RegisterData,'register')) {
            return view('login/register',$data);
        }

        $entrepriseArgs = [
            'name' => $RegisterData['name'],
            'country' => $RegisterData['country']
        ];

        $userArgs = [
            'email' => $RegisterData['email'],
            'first_name' => $RegisterData['first_name'],
            'last_name' => $RegisterData['last_name'],
            'password' => $RegisterData['password'],
            'type' => 'super_administrator',
        ];

        $entrepriseModel = model(entrepriseModel::class);
        $entrepriseModel->insert($entrepriseArgs);
        $userArgs['id_entreprise'] = $entrepriseModel->getInsertID();

        $userModel = model(userModel::class);
        $userModel->insert($userArgs);

        return redirect()->to(base_url('se-connecter'));
    }

    public function disconnect() : \CodeIgniter\HTTP\RedirectResponse
    {
        $session = session();
        $session->remove('email');
        $session->remove('logged_in');
        $session->remove('id_entreprise');
        $session->remove('id');

        return redirect()->to(base_url('se-connecter'));

    }

}