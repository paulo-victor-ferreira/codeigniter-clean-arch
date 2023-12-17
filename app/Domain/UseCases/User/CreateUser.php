<?php

namespace App\Domain\UseCases\User;

use App\Domain\Entity\User;
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
        $newUser = $this->userRepository->create(User::fromData($input));

        $output = new CreateUserOutput(
            $newUser->id,
            $newUser->name,
            $newUser->email,
        );

        return $output;
    }
}
