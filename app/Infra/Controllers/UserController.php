<?php

namespace App\Infra\Controllers;

use App\Services\UseCases\User\CreateUser;
use App\Services\UseCases\User\dtos\CreateUserInput;

class UserController extends BaseController
{
    public function create()
    {

        $input = new CreateUserInput();
        $input->name = $this->request->getPost('name');

        $output = (new CreateUser())->execute($input);
        return $this->json($output);
    }
}
