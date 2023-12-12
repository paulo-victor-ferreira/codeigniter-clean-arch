<?php

namespace App\Services\UseCases\User;


use App\Services\UseCases\User\dtos\CreateUserInput;
use App\Services\UseCases\User\dtos\CreateUserOutput;

final class CreateUser
{
    public function execute(CreateUserInput $input): CreateUserOutput
    {
        $output = new CreateUserOutput();
        $output->id = 12103210321;

        return $output;
    }
}
