<?php

namespace App\Application\Controllers;

use App\Domain\UseCases\User\CreateUser;
use App\Domain\UseCases\User\dtos\CreateUserInput;
use App\Infra\Repository\ORM\UserRepositoryORM;

class UserController extends BaseController
{

    public function create()
    {
        $request = $this->request;

        $input = new CreateUserInput(
            strip_tags($request->getPost('name') ?? ''),
            $request->getPost('email', FILTER_VALIDATE_EMAIL),
            $request->getPost('password'),
        );

        $this->validationSetRules([
            'name' => 'required|max_length[100]',
            'email' => 'required|max_length[254]|valid_email',
            'password' => 'required|min_length[4]',
        ]);


        if (!$this->validationCheck($input)) {
            return $this->validationFailResponse();
        }

        $output = (new CreateUser(new UserRepositoryORM))->execute($input);

        return $this->json($output);
    }
}
