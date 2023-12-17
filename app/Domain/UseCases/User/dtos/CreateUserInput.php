<?php

namespace App\Domain\UseCases\User\dtos;

final class CreateUserInput
{
    public string $name;
    public string $email;
    public string $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}
