<?php

namespace App\Controllers;

use App\Models\userModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{

    private array $default_data_list = array(
        'head_title' => 'Tous les utilisateurs',
        'page_title' => 'Les utilisateurs',
        'id_action' => 'adduser-opener',
        'svg_path' => 'user.svg',
        'users_list' => array(),
    );

    public function __construct()
    {
        helper('form');
    }

    public function index(): string {
        $data = $this->default_data_list;

        $userModel = model(userModel::class);
        $data['users_list'] = $userModel->where('id_entreprise',session()->get('id_entreprise'))->findAll();

        return view('users/list',$data);
    }

    public function show($id) : string {
        $data = ['head_title'=>'L\'utilisateur n°'.$id];

        $userModel = model(userModel::class);
        $data['user'] = $userModel->where('id_entreprise',session()->get('id_entreprise'))->find($id);

        if($data['user'] === null){
            throw new PageNotFoundException('Il n\'y à pas d\'utilisateur avec l\'id = '.$id);
        }

        return view('users/single',$data);
    }

    public function add() : \CodeIgniter\HTTP\RedirectResponse|string
    {

        if(!$this->request->is('post')) {
            throw new \Exception('Invalid Request');
        }

        $validation = \Config\Services::validation();
        $dataAddUser = $this->request->getPost(array(
           'email',
           'first_name',
           'last_name',
           'password',
        ));

        if($validation->run($dataAddUser,'add_user')) {

            $dataAddUser['type'] = 'no-assignment';
            $dataAddUser['id_entreprise'] = session()->get('id_entreprise');

            $userModel = model(userModel::class);

            try {
                $newUserId = $userModel->insert($dataAddUser);
            } catch (DatabaseException) {
                throw new DatabaseException('Database error');
            }

            return redirect()->to('user/'.$newUserId);

        }

        $data = $this->default_data_list;

        return view('users/list',$data);

    }

}