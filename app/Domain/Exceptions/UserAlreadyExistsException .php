<?php

namespace App\Domain\Exceptions;


class UserAlreadyExistsException extends \Exception
{
    protected $code = 'user_already_exists';
    protected $message = 'User already exists.';
}
