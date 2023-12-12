<?php

namespace App\Domain\UseCases\User;

use App\Domain\Repository\UserRepository;
use App\Domain\UseCases\User\dtos\CreateUserInput;
use App\Domain\UseCases\User\dtos\CreateUserOutput;

final class CreateUser
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(CreateUserInput $input): CreateUserOutput
    {
        // Lógica para passar input para Entity....
        $userEntity = $input;

        // Repositório...
        $newUser = $this->userRepository->create($userEntity);

        $output = new CreateUserOutput();
        $output->id = $newUser->id;

        return $output;
    }
}
