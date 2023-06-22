<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Authentification implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null) {
        return redirect()->to(base_url('se-connecter'));
    }

    public function after(RequestInterface $request,ResponseInterface $response, $arguments = null) {
        // DO SOMETHING
    }
}