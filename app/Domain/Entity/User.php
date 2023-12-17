<?php

namespace App\Domain\Entity;

class User extends BaseEntity
{
    protected ?int $id;
    protected string $name;
    protected string $email;
    protected string $password;

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }


    public function setName(string $name): self
    {
        if (strlen($name) < 2) {
            throw new \InvalidArgumentException('Invalid name for user');
        }

        $this->name = trim(strtoupper($name));

        return $this;
    }


    public function setEmail(string $email): self
    {
        $this->email = trim(strtolower($email));

        return $this;
    }


    public function setPassword(string $pass): self
    {
        $this->password =  password_hash($pass, PASSWORD_BCRYPT);

        return $this;
    }


    public static function fromData($input): User
    {
        $user = new User();
        $user->setName($input->name);
        $user->setEmail($input->email);
        $user->setPassword($input->password);

        return $user;
    }
}
