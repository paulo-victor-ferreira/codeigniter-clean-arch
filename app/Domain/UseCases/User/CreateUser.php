<?php

namespace App\Domain\UseCases\User;


use App\Domain\UseCases\User\dtos\CreateUserInput;
use App\Domain\UseCases\User\dtos\CreateUserOutput;

final class CreateUser
{
    public function execute(CreateUserInput $input): CreateUserOutput
    {
        $output = new CreateUserOutput();
        $output->id = 12103210321;

        return $output;
    }
}
