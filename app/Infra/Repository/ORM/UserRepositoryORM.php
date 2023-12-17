<?php

namespace App\Infra\Repository\ORM;

use App\Database\Models\UserModel;
use App\Domain\Entity\User;
use App\Domain\Exceptions\UserAlreadyExistsException;
use App\Domain\Repository\UserRepository;

class UserRepositoryORM implements UserRepository
{

    public UserModel $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function create(User $user): ?User
    {
        $this->model->insert([
            "name" => $user->name,
            "email" => $user->email,
            "password" => $user->password,
        ]);

        $user->setId($this->model->insertID());

        return $user;
    }
}
