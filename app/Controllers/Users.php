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
    private userModel $base_request;

    public function __construct()
    {
        helper('form');
        $userModel = model(userModel::class);
        $this->base_request = $userModel->where('id_entreprise', session()->get('id_entreprise'));
    }

    public function index(): string {
        $data = $this->default_data_list;

        $data['users_list'] = $this->base_request->findAll();

        return view('users/list',$data);
    }

    public function show(Int $id) : string {
        $data = ['head_title'=>'L\'utilisateur n°'.$id];

        $data['user'] = $this->base_request->find($id);

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

    public function delete(Int $id) : \CodeIgniter\HTTP\RedirectResponse {

        if(!$this->request->is('get')) {
            throw new \Exception('Invalid Request');
        }

        $userModel = model(userModel::class);

        if(is_numeric($id)) {
            $res = $userModel->delete($id);
            if($res === true) {
                return redirect()->to(base_url('users'));
            }
        }

        throw new \Exception('Cette action est impossible');

    }

    public function update(Int $id) : string|\CodeIgniter\HTTP\RedirectResponse {
        if(is_numeric($id)) {

            $data = ['head_title'=>'L\'utilisateur n°'.$id];

            $userModel = model(userModel::class);
            $user = $userModel->find($id);

            if($user !== null) {

                $validation = \Config\Services::validation();
                $dataUpdateUser = $this->request->getPost(array(
                    'email',
                ));

                $data['user'] = $user;

                if($validation->run($dataUpdateUser,'update_email_user')) {
                    $data['user']['email'] = $dataUpdateUser['email'];
                    $userModel->save($data['user']);

                    return view('users/single',$data);
                }

                return view('users/single',$data);

            }

        }
        return throw new PageNotFoundException();
    }
}