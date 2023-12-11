<?php

namespace App\Infra\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        return $this->json(['d' => '2']);
    }
}
